<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 11:51:02 2007" -->
<!-- isoreceived="20071015155102" -->
<!-- sent="Mon, 15 Oct 2007 10:50:55 -0500" -->
<!-- isosent="20071015155055" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: uh)" -->
<!-- id="47138C5F.5060504_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AD10BC81-E298-4B25-BD68-6B03AE9A713A_at_open-mpi.org" -->
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
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-15 11:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0160.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Previous message:</strong> <a href="0158.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>In reply to:</strong> <a href="0158.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0161.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0161.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0162.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yea i was using a wrong ini file.. i was executing with --trial though,
<br>
so there should be no bad data in the Db..
<br>
<p>-Mohamad
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I'm getting the following from 'uh'. The problem is that they supply  
</span><br>
<span class="quotelev1">&gt; '-np' with no argument. The submit script is rejecting the submit, so  
</span><br>
<span class="quotelev1">&gt; the database is fine. I think this is a user problem, but it kind of  
</span><br>
<span class="quotelev1">&gt; looks like a client problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thought I would post to see if anyone has any thoughts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 15, 2007, at 11:37 AM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SQL QUERY: INSERT INTO test_run
</span><br>
<span class="quotelev2">&gt;&gt; 	(test_run_id, submit_id, compute_cluster_id,  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_install_compiler_id, mpi_get_id, mpi_install_configure_id,  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_install_id, test_suite_id, test_build_compiler_id,  
</span><br>
<span class="quotelev2">&gt;&gt; test_build_id, test_name_id, performance_id, test_run_command_id,  
</span><br>
<span class="quotelev2">&gt;&gt; np, full_command, description_id, start_timestamp, test_result,  
</span><br>
<span class="quotelev2">&gt;&gt; trial, submit_timestamp, duration, environment_id, result_stdout,  
</span><br>
<span class="quotelev2">&gt;&gt; result_stderr, result_message_id, merge_stdout_stderr, exit_value,  
</span><br>
<span class="quotelev2">&gt;&gt; exit_signal, client_serial) VALUES
</span><br>
<span class="quotelev2">&gt;&gt; 	('25748604', '3227', '141', '37', '602', '567', '13687', '4',  
</span><br>
<span class="quotelev2">&gt;&gt; '37', '60596', '700', '0', '2', '', 'mpirun  -np  --mca btl self,sm  
</span><br>
<span class="quotelev2">&gt;&gt; --prefix /home/mschaara/mtt-testing/scratch/scratch2/installs/lAQN/ 
</span><br>
<span class="quotelev2">&gt;&gt; install src/IMB-MPI1 -npmin  PingPong', '0', 'Mon Oct 15 15:37:29  
</span><br>
<span class="quotelev2">&gt;&gt; 2007', '0', '1', DEFAULT, '0 seconds', '0',  
</span><br>
<span class="quotelev2">&gt;&gt; '--------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to launch the specified application as it could  
</span><br>
<span class="quotelev2">&gt;&gt; not find an executable:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Executable: btl
</span><br>
<span class="quotelev2">&gt;&gt; Node: shark01
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt; ', '', '82', DEFAULT, '1', '-1', '10200')
</span><br>
<span class="quotelev2">&gt;&gt; SQL ERROR: ERROR:  invalid input syntax for integer: &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; SQL ERROR:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Mohamad Chaarawi
Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
Department of Computer Science	  University of Houston
4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0160.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Previous message:</strong> <a href="0158.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>In reply to:</strong> <a href="0158.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0161.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0161.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0162.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
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
