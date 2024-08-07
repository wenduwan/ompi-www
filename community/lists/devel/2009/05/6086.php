<?
$subject_val = "Re: [OMPI devel] RFC: Diagnostoc framework for MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 08:15:19 2009" -->
<!-- isoreceived="20090526121519" -->
<!-- sent="Tue, 26 May 2009 14:11:33 +0200" -->
<!-- isosent="20090526121133" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Diagnostoc framework for MPI" -->
<!-- id="1243339893.2634.20.camel_at_frecb000730.frec.bull.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="71d2d8cc0905260435te174800id04320bf49574eb1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Diagnostoc framework for MPI<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 08:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6087.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6085.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="6084.php">Ralph Castain: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6096.php">Eugene Loh: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-05-26 at 05:35 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We actually have a framework in the system for this purpose, though it
</span><br>
<span class="quotelev1">&gt; might require some minor modifications to do precisely what you
</span><br>
<span class="quotelev1">&gt; describe. It is the ORTE &quot;notifier&quot; framework - you will find it at
</span><br>
<span class="quotelev1">&gt; orte/mca/notifier. There are several components, each of which
</span><br>
<span class="quotelev1">&gt; supports a different notification mechanism (e.g., message into the
</span><br>
<span class="quotelev1">&gt; sys log, smtp, and even &quot;twitter&quot;).
</span><br>
<p>Ralph,
<br>
<p>Thanks a lot for your detailed answer. I'll have a look at the notifier
<br>
framework to see if it could serve our purpose. Actually, form what you
<br>
describe, looks like it does.
<br>
<p>Regards,
<br>
Nadia
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The system works by adding orte_notifier calls to the OMPI code
</span><br>
<span class="quotelev1">&gt; wherever we deem it advisable to alert someone. For example, if we
</span><br>
<span class="quotelev1">&gt; think a sys admin might want to be alerted when the number of IB send
</span><br>
<span class="quotelev1">&gt; retries exceeds some limit, we add a call to orte_notifier to the IB
</span><br>
<span class="quotelev1">&gt; code with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (#retries &gt; threshold) {
</span><br>
<span class="quotelev1">&gt;     orte_notifier.xxx(....);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe we could easily extend this to support your proposed
</span><br>
<span class="quotelev1">&gt; functionality. A couple of possibilities that immediately spring to
</span><br>
<span class="quotelev1">&gt; mind would be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. you could create a new component (or we could modify the existing
</span><br>
<span class="quotelev1">&gt; ones) that tracks how many times it is called for a given error, and
</span><br>
<span class="quotelev1">&gt; only actually issues a notification for that specific error when the
</span><br>
<span class="quotelev1">&gt; count exceeds a threshold. The negative to this approach is that the
</span><br>
<span class="quotelev1">&gt; threshold would be uniform across all errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. we could extend the current notifier APIs to add a threshold count
</span><br>
<span class="quotelev1">&gt; upon which the notification is to be sent, perhaps creating a new
</span><br>
<span class="quotelev1">&gt; macro ORTE_NOTIFIER_VERBOSE that takes the threshold as one of its
</span><br>
<span class="quotelev1">&gt; arguments. We could then let each OMPI framework have a new
</span><br>
<span class="quotelev1">&gt; &quot;threshold&quot; MCA param, thus allowing the sys admins to &quot;tune&quot; the
</span><br>
<span class="quotelev1">&gt; frequency of error reporting by framework. Of course, we could let
</span><br>
<span class="quotelev1">&gt; them get as detailed here as you want - they could even have
</span><br>
<span class="quotelev1">&gt; &quot;threshold&quot; params for each component, function, or whatever. This
</span><br>
<span class="quotelev1">&gt; would be combined with #1 above to alert only when the count exceeded
</span><br>
<span class="quotelev1">&gt; the threshold for that specific error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sure you and others will come up with additional (probably better)
</span><br>
<span class="quotelev1">&gt; ways of implementing this extension. My point here was simply to
</span><br>
<span class="quotelev1">&gt; ensure you knew that the basic mechanism already exists, and to
</span><br>
<span class="quotelev1">&gt; stimulate some thought as to how to use it for your proposed purpose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be happy to help you do so as this is something we (LANL) have
</span><br>
<span class="quotelev1">&gt; put at a high priority - our sys admins on the large clusters really
</span><br>
<span class="quotelev1">&gt; need the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, May 25, 2009 at 11:33 PM, Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         What: Warn the administrator when unusual events are occurring
</span><br>
<span class="quotelev1">&gt;         too
</span><br>
<span class="quotelev1">&gt;         frequently.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Why: Such unusual events might be the symptom of some problem
</span><br>
<span class="quotelev1">&gt;         that can
</span><br>
<span class="quotelev1">&gt;         easily be fixed (by a better tuning, for example)
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Where: Adds a new ompi framework
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Description:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         The objective of the Open MPI library is to make applications
</span><br>
<span class="quotelev1">&gt;         run to
</span><br>
<span class="quotelev1">&gt;         completion, given that no fatal error is encountered.
</span><br>
<span class="quotelev1">&gt;         In some situations, unusual events may occur. Since these
</span><br>
<span class="quotelev1">&gt;         events are not
</span><br>
<span class="quotelev1">&gt;         considered to be fatal enough, the library arbitrarily chooses
</span><br>
<span class="quotelev1">&gt;         to bypass
</span><br>
<span class="quotelev1">&gt;         them using a software mechanism, instead of actually stopping
</span><br>
<span class="quotelev1">&gt;         the
</span><br>
<span class="quotelev1">&gt;         application. But even though this choice helps in completing
</span><br>
<span class="quotelev1">&gt;         the
</span><br>
<span class="quotelev1">&gt;         application, it may frequently result in significant
</span><br>
<span class="quotelev1">&gt;         performance
</span><br>
<span class="quotelev1">&gt;         degradation. This is not an issue if such &#226;&#128;&#156;unusual events&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt;         don't occur
</span><br>
<span class="quotelev1">&gt;         too frequently. But if they actually do, that might be
</span><br>
<span class="quotelev1">&gt;         representative of
</span><br>
<span class="quotelev1">&gt;         a real problem that could sometimes be easily avoided.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         For example, when mca_pml_ob1_send_request_start() starts a
</span><br>
<span class="quotelev1">&gt;         send request
</span><br>
<span class="quotelev1">&gt;         and faces a resource shortage, it silently calls
</span><br>
<span class="quotelev1">&gt;         add_request_to_send_pending() to queue that send request into
</span><br>
<span class="quotelev1">&gt;         the list
</span><br>
<span class="quotelev1">&gt;         of pending send requests in order to process it later on. If
</span><br>
<span class="quotelev1">&gt;         an adapting
</span><br>
<span class="quotelev1">&gt;         mechanism is not provided at runtime to increase the receive
</span><br>
<span class="quotelev1">&gt;         queue
</span><br>
<span class="quotelev1">&gt;         length, at least a message can be sent to the administrator to
</span><br>
<span class="quotelev1">&gt;         let him
</span><br>
<span class="quotelev1">&gt;         do the tuning by hand before the next run.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         We had a look at other tracing utilities (like PMPI, PERUSE,
</span><br>
<span class="quotelev1">&gt;         VT), but
</span><br>
<span class="quotelev1">&gt;         found them either too high level or too intrusive at the
</span><br>
<span class="quotelev1">&gt;         application
</span><br>
<span class="quotelev1">&gt;         level.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         The &#226;&#128;&#156;diagnostic framework&#226;&#128;&#157; we'd like to propose would help
</span><br>
<span class="quotelev1">&gt;         capturing
</span><br>
<span class="quotelev1">&gt;         such &#226;&#128;&#156;unusual events&#226;&#128;&#157; and tracing them, while having a very
</span><br>
<span class="quotelev1">&gt;         low impact
</span><br>
<span class="quotelev1">&gt;         on the performances. This is obtained by defining tracing
</span><br>
<span class="quotelev1">&gt;         routines that
</span><br>
<span class="quotelev1">&gt;         can be called from the ompi code. The collected events are
</span><br>
<span class="quotelev1">&gt;         aggregated
</span><br>
<span class="quotelev1">&gt;         per MPI process and only traced if a threshold has been
</span><br>
<span class="quotelev1">&gt;         reached. Another
</span><br>
<span class="quotelev1">&gt;         threshold (time threshold) can be used to condition subsequent
</span><br>
<span class="quotelev1">&gt;         traces
</span><br>
<span class="quotelev1">&gt;         generation for an already traced event.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         This is obtained by defining 2 mca parameters and a rule:
</span><br>
<span class="quotelev1">&gt;         . the count threshold C
</span><br>
<span class="quotelev1">&gt;         . the time delay T
</span><br>
<span class="quotelev1">&gt;         The rule is: an event will only be traced if it happened N
</span><br>
<span class="quotelev1">&gt;         times, and it
</span><br>
<span class="quotelev1">&gt;         won't be traced more than once every T seconds.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Thus, events happening at a very low rate will never generate
</span><br>
<span class="quotelev1">&gt;         a trace
</span><br>
<span class="quotelev1">&gt;         except one at MPI_Finalize summarizing:
</span><br>
<span class="quotelev1">&gt;         [time] At finalize : 23 times : pre-allocated buffers all
</span><br>
<span class="quotelev1">&gt;         full, calling
</span><br>
<span class="quotelev1">&gt;         malloc
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Those happening &quot;a little too much&quot; will sometimes generate a
</span><br>
<span class="quotelev1">&gt;         trace
</span><br>
<span class="quotelev1">&gt;         saying something like:
</span><br>
<span class="quotelev1">&gt;         [time] 1000 warnings : could not send in openib now, delaying
</span><br>
<span class="quotelev1">&gt;         [time+12345 sec] 1000 warnings : could not send in openib now,
</span><br>
<span class="quotelev1">&gt;         delaying
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         And events occurring at a high frequency will only generate a
</span><br>
<span class="quotelev1">&gt;         message
</span><br>
<span class="quotelev1">&gt;         every T seconds saying:
</span><br>
<span class="quotelev1">&gt;         [time]     1000 warnings : adding buffers in the SRQ
</span><br>
<span class="quotelev1">&gt;         [time+T]   1,234,567 warnings (in T seconds) : adding buffers
</span><br>
<span class="quotelev1">&gt;         in the SRQ
</span><br>
<span class="quotelev1">&gt;         [time+2*T] 2,345,678 warnings (in T seconds) : adding buffers
</span><br>
<span class="quotelev1">&gt;         in the SRQ
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         The count threshold and time delay are defined per event.
</span><br>
<span class="quotelev1">&gt;         They can also be defined as MCA parameters. In that case, the
</span><br>
<span class="quotelev1">&gt;         mca
</span><br>
<span class="quotelev1">&gt;         parameter value overrides the per event values.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         The following information are traced too:
</span><br>
<span class="quotelev1">&gt;          . job family
</span><br>
<span class="quotelev1">&gt;          . the local job id
</span><br>
<span class="quotelev1">&gt;          . the job vpid
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Another aspect of performance savings is that a mechanism ala
</span><br>
<span class="quotelev1">&gt;         show_help() can be used in order to let the HNP actually do
</span><br>
<span class="quotelev1">&gt;         the job.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         We started the implementation of this feature, so patches are
</span><br>
<span class="quotelev1">&gt;         available if
</span><br>
<span class="quotelev1">&gt;         needed. We are currently trying to setup hgweb on an external
</span><br>
<span class="quotelev1">&gt;         server.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Since I'm an Open MPI newbie, I'm submitting this RFC to have
</span><br>
<span class="quotelev1">&gt;         your
</span><br>
<span class="quotelev1">&gt;         opinion about its usefulness, or even to know if there's an
</span><br>
<span class="quotelev1">&gt;         already
</span><br>
<span class="quotelev1">&gt;         existing mechanism to do this job.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Regards,
</span><br>
<span class="quotelev1">&gt;         Nadia
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6087.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6085.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="6084.php">Ralph Castain: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6096.php">Eugene Loh: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
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
