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
<!-- Generated by Doxygen 1.9.4 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
$(function() {
  initMenu('',false,false,'search.php','Search');
});
/* @license-end */
</script>
<div id="main-nav"></div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">Data Structures</div></div>
</div><!--header-->
<div class="contents">
<div class="textblock">Here are the data structures with brief descriptions:</div><div class="directory">
<div class="levels">[detail level <span onclick="javascript:toggleLevel(1);">1</span><span onclick="javascript:toggleLevel(2);">2</span><span onclick="javascript:toggleLevel(3);">3</span>]</div><table class="directory">
<tr id="row_0_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00354.php" target="_self">hwloc_backend</a></td><td class="desc">Discovery backend structure </td></tr>
<tr id="row_1_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00302.php" target="_self">hwloc_cl_device_topology_amd</a></td><td class="desc"></td></tr>
<tr id="row_2_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00358.php" target="_self">hwloc_component</a></td><td class="desc">Generic component structure </td></tr>
<tr id="row_3_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00346.php" target="_self">hwloc_disc_component</a></td><td class="desc">Discovery component structure </td></tr>
<tr id="row_4_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00350.php" target="_self">hwloc_disc_status</a></td><td class="desc">Discovery status structure </td></tr>
<tr id="row_5_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00290.php" target="_self">hwloc_distances_s</a></td><td class="desc">Matrix of distances between a set of objects </td></tr>
<tr id="row_6_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00266.php" target="_self">hwloc_info_s</a></td><td class="desc">Object info attribute (name and value strings) </td></tr>
<tr id="row_7_"><td class="entry"><span style="width:0px;display:inline-block;">&#160;</span><span id="arr_7_" class="arrow" onclick="toggleFolder('7_')">&#9660;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00294.php" target="_self">hwloc_location</a></td><td class="desc">Where to measure attributes from </td></tr>
<tr id="row_7_0_" class="even"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00298.php" target="_self">hwloc_location_u</a></td><td class="desc">Actual location </td></tr>
<tr id="row_8_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00218.php" target="_self">hwloc_obj</a></td><td class="desc">Structure of a topology object </td></tr>
<tr id="row_9_" class="even"><td class="entry"><span style="width:0px;display:inline-block;">&#160;</span><span id="arr_9_" class="arrow" onclick="toggleFolder('9_')">&#9660;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00222.php" target="_self">hwloc_obj_attr_u</a></td><td class="desc">Object type-specific Attributes </td></tr>
<tr id="row_9_0_"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00246.php" target="_self">hwloc_bridge_attr_s</a></td><td class="desc">Bridge specific Object Attributes </td></tr>
<tr id="row_9_1_" class="even"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00234.php" target="_self">hwloc_cache_attr_s</a></td><td class="desc">Cache-specific Object Attributes </td></tr>
<tr id="row_9_2_"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00238.php" target="_self">hwloc_group_attr_s</a></td><td class="desc">Group-specific Object Attributes </td></tr>
<tr id="row_9_3_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span id="arr_9_3_" class="arrow" onclick="toggleFolder('9_3_')">&#9660;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00226.php" target="_self">hwloc_numanode_attr_s</a></td><td class="desc">NUMA node-specific Object Attributes </td></tr>
<tr id="row_9_3_0_"><td class="entry"><span style="width:48px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00230.php" target="_self">hwloc_memory_page_type_s</a></td><td class="desc">Array of local memory page types, <code>NULL</code> if no local memory and <code>page_types</code> is 0 </td></tr>
<tr id="row_9_4_" class="even"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00262.php" target="_self">hwloc_osdev_attr_s</a></td><td class="desc">OS Device specific Object Attributes </td></tr>
<tr id="row_9_5_"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00242.php" target="_self">hwloc_pcidev_attr_s</a></td><td class="desc">PCI Device specific Object Attributes </td></tr>
<tr id="row_10_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00274.php" target="_self">hwloc_topology_cpubind_support</a></td><td class="desc">Flags describing actual PU binding support for this topology </td></tr>
<tr id="row_11_"><td class="entry"><span style="width:0px;display:inline-block;">&#160;</span><span id="arr_11_" class="arrow" onclick="toggleFolder('11_')">&#9660;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00314.php" target="_self">hwloc_topology_diff_obj_attr_u</a></td><td class="desc">One object attribute difference </td></tr>
<tr id="row_11_0_" class="even"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00318.php" target="_self">hwloc_topology_diff_obj_attr_generic_s</a></td><td class="desc"></td></tr>
<tr id="row_11_1_"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00326.php" target="_self">hwloc_topology_diff_obj_attr_string_s</a></td><td class="desc">String attribute modification with an optional name </td></tr>
<tr id="row_11_2_" class="even"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00322.php" target="_self">hwloc_topology_diff_obj_attr_uint64_s</a></td><td class="desc">Integer attribute modification with an optional index </td></tr>
<tr id="row_12_"><td class="entry"><span style="width:0px;display:inline-block;">&#160;</span><span id="arr_12_" class="arrow" onclick="toggleFolder('12_')">&#9660;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00330.php" target="_self">hwloc_topology_diff_u</a></td><td class="desc">One element of a difference list between two topologies </td></tr>
<tr id="row_12_0_" class="even"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00334.php" target="_self">hwloc_topology_diff_generic_s</a></td><td class="desc"></td></tr>
<tr id="row_12_1_"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00338.php" target="_self">hwloc_topology_diff_obj_attr_s</a></td><td class="desc"></td></tr>
<tr id="row_12_2_" class="even"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00342.php" target="_self">hwloc_topology_diff_too_complex_s</a></td><td class="desc"></td></tr>
<tr id="row_13_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00270.php" target="_self">hwloc_topology_discovery_support</a></td><td class="desc">Flags describing actual discovery support for this topology </td></tr>
<tr id="row_14_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00278.php" target="_self">hwloc_topology_membind_support</a></td><td class="desc">Flags describing actual memory binding support for this topology </td></tr>
<tr id="row_15_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00282.php" target="_self">hwloc_topology_misc_support</a></td><td class="desc">Flags describing miscellaneous features </td></tr>
<tr id="row_16_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="a00286.php" target="_self">hwloc_topology_support</a></td><td class="desc">Set of flags describing actual support for this topology </td></tr>
</table>
</div><!-- directory -->
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
