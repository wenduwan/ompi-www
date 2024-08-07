<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 09:53:44 2006" -->
<!-- isoreceived="20060310145344" -->
<!-- sent="Fri, 10 Mar 2006 09:53:43 -0500" -->
<!-- isosent="20060310145343" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11" -->
<!-- id="66469E8E-F4DD-4EDA-84E7-299A8238C55C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4410634A.4070305_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-10 09:53:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0826.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0824.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2006, at 12:18 PM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; - 'mpirun --help' non longer crashes.
</span><br>
<p>Improvement :)
<br>
<p><span class="quotelev1">&gt; - standard output seems messy:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) 'mpirun -np 4 pwd' returns randomly 1 or two lines, never 4. The  
</span><br>
<span class="quotelev1">&gt; same behaviour occurs if the output is redirected to a file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) When running some simple &quot;demo&quot; fortran code, the standard  
</span><br>
<span class="quotelev1">&gt; output is buffered within open-mpi and all results are issued at  
</span><br>
<span class="quotelev1">&gt; the end. No intermediates are showed.
</span><br>
<p>Ok, I know what the issue here is.  We don't properly support ptys on  
<br>
Solaris, so the Fortran code is going into page buffering mode  
<br>
causing all kinds of issues.  I think the same problem may be  
<br>
responsible for the issues with the race condition for short lived  
<br>
programs.  I'm working on a fix for this issue, but it might take a  
<br>
bit of time.
<br>
<p><span class="quotelev1">&gt; - running a slightly more elaborate program fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) compile behaves differently with mpif77 and mpif90.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While mpif90 compiles and builds &quot;silently&quot;, mpif77 is talkative:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valiron_at_icare ~/BENCHES &gt; mpif77 -xtarget=opteron -xarch=amd64 -o  
</span><br>
<span class="quotelev1">&gt; all all.f
</span><br>
<span class="quotelev1">&gt; NOTICE: Invoking /opt/Studio11/SUNWspro/bin/f90 -f77 -ftrap=%none - 
</span><br>
<span class="quotelev1">&gt; I/users/valiron/lib/openmpi-1.1a1r9224/include -xtarget=opteron - 
</span><br>
<span class="quotelev1">&gt; xarch=amd64 -o all all.f -L/users/valiron/lib/openmpi-1.1a1r9224/ 
</span><br>
<span class="quotelev1">&gt; lib -lmpi -lorte -lopal -lsocket -lnsl -lrt -lm -lthread -ldl
</span><br>
<span class="quotelev1">&gt; all.f:
</span><br>
<span class="quotelev1">&gt;        rw_sched:
</span><br>
<span class="quotelev1">&gt; MAIN all:
</span><br>
<span class="quotelev1">&gt;        lam_alltoall:
</span><br>
<span class="quotelev1">&gt;        my_alltoall1:
</span><br>
<span class="quotelev1">&gt;        my_alltoall2:
</span><br>
<span class="quotelev1">&gt;        my_alltoall3:
</span><br>
<span class="quotelev1">&gt;        my_alltoall4:
</span><br>
<span class="quotelev1">&gt;        check_buf:
</span><br>
<span class="quotelev1">&gt;        alltoall_sched_ori:
</span><br>
<span class="quotelev1">&gt;        alltoall_sched_new:
</span><br>
<p><span class="quotelev1">&gt; b) whatever the code was compiled with mpif77 or mpif90, execution  
</span><br>
<span class="quotelev1">&gt; fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valiron_at_icare ~/BENCHES &gt; mpirun -np 2 all
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:40
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:40
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiling with -g adds no more information.
</span><br>
<p>Doh, that probably shouldn't be happening.  I'll try to investigate  
<br>
further once I have the pty issues sorted out.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0826.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0824.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
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
