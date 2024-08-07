<?php
$topdir = "../../..";
$title = "MPI_Startall(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Startall</B> - Starts a collection of requests.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Startall(int <I>count</I>, MPI_Request <I>*array</I><B>_</B><I>of</I><B>_</B><I>requests</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_STARTALL(<I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS,</I> <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>REQUESTS(*),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static void Prequest::Startall(int <I>count</I>, Prequest <I>array</I><B>_</B><I>of</I><B>_</B><I>requests</I>[])

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       count     List length (integer).

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       array_of_requests
                 Array of requests (array of handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Starts    all    communications    associated    with    requests    in
       array_of_requests. A call  to   MPI_Startall(count,  array_of_requests)
       has the same effect as calls to <a href="../man3/MPI_Start.3.php">MPI_Start</a> (&amp;array_of_requests[i]), exe-
       cuted for i=0 ,..., count-1, in some arbitrary order.

       A communication started with a call to  <a href="../man3/MPI_Start.3.php">MPI_Start</a>  or  MPI_Startall  is
       completed  by a call to <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>, <a href="../man3/MPI_Test.3.php">MPI_Test</a>, or one of the derived func-
       tions <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>, <a href="../man3/MPI_Testany.3.php">MPI_Testany</a>, <a href="../man3/MPI_Waitall.3.php">MPI_Waitall</a>, <a href="../man3/MPI_Testall.3.php">MPI_Testall</a>, <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>,
       <a href="../man3/MPI_Testsome.3.php">MPI_Testsome</a>  (these  are described in Section 3.7.5 of the MPI-1 Stan-
       dard, "Multiple Completions"). The request becomes inactive after  suc-
       cessful  completion by such a call. The request is not deallocated, and
       it can be activated anew by another <a href="../man3/MPI_Start.3.php">MPI_Start</a> or MPI_Startall call.

       A persistent request is deallocated by a call to <a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a>  (see
       Section 3.7.3  of the MPI-1 Standard, "Communication Completion").

       The  call  to  <a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a>  can  occur at any point in the program
       after the persistent request was created. However, the request will  be
       deallocated  only  after  it  becomes inactive. Active receive requests
       should not be freed. Otherwise, it will not be possible to  check  that
       the  receive  has  completed.  It  is  preferable,  in general, to free
       requests when they are inactive. If this rule  is  followed,  then  the
       persistent  communication  request  functions  will  be  invoked  in  a
       A send operation initiated with  <a href="../man3/MPI_Start.3.php">MPI_Start</a>  can  be  matched  with  any
       receive  operation  and,  likewise,  a receive operation initiated with
       <a href="../man3/MPI_Start.3.php">MPI_Start</a> can receive messages generated by any send operation.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Bsend_init.3.php">MPI_Bsend_init</a>
       <a href="../man3/MPI_Rsend_init.3.php">MPI_Rsend_init</a>
       <a href="../man3/MPI_Send_init.3.php">MPI_Send_init</a>
       <a href="../man3/MPI_Ssend_init.3.php">MPI_Ssend_init</a>
       <a href="../man3/MPI_Recv_init.3.php">MPI_Recv_init</a>
       <a href="../man3/MPI_Start.3.php">MPI_Start</a>
       <a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a>

Open MPI 1.2                    September 2006          MPI_Startall(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
