<?
$subject_val = "Re: [OMPI devel] Duplicated modex issue.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 10:11:20 2012" -->
<!-- isoreceived="20121221151120" -->
<!-- sent="Fri, 21 Dec 2012 07:11:13 -0800" -->
<!-- isosent="20121221151113" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Duplicated modex issue." -->
<!-- id="A575C7A4-A26D-4BE4-B90B-A52103B7C2B3_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMv3GsfJh9VB_fadqo7=Q7-8Xvdo5aMeAv_NQc6qXreWtpnH8Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Duplicated modex issue.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-21 10:11:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11868.php">marco atzeri: "[OMPI devel] openmpi-1.9a1r27710 on cygwin: patch and questions"</a>
<li><strong>Previous message:</strong> <a href="11866.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>In reply to:</strong> <a href="11866.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11869.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Reply:</strong> <a href="11869.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't know how many times I can repeat it, but I'll try again: you are not allowed to reuse a collective id. If it happens to work, it's by accident.
<br>
<p>If you want to implement multiple modex/barrier operations, they each need to have their own unique collective id.
<br>
<p><p>On Dec 20, 2012, at 9:28 PM, Victor Kocheganov &lt;victor.kocheganov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Actually, if I reuse id's in equivalent calls like this:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 'modex' block;
</span><br>
<span class="quotelev1">&gt; 'modex' block;
</span><br>
<span class="quotelev1">&gt; 'modex' block;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; or 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 'barrier' block;
</span><br>
<span class="quotelev1">&gt; 'barrier' block;
</span><br>
<span class="quotelev1">&gt; 'barrier' block;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; there is no hanging. The hang only occurs if this &quot;reusing&quot; follows after using of another collective id, In the way I wrote in the first letter:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 'modex' block;
</span><br>
<span class="quotelev1">&gt; 'barrier' block;
</span><br>
<span class="quotelev1">&gt; 'modex' block; &lt;- hangs
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; or in this way
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 'barrier' block;
</span><br>
<span class="quotelev1">&gt; 'modex' block;
</span><br>
<span class="quotelev1">&gt; 'barrier' block; &lt;- hangs
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use different collective id while calling modex (1, 2 , ... , but not  0==orte_process_info.peer_modex), that also won't work, unfortunately..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 20, 2012 at 10:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yeah, that won't work. The id's cannot be reused, so you'd have to assign a different one in each case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2012, at 9:12 AM, Victor Kocheganov &lt;victor.kocheganov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In every 'modex' block I use  coll-&gt;id = orte_process_info.peer_modex;  id and in every 'barrier' block I use  coll-&gt;id = orte_process_info.peer_init_barrier;  id. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.s. In general (as I wrote in first letter), I use 'modex' term for following code:
</span><br>
<span class="quotelev2">&gt;&gt;     coll = OBJ_NEW(orte_grpcomm_collective_t);
</span><br>
<span class="quotelev2">&gt;&gt;     coll-&gt;id = orte_process_info.peer_modex;
</span><br>
<span class="quotelev2">&gt;&gt;     if (ORTE_SUCCESS != (ret = orte_grpcomm.modex(coll))) {
</span><br>
<span class="quotelev2">&gt;&gt;         error = &quot;orte_grpcomm_modex failed&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;         goto error;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     /* wait for modex to complete - this may be moved anywhere in mpi_init
</span><br>
<span class="quotelev2">&gt;&gt;      * so long as it occurs prior to calling a function that needs
</span><br>
<span class="quotelev2">&gt;&gt;      * the modex info!
</span><br>
<span class="quotelev2">&gt;&gt;      */
</span><br>
<span class="quotelev2">&gt;&gt;     while (coll-&gt;active) {
</span><br>
<span class="quotelev2">&gt;&gt;         opal_progress();  /* block in progress pending events */
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     OBJ_RELEASE(coll);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and 'barrier' for this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     coll = OBJ_NEW(orte_grpcomm_collective_t);
</span><br>
<span class="quotelev2">&gt;&gt;     coll-&gt;id = orte_process_info.peer_init_barrier;
</span><br>
<span class="quotelev2">&gt;&gt;     if (ORTE_SUCCESS != (ret = orte_grpcomm.barrier(coll))) {
</span><br>
<span class="quotelev2">&gt;&gt;         error = &quot;orte_grpcomm_barrier failed&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;         goto error;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     /* wait for barrier to complete */
</span><br>
<span class="quotelev2">&gt;&gt;     while (coll-&gt;active) {
</span><br>
<span class="quotelev2">&gt;&gt;         opal_progress();  /* block in progress pending events */
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     OBJ_RELEASE(coll);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Dec 20, 2012 at 8:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 20, 2012, at 8:29 AM, Victor Kocheganov &lt;victor.kocheganov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for fast answer, Ralph.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my example I use different collective objects. I mean in every mentioned block I call  coll = OBJ_NEW(orte_grpcomm_collective_t);  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and OBJ_RELEASE(coll); , so all the grpcomm operations use unique collective object. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How are the procs getting the collective id for those new calls? They all have to match
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Dec 20, 2012 at 7:48 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Absolutely it will hang as the collective object passed into any grpcomm operation (modex or barrier) is only allowed to be used once - any attempt to reuse it will fail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 20, 2012, at 6:57 AM, Victor Kocheganov &lt;victor.kocheganov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have an issue with understanding  ompi_mpi_init() logic. Could you please tell me if you have any guesses about following behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I wonder if I understand ringh, there is a block in ompi_mpi_init() function for exchanging procs information between processes (denote this block 'modex'):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     coll = OBJ_NEW(orte_grpcomm_collective_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     coll-&gt;id = orte_process_info.peer_modex;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if (ORTE_SUCCESS != (ret = orte_grpcomm.modex(coll))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         error = &quot;orte_grpcomm_modex failed&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         goto error;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /* wait for modex to complete - this may be moved anywhere in mpi_init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      * so long as it occurs prior to calling a function that needs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      * the modex info!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     while (coll-&gt;active) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         opal_progress();  /* block in progress pending events */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     OBJ_RELEASE(coll);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and several instructions after this there is a block for processes synchronization (denote this block 'barrier'):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     coll = OBJ_NEW(orte_grpcomm_collective_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     coll-&gt;id = orte_process_info.peer_init_barrier;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if (ORTE_SUCCESS != (ret = orte_grpcomm.barrier(coll))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         error = &quot;orte_grpcomm_barrier failed&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         goto error;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /* wait for barrier to complete */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     while (coll-&gt;active) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         opal_progress();  /* block in progress pending events */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     OBJ_RELEASE(coll);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, initially ompi_mpi_init() has following structure:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'modex' block;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'barrier' block;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I made several experiments with this code and the following one is of interest: if I add sequence of two additional blocks, 'barrier' and 'modex', right after 'modex' block, then ompi_mpi_init() hangs in opal_progress() of the last 'modex' block.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'modex' block;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'barrier' block;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'modex' block; &lt;- hangs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'barrier' block;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Victor Kocheganov.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11867/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11868.php">marco atzeri: "[OMPI devel] openmpi-1.9a1r27710 on cygwin: patch and questions"</a>
<li><strong>Previous message:</strong> <a href="11866.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>In reply to:</strong> <a href="11866.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11869.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Reply:</strong> <a href="11869.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
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
