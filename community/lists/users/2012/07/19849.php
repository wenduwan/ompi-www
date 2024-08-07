<?
$subject_val = "Re: [OMPI users] restricting a job to a set of hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 06:15:25 2012" -->
<!-- isoreceived="20120727101525" -->
<!-- sent="Fri, 27 Jul 2012 12:15:12 +0200" -->
<!-- isosent="20120727101512" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] restricting a job to a set of hosts" -->
<!-- id="3E2D5954-6E22-4FB9-8930-82B7247B88BE_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="435B38AE-E5DA-4C2F-9C92-DCDC41754E6F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] restricting a job to a set of hosts<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-27 06:15:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19850.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19848.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>In reply to:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19857.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Reply:</strong> <a href="19857.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 27.07.2012 um 03:21 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; Application processes will *only* be placed on nodes included in the allocation. The -nolocal flag is intended to ensure that no application processes are started on the same node as mpirun in the case where that node is included in the allocation. This happens, for example, with Torque, where mpirun is executed on one of the allocated nodes.
</span><br>
<p>But the behavior is the same in Torque and SGE. The jobscript is executed on one of the elected exechosts (neither the submit host, nor the qmaster host [unless they are exechosts too]) and so eligible to be used too. In no case there should be -nolocal being used.
<br>
<p>-nolocal is IMO an option where you want to execute the `mpirun` on your local login machine and want the MPI processes to be allocated somewhere in the cluster, in case you don't have any queuing system around to manage the resources.
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; I believe SGE doesn't do that - and so the allocation won't include the submit host, in which case you don't need -nolocal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 26, 2012, at 5:58 PM, Erik Nelson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was under the impression that the -nolocal option keeps processes off the submit
</span><br>
<span class="quotelev2">&gt;&gt; host (since there may be hundreds or thousands of jobs submitted at any time, 
</span><br>
<span class="quotelev2">&gt;&gt; and we don't want this host to be overloaded).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My understanding of what you said in you last email is that, by listing the hosts,  I
</span><br>
<span class="quotelev2">&gt;&gt; automatically send all processes (parent and child, or master and slave if you 
</span><br>
<span class="quotelev2">&gt;&gt; prefer) to the specified list of hosts. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Reading your email below, it looks like this was the correct understanding.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 26, 2012 at 5:20 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 26.07.2012 um 23:58 schrieb Erik Nelson:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Reuti,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you. Our queue is backed up, so it will take a little while before I can try this.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I assume that by specifying the nodes this way, I don't need (and it would confuse
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the system) to add -nolocal. In other words, qsub will try to put the parent node
</span><br>
<span class="quotelev3">&gt;&gt; &gt; somewhere in this set.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is this the idea?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Depends what you refer to by &quot;parent node&quot;. I assume you mean the submit host. This is never included in any created selection of SGE unless it's an execution host too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The master host of the parallel job (i.e. the one where the jobscript with the `mpiexec` is running) will be used as a normal machine from MPI's point of view.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Erik
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Thu, Jul 26, 2012 at 4:48 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Am 26.07.2012 um 23:33 schrieb Erik Nelson:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I have a purely parallel job that runs ~100 processes. Each process has ~identical
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; overhead so the speed of the program is dominated by the slowest processor.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; For this reason, I would like to restrict the job to a specific set of identical (fast)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; processors on our cluster.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I read the FAQ on -hosts and -hostfile, but it is still unclear to me what affect these
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; directives will have in a queuing environment.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Currently, I submit the job using the &quot;qsub&quot; command in the &quot;sge&quot; environment as :
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;             qsub -pe mpich 101 jobfile.job
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; where jobfile contains the command
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;             mpirun -np 101 -nolocal ./executable
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I would leave -nolocal out here.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ qsub -l &quot;h=compute-5-[1-9]|compute-5-1[0-9]|compute-5-2[0-9]|compute-5-3[0-2]&quot; -pe mpich 101 jobfile.job
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I would like to restrict the job to nodes compute-5-1 to compute-5-32 on our machine,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; each containing 8 cpu's (slots). How do I go about this?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thanks, Erik
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Erik Nelson
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; p : 214 645 5981
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; f : 214 645 5948
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Erik Nelson
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; p : 214 645 5981
</span><br>
<span class="quotelev3">&gt;&gt; &gt; f : 214 645 5948
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Erik Nelson
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev2">&gt;&gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev2">&gt;&gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; p : 214 645 5981
</span><br>
<span class="quotelev2">&gt;&gt; f : 214 645 5948
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19850.php">Shiqing Fan: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>Previous message:</strong> <a href="19848.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>In reply to:</strong> <a href="19846.php">Ralph Castain: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19857.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Reply:</strong> <a href="19857.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
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
