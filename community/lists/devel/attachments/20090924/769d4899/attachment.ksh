2009-09-14  Shaun Jackman  <sjackman@gmail.com>

	* ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
	If opal_progress is called then check the status of the request
	before returning. opal_progress is called only once. This logic
	parallels MPI_Test (ompi_request_default_test).

--- ompi/mpi/c/request_get_status.c.orig	2008-11-04 12:56:27.000000000 -0800
+++ ompi/mpi/c/request_get_status.c	2009-09-24 15:30:09.995850000 -0700
@@ -41,6 +41,10 @@
 int MPI_Request_get_status(MPI_Request request, int *flag,
                            MPI_Status *status) 
 {
+#if OMPI_ENABLE_PROGRESS_THREADS == 0
+    int do_it_once = 0;
+#endif
+
     MEMCHECKER(
         memchecker_request(&request);
     );
@@ -57,6 +61,9 @@
         }
     }
 
+#if OMPI_ENABLE_PROGRESS_THREADS == 0
+ recheck_request_status:
+#endif
     opal_atomic_mb();
     if( (request == MPI_REQUEST_NULL) || (request->req_state == OMPI_REQUEST_INACTIVE) ) {
         *flag = true;
@@ -78,9 +85,17 @@
         }
         return MPI_SUCCESS;
     }
-    *flag = false;
 #if OMPI_ENABLE_PROGRESS_THREADS == 0
-    opal_progress();
+    if( 0 == do_it_once ) {
+        /**
+         * If we run the opal_progress then check the status of the request before
+         * leaving. We will call the opal_progress only once per call.
+         */
+        opal_progress();
+        do_it_once++;
+        goto recheck_request_status;
+    }
 #endif
+    *flag = false;
     return MPI_SUCCESS;
 }