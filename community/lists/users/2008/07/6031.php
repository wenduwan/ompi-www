<?
$subject_val = "[OMPI users] Valgrind Functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 22:09:34 2008" -->
<!-- isoreceived="20080708020934" -->
<!-- sent="Mon, 7 Jul 2008 19:09:26 -0700 (PDT)" -->
<!-- isosent="20080708020926" -->
<!-- name="Tom Riddle" -->
<!-- email="rarebitusa_at_[hidden]" -->
<!-- subject="[OMPI users] Valgrind Functionality" -->
<!-- id="845859.25104.qm_at_web55404.mail.re4.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Valgrind Functionality<br>
<strong>From:</strong> Tom Riddle (<em>rarebitusa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-07 22:09:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6032.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6030.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6032.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6032.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was attempting to get valgrind working with a simple MPI app (osu_latency) on OpenMPI. While it appears to report uninitialized values it fails to report any mallocs or frees that have been conducted. 
<br>
<p>I am using RHEL 5, gcc 4.2.3 and a drop from the repo labeled openmpi-1.3a1r18303. configured with  
<br>
<p>&#160;$ ../configure --prefix=/opt/wkspace/openmpi-1.3a1r18303 CC=gcc 
<br>
CXX=g++ --disable-mpi-f77 --enable-debug --enable-memchecker 
<br>
--with-psm=/usr/include --with-valgrind=/opt/wkspace/valgrind-3.3.0/
<br>
<p><p>As the FAQ's suggest I am running a later version of valgrind, enabling the memchecker and debug. I tested a slightly modified osu_latency test which has a simple char buffer malloc and free but the valgrind summary shows no malloc/free activity whatsoever. This is&#160; running on a dual node system using Infinipath HCAs.&#160; Here is a trimmed output.
<br>
<p>[tom_at_lab01 ~]$ mpirun --mca pml cm -np 2 --hostfile my_hostfile valgrind ./osu_latency1 
<br>
==17839== Memcheck, a memory error detector.
<br>
==17839== Copyright (C) 2002-2006, and GNU GPL'd, by Julian Seward et al.
<br>
==17839== Using LibVEX rev 1658, a library for dynamic binary translation.
<br>
==17839== Copyright (C) 2004-2006, and GNU GPL'd, by OpenWorks LLP.
<br>
==17839== Using valgrind-3.2.1, a dynamic binary instrumentation framework.
<br>
==17839== Copyright (C) 2000-2006, and GNU GPL'd, by Julian Seward et al.
<br>
==17839== For more details, rerun with: -v
<br>
==17839== 
<br>
==17823== Memcheck, a memory error detector.
<br>
==17823== Copyright (C) 2002-2006, and GNU GPL'd, by Julian Seward et al.
<br>
==17823== Using LibVEX rev 1658, a library for dynamic binary translation.
<br>
==17823== Copyright (C) 2004-2006, and GNU GPL'd, by OpenWorks LLP.
<br>
==17823== Using valgrind-3.2.1, a dynamic binary instrumentation framework.
<br>
==17823== Copyright (C) 2000-2006, and GNU GPL'd, by Julian Seward et al.
<br>
==17823== For more details, rerun with: -v
<br>
==17823== 
<br>
==17839== Syscall param write(buf) points to uninitialised byte(s)
<br>
==17839==&#160;&#160;&#160; at 0x3DD8C0CAA0: __write_nocancel (in /lib64/libpthread-2.5.so)
<br>
==17839==&#160;&#160;&#160; by 0x7C283E8: ipath_userinit (ipath_proto.c:191)
<br>
==17839==&#160;&#160;&#160; by 0x7AFCDF4: psmi_port_open (psm_port.c:116)
<br>
==17839==&#160;&#160;&#160; by 0x7AFE1FB: psm_ep_open (psm_ep.c:535)
<br>
==17839==&#160;&#160;&#160; by 0x78E842C: ompi_mtl_psm_module_init (mtl_psm.c:108)
<br>
==17839==&#160;&#160;&#160; by 0x78E9137: ompi_mtl_psm_component_init (mtl_psm_component.c:125)
<br>
==17839==&#160;&#160;&#160; by 0x4CE32D4: ompi_mtl_base_select (mtl_base_component.c:105)
<br>
==17839==&#160;&#160;&#160; by 0x76D9EDE: mca_pml_cm_component_init (pml_cm_component.c:145)
<br>
==17839==&#160;&#160;&#160; by 0x4CE7425: mca_pml_base_select (pml_base_select.c:122)
<br>
==17839==&#160;&#160;&#160; by 0x4C50ED2: ompi_mpi_init (ompi_mpi_init.c:398)
<br>
==17839==&#160;&#160;&#160; by 0x4C93EE4: PMPI_Init (pinit.c:88)
<br>
==17839==&#160;&#160;&#160; by 0x400D78: main (in /home/tomr/osu_latency1)
<br>
==17839==&#160; Address 0x7FEFFE9D4 is on thread 1's stack
<br>
==17839== 
<br>
==17823== 
<br>
==17823== Syscall param sched_setaffinity(mask) points to uninitialised byte(s)
<br>
==17823==&#160;&#160;&#160; at 0x3EA36B8AD0: sched_setaffinity@@GLIBC_2.3.4 (in /lib64/libc-2.5.so)
<br>
==17823==&#160;&#160;&#160; by 0x7C2775E: ipath_setaffinity (ipath_proto.c:160)
<br>
==17823==&#160;&#160;&#160; by 0x7C28400: ipath_userinit (ipath_proto.c:198)
<br>
==17823==&#160;&#160;&#160; by 0x7AFCDF4: psmi_port_open (psm_port.c:116)
<br>
==17823==&#160;&#160;&#160; by 0x7AFE1FB: psm_ep_open (psm_ep.c:535)
<br>
==17823==&#160;&#160;&#160; by 0x78E842C: ompi_mtl_psm_module_init (mtl_psm.c:108)
<br>
==17823==&#160;&#160;&#160; by 0x78E9137: ompi_mtl_psm_component_init (mtl_psm_component.c:125)
<br>
==17823==&#160;&#160;&#160; by 0x4CE32D4: ompi_mtl_base_select (mtl_base_component.c:105)
<br>
==17823==&#160;&#160;&#160; by 0x76D9EDE: mca_pml_cm_component_init (pml_cm_component.c:145)
<br>
==17823==&#160;&#160;&#160; by 0x4CE7425: mca_pml_base_select (pml_base_select.c:122)
<br>
==17823==&#160;&#160;&#160; by 0x4C50ED2: ompi_mpi_init (ompi_mpi_init.c:398)
<br>
==17823==&#160;&#160;&#160; by 0x4C93EE4: PMPI_Init (pinit.c:88)
<br>
==17823==&#160; Address 0x7FEFFEC30 is on thread 1's stack
<br>
==17823== 
<br>
# OSU MPI Latency Test v3.0
<br>
# Size&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Latency (us)
<br>
384&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 61.78
<br>
==17839== 
<br>
==17839== ERROR SUMMARY: 9 errors from 9 contexts (suppressed: 5 from 1)
<br>
==17839== malloc/free: in use at exit: 0 bytes in 0 blocks.
<br>
==17839== malloc/free: 0 allocs, 0 frees, 0 bytes allocated.
<br>
==17839== For counts of detected errors, rerun with: -v
<br>
==17839== All heap blocks were freed -- no leaks are possible.
<br>
==17823== 
<br>
==17823== ERROR SUMMARY: 9 errors from 9 contexts (suppressed: 5 from 1)
<br>
==17823== malloc/free: in use at exit: 0 bytes in 0 blocks.
<br>
==17823== malloc/free: 0 allocs, 0 frees, 0 bytes allocated.
<br>
==17823== For counts of detected errors, rerun with: -v
<br>
==17823== All heap blocks were freed -- no leaks are possible.
<br>
<p>Hopefully this was enough info to garner a bit of input, Thanks in advance. Tom
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6032.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6030.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6032.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6032.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
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
