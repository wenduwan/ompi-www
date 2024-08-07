<?php

# Open MPI-specific functionality: deny mirrors access to Open MPI MTT
$mother_site = "www.open-mpi.org";
$server_dir = "/";

# Are we the "mother site" or a mirror?  Remember that "alerts.php" is
# run locally as a script via cron, therefore it won't have certain
# array keys set in $_SERVER (and therefore should not be subject to
# the mirroring stuff).
if (array_key_exists("SERVER_NAME", $_SERVER) &&
    0 != strncmp($_SERVER["SERVER_NAME"], $mother_site, strlen($mother_site)) ) {
    $equiv_dir = preg_replace("/^$server_dir/", '',
          $_SERVER["REQUEST_URI"]);
    print "Sorry, this page is not mirrored.  " .
           "Please see the <a href=\"http://$mother_site/$equiv_dir\">" .
           "original version of this page</a> " .
           "on the main Open MPI web site.\n";
    exit();
}

###########################################################################

# If you are tracking MTT usaging through Google Analytics, fill in
# your account number here.
$mtt_google_analytics_account = "";

# If you want some data output during the <head> ... </head>, put it
# in this variable.
$mtt_head_html = "  <META name=\"description\" content=\"Open MPI\">
  <META name=\"keywords\" content=\"MPI, Open MPI, Open-MPI, OpenMPI, parallel computing, beowulf, linux, cluster, parallel, distributed\">\n";

# If you want some data output at the beginning of the <body>, put it
# in this variable.
$mtt_body_html_prefix = "";

# If you want some data output at the end of the <body>, put it
# in this variable.
$mtt_body_html_suffix = rtrim(file_get_contents("/l/osl/www/www.open-mpi.org/mtt/body_suffix.html"));

# Database name
$mtt_database_name = "mtt";

# Database username
$mtt_database_username = "mtt";

# Database password
$mtt_database_password = rtrim(file_get_contents("/l/osl/www/doc/www.open-mpi.org/mtt-db-password.txt"));

# HTTP username
$mtt_http_username = "sun";

# HTTP password
$mtt_http_password = rtrim(file_get_contents("/l/osl/www/doc/www.open-mpi.org/mtt-http-password.txt"));

# Where to render graphs?  Must be writable by the web server.
$mtt_graph_tmp_dir = "tmp";
