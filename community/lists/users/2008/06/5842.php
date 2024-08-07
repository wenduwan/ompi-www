<?
$subject_val = "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 18:33:46 2008" -->
<!-- isoreceived="20080606223346" -->
<!-- sent="Sat, 7 Jun 2008 00:33:33 +0200" -->
<!-- isosent="20080606223333" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network" -->
<!-- id="6704E8E8-42CA-4DBC-9CA4-22FCBA4CE912_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE8015D4773_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 18:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5841.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5841.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5847.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5847.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 07.06.2008 um 00:06 schrieb SLIM H.A.:
<br>
<p><span class="quotelev1">&gt; The btl interface is used. The nodes in both subclusters have the  
</span><br>
<span class="quotelev1">&gt; same architecture so no need for two binaries. The MPI libraries  
</span><br>
<span class="quotelev1">&gt; for the interconnect can be selected at runtime, for example  
</span><br>
<span class="quotelev1">&gt; through the value of the OMPI_MCA_btl environment variable. However  
</span><br>
<span class="quotelev1">&gt; that variable should then somehow be set once SGE has decided on  
</span><br>
<span class="quotelev1">&gt; which subcluster to run the job, thus avoiding it to be set in  
</span><br>
<span class="quotelev1">&gt; advance when submitting. I tried a couple of things like different  
</span><br>
<span class="quotelev1">&gt; PEs but there does not seem to be an elegant solution; I mean  
</span><br>
<span class="quotelev1">&gt; something completely transparent to the user like
</span><br>
<p>A transparent solution would be to create a &quot;starter_method&quot; in the  
<br>
parallel queue, which will check the node that it's running on and  
<br>
hence you know which type of interface to use. Export the variable  
<br>
and exec the real script; i.e. something like:
<br>
<p>#!/bin/sh
<br>
if [ &quot;${HOSTNAME%%[0-9]*}&quot; = &quot;node_ib&quot; ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export OMPI_MCA_btl=tcp
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export OMPI_MCA_btl=openib
<br>
fi
<br>
exec &quot;$@&quot;
<br>
<p><p>I think you get the idea of the script. Maybe you have some special  
<br>
names for these machines. Another indicator would be the $PE or  
<br>
$QUEUE of SGE. If you want to be sure to get only nodes of one and  
<br>
the same type (but you don't care which at submission time), you will  
<br>
need to setup something like:
<br>
<p><a href="http://gridengine.info/articles/2006/02/14/grouping-jobs-to-nodes-via">http://gridengine.info/articles/2006/02/14/grouping-jobs-to-nodes-via</a>- 
<br>
wildcard-pes
<br>
<p>anyway.
<br>
<p>HTH - Reuti
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np $NSLOTS executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as I have seen in some of the OpenMPI FAQs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] on behalf of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: Fri 6/6/2008 6:47 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] using OpenMPI + SGE in a heterogeneous  
</span><br>
<span class="quotelev1">&gt; network
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 06.06.2008 um 19:31 schrieb Patrick Geoffray:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would be grateful for any advice
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just to check, you are not using the MTL for MX, right ? Only the  
</span><br>
<span class="quotelev1">&gt; BTL
</span><br>
<span class="quotelev2">&gt; &gt; interface allow to choose between several devices at run time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least there would be the option to built two binaries and decide
</span><br>
<span class="quotelev1">&gt; at runtime which to use in your jobscript - depending on the machine
</span><br>
<span class="quotelev1">&gt; you landed on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
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
<li><strong>Next message:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5841.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5841.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5847.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5847.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
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
