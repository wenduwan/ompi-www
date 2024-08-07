<?
$subject_val = "Re: [OMPI devel] coll ml error with some nonblocking collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 16:15:39 2014" -->
<!-- isoreceived="20140915201539" -->
<!-- sent="Mon, 15 Sep 2014 20:15:35 +0000" -->
<!-- isosent="20140915201535" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] coll ml error with some nonblocking collectives" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05B2ED79_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1fe2f76a14664935ae7e6aed2ae6ebe1_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] coll ml error with some nonblocking collectives<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-15 16:15:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15831.php">Rolf vandeVaart: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>Previous message:</strong> <a href="15829.php">H&#229;kon Bugge: "[OMPI devel] External loopback"</a>
<li><strong>In reply to:</strong> <a href="15828.php">Rolf vandeVaart: "[OMPI devel] coll ml error with some nonblocking collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15831.php">Rolf vandeVaart: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>Reply:</strong> <a href="15831.php">Rolf vandeVaart: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
<p>This may be related to change set 32659.
<br>
<p>If you back this change out, do the tests pass?
<br>
<p><p>Howard
<br>
<p><p><p><p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Monday, September 15, 2014 8:55 AM
<br>
To: devel_at_[hidden]
<br>
Subject: [OMPI devel] coll ml error with some nonblocking collectives
<br>
<p><p>I wonder if anyone else is seeing this failure. Not sure when this started but it is only on the trunk. Here is a link to my failures as well as an example below that. There are a variety of nonblocking collectives failing like this.
<br>
<p><p><p><a href="http://mtt.open-mpi.org/index.php?do_redir=2208">http://mtt.open-mpi.org/index.php?do_redir=2208</a>
<br>
<p><p><p>[rvandevaart_at_drossetti-ivy0 collective]$ mpirun --mca btl self,sm,tcp -host drossetti-ivy0,drossetti-ivy0,drossetti-ivy1,drossetti-ivy1 iallreduce
<br>
--------------------------------------------------------------------------
<br>
<p>ML detected an unrecoverable error on intrinsic communicator MPI_COMM_WORLD
<br>
<p>The program will now abort
<br>
--------------------------------------------------------------------------
<br>
[drossetti-ivy0.nvidia.com:04664] 3 more processes have sent help message help-mpi-coll-ml.txt / coll-ml-check-fatal-error
<br>
[rvandevaart_at_drossetti-ivy0 collective]$
<br>
<p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15830/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15831.php">Rolf vandeVaart: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>Previous message:</strong> <a href="15829.php">H&#229;kon Bugge: "[OMPI devel] External loopback"</a>
<li><strong>In reply to:</strong> <a href="15828.php">Rolf vandeVaart: "[OMPI devel] coll ml error with some nonblocking collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15831.php">Rolf vandeVaart: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>Reply:</strong> <a href="15831.php">Rolf vandeVaart: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
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
