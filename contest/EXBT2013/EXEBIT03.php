<?php require("../../includes/header.php"); ?><h1>Dual core processor and the scheduler</h1><div class="content">

<p>A computer has a dual core processor. Its operating system has a set of jobs <i>JS</i> from an application that it has to execute. A job scheduled to a core runs on that core till its completion. The scheduler is optimized to schedule jobs to different cores such that at the end of execution of <i>JS</i>, the skew of the processing time between both the cores is minimum. For example if there are three jobs <i>A</i>, <i>B</i> and <i>C</i> requiring 2, 3 and 4 milliseconds each respectively, then the scheduler will assign the jobs <i>A</i> and <i>B</i> to Core 1 and job <i>C</i> to Core 2. In this case the skew is |(2+3) - 4| = 1. Yet another scheduling policy can be to assign job <i>A</i> to Core 1 and jobs <i>B</i> and <i>C</i> on Core 2 but in this case the skew will be |2 - (3+4)| = 5, which is not optimal because Core 1 will finish its job in 2 milliseconds and keep sitting idle for five extra milliseconds while Core 2 finishes its jobs in 7 milliseconds. Your task is to find the skew assuming that <br/></br/></p>
<ol>
<li>the scheduler optimally schedules the jobs to different cores</li>
<li>no other job gets allocated a time quantum while any job from <i>JS</i> is executing</li>
<li>scheduling policy is non-preemptive</li>
</ol>
<h3>Input</h3>
<p>First line of the input is the number of test cases <i>T</i>, after which <i>T</i> test cases follow. Each test case begins with an integer <i>n</i> in a line, i.e. the number of jobs in <i>JS</i>; followed by burst times(in milliseconds) required for each of the <i>n</i> jobs in a single line with each value separated by single space.
</p>
<h3>Output</h3>
<p>For each test case output a single integer <i>s</i>, the skew for that test case; followed by a new line character.</p>
<h3>Constraints</h3>
<ul>
<li><b>1&lt;= t &lt;= 10</b></li>
<li><b>1&lt;= n &lt;= 1000</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5
2 3 4 6 8
1
6

<b>Output:</b>
1
6  
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/prabhakar97">prabhakar97</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ASM, BASH, BF, C, C99 strict, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, ERL, GO, HASK, JAVA, JS, LISP clisp, LISP sbcl, LUA, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>