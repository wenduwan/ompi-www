<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 13 15:27:16 2005" -->
<!-- isoreceived="20050913202716" -->
<!-- sent="Tue, 13 Sep 2005 14:27:09 -0600" -->
<!-- isosent="20050913202709" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  OMPI compile failing" -->
<!-- id="4F9C6DEE-CF5C-4546-8016-1C3E8D441046_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="864E37DB-D8F0-44C2-A1CB-087B17C9EB54_at_cs.utk.edu" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-13 15:27:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0343.php">Ralph H. Castain: "Startup/shutdown performance"</a>
<li><strong>Previous message:</strong> <a href="0341.php">Galen M. Shipman: "Re:  OMPI compile failing"</a>
<li><strong>In reply to:</strong> <a href="0340.php">George Bosilca: "Re:  OMPI compile failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0341.php">Galen M. Shipman: "Re:  OMPI compile failing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks george, I didn't get a chance to test this from yesterday's  
<br>
merge, I will do so and commit any other needed changes..
<br>
<p><p>On Sep 13, 2005, at 2:18 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Please update again (rev 7352). I run on the same problems yesterday
</span><br>
<span class="quotelev1">&gt; when I compile on thor, but I didn't commit as I was thinking that
</span><br>
<span class="quotelev1">&gt; I'm the only one still using GM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW I think the correct option to not compile GM is --without-gm at
</span><br>
<span class="quotelev1">&gt; configure time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 13, 2005, at 4:07 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying this on sparkplug.  I have no real desire to use GM, so
</span><br>
<span class="quotelev2">&gt;&gt; if it
</span><br>
<span class="quotelev2">&gt;&gt; can be disabled then that'd be great.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Nathan
</span><br>
<span class="quotelev2">&gt;&gt; Correspondence
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Tools Team
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Environments
</span><br>
<span class="quotelev2">&gt;&gt; phone: 505-667-3428
</span><br>
<span class="quotelev2">&gt;&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim S. Woodall wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan - What machine are you on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Galen - have you tried GM w/ your changes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Compiling I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../../../../include -I../../../../include -I../../../..
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../../../.. -I../../../../include -I../../../../opal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../../../../orte -I../../../../ompi -g -Wall -Wundef -Wno-long-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; long
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -pedantic -Werror-implicit-function-declaration -fno-strict-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; aliasing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -MT btl_gm.lo -MD -MP -MF .deps/btl_gm.Tpo -c btl_gm.c  -fPIC -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; DPIC -o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .libs/btl_gm.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_gm.c: In function `mca_btl_gm_prepare_src':
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_gm.c:237: error: `gm_btl' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_gm.c:237: error: (Each undeclared identifier is reported
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; only once
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_gm.c:237: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_gm.c: In function `mca_btl_gm_prepare_dst':
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_gm.c:398: warning: ISO C89 forbids mixed declarations and code
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_gm.c:404: error: structure has no member named `mpoo_retain'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_gm.c:381: warning: unused variable `gm_btl'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[4]: *** [btl_gm.lo] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[4]: Leaving directory `/home/ndebard/ompi/ompi/mca/btl/gm'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory `/home/ndebard/ompi/ompi/dynamic-mca/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/ndebard/ompi/ompi/dynamic-mca'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/ndebard/ompi/ompi'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've configured using the option I thought to disable this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --enable-mca-no-build=ptl-gm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I even tried --enable-mca-no-build=btl-gm.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No luck.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
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
<li><strong>Next message:</strong> <a href="0343.php">Ralph H. Castain: "Startup/shutdown performance"</a>
<li><strong>Previous message:</strong> <a href="0341.php">Galen M. Shipman: "Re:  OMPI compile failing"</a>
<li><strong>In reply to:</strong> <a href="0340.php">George Bosilca: "Re:  OMPI compile failing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0341.php">Galen M. Shipman: "Re:  OMPI compile failing"</a>
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
