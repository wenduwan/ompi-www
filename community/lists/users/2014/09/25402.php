<?
$subject_val = "Re: [OMPI users] --prefix, segfaulting";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 13:43:56 2014" -->
<!-- isoreceived="20140929174356" -->
<!-- sent="Mon, 29 Sep 2014 10:43:51 -0700" -->
<!-- isosent="20140929174351" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --prefix, segfaulting" -->
<!-- id="E25DF91D-4029-4E4B-BC27-8E6D160A7DE3_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="28CF5C93-C7F3-4DBC-98E9-8F59E786B9B3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] --prefix, segfaulting<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 13:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25403.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Previous message:</strong> <a href="25401.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>In reply to:</strong> <a href="25341.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not seeing this with 1.8.3 - can you try with it?
<br>
<p><p>On Sep 17, 2014, at 4:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yeah, just wanted to make sure you were seeing the same mpiexec in both cases. There shouldn't be any issue with providing the complete path, though I can take a look
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2014, at 4:29 PM, Nico Schl&#246;mer &lt;nico.schloemer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You should check that your path would also hit /usr/bin/mpiexec and not some other version of it
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ```
</span><br>
<span class="quotelev2">&gt;&gt; $ which mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; ```
</span><br>
<span class="quotelev2">&gt;&gt; Is this what you mean?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#150;Nico
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep 18, 2014 at 1:04 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You should check that your path would also hit /usr/bin/mpiexec and not some other version of it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 17, 2014, at 4:01 PM, Nico Schl&#246;mer &lt;nico.schloemer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Today, I observed a really funky behavior of my stock
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ```
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpiexec --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec (OpenRTE) 1.6.5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ```
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on Ubuntu 14.04. When running one of my test codes with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ```
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpiexec -n 2 ioTest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ```
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all is fine. If instead I use the full path of mpiexec, I get a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different behavior
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ```
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ /usr/bin/mpiexec -n 2 ioTest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (exception thrown)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ```
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was puzzled, so skimmed the manpage and found that the `--prefix`
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; option might have something to do with it. I played around and got
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ```
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ /usr/bin/mpiexec --prefix . -n 2 ioTest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] Failing at address: 0x1000000dd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f12e4069340]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] [ 1] /lib/x86_64-linux-gnu/libc.so.6(_IO_vfprintf+0x1d13)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f12e3cde8f3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__vasprintf_chk+0xb5) [0x7f12e3d9e035]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib/libopen-rte.so.4(opal_show_help_vstring+0x343)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f12e43043e3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] [ 4] /usr/lib/libopen-rte.so.4(orte_show_help+0xaf)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f12e42a5faf]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] [ 5] /usr/bin/mpiexec() [0x403ab3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] [ 6] /usr/bin/mpiexec() [0x40347d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f12e3cb4ec5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] [ 8] /usr/bin/mpiexec() [0x403399]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fuji:21003] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ```
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's tough!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Should I try to reproduce this with a more recent version? Any idea
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what the reason for the different behavior of `mpiexec` and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/usr/bin/mpiexec` might be?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nico
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25338.php">http://www.open-mpi.org/community/lists/users/2014/09/25338.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25339.php">http://www.open-mpi.org/community/lists/users/2014/09/25339.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25340.php">http://www.open-mpi.org/community/lists/users/2014/09/25340.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25403.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Previous message:</strong> <a href="25401.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>In reply to:</strong> <a href="25341.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
<!-- nextthread="start" -->
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
