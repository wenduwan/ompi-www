<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.9.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_topology_cpubind_support Struct Reference<div class="ingroups"><a class="el" href="a00079.php">Topology Detection Configuration and Query</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00065_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:a9403d51657a4d546b3ea9553a2973a27"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00045.php#a9403d51657a4d546b3ea9553a2973a27">set_thisproc_cpubind</a></td></tr>
<tr class="separator:a9403d51657a4d546b3ea9553a2973a27"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a77a09ddd78ee3e9ff5f532a6ac74f7eb"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00045.php#a77a09ddd78ee3e9ff5f532a6ac74f7eb">get_thisproc_cpubind</a></td></tr>
<tr class="separator:a77a09ddd78ee3e9ff5f532a6ac74f7eb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa166223d1c2a6de7256ab2d8b675a87e"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00045.php#aa166223d1c2a6de7256ab2d8b675a87e">set_proc_cpubind</a></td></tr>
<tr class="separator:aa166223d1c2a6de7256ab2d8b675a87e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aae705bc447adc163ead377362c4dfe9f"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00045.php#aae705bc447adc163ead377362c4dfe9f">get_proc_cpubind</a></td></tr>
<tr class="separator:aae705bc447adc163ead377362c4dfe9f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a57a89a4b5f1f74fa6cfe176f1e8b0798"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00045.php#a57a89a4b5f1f74fa6cfe176f1e8b0798">set_thisthread_cpubind</a></td></tr>
<tr class="separator:a57a89a4b5f1f74fa6cfe176f1e8b0798"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a80d762e532d677dff262d83cc7bb1c60"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00045.php#a80d762e532d677dff262d83cc7bb1c60">get_thisthread_cpubind</a></td></tr>
<tr class="separator:a80d762e532d677dff262d83cc7bb1c60"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a46fba33e307909ce256624687799dd6d"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00045.php#a46fba33e307909ce256624687799dd6d">set_thread_cpubind</a></td></tr>
<tr class="separator:a46fba33e307909ce256624687799dd6d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8dd4d8531ed2eebdce1507e7d104154e"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00045.php#a8dd4d8531ed2eebdce1507e7d104154e">get_thread_cpubind</a></td></tr>
<tr class="separator:a8dd4d8531ed2eebdce1507e7d104154e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad2d5c94b738d92b7d2ede87e4e96321d"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00045.php#ad2d5c94b738d92b7d2ede87e4e96321d">get_thisproc_last_cpu_location</a></td></tr>
<tr class="separator:ad2d5c94b738d92b7d2ede87e4e96321d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2554620148b7992a5093f338f5ae254f"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00045.php#a2554620148b7992a5093f338f5ae254f">get_proc_last_cpu_location</a></td></tr>
<tr class="separator:a2554620148b7992a5093f338f5ae254f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6be1f042fdce6bf41b4ea39f6f193808"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00045.php#a6be1f042fdce6bf41b4ea39f6f193808">get_thisthread_last_cpu_location</a></td></tr>
<tr class="separator:a6be1f042fdce6bf41b4ea39f6f193808"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Flags describing actual PU binding support for this topology. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="aae705bc447adc163ead377362c4dfe9f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_cpubind_support::get_proc_cpubind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Getting the binding of a whole given process is supported. </p>

</div>
</div>
<a class="anchor" id="a2554620148b7992a5093f338f5ae254f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_cpubind_support::get_proc_last_cpu_location</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Getting the last processors where a whole process ran is supported </p>

</div>
</div>
<a class="anchor" id="a77a09ddd78ee3e9ff5f532a6ac74f7eb"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_cpubind_support::get_thisproc_cpubind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Getting the binding of the whole current process is supported. </p>

</div>
</div>
<a class="anchor" id="ad2d5c94b738d92b7d2ede87e4e96321d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_cpubind_support::get_thisproc_last_cpu_location</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Getting the last processors where the whole current process ran is supported </p>

</div>
</div>
<a class="anchor" id="a80d762e532d677dff262d83cc7bb1c60"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_cpubind_support::get_thisthread_cpubind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Getting the binding of the current thread only is supported. </p>

</div>
</div>
<a class="anchor" id="a6be1f042fdce6bf41b4ea39f6f193808"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_cpubind_support::get_thisthread_last_cpu_location</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Getting the last processors where the current thread ran is supported </p>

</div>
</div>
<a class="anchor" id="a8dd4d8531ed2eebdce1507e7d104154e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_cpubind_support::get_thread_cpubind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Getting the binding of a given thread only is supported. </p>

</div>
</div>
<a class="anchor" id="aa166223d1c2a6de7256ab2d8b675a87e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_cpubind_support::set_proc_cpubind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Binding a whole given process is supported. </p>

</div>
</div>
<a class="anchor" id="a9403d51657a4d546b3ea9553a2973a27"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_cpubind_support::set_thisproc_cpubind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Binding the whole current process is supported. </p>

</div>
</div>
<a class="anchor" id="a57a89a4b5f1f74fa6cfe176f1e8b0798"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_cpubind_support::set_thisthread_cpubind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Binding the current thread only is supported. </p>

</div>
</div>
<a class="anchor" id="a46fba33e307909ce256624687799dd6d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_topology_cpubind_support::set_thread_cpubind</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Binding a given thread only is supported. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00065_source.php">hwloc.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
