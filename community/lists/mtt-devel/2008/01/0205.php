<?
$subject_val = "Re: [MTT devel] MTT server error (user: cisco)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 10:45:16 2008" -->
<!-- isoreceived="20080103154516" -->
<!-- sent="Thu, 3 Jan 2008 10:45:09 -0500" -->
<!-- isosent="20080103154509" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: cisco)" -->
<!-- id="20080103154509.GH17034_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8658E805-914B-407A-8968-02843AE0B02A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT server error (user: cisco)<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-03 10:45:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0206.php">Jeff Squyres: "[MTT devel] CHANGES file"</a>
<li><strong>Previous message:</strong> <a href="0204.php">Jeff Squyres: "[MTT devel] sun branch"</a>
<li><strong>In reply to:</strong> <a href="0203.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes. The below is the only failure I saw in that run, but
<br>
I see the same problem (&quot;floating point exception PASS&quot;)
<br>
elsewhere ...
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=487">http://www.open-mpi.org/mtt/index.php?do_redir=487</a>
<br>
<p>-Ethan
<br>
<p><p>On Wed, Jan/02/2008 08:50:19PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; BTW, was this the only failure you saw?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 2, 2008, at 3:55 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I fixed the below issue with Analyze/Performance/IMB.pm in
</span><br>
<span class="quotelev2">&gt;&gt; r1117. What it will now do is read an uninterrupted data
</span><br>
<span class="quotelev2">&gt;&gt; table broken up by either an EOF or something that does not
</span><br>
<span class="quotelev2">&gt;&gt; look like a row in the data table (e.g., an error or warning
</span><br>
<span class="quotelev2">&gt;&gt; message). I'm surprised that the below &quot;floating point
</span><br>
<span class="quotelev2">&gt;&gt; exception&quot; could result in a pass. At least now the entire
</span><br>
<span class="quotelev2">&gt;&gt; test run is not scrapped because of one bad apple.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sat, Dec/29/2007 05:38:32PM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SQL QUERY: INSERT INTO latency_bandwidth
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	(latency_bandwidth_id, message_size, latency_min, latency_avg, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency_max, bandwidth_min, bandwidth_avg, bandwidth_max) VALUES
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	('314123', 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '{0,1,2,4,8,16,32,64,128,256,512,1024,2048,4096,8192,16384,32768,65536,131072,262144,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,524288,1048576,2097152,4194304}', 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '{0.15,191.51,166.73,169.26,166.44,167.43,168.30,168.44,165.46,166.42,167.48,162.31,136.42,222.19,446.03,716.19,1254.33,2458.68,5584.21,12544.87,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,27091.03,43622.23,72144.60,130192.28}', 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '{0.22,191.53,166.78,169.27,166.45,167.45,168.30,168.60,165.47,166.46,167.64,162.32,136.45,222.21,446.09,716.21,1254.39,2458.76,5584.51,12545.59,,,,,,,,,,,,,,,,,27094.99,43640.46,72183.70,130302.65}', 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '{0.28,191.55,166.89,169.28,166.47,167.49,168.32,168.69,165.48,166.49,167.70,162.34,136.48,222.24,446.13,716.24,1254.44,2458.84,5584.96,12546.58,,,,,,,,,,,,,,,,,27099.48,43659.70,72207.25,130419.42}', 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DEFAULT, DEFAULT, DEFAULT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SQL ERROR: ERROR:  malformed array literal: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;{0.22,191.53,166.78,169.27,166.45,167.45,168.30,168.60,165.47,166.46,167.64,162.32,136.45,222.21,446.09,716.21,1254.39,2458.76,5584.51,12545.59,,,,,,,,,,,,,,,,,27094.99,43640.46,72183.70,130302.65}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SQL ERROR:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [SNIP]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'exit_value_81' =&gt; 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'mpi_install_section_name_81' =&gt; 'ompi/gnu-standard',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'latency_max_81' =&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '{0.28,191.55,166.89,169.28,166.47,167.49,168.32,168.69,165.48,166.49,167.70,162.34,136.48,222.24,446.13,716.24,1254.44,2458.84,5584.96,12546.58,,,,,,,,,,,,,,,,,27099.48,43659.70,72207.25,130419.42}',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'latency_avg_81' =&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '{0.22,191.53,166.78,169.27,166.45,167.45,168.30,168.60,165.47,166.46,167.64,162.32,136.45,222.21,446.09,716.21,1254.39,2458.76,5584.51,12545.59,,,,,,,,,,,,,,,,,27094.99,43640.46,72183.70,130302.65}',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'np_81' =&gt; '8',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'network_81' =&gt; 'loopback,verbs',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'test_result_81' =&gt; 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'latency_min_81' =&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '{0.15,191.51,166.73,169.26,166.44,167.43,168.30,168.44,165.46,166.42,167.48,162.31,136.42,222.19,446.03,716.19,1254.33,2458.68,5584.21,12544.87,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,27091.03,43622.23,72144.60,130192.28}',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'test_build_section_name_81' =&gt; 'imb',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'description_81' =&gt; 'Cisco MPI development cluster',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'result_stderr_81' =&gt; '',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'environment_81' =&gt; '',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'exit_signal_81' =&gt; -1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'test_name_81' =&gt; 'Allgatherv',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'parameters_81' =&gt; '--mca btl_openib_use_eager_rdma 0 --mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_tcp_if_include ib0 --mca oob_tcp_if_include ib0',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'start_timestamp_81' =&gt; 'Sat Dec 29 22:32:56 2007',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'command_81' =&gt; 'mpirun -np 8 --mca btl_openib_use_eager_rdma 0 --mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl openib,self --mca btl_tcp_if_include ib0 --mca oob_tcp_if_include ib0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  src/IMB-MPI1 -npmin 8 Allgatherv',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'duration_81' =&gt; '20 seconds',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'message_size_81' =&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '{0,1,2,4,8,16,32,64,128,256,512,1024,2048,4096,8192,16384,32768,65536,131072,262144,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,524288,1048576,2097152,4194304}',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'resource_manager_81' =&gt; 'slurm',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'result_stdout_81' =&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '#---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Date       : Sat Dec 29 14:32:57 2007
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Machine    : x86_64# System     : Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Release    : 2.6.9-42.ELsmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Version    : #1 SMP Wed Jul 12 23:32:02 EDT 2006
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Minimum message length in bytes:   0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Maximum message length in bytes:   4194304
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # MPI_Datatype                   :   MPI_BYTE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # MPI_Datatype for reductions    :   MPI_FLOAT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # MPI_Op                         :   MPI_SUM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # List of Benchmarks to run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Allgatherv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Benchmarking Allgatherv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # #processes = 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            0         1000         0.15         0.28         0.22
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            1         1000       191.51       191.55       191.53
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            2         1000       166.73       166.89       166.78
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            4         1000       169.26       169.28       169.27
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            8         1000       166.44       166.47       166.45
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           16         1000       167.43       167.49       167.45
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           32         1000       168.30       168.32       168.30
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           64         1000       168.44       168.69       168.60
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          128         1000       165.46       165.48       165.47
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          256         1000       166.42       166.49       166.46
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          512         1000       167.48       167.70       167.64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         1024         1000       162.31       162.34       162.32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         2048         1000       136.42       136.48       136.45
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         4096         1000       222.19       222.24       222.21
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         8192         1000       446.03       446.13       446.09
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        16384         1000       716.19       716.24       716.21
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        32768         1000      1254.33      1254.44      1254.39
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        65536          640      2458.68      2458.84      2458.76
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       131072          320      5584.21      5584.96      5584.51
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       262144          160     12544.87     12546.58     12545.59
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] Signal: Floating point exception (8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] Signal code:  (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] Failing at address: 0x25900002fed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] [ 0] /lib64/tls/libpthread.so.0 [0x2a95e57430]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] [ 1] /lib64/tls/libc.so.6(__poll+0x2f) [0x2a9601e96f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] [ 2] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/scratches/2007-12-28/Ppuo/installs/5BvS/install/lib/libopen-pal.so.0(opal_poll_dispatch+0x13c) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a9568e1ba]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] [ 3] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/scratches/2007-12-28/Ppuo/installs/5BvS/install/lib/libopen-pal.so.0(opal_event_base_loop+0x419) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a9568a238]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] [ 4] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/scratches/2007-12-28/Ppuo/installs/5BvS/install/lib/libopen-pal.so.0(opal_event_loop+0x1d) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a95689e1d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] [ 5] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/scratches/2007-12-28/Ppuo/installs/5BvS/install/lib/libopen-pal.so.0(opal_progress+0x6a) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a95680fbe]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] [ 6] mpirun [0x403fe4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] [ 7] mpirun(orterun+0x9bb) [0x403823]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] [ 8] mpirun(main+0x1b) [0x402e63]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] [ 9] /lib64/tls/libc.so.6(__libc_start_main+0xdb) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a95f7d3fb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] [10] mpirun(orte_daemon_recv+0x1e2) [0x402dba]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [svbu-mpi031:12247] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       524288           80     27091.03     27099.48     27094.99
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      1048576           40     43622.23     43659.70     43640.46
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      2097152           20     72144.60     72207.25     72183.70
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      4194304           10    130192.28    130419.42    130302.65
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'variant_81' =&gt; 81,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'result_message_81' =&gt; 'Passed',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'test_type_81' =&gt; 'latency_bandwidth',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  'launcher_81' =&gt; 'mpirun',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0206.php">Jeff Squyres: "[MTT devel] CHANGES file"</a>
<li><strong>Previous message:</strong> <a href="0204.php">Jeff Squyres: "[MTT devel] sun branch"</a>
<li><strong>In reply to:</strong> <a href="0203.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
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
