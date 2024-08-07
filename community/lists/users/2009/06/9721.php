<?
$subject_val = "Re: [OMPI users] Did you break MPI_Abort recently?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 16:54:19 2009" -->
<!-- isoreceived="20090625205419" -->
<!-- sent="Thu, 25 Jun 2009 13:54:09 -0700 (PDT)" -->
<!-- isosent="20090625205409" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Did you break MPI_Abort recently?" -->
<!-- id="Pine.GSO.4.64.0906251352130.920_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D024758C-5354-42B8-B898-E139239E9CFC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Did you break MPI_Abort recently?<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 16:54:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9722.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9720.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>In reply to:</strong> <a href="9720.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9722.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Reply:</strong> <a href="9722.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something like:
<br>
<p>#!/bin/ksh
<br>
set -x
<br>
<p>PREFIX=$OPENMPI_GCC_SVN
<br>
export PATH=$OPENMPI_GCC_SVN/bin:$PATH
<br>
MCA=&quot;--mca btl tcp,self&quot;
<br>
mpicc -g -O6 mpiabort.c
<br>
NPROCS=4
<br>
mpirun --prefix $PREFIX -x LD_LIBRARY_PATH $MCA -np $NPROCS -machinefile fred ./a.out
<br>
<p>DM
<br>
<p>On Thu, 25 Jun 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Using what launch environment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2009, at 2:29 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While using the BLACS test programs, I've seen that with recent SVN 
</span><br>
<span class="quotelev2">&gt;&gt; checkouts
</span><br>
<span class="quotelev2">&gt;&gt; (including todays) the MPI_Abort test left procs running. The last SVN I
</span><br>
<span class="quotelev2">&gt;&gt; have where it worked was 1.4a1r20936. By 1.4a1r21246 it fails.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Works O.K. in the standard 1.3.2 release.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A test program is below. GCC was used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; DM
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define NUM_ITERS 100000
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* Prototype the function that we'll use below. */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; static double f(double);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; int iter, rank, size, i;
</span><br>
<span class="quotelev2">&gt;&gt; int foo;
</span><br>
<span class="quotelev2">&gt;&gt; double PI25DT = 3.141592653589793238462643;
</span><br>
<span class="quotelev2">&gt;&gt; double mypi, pi, h, sum, x;
</span><br>
<span class="quotelev2">&gt;&gt; double startwtime = 0.0, endwtime;
</span><br>
<span class="quotelev2">&gt;&gt; int namelen;
</span><br>
<span class="quotelev2">&gt;&gt; char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* Normal MPI startup */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;Process %d of %d on %s\n&quot;, rank, size, processor_name);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* Do approximations for 1 to 100 points */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* sleep(5); */
</span><br>
<span class="quotelev2">&gt;&gt; for (iter = 2; iter &lt; NUM_ITERS; ++iter) {
</span><br>
<span class="quotelev2">&gt;&gt;   h = 1.0 / (double) iter;
</span><br>
<span class="quotelev2">&gt;&gt;   sum = 0.0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   /* A slightly better approach starts from large i and works back */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if (rank == 0)
</span><br>
<span class="quotelev2">&gt;&gt;     startwtime = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   for (i = rank + 1; i &lt;= iter; i += size) {
</span><br>
<span class="quotelev2">&gt;&gt;     x = h * ((double) i - 0.5);
</span><br>
<span class="quotelev2">&gt;&gt;     sum += f(x);
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   mypi = h * sum;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if(iter == (NUM_ITERS - 1000)){
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;    if(rank == 2){
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Abort(MPI_COMM_WORLD, -1);
</span><br>
<span class="quotelev2">&gt;&gt;    } else {
</span><br>
<span class="quotelev2">&gt;&gt;     /* Just loop */
</span><br>
<span class="quotelev2">&gt;&gt;     foo = 1;
</span><br>
<span class="quotelev2">&gt;&gt;     while(foo == 1){
</span><br>
<span class="quotelev2">&gt;&gt;      foo = foo + 3;
</span><br>
<span class="quotelev2">&gt;&gt;      foo = foo - 2;
</span><br>
<span class="quotelev2">&gt;&gt;      foo = foo - 1;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* All done */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;%d points: pi is approximately %.16f, error = %.16f\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;          iter, pi, fabs(pi - PI25DT));
</span><br>
<span class="quotelev2">&gt;&gt;  endwtime = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;wall clock time = %f\n&quot;, endwtime - startwtime);
</span><br>
<span class="quotelev2">&gt;&gt;  fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; static double
</span><br>
<span class="quotelev2">&gt;&gt; f(double a)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; return (4.0 / (1.0 + a * a));
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9722.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9720.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>In reply to:</strong> <a href="9720.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9722.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Reply:</strong> <a href="9722.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
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
