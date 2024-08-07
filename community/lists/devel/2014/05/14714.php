<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 11:45:35 2014" -->
<!-- isoreceived="20140507154535" -->
<!-- sent="Wed, 7 May 2014 15:45:33 +0000" -->
<!-- isosent="20140507154533" -->
<!-- name="Moody, Adam T." -->
<!-- email="moody20_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="146586E3640BBF4D9507B00739F551A60B1F0955_at_PRDEXMBX-02.the-lab.llnl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAG4F6z9gL-9PD5Xoq3aODYt1R4+PkqS9ia06cR9HEhxUeK=6Gw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested<br>
<strong>From:</strong> Moody, Adam T. (<em>moody20_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 11:45:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14715.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14713.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14711.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14754.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14754.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
Are your changes to OMPI or SLURM's PMI2 implementation?  Do you plan to push those changes back upstream?
<br>
-Adam
<br>
<p><p>________________________________
<br>
From: devel [devel-bounces_at_[hidden]] on behalf of Joshua Ladd [jladd.mlnx_at_[hidden]]
<br>
Sent: Wednesday, May 07, 2014 7:56 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested
<br>
<p>Ah, I see. Sorry for the reactionary comment - but this feature falls squarely within my &quot;jurisdiction&quot;, and we've invested a lot in improving OMPI jobstart under srun.
<br>
<p>That being said (now that I've taken some deep breaths and carefully read your original email :)), what you're proposing isn't a bad idea. I think it would be good to maybe add a &quot;--with-pmi2&quot; flag to configure since &quot;--with-pmi&quot; automagically uses PMI2 if it finds the header and lib. This way, we could experiment with PMI1/PMI2 without having to rebuild SLURM or hack the installation.
<br>
<p>Josh
<br>
<p><p>On Wed, May 7, 2014 at 10:45 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Okay, then we'll just have to develop a workaround for all those Slurm releases where PMI-2 is borked :-(
<br>
<p>FWIW: I think people misunderstood my statement. I specifically did *not* propose to *lose* PMI-2 support. I suggested that we change it to &quot;on-by-request&quot; instead of the current &quot;on-by-default&quot; so we wouldn't keep getting asked about PMI-2 bugs in Slurm. Once the Slurm implementation stabilized, then we could reverse that policy.
<br>
<p>However, given that both you and Chris appear to prefer to keep it &quot;on-by-default&quot;, we'll see if we can find a way to detect that PMI-2 is broken and then fall back to PMI-1.
<br>
<p><p>On May 7, 2014, at 7:39 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&lt;mailto:jladd.mlnx_at_[hidden]&gt;&gt; wrote:
<br>
<p>Just saw this thread, and I second Chris' observations: at scale we are seeing huge gains in jobstart performance with PMI2 over PMI1. We CANNOT loose this functionality. For competitive reasons, I cannot provide exact numbers, but let's say the difference is in the ballpark of a full order-of-magnitude on 20K ranks versus PMI1. PMI1 is completely unacceptable/unusable at scale. Certainly PMI2 still has scaling issues, but there is no contest between PMI1 and PMI2.  We (MLNX) are actively working to resolve some of the scalability issues in PMI2.
<br>
<p>Josh
<br>
<p>Joshua S. Ladd
<br>
Staff Engineer, HPC Software
<br>
Mellanox Technologies
<br>
<p>Email: joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;
<br>
<p><p>On Wed, May 7, 2014 at 4:00 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Interesting - how many nodes were involved? As I said, the bad scaling becomes more evident at a fairly high node count.
<br>
<p>On May 7, 2014, at 12:07 AM, Christopher Samuel &lt;samuel_at_[hidden]&lt;mailto:samuel_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hiya Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/05/14 14:49, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I should have looked closer to see the numbers you posted, Chris -
</span><br>
<span class="quotelev2">&gt;&gt; those include time for MPI wireup. So what you are seeing is that
</span><br>
<span class="quotelev2">&gt;&gt; mpirun is much more efficient at exchanging the MPI endpoint info
</span><br>
<span class="quotelev2">&gt;&gt; than PMI. I suspect that PMI2 is not much better as the primary
</span><br>
<span class="quotelev2">&gt;&gt; reason for the difference is that mpriun sends blobs, while PMI
</span><br>
<span class="quotelev2">&gt;&gt; requires that everything be encoded into strings and sent in little
</span><br>
<span class="quotelev2">&gt;&gt; pieces.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hence, mpirun can exchange the endpoint info (the dreaded &quot;modex&quot;
</span><br>
<span class="quotelev2">&gt;&gt; operation) much faster, and MPI_Init completes faster. Rest of the
</span><br>
<span class="quotelev2">&gt;&gt; computation should be the same, so long compute apps will see the
</span><br>
<span class="quotelev2">&gt;&gt; difference narrow considerably.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately it looks like I had an enthusiastic cleanup at some point
</span><br>
<span class="quotelev1">&gt; and so I cannot find the out files from those runs at the moment, but
</span><br>
<span class="quotelev1">&gt; I did find some comparisons from around that time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This first pair are comparing running NAMD with OMPI 1.7.3a1r29103
</span><br>
<span class="quotelev1">&gt; run with mpirun and srun successively from inside the same Slurm job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun namd2 macpf.conf
</span><br>
<span class="quotelev1">&gt; srun --mpi=pmi2 namd2 macpf.conf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Firstly the mpirun output (grep'ing the interesting bits):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 512 CPUs 0.0959179 s/step 0.555081 days/ns 1055.19 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 512 CPUs 0.0929002 s/step 0.537617 days/ns 1055.19 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 512 CPUs 0.0727373 s/step 0.420933 days/ns 1055.19 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 512 CPUs 0.0779532 s/step 0.451118 days/ns 1055.19 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 512 CPUs 0.0785246 s/step 0.454425 days/ns 1055.19 MB memory
</span><br>
<span class="quotelev1">&gt; WallClock: 1403.388550  CPUTime: 1403.388550  Memory: 1119.085938 MB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now the srun output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 512 CPUs 0.0906865 s/step 0.524806 days/ns 1036.75 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 512 CPUs 0.0874809 s/step 0.506255 days/ns 1036.75 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 512 CPUs 0.0746328 s/step 0.431903 days/ns 1036.75 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 512 CPUs 0.0726161 s/step 0.420232 days/ns 1036.75 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 512 CPUs 0.0710574 s/step 0.411212 days/ns 1036.75 MB memory
</span><br>
<span class="quotelev1">&gt; WallClock: 1230.784424  CPUTime: 1230.784424  Memory: 1100.648438 MB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The next two pairs are first launched using mpirun from 1.6.x and then with srun
</span><br>
<span class="quotelev1">&gt; from 1.7.3a1r29103.  Again each pair inside the same Slurm job with the same inputs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First pair mpirun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.410424 s/step 2.37514 days/ns 909.57 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.392106 s/step 2.26913 days/ns 909.57 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.313136 s/step 1.81213 days/ns 909.57 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.316792 s/step 1.83329 days/ns 909.57 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.313867 s/step 1.81636 days/ns 909.57 MB memory
</span><br>
<span class="quotelev1">&gt; WallClock: 8341.524414  CPUTime: 8341.524414  Memory: 975.015625 MB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First pair srun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.341967 s/step 1.97897 days/ns 903.883 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.339644 s/step 1.96553 days/ns 903.883 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.284424 s/step 1.64597 days/ns 903.883 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.28115 s/step 1.62702 days/ns 903.883 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.279536 s/step 1.61769 days/ns 903.883 MB memory
</span><br>
<span class="quotelev1">&gt; WallClock: 7476.643555&lt;tel:7476.643555&gt;  CPUTime: 7476.643555&lt;tel:7476.643555&gt;  Memory: 968.867188 MB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second pair mpirun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.366327 s/step 2.11995 days/ns 939.527 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.359805 s/step 2.0822 days/ns 939.527 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.292342 s/step 1.69179 days/ns 939.527 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.293499 s/step 1.69849 days/ns 939.527 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.292355 s/step 1.69187 days/ns 939.527 MB memory
</span><br>
<span class="quotelev1">&gt; WallClock: 7842.831543  CPUTime: 7842.831543  Memory: 1004.050781 MB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second pair srun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.347864 s/step 2.0131 days/ns 904.91 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.346367 s/step 2.00444 days/ns 904.91 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.29007 s/step 1.67865 days/ns 904.91 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.279447 s/step 1.61717 days/ns 904.91 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.280824 s/step 1.62514 days/ns 904.91 MB memory
</span><br>
<span class="quotelev1">&gt; WallClock: 7522.677246  CPUTime: 7522.677246  Memory: 969.433594 MB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So to me it looks like (for NAMD on our system at least) that
</span><br>
<span class="quotelev1">&gt; PMI2 does seem to give better scalability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the best!
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - --
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden]&lt;mailto:samuel_at_[hidden]&gt; Phone: +61 (0)3 903 55545&lt;tel:%2B61%20%280%293%20903%2055545&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.14 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlNp28UACgkQO2KABBYQAh8hagCfewbbxUR6grg5R40GrwjtIZV0
</span><br>
<span class="quotelev1">&gt; 1KYAn2uX0yKLdOEbkHARKouzwFilaTTD
</span><br>
<span class="quotelev1">&gt; =A/Yw
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14697.php">http://www.open-mpi.org/community/lists/devel/2014/05/14697.php</a>
</span><br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14698.php">http://www.open-mpi.org/community/lists/devel/2014/05/14698.php</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14707.php">http://www.open-mpi.org/community/lists/devel/2014/05/14707.php</a>
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14708.php">http://www.open-mpi.org/community/lists/devel/2014/05/14708.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14714/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14715.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14713.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14711.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14754.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14754.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
