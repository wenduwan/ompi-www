<?
$subject_val = "Re: [OMPI users] use accept/connect to merge a new intra-comm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 00:21:03 2015" -->
<!-- isoreceived="20150203052103" -->
<!-- sent="Mon, 2 Feb 2015 21:21:02 -0800" -->
<!-- isosent="20150203052102" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] use accept/connect to merge a new intra-comm" -->
<!-- id="CAMD57oe_b1GD2mwkb7q044d+JBg7Yck-qa762zC-fLYvCEve+g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4375243.2b8c.14b4d2921a9.Coremail.yidanyiji_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] use accept/connect to merge a new intra-comm<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 00:21:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26263.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26261.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26260.php">haozi : "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26288.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>Reply:</strong> <a href="26288.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's pretty ancient - could you try the nightly 1.8 tarball?
<br>
<p><p>On Mon, Feb 2, 2015 at 5:58 PM, haozi &lt;yidanyiji_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; mpiexec (OpenRTE) 1.4.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At 2015-02-02 12:54:11, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which OMPI version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 25, 2015, at 5:41 AM, haozi &lt;yidanyiji_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi guys.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am interested in an example from OpenMPI,
</span><br>
<span class="quotelev1">&gt; as  attachment: singleton_client_server.c.
</span><br>
<span class="quotelev1">&gt; So, I wrote another example. And some error happened.
</span><br>
<span class="quotelev1">&gt; My example includes two servers and one client.
</span><br>
<span class="quotelev1">&gt; First, server1 runs. Second, client runs. server1 and client merge an new
</span><br>
<span class="quotelev1">&gt; intra-comm. Next, server2 runs. server2 open a port, server1 and client
</span><br>
<span class="quotelev1">&gt; want to connect server2. At the moment, some error happen. client and
</span><br>
<span class="quotelev1">&gt; server2 block, and server1 has errors as following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [datanode-2:06824] [[53818,0],0]:route_callback tried routing message from
</span><br>
<span class="quotelev1">&gt; [[53818,1],0] to [[53822,1],0]:16, can't find route
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/lib/libopen-pal.so.0(opal_backtrace_print+0x30) [0xb769fbc0]
</span><br>
<span class="quotelev1">&gt; [1] func:/usr/lib/openmpi/lib/openmpi/mca_rml_oob.so(+0x1bfd) [0xb748fbfd]
</span><br>
<span class="quotelev1">&gt; [2] func:/usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(+0x6cfa) [0xb7484cfa]
</span><br>
<span class="quotelev1">&gt; [3] func:/usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(+0x81c2) [0xb74861c2]
</span><br>
<span class="quotelev1">&gt; [4] func:/usr/lib/libopen-pal.so.0(+0x1aca4) [0xb7688ca4]
</span><br>
<span class="quotelev1">&gt; [5] func:/usr/lib/libopen-pal.so.0(opal_event_loop+0x25) [0xb7688ea5]
</span><br>
<span class="quotelev1">&gt; [6] func:/usr/lib/libopen-pal.so.0(opal_event_dispatch+0x1b) [0xb7688ecb]
</span><br>
<span class="quotelev1">&gt; [7] func:mpiexec() [0x804ac0a]
</span><br>
<span class="quotelev1">&gt; [8] func:mpiexec() [0x8049f4f]
</span><br>
<span class="quotelev1">&gt; [9] func:/lib/i386-linux-gnu/libc.so.6(__libc_start_main+0xf3) [0xb74c14d3]
</span><br>
<span class="quotelev1">&gt; [10] func:mpiexec() [0x8049ea1]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My code is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;client.c&gt;&lt;server1.c&gt;&lt;server2.c&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26233.php">http://www.open-mpi.org/community/lists/users/2015/01/26233.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26260.php">http://www.open-mpi.org/community/lists/users/2015/02/26260.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26262/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26263.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26261.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26260.php">haozi : "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26288.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>Reply:</strong> <a href="26288.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
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
