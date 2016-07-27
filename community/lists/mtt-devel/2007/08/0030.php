<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 19:36:54 2007" -->
<!-- isoreceived="20070827233654" -->
<!-- sent="Mon, 27 Aug 2007 19:36:35 -0400" -->
<!-- isosent="20070827233635" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] jms-new-parser / submit.php error" -->
<!-- id="F4C4F1FD-C4DD-4B60-9A93-70D225B6673D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070827213226.GN12598_at_sun.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 19:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0031.php">Jeff Squyres: "[MTT devel] Broken &amp;find()?"</a>
<li><strong>Previous message:</strong> <a href="0029.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>In reply to:</strong> <a href="0028.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0032.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0032.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2007, at 5:32 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Well that's fun -- why are there no mpi_install values in the .txt  
</span><br>
<span class="quotelev2">&gt;&gt; file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because Functions/MPI/OMPI::get_version() does not know
</span><br>
<span class="quotelev1">&gt; what my $bindir is. Should an &amp;installdir() funclet be
</span><br>
<span class="quotelev1">&gt; created to get around this?
</span><br>
<p>There's a chicken-n-egg problem here that I didn't solve and  
<br>
therefore ended up hard-coding for the pre-installed MPIs (HP,  
<br>
Intel, ...).
<br>
<p>The MPI Get phase is the one responsible for getting the MPI  
<br>
version.  But AlreadyInstalled applies to a bunch of different MPIs  
<br>
-- each one has a different way of obtaining the version number  
<br>
(e.g., in OMPI, we call ompi_info).  So it makes sense to have a  
<br>
funclet to get the version number for each different MPI (which I did).
<br>
<p>But the problem is that you need to know the $bindir in order to call  
<br>
the MPI's utility to get the version number.  You *could* do  
<br>
something like:
<br>
<p>alreadyinstalled_version = &amp;MPI::OMPI::get_version(&amp;mpi_install_bindir 
<br>
())
<br>
<p>But there's two problems with this:
<br>
<p>1. Then you have to ensure that &amp;mpi_install_bindir() is valid from  
<br>
anywhere, meaning that we need to set some global variable that  
<br>
corresponds to the MPI install in use throughout the code base (e.g.,  
<br>
even if you call it from within test get, test build, test  
<br>
run, ...).   This is a PITA, but it's solvable; it's just annoying/ 
<br>
menial work to go track down everywhere in the code that needs to  
<br>
have this variable set.
<br>
<p>2. We're trying to use an attribute from the MPI install phase (the  
<br>
bindir) in the MPI get phase (to get the version).  This is a huge  
<br>
break in abstraction.  All these funclets take a single param (the  
<br>
$bindir), but we won't know that until the MPI Install phase.  How  
<br>
can we pass it during the MPI Get phase?  I hadn't figured out how to  
<br>
do that without megga-ick/abstration breaks, so I gave up and hard- 
<br>
coded for HP/Intel MPI, etc.
<br>
<p>-----
<br>
<p>So were you using AlreadyInstalled for OMPI to report back to the  
<br>
DB?  Because I guess I thought we all understood that this was  
<br>
currently broken (per prior discussions on the phone).
<br>
<p><span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume you had successful MPI installs before this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 27, 2007, at 4:03 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running into the below error running with the jms-new-parser
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (see attached MTTDatabase error file).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** WARNING: MTTDatabase server notice: mpi_install_section_name is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server notice: number_of_results is not in mtt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server notice: mpi_get_section_name is not in mtt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTT submission for test build
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     SQL QUERY: SELECT mpi_install_id
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 compiler    NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 submit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     WHERE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    mpi_version = DEFAULT AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    mpi_name	= 'clustertools-7-iso-sdn-0907' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    compiler_version = '5.9 2007/05/03;' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    compiler_name    = 'sun' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    hostname	     = 'burl-ct-v440-2' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    mtt_client_version = '2.1devel' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    local_username   = 'emallove' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    platform_name    = 'burl-ct-v440-2'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     LINE 8:  mpi_version = DEFAULT AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			   ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     SQL ERROR:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server notice: Invalid mpi_install_id (9790) given.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Guessing that it should be -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server error: ERROR: Unable to find a mpi_install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to associate with this test_build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase abort:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     No mpi_install associated with this test_build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTTDatabase got response: MTTDatabase server notice:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_install_section_name is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: number_of_results is not in mtt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: mpi_get_section_name is not in mtt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTT submission for test build
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    SQL QUERY: SELECT mpi_install_id
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	compiler    NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	submit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    WHERE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   mpi_version = DEFAULT AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   mpi_name    = 'clustertools-7-iso-sdn-0907' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   compiler_version = '5.9 2007/05/03;' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   compiler_name    = 'sun' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   hostname	    = 'burl-ct-v440-2' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   mtt_client_version = '2.1devel' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   local_username   = 'emallove' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   platform_name    = 'burl-ct-v440-2'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    LINE 8:  mpi_version = DEFAULT AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			  ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    SQL ERROR:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: Invalid mpi_install_id (9790) given.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Guessing that it should be -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server error: ERROR: Unable to find a mpi_install to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; associate with this test_build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase abort:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    No mpi_install associated with this test_build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** WARNING: MTTDatabase did not get a serial; phases will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isolated from each other in the reports
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTTDatabase submit complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Writing to MTTDatabase debug file: /home/em162155/mtt-utils/logs/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug/mttdatabase.burl-ct-v440-2.20070827.153417.1.1188243271-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Debug MTTDatabase file write complete
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (total of 1 result)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #################################################################### 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ######
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # *** WARNING:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # 2 MTTDatabase server errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # The data that failed to submit is in /home/em162155/mtt-utils/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logs/debug/mttdatabase.burl-ct-v440-2.20070827.153417.*.txt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # See the above output for more info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #################################################################### 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ######
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mttdatabase-error.txt&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0031.php">Jeff Squyres: "[MTT devel] Broken &amp;find()?"</a>
<li><strong>Previous message:</strong> <a href="0029.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>In reply to:</strong> <a href="0028.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0032.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0032.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
