<?
$subject_val = "Re: [OMPI devel] Q: project based MCA param files";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 14:44:17 2013" -->
<!-- isoreceived="20130507184417" -->
<!-- sent="Tue, 7 May 2013 14:44:13 -0400 (EDT)" -->
<!-- isosent="20130507184413" -->
<!-- name="Thomas Naughton" -->
<!-- email="naughtont_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Q: project based MCA param files" -->
<!-- id="alpine.OSX.2.01.1305071438270.5512_at_tigger.ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D4EAD57A-19A6-42A3-B75B-E8B879DAFC5B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Q: project based MCA param files<br>
<strong>From:</strong> Thomas Naughton (<em>naughtont_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 14:44:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Q: project based MCA param files"</a>
<li><strong>Previous message:</strong> <a href="12372.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3593: btl_openib: change SRQ defaults"</a>
<li><strong>In reply to:</strong> <a href="12368.php">Ralph Castain: "Re: [OMPI devel] Q: project based MCA param files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Q: project based MCA param files"</a>
<li><strong>Reply:</strong> <a href="12374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Q: project based MCA param files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Ok, looks like this may just do the trick.  We briefly discussed this today
<br>
and probably can change our use case to make use of this mechanism instead
<br>
and avoid any further enhancments.
<br>
<p>&nbsp;&nbsp;Question: If you do a setenv for this MCA param, does that extend the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default search path?  Or does it replace/override the default?
<br>
<p>Thanks Jeff for forwarding info to devel list to get broader feedback, and
<br>
to Ralph for providing the suggestion.
<br>
<p>--tjn
<br>
<p>&nbsp;&nbsp;_________________________________________________________________________
<br>
&nbsp;&nbsp;&nbsp;Thomas Naughton                                      naughtont_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;Research Associate                                   (865) 576-4184
<br>
<p><p>On Tue, 7 May 2013, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I believe we already have a way of defining where to get the default mca params:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ret = mca_base_var_register (&quot;opal&quot;, &quot;mca&quot;, &quot;base&quot;, &quot;param_files&quot;, &quot;Path for MCA &quot;
</span><br>
<span class="quotelev1">&gt;                                 &quot;configuration files containing variable values&quot;,
</span><br>
<span class="quotelev1">&gt;                                 MCA_BASE_VAR_TYPE_STRING, NULL, 0, 0, OPAL_INFO_LVL_2,
</span><br>
<span class="quotelev1">&gt;                                 MCA_BASE_VAR_SCOPE_READONLY, &amp;mca_base_var_files);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So wouldn't it be as easy as defining an envar? It's what we did when using the OMPI code with ORCM a couple of years ago, and we used it again for a recent project in Greenplum where the default mca param was specified in a different location than usual.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2013, at 6:28 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Given Ralph's questions about r<a href="https://svn.open-mpi.org/trac/ompi/changeset/28456">https://svn.open-mpi.org/trac/ompi/changeset/28456</a>, ORNL's second question to me/Nathan about MCA params is probably worth forwarding to the list -- see below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thoughts on this proposal?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: &quot;Boehm, Swen&quot; &lt;bohms_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: Q: project based MCA param files
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: May 3, 2013 5:03:43 PM EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;, &quot;Vallee, Geoffroy R.&quot; &lt;valleegr_at_[hidden]&gt;, &quot;Naughton III, Thomas J.&quot; &lt;naughtont_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is a short description of the enhancement we would like to contribute.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let us know what you think.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The purpose of the suggested improvements is to enable &quot;projects&quot; to read
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA parameters from project specific locations. This enables the usage
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of OPAL and the MCA Frameworks outside the OpenMPI project without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interfering with OpenMPI specific parameters and removes the need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patch OPAL (e.g., to pick up params from different locations).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The possible scenarios would be the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a) adding the option to pick up a project specific mca-param.conf file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           $HOME/.mca/${project}-mca-param.conf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   and     /etc/mca/${project}-mca-param.conf)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b) add the option to pick up the mca-param.conf file from a project specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           $HOME/.${project}/mca-param.conf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   and     /etc/${project}/mca-param.conf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   and/or  /etc/${project}/${project}-mca-param.conf)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c) prefixing the mca param with the project name in the existing mca-param.conf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  file and therefore following the new MCA variable system naming scheme.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           mca_${project}_${framework}_${component}_${var_name}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The implementation has to be compatible with the current system, that is,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it should work as it does today without any added burden to the user. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggested approach is to provide an addition to the MCA API (something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_add_config_file_path ()) to add lookup paths to the MCA system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This way additional files can be picked up for the MCA param parsing if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To wrap it up:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) Is the motivation clear?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) Is it possible to implement the desired capability within a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   reasonable time and without changing the current behavior?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) Does it line up with the planning / future capabilities?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) Which of the above options (A, B, C) would you prefer?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Swen Boehm                                      | Email: bohms_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory      | Phone: +1 865-576-6125
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 26, 2013, at 7:50 PM, Thomas Naughton &lt;naughtont_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ok, sounds good. We'll check on this next week and get back to you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --tjn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _________________________________________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Research Associate                                   (865) 576-4184
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, 26 Apr 2013, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Email would probably be easiest -- I will need to page in/refresh this area of the code, anyway, so if you guys do the initial homework and submit some ideas, that would probably be easiest (For me).  :-D
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 26, 2013, at 6:33 PM, Thomas Naughton &lt;naughtont_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We don't have one yet but we can code something up and submit a patch.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If useful we could quickly sync up beforehand to ensure we are on the same page.   Phone or email, whatever would be easiest.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What do you think?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --tjn
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _________________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Research Associate                                   (865) 576-4184
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Fri, 26 Apr 2013, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm not aware of any plans to do this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you guys have a patch to submit, perchance?  :-D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 22, 2013, at 6:30 PM, Thomas Naughton &lt;naughtont_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Nathan &amp; Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You guys have done some MCA updates lately and we were curious if there are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; any plans or thoughts about an enhancement regarding MCA param files.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Briefly speaking, we were curious if there were plans for either having
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; project specific MCA param files, or having a generic mca param file that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; would use the projects as part of the namespace.  I think an example would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; help clarify.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We currently change things to have &quot;$HOME/.stci/mca-params.conf&quot;.  This is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pretty much the only remaining modification we have for OPAL after recent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; updates.  If there was a way to have something like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;$HOME/.${project}/mca-params.conf&quot;, or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;$HOME/.mca/${project}-mca-params.conf&quot;, it would remove this remaining customization we do to OPAL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This sort of thing seems like it could be a useful if OPAL became
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; stand-alone in the future -- it seems like you guys might be moving that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; way?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We didn't know if you guys had plans for anything related to this and/or if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you'd be receptive to changes to support something along this line.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We would be very interested to get your comments/thoughts.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --tjn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _________________________________________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Research Associate                                   (865) 576-4184
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Q: project based MCA param files"</a>
<li><strong>Previous message:</strong> <a href="12372.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3593: btl_openib: change SRQ defaults"</a>
<li><strong>In reply to:</strong> <a href="12368.php">Ralph Castain: "Re: [OMPI devel] Q: project based MCA param files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Q: project based MCA param files"</a>
<li><strong>Reply:</strong> <a href="12374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Q: project based MCA param files"</a>
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
