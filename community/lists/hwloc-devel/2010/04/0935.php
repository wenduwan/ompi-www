<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 14:07:46 2010" -->
<!-- isoreceived="20100429180746" -->
<!-- sent="Thu, 29 Apr 2010 20:07:41 +0200" -->
<!-- isosent="20100429180741" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018" -->
<!-- id="4BD9CAED.60502_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201004291806.o3TI6LCw005574_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 14:07:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0936.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2020)"</a>
<li><strong>Previous message:</strong> <a href="0934.php">Jeff Squyres: "Re: [hwloc-devel] 1.0rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0937.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
<li><strong>Reply:</strong> <a href="0937.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To be backported in 1.0 branch after comments/proof-reading.
<br>
<p><p>On 29/04/2010 20:06, bgoglin_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-04-29 14:06:21 EDT (Thu, 29 Apr 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2018
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2018">https://svn.open-mpi.org/trac/hwloc/changeset/2018</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Try to document (in the bug/question section) that upgrading the kernel/BIOS may help
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/doc/hwloc.doxy |    11 +++++++++++                             
</span><br>
<span class="quotelev1">&gt;    1 files changed, 11 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/doc/hwloc.doxy
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/doc/hwloc.doxy	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/doc/hwloc.doxy	2010-04-29 14:06:21 EDT (Thu, 29 Apr 2010)
</span><br>
<span class="quotelev1">&gt; @@ -317,6 +317,17 @@
</span><br>
<span class="quotelev1">&gt;  Bug reports should be reported in the tracker
</span><br>
<span class="quotelev1">&gt;  (<a href="https://svn.open-mpi.org/trac/hwloc/">https://svn.open-mpi.org/trac/hwloc/</a>).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +If you ever notice that hwloc seems to discover a wrong
</span><br>
<span class="quotelev1">&gt; +or strange topology for your machine, you should first
</span><br>
<span class="quotelev1">&gt; +make sure that you are running an uptodate operating
</span><br>
<span class="quotelev1">&gt; +system.
</span><br>
<span class="quotelev1">&gt; +Indeed, most of hwloc topology discovery relies on hardware
</span><br>
<span class="quotelev1">&gt; +information retrieved through the operation system, for
</span><br>
<span class="quotelev1">&gt; +instance in the /sys virtual filesystem of the Linux kernel.
</span><br>
<span class="quotelev1">&gt; +If upgrading your OS or Linux kernel does not solve your
</span><br>
<span class="quotelev1">&gt; +problem, upgrading the BIOS may also help in some cases.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  \htmlonly
</span><br>
<span class="quotelev1">&gt;  &lt;/div&gt;&lt;div class=&quot;section&quot; id=&quot;credits&quot;&gt;
</span><br>
<span class="quotelev1">&gt;  \endhtmlonly
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0936.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2020)"</a>
<li><strong>Previous message:</strong> <a href="0934.php">Jeff Squyres: "Re: [hwloc-devel] 1.0rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0937.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
<li><strong>Reply:</strong> <a href="0937.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
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
