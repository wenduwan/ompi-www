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
<!-- Generated by Doxygen 1.7.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>Finding a single Object covering at least CPU set</h1>  </div>
</div>
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> <br class="typebreak"/>
&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__covering.php#gab56b99460194bbcb36016d36d55132a7">hwloc_get_child_covering_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> parent)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the child covering at least CPU set <code>set</code>.  <a href="#gab56b99460194bbcb36016d36d55132a7"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <br class="typebreak"/>
<a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> <br class="typebreak"/>
&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__covering.php#ga2a0de36ea0c3c70fb5f4cba0bb192582">hwloc_get_obj_covering_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the lowest object covering at least CPU set <code>set</code>.  <a href="#ga2a0de36ea0c3c70fb5f4cba0bb192582"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="gab56b99460194bbcb36016d36d55132a7"></a><!-- doxytag: member="helper.h::hwloc_get_child_covering_cpuset" ref="gab56b99460194bbcb36016d36d55132a7" args="(hwloc_topology_t topology , hwloc_const_cpuset_t set, hwloc_obj_t parent)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>  hwloc_get_child_covering_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&nbsp;</td>
          <td class="paramname"> <em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td>
          <td class="paramname"> <em>parent</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the child covering at least CPU set <code>set</code>. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd><code>NULL</code> if no child matches or if <code>set</code> is empty. </dd></dl>

</div>
</div>
<a class="anchor" id="ga2a0de36ea0c3c70fb5f4cba0bb192582"></a><!-- doxytag: member="helper.h::hwloc_get_obj_covering_cpuset" ref="ga2a0de36ea0c3c70fb5f4cba0bb192582" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>  hwloc_get_obj_covering_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#gad2f7833583d020af31e01554251dbe11">hwloc_const_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the lowest object covering at least CPU set <code>set</code>. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd><code>NULL</code> if no object matches or if <code>set</code> is empty. </dd></dl>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
