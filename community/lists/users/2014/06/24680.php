<?
$subject_val = "Re: [OMPI users] affinity issues under cpuset torque 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 12:38:34 2014" -->
<!-- isoreceived="20140620163834" -->
<!-- sent="Fri, 20 Jun 2014 12:38:30 -0400" -->
<!-- isosent="20140620163830" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] affinity issues under cpuset torque 1.8.1" -->
<!-- id="482D82C9-9A39-4B72-AEF1-995A1FB02AF9_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A79A491C-750C-42FF-ABDC-428D83A1C6CA_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] affinity issues under cpuset torque 1.8.1<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-20 12:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24681.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24679.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24679.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24681.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24681.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to produce it in my test.
<br>
<p>orted affinity set by cpuset:
<br>
[root_at_nyx5874 ~]# hwloc-bind --get --pid 103645
<br>
0x0000c002
<br>
<p>This mask (1, 14,15) which is across sockets, matches the cpu set setup by the batch system. 
<br>
[root_at_nyx5874 ~]# cat /dev/cpuset/torque/12719806.nyx.engin.umich.edu/cpus 
<br>
1,14-15
<br>
<p>The ranks though were then all set to the same core:
<br>
<p>[root_at_nyx5874 ~]# hwloc-bind --get --pid 103871
<br>
0x00008000
<br>
[root_at_nyx5874 ~]# hwloc-bind --get --pid 103872
<br>
0x00008000
<br>
[root_at_nyx5874 ~]# hwloc-bind --get --pid 103873
<br>
0x00008000
<br>
<p>Which is core 15:
<br>
<p>report-bindings gave me:
<br>
You can see how a few nodes were bound to all the same core, the last one in each case.  I only gave you the results for the hose nyx5874.
<br>
<p>[nyx5526.engin.umich.edu:23726] MCW rank 0 is not bound (or bound to all available processors)
<br>
[nyx5878.engin.umich.edu:103925] MCW rank 8 is not bound (or bound to all available processors)
<br>
[nyx5533.engin.umich.edu:123988] MCW rank 1 is not bound (or bound to all available processors)
<br>
[nyx5879.engin.umich.edu:102808] MCW rank 9 is not bound (or bound to all available processors)
<br>
[nyx5874.engin.umich.edu:103645] MCW rank 41 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5874.engin.umich.edu:103645] MCW rank 42 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5874.engin.umich.edu:103645] MCW rank 43 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5888.engin.umich.edu:117400] MCW rank 11 is not bound (or bound to all available processors)
<br>
[nyx5786.engin.umich.edu:30004] MCW rank 19 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5786.engin.umich.edu:30004] MCW rank 18 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5594.engin.umich.edu:33884] MCW rank 24 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5594.engin.umich.edu:33884] MCW rank 25 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5594.engin.umich.edu:33884] MCW rank 26 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5798.engin.umich.edu:53026] MCW rank 59 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5798.engin.umich.edu:53026] MCW rank 60 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5798.engin.umich.edu:53026] MCW rank 56 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5798.engin.umich.edu:53026] MCW rank 57 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5798.engin.umich.edu:53026] MCW rank 58 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
<br>
[nyx5545.engin.umich.edu:88170] MCW rank 2 is not bound (or bound to all available processors)
<br>
[nyx5613.engin.umich.edu:25229] MCW rank 31 is not bound (or bound to all available processors)
<br>
[nyx5880.engin.umich.edu:01406] MCW rank 10 is not bound (or bound to all available processors)
<br>
[nyx5770.engin.umich.edu:86538] MCW rank 6 is not bound (or bound to all available processors)
<br>
[nyx5613.engin.umich.edu:25228] MCW rank 30 is not bound (or bound to all available processors)
<br>
[nyx5577.engin.umich.edu:65949] MCW rank 4 is not bound (or bound to all available processors)
<br>
[nyx5607.engin.umich.edu:30379] MCW rank 14 is not bound (or bound to all available processors)
<br>
[nyx5544.engin.umich.edu:72960] MCW rank 47 is not bound (or bound to all available processors)
<br>
[nyx5544.engin.umich.edu:72959] MCW rank 46 is not bound (or bound to all available processors)
<br>
[nyx5848.engin.umich.edu:04332] MCW rank 33 is not bound (or bound to all available processors)
<br>
[nyx5848.engin.umich.edu:04333] MCW rank 34 is not bound (or bound to all available processors)
<br>
[nyx5544.engin.umich.edu:72958] MCW rank 45 is not bound (or bound to all available processors)
<br>
[nyx5858.engin.umich.edu:12165] MCW rank 35 is not bound (or bound to all available processors)
<br>
[nyx5607.engin.umich.edu:30380] MCW rank 15 is not bound (or bound to all available processors)
<br>
[nyx5544.engin.umich.edu:72957] MCW rank 44 is not bound (or bound to all available processors)
<br>
[nyx5858.engin.umich.edu:12167] MCW rank 37 is not bound (or bound to all available processors)
<br>
[nyx5870.engin.umich.edu:33811] MCW rank 7 is not bound (or bound to all available processors)
<br>
[nyx5582.engin.umich.edu:81994] MCW rank 5 is not bound (or bound to all available processors)
<br>
[nyx5848.engin.umich.edu:04331] MCW rank 32 is not bound (or bound to all available processors)
<br>
[nyx5557.engin.umich.edu:46654] MCW rank 50 is not bound (or bound to all available processors)
<br>
[nyx5858.engin.umich.edu:12166] MCW rank 36 is not bound (or bound to all available processors)
<br>
[nyx5799.engin.umich.edu:67802] MCW rank 22 is not bound (or bound to all available processors)
<br>
[nyx5799.engin.umich.edu:67803] MCW rank 23 is not bound (or bound to all available processors)
<br>
[nyx5556.engin.umich.edu:50889] MCW rank 3 is not bound (or bound to all available processors)
<br>
[nyx5625.engin.umich.edu:95931] MCW rank 53 is not bound (or bound to all available processors)
<br>
[nyx5625.engin.umich.edu:95930] MCW rank 52 is not bound (or bound to all available processors)
<br>
[nyx5557.engin.umich.edu:46655] MCW rank 51 is not bound (or bound to all available processors)
<br>
[nyx5625.engin.umich.edu:95932] MCW rank 54 is not bound (or bound to all available processors)
<br>
[nyx5625.engin.umich.edu:95933] MCW rank 55 is not bound (or bound to all available processors)
<br>
[nyx5866.engin.umich.edu:16306] MCW rank 40 is not bound (or bound to all available processors)
<br>
[nyx5861.engin.umich.edu:22761] MCW rank 61 is not bound (or bound to all available processors)
<br>
[nyx5861.engin.umich.edu:22762] MCW rank 62 is not bound (or bound to all available processors)
<br>
[nyx5861.engin.umich.edu:22763] MCW rank 63 is not bound (or bound to all available processors)
<br>
[nyx5557.engin.umich.edu:46652] MCW rank 48 is not bound (or bound to all available processors)
<br>
[nyx5557.engin.umich.edu:46653] MCW rank 49 is not bound (or bound to all available processors)
<br>
[nyx5866.engin.umich.edu:16304] MCW rank 38 is not bound (or bound to all available processors)
<br>
[nyx5788.engin.umich.edu:02465] MCW rank 20 is not bound (or bound to all available processors)
<br>
[nyx5597.engin.umich.edu:68071] MCW rank 27 is not bound (or bound to all available processors)
<br>
[nyx5775.engin.umich.edu:27952] MCW rank 17 is not bound (or bound to all available processors)
<br>
[nyx5866.engin.umich.edu:16305] MCW rank 39 is not bound (or bound to all available processors)
<br>
[nyx5788.engin.umich.edu:02466] MCW rank 21 is not bound (or bound to all available processors)
<br>
[nyx5775.engin.umich.edu:27951] MCW rank 16 is not bound (or bound to all available processors)
<br>
[nyx5597.engin.umich.edu:68073] MCW rank 29 is not bound (or bound to all available processors)
<br>
[nyx5597.engin.umich.edu:68072] MCW rank 28 is not bound (or bound to all available processors)
<br>
[nyx5552.engin.umich.edu:30481] MCW rank 12 is not bound (or bound to all available processors)
<br>
[nyx5552.engin.umich.edu:30482] MCW rank 13 is not bound (or bound to all available processors)
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jun 20, 2014, at 12:20 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Got it,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the input from the user and am testing it out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It probably has less todo with torque and more cpuset's, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working on producing it myself also.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 20, 2014, at 12:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks - I'm just trying to reproduce one problem case so I can look at it. Given that I don't have access to a Torque machine, I need to &quot;fake&quot; it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 20, 2014, at 9:15 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this case they are a single socket, but as you can see they could be ether/or depending on the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 19, 2014, at 2:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry, I should have been clearer - I was asking if cores 8-11 are all on one socket, or span multiple sockets
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 19, 2014, at 11:36 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It was a large job spread across.  Our system allows users to ask for 'procs' which are laid out in any format. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The list:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [nyx5406:2][nyx5427:2][nyx5506:2][nyx5311:3]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [nyx5329:4][nyx5398:4][nyx5396:11][nyx5397:11]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [nyx5409:11][nyx5411:11][nyx5412:3]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Shows that nyx5406 had 2 cores,  nyx5427 also 2,  nyx5411 had 11.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; They could be spread across any number of sockets configuration.  We start very lax &quot;user requests X procs&quot; and then the user can request more strict requirements from there.  We support mostly serial users, and users can colocate on nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That is good to know, I think we would want to turn our default to 'bind to core' except for our few users who use hybrid mode.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Our CPU set tells you what cores the job is assigned.  So in the problem case provided, the cpuset/cgroup shows only cores 8-11 are available to this job on this node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 18, 2014, at 11:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The default binding option depends on the number of procs - it is bind-to core for np=2, and bind-to socket for np &gt; 2. You never said, but should I assume you ran 4 ranks? If so, then we should be trying to bind-to socket.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm not sure what your cpuset is telling us - are you binding us to a socket? Are some cpus in one socket, and some in another?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It could be that the cpuset + bind-to socket is resulting in some odd behavior, but I'd need a little more info to narrow it down.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jun 18, 2014, at 7:48 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have started using 1.8.1 for some codes (meep in this case) and it sometimes works fine, but in a few cases I am seeing ranks being given overlapping CPU assignments, not always though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Example job, default binding options (so by-core right?):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Assigned nodes, the one in question is nyx5398, we use torque CPU sets, and use TM to spawn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx5406:2][nyx5427:2][nyx5506:2][nyx5311:3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx5329:4][nyx5398:4][nyx5396:11][nyx5397:11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx5409:11][nyx5411:11][nyx5412:3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16065
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16066
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16067
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16068
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# cat /dev/cpuset/torque/12703230.nyx.engin.umich.edu/cpus 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 8-11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So torque claims the CPU set setup for the job has 4 cores, but as you can see the ranks were giving identical binding. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I checked the pids they were part of the correct CPU set, I also checked, orted:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16064
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000f00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-calc --intersect PU 16064
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ignored unrecognized argument 16064
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-calc --intersect PU 0x00000f00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 8,9,10,11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Which is exactly what I would expect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So ummm, i'm lost why this might happen?  What else should I check?  Like I said not all jobs show this behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24672.php">http://www.open-mpi.org/community/lists/users/2014/06/24672.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24673.php">http://www.open-mpi.org/community/lists/users/2014/06/24673.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24675.php">http://www.open-mpi.org/community/lists/users/2014/06/24675.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24676.php">http://www.open-mpi.org/community/lists/users/2014/06/24676.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24677.php">http://www.open-mpi.org/community/lists/users/2014/06/24677.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24678.php">http://www.open-mpi.org/community/lists/users/2014/06/24678.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24680/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24681.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24679.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24679.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24681.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24681.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
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
