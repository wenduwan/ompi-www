<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  9 21:01:48 2011" -->
<!-- isoreceived="20110410010148" -->
<!-- sent="Sat, 9 Apr 2011 21:01:48 -0400" -->
<!-- isosent="20110410010148" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201104100101.p3A11mDI004922_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> MPI Team (<em>mpiteam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-09 21:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2121.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.3rc1r3411)"</a>
<li><strong>Previous message:</strong> <a href="2119.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3409)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Sat Apr  9 21:01:04 EDT 2011
<br>
End time:   Sat Apr  9 21:01:47 EDT 2011
<br>
<p>=======================================================================
<br>
{ test ! -d &quot;hwloc-1.3a1r3414&quot; || { find &quot;hwloc-1.3a1r3414&quot; -type d ! -perm -200 -exec chmod u+w {} ';' &amp;&amp; rm -fr &quot;hwloc-1.3a1r3414&quot;; }; }
<br>
test -d &quot;hwloc-1.3a1r3414&quot; || mkdir &quot;hwloc-1.3a1r3414&quot;
<br>
&nbsp;(cd src &amp;&amp; make  top_distdir=../hwloc-1.3a1r3414 distdir=../hwloc-1.3a1r3414/src \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3414/hwloc/src'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3414/hwloc/src'
<br>
&nbsp;(cd include &amp;&amp; make  top_distdir=../hwloc-1.3a1r3414 distdir=../hwloc-1.3a1r3414/include \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3414/hwloc/include'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3414/hwloc/include'
<br>
&nbsp;(cd utils &amp;&amp; make  top_distdir=../hwloc-1.3a1r3414 distdir=../hwloc-1.3a1r3414/utils \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3414/hwloc/utils'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3414/hwloc/utils'
<br>
&nbsp;(cd tests &amp;&amp; make  top_distdir=../hwloc-1.3a1r3414 distdir=../hwloc-1.3a1r3414/tests \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3414/hwloc/tests'
<br>
make[1]: *** No rule to make target `hwloc_obj_infos.c', needed by `distdir'.  Stop.
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3414/hwloc/tests'
<br>
make: *** [distdir] Error 1
<br>
=======================================================================
<br>
<p>Your friendly daemon,
<br>
Cyrador
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2121.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.3rc1r3411)"</a>
<li><strong>Previous message:</strong> <a href="2119.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3409)"</a>
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
