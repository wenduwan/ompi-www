<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 10:53:46 2013" -->
<!-- isoreceived="20130718145346" -->
<!-- sent="Thu, 18 Jul 2013 07:53:35 -0700" -->
<!-- isosent="20130718145335" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="5CB9A216-CC8E-497D-A65C-6D521183216E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8E25A938F00ED34D90F8C49322FDF1928C0CF8_at_xmb-rcd-x09.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_info<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 10:53:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12649.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12647.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12646.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12649.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12649.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12651.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 18, 2013, at 7:05 AM, David Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 18, 2013, at 8:06 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's a good point, and a bad behavior. IIRC, it results from the MPI Forum's adoption of the MPI-T requirement that stipulates we must allow access to all control and performance variables at startup so they can be externally seen/manipulated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Minor nit: MPI_T does not require this.  However, it does recommend that you offer users access to as many variables as possible as early as reasonably possible for the convenience and control of the user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If an implementation chooses to offer 5% of the possible control/performance variables to the user just before MPI_Finalize, that's still a valid MPI_T implementation.  But it may not be a very useful one...
</span><br>
<p>The problem here is one of use vs startup performance. George is quite correct with his concerns - this behavior would have been a serious problem for RoadRunner, for example, where we had a small IO channel feeding a lot of nodes. It will definitely become an issue at exascale where IO bandwidth and memory will be at a premium.
<br>
<p>This is especially troubling when you consider how few people will ever use this capability. Perhaps we should offer a switch that says &quot;I want access to MPI-T&quot; so that the rest of the world isn't hammered by this kind of behavior?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12649.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12647.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12646.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12649.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12649.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12651.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
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
