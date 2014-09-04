<?php require("../../includes/header.php"); ?><h1>Optimal Scheduling</h1><div class="content">

<p>
Professor X has to schedule some jobs on a grid of processors. Assume that the execution time of each job scales linearly with the power of the processor. This means, if a particular job takes 2 seconds to finish on a processor with power P, it will take 1 second to finish on a processor with power 2P. He knows the processing power of each processor. Given an array A, containing the execution times of each job on a processor with 1 unit processing power, and the processing powers of the available processor, find the minimum total time taken to complete the concurrent execution of all the jobs (Note: The jobs need not be processed in the given order).</p>
<h3>Input</h3>
<p>
1.The first input will be T, the tumber of testcases. T &lt;= 100<br /><br />
2.The next line will be the number of jobs, N. N &lt;= 10<br /><br />
3.N lines follow. On the ith line, the input is an integer which lies between 1 and 30 inclusive. The ith integer is the time taken to execute the ith job on a processor with a processing power of 1 unit.<br />
<br />4.The next line will contain an integer P, 1 &lt;= P &lt;= 5. P denotes the number of processors.<br />
<br />5.K lines follow. The kth integer is the processing power of the kth processor.</p>
<h3>Output</h3>
<p>
For each test case, output a number which represents the sum of the first 'n' natural numbers.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
10
1
1
2
20
8
2
4
4
1
7
<b><br />Output:</b>
0.500000
1.142857
<b><br />Explanation</b>
For the first case, we can use the processor with power 20 to handle the job which takes 10 <br />
units of time, and the other processor to handle the left two jobs. The second processor<br />
 will be done in 0.25 time units, but the other processor would be half done, and would <br />
finally complete its job after taking 0.5 time units. In the second case, there is only<br />
 one processor, and hence the total time taken would be (4+4)/7 = 1.42857 time units.<br />
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/csirubix">csirubix</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>