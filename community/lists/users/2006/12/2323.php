<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  7 14:47:08 2006" -->
<!-- isoreceived="20061207194708" -->
<!-- sent="Thu, 7 Dec 2006 14:45:47 -0500" -->
<!-- isosent="20061207194547" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="0D1CFA59-BA29-4CC2-9BB5-00D55E636FE3_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="88D367A2-449A-4E51-AD0B-567D1DAA1E64_at_cs.utk.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-07 14:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There were two issues here,  one found the other.   the OB1 works  
<br>
just fine on OSX on PPC64.   the DR PML does not work,  there is no  
<br>
output to STDOUT and the application while you can see the threads in  
<br>
'top'  no progress is ever made in running the application.
<br>
<p>The original problem stems from RDMA in the GM btl. (or so I think?)
<br>
<p>The following will produce no output and no progress when running:
<br>
<p>mpirun --mca btl ^gm  --mca pml dr -np 4 ./xhpl
<br>
<p>(isolating the current gm problem)
<br>
This was all done on 1.2b1
<br>
<p>Is there more information you would like?
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Dec 7, 2006, at 2:20 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Something is not clear for me in this discussion. Sometimes the
</span><br>
<span class="quotelev1">&gt; subject was the DR PML and sometimes the OB1 PML. In fact I'm
</span><br>
<span class="quotelev1">&gt; completely in the dark ... Which PML fails the HPCC test on  MAC ?
</span><br>
<span class="quotelev1">&gt; When I look at the command line it look like it should be OB1 not  
</span><br>
<span class="quotelev1">&gt; DR ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 7, 2006, at 1:59 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is wonderful, that fixes the observed problem for running with
</span><br>
<span class="quotelev2">&gt;&gt; OB1.   Has a bug for this been filed to get RDMA working on macs?
</span><br>
<span class="quotelev2">&gt;&gt; The only working MPI lib is MPICH-GM  as this problem happens with
</span><br>
<span class="quotelev2">&gt;&gt; LAM-7.1.3 also.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So on track for one bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would the person working on the DR PML like me to try anymore tests?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 7, 2006, at 9:50 AM, Scott Atchley wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 6, 2006, at 3:09 PM, Scott Atchley wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brock and Galen,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We are willing to assist. Our best guess is that OMPI is using the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code in a way different than MPICH-GM does. One of our other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; developers who is more comfortable with the GM API is looking into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We tried running with HPCC with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 4 -machinefile hosts -mca btl ^tcp  -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_gm_min_rdma_size $((10*1024*1024)) ./hpcc.ompi.gm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and HPL passes. The problem seems to be in the RDMA fragmenting code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on OSX. The boundary values at the edges of the fragments are not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scott
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2322.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2324.php">George Bosilca: "Re: [OMPI users] running with the dr pml."</a>
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
