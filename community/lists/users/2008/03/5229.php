<?
$subject_val = "Re: [OMPI users] Begginers question: why does this program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 08:21:18 2008" -->
<!-- isoreceived="20080318122118" -->
<!-- sent="Tue, 18 Mar 2008 09:21:10 -0300 (ART)" -->
<!-- isosent="20080318122110" -->
<!-- name="Giovani Faccin" -->
<!-- email="giovanifaccin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Begginers question: why does this program" -->
<!-- id="50540.99808.qm_at_web33104.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="c84311bb0803180459v5446aabbu2708f151f526467c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Begginers question: why does this program<br>
<strong>From:</strong> Giovani Faccin (<em>giovanifaccin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 08:21:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5230.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5228.php">Mark Kosmowski: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>In reply to:</strong> <a href="5228.php">Mark Kosmowski: "Re: [OMPI users] Begginers question: why does this program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5231.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Reply:</strong> <a href="5231.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mark
<br>
<p>Compiler and flags:
<br>
<p>sys-devel/gcc-4.1.2  USE=&quot;doc* fortran gtk mudflap nls (-altivec) -bootstrap -build -d -gcj (-hardened) -ip28 -ip32r10k -libffi% (-multilib) -multislot (-n32) (-n64) -nocxx -objc -objc++ -objc-gc -test -vanilla&quot;
<br>
<p>Network stuff:
<br>
<p>sonja gfaccin # ifconfig
<br>
lo        Link encap:Local Loopback  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:33166 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:33166 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:9846970 (9.3 Mb)  TX bytes:9846970 (9.3 Mb)
<br>
<p>wlan0     Link encap:Ethernet  HWaddr 00:1C:BF:24:24:91  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.50  Bcast:192.168.0.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::21c:bfff:fe24:2491/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:5944 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:6343 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:3058968 (2.9 Mb)  TX bytes:1713598 (1.6 Mb)
<br>
<p>wmaster0  Link encap:UNSPEC  HWaddr 00-1C-BF-24-24-91-60-00-00-00-00-00-00-00-00                          
<br>
-00  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
<br>
<p>I have 2 cards in my laptop, one is an ethernet one that's not enabled (no kernel modules loaded). The other one is the wireless card, which is enabled. Those 2 interfaces appear because the driver creates them. The real one is wlan0.
<br>
<p>I'll try to find in the faq where is this flag to specify the card, just in case MPI might be trying to use wmaster0. Let's see if it works.
<br>
<p>Thanks!
<br>
<p>Giovani
<br>
<p><p>Mark Kosmowski &lt;mark.kosmowski_at_[hidden]&gt; escreveu: Giovani:
<br>
<p>Which compiler are you using?
<br>
<p>Also, you didn't mention this, but does &quot;mpirun hostname&quot; give the
<br>
expected response?  I (also new) had a hang similar to what you are
<br>
describing due to ompi getting confused as to which of two network
<br>
interfaces to use - &quot;mpirun hostname&quot; would hang when started on
<br>
certain nodes.  This problem was resolved by telling ompi which
<br>
network interface to use (I forget the option needed to do this off
<br>
the top of my head, but it is in the FAQ somewhere).
<br>
<p>Good luck,
<br>
<p>Mark
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
Abra sua conta no Yahoo! Mail, o &#250;nico sem limite de espa&#231;o para armazenamento! 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5229/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5230.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5228.php">Mark Kosmowski: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>In reply to:</strong> <a href="5228.php">Mark Kosmowski: "Re: [OMPI users] Begginers question: why does this program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5231.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Reply:</strong> <a href="5231.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
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
