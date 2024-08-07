<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 11:56:42 2012" -->
<!-- isoreceived="20121119165642" -->
<!-- sent="Mon, 19 Nov 2012 18:56:18 +0200" -->
<!-- isosent="20121119165618" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYfAaeQOt_3xn3xvUsVVkSCxHSg-q8-r03ubCCNov+akEw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="063C287F-9A4A-4BC5-A452-8571E154B476_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 11:56:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11808.php">Nathan Hjelm: "[OMPI devel] RFC: make mca_base_param_deregister actually work"</a>
<li><strong>Previous message:</strong> <a href="11806.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11806.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11819.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11819.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov 19, 2012 at 6:51 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Nov 19, 2012, at 11:47 AM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. the warnings are disabled for buffer types of (char*) or (void*)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that disabling warnings for char* might make sense.  But
</span><br>
<span class="quotelev2">&gt;&gt; during the LLVM developer meeting I talked with Hal Finkel (MPICH2
</span><br>
<span class="quotelev2">&gt;&gt; developer) about this.  These annotations are already integrated into
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2.  Hal said that he found real bugs with these warnings
</span><br>
<span class="quotelev2">&gt;&gt; involving char* buffers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it really not an option for the codebase in question to build with
</span><br>
<span class="quotelev2">&gt;&gt; -D... or -Wno-...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is pedantic, but I can still side with: it's valid MPI (and those who do it usually do it for a reason), so we shouldn't warn about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about a phased implementation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3a. Have an option to *also* warn about (char*) mismatches?
</span><br>
<span class="quotelev1">&gt; 3b. Over time (perhaps in coordination with MPICH?), and polling once this initial implementation has been out in the world for a while: if user want, we can change the default to warn about (char*) mismatches by default
</span><br>
<p>We can move warnings for char* to a separate warning group,
<br>
-Wtype-safety-char-ptr and make it off by default.
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11808.php">Nathan Hjelm: "[OMPI devel] RFC: make mca_base_param_deregister actually work"</a>
<li><strong>Previous message:</strong> <a href="11806.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11806.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11819.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11819.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
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
