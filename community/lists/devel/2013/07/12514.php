<?
$subject_val = "Re: [OMPI devel] aclocal-1.14:	error:	../../config/autogen_found_items.m4:274:	file	'opal/mca/backtrace/configure.m4' does not exist";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 11:55:57 2013" -->
<!-- isoreceived="20130701155557" -->
<!-- sent="Mon, 1 Jul 2013 15:55:52 +0000" -->
<!-- isosent="20130701155552" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] aclocal-1.14:	error:	../../config/autogen_found_items.m4:274:	file	'opal/mca/backtrace/configure.m4' does not exist" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6C98D8_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A1AC333B9_at_MTIDAG02.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] aclocal-1.14:	error:	../../config/autogen_found_items.m4:274:	file	'opal/mca/backtrace/configure.m4' does not exist<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 11:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12515.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Previous message:</strong> <a href="12513.php">Joshua Ladd: "Re: [OMPI devel] aclocal-1.14: error:	../../config/autogen_found_items.m4:274: file	'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>In reply to:</strong> <a href="12513.php">Joshua Ladd: "Re: [OMPI devel] aclocal-1.14: error:	../../config/autogen_found_items.m4:274: file	'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12515.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That has happened to me periodically; I've usually been able to cd into the SVN dir and &quot;svn up&quot; to complete the checkout.
<br>
<p><p>On Jul 1, 2013, at 11:52 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think we (MLNX) are getting corrupted/truncated checkouts. Lately, I have been running into the following error on our internal systems when doing a secure checkout:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; svn co <a href="https://svn.open-mpi.org/svn/ompi/trunk">https://svn.open-mpi.org/svn/ompi/trunk</a> ompi-trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; svn: E175002: REPORT of '/svn/ompi/!svn/vcc/default': Could not read response body: Secure connection truncated (<a href="https://svn.open-mpi.org">https://svn.open-mpi.org</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Googling around, seems like a problem with our SVN server timing out. Has anyone in the community seen this before?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This truncation occurs at random spots. Sometimes you get enough to autogen, sometimes not. Bottom line, seems like a busted SVN checkout as Ralph mentioned. I just pulled the trunk from:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi-trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and was able to autogen, configure, make, make install with no problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, July 01, 2013 10:58 AM
</span><br>
<span class="quotelev1">&gt; To: Vasiliy
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm...well, I'm not sure what I can do to help. I have to agree with Jeff that something has gotten really messed up in your checkout or system. You might check to ensure you are picking up the right autotools, and perhaps re-checkout the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All I can tell you is that it is building just fine on both my Mac and Linux boxes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 1, 2013, at 7:41 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Ralph, I believe I have run autogen.pl after a fresh full 
</span><br>
<span class="quotelev2">&gt;&gt; checkout, and not yet after an update:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI autogen (buckle up!)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Checking tool versions
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Searching for autoconf
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stripped&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; - from my log
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How ../../config/autogen_found_items.m4:274 is supposed to find 
</span><br>
<span class="quotelev2">&gt;&gt; 'opal/mca/backtrace/configure.m4' if it operates in 'opal/libltdl' ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Vasiliy
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 1, 2013 at 4:07 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or you might try rerunning autogen.pl in case you updated and didn't 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; catch that something requiring autogen changed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 1, 2013, at 7:02 AM, &quot;Jeff Squyres (jsquyres)&quot; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sounds like you have a busted SVN checkout -- that file exists for me:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [10:02] jsquyres-mac:~/s/ompi3 &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; svnversion .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 28688
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [10:02] jsquyres-mac:~/s/ompi3 &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; svn info 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/mca/backtrace/configure.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Path: opal/mca/backtrace/configure.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Name: configure.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Working Copy Root Path: /Users/jsquyres/dev/svn/ompi3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/svn/ompi/trunk/opal/mca/backtrace/configure">https://svn.open-mpi.org/svn/ompi/trunk/opal/mca/backtrace/configure</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .m4 Repository Root: <a href="https://svn.open-mpi.org/svn/ompi">https://svn.open-mpi.org/svn/ompi</a> Repository 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Revision: 28688
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Node Kind: file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Schedule: normal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Last Changed Author: rhc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Last Changed Rev: 23764
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Last Changed Date: 2010-09-17 19:04:06 -0400 (Fri, 17 Sep 2010) Text 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Last Updated: 2013-05-24 11:39:52 -0400 (Fri, 24 May 2013)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Checksum: a6d3741b6c9ab47daf2a6af6c812c148f91793a2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 1, 2013, at 9:58 AM, Vasiliy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There is an error while configuring OpenMPI from the svn checkout 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with aclocal not being able to find 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 'opal/mca/backtrace/configure.m4',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which, in fact, does exist there. What changes are needed to fix that?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Note: it has stepped in the 'opal/libltdl' directory just before that error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** GNU libltdl setup
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking location of libltdl... internal copy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configure: running /bin/sh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl/configure'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '--prefix=/usr' '--exec-prefix=/usr' '--bindir=/usr/bin'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '--sbindir=/usr/sbin' '--libexecdir=/usr/lib' '--datadir=/usr/share'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '--localstatedir=/var' '--sysconfdir=/etc' '--datarootdir=/usr/share'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '--docdir=/usr/share/doc/openmpi' 'LDFLAGS=-Wl,--export-all-symbols 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Wl,-no-undefined' '--disable-mca-dso' '--disable-sysv-shmem'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '--without-udapl' '--enable-cxx-exceptions' '--with-threads=posix'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '--without-cs-fs' '--enable-heterogeneous'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '--with-mpi-param_check=always'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '--enable-contrib-no-build=vt,libompitrace'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 'CC=gcc' 'CFLAGS=-ggdb -march=native -mtune=native -Ofast 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fomit-frame-pointer -pipe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; build=/usr/src/debug/openmpi-1.9.0-a1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 'LIBS=' 'CPPFLAGS=' 'CXX=g++' 'CXXFLAGS=-ggdb -march=native 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mtune=native -Ofast -fomit-frame-pointer -pipe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; build=/usr/src/debug/openmpi-1.9.0-a1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 'FC=gfortran' 'FCFLAGS=-ggdb -march=native -mtune=native -Ofast 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fomit-frame-pointer -pipe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; build=/usr/src/debug/openmpi-1.9.0-a1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --enable-ltdl-convenience --disable-ltdl-install --enable-shared 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --disable-static --cache-file=/dev/null 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --srcdir=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i-1.9.0/opal/libltdl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --disable-option-checking
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking for a BSD-compatible install... /usr/bin/install -c 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;stripped&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** Final output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking that generated files are newer than configure... done 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;stripped&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; config.status: executing libtool commands Making all in config
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/config'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/config'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Making all in contrib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/contrib'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/contrib'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Making all in opal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Making all in include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make  all-am
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Making all in libltdl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/libltdl'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pal/libltdl &amp;&amp; /bin/sh 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; onfig/missing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; aclocal-1.14 -I ../../config
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 'opal/mca/backtrace/configure.m4' does not exist
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Makefile:527: recipe for target
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl/aclocal.m4'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: *** 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal/libltdl/aclocal.m4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/libltdl'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Makefile:2070: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Makefile:1578: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** ERROR: make failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12515.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Previous message:</strong> <a href="12513.php">Joshua Ladd: "Re: [OMPI devel] aclocal-1.14: error:	../../config/autogen_found_items.m4:274: file	'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>In reply to:</strong> <a href="12513.php">Joshua Ladd: "Re: [OMPI devel] aclocal-1.14: error:	../../config/autogen_found_items.m4:274: file	'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12515.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
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
