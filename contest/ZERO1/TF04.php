<?php require("../../includes/header.php"); ?><h1>Pipeline</h1><div class="content">

<p>A pipeline consists of m distinct tasks numbered from 1 to m. Each cycle of the pipeline completes in time equal to the time taken by maximum duration task in that cycle of the pipeline. Given that total number of cycles are n (numbered from 1 to n), find the total time for the completion of all the cycles.<br/></br/></p>
<p>For (i+1)<sup>th</sup> cycle, time taken to complete the first task is the cycle completion time of the previous cycle and the time taken to complete k<sup>th</sup> task is w<sub>i</sub> more than the duration of (k-1)<sup>th</sup> task of previous cycle (2&lt;=k&lt;=m).<br />
<br/><br />
Also, in first cycle, duration of all tasks = 5 sec except the first task which takes time 0 sec to complete.</br/></p>
<h3>Input</h3>
<p>First line of input contains two space separated integers, n and m.<br />
Second line contains n-1 space separated integers w<sub>1</sub>, .. , w<sub>n-1</sub>. <br/><br />
1 &lt;= n &lt;= 100000 <br/><br />
1 &lt;= m &lt;= 100000 <br/><br />
1 &lt;= w<sub>i</sub> &lt;= 10</br/></br/></br/></p>
<h3>Output</h3>
<p>A single integer which is the total completion time. (This value might not fit in a 32 bit integer but will fit in 64 bit integer).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2 2
2

<b>Output:</b>
10
</pre><p><br/></br/></p>
<p><b>Explanation:</b> First cycle takes 5 seconds to complete. For the next cycle, first task takes 5 seconds to complete (cycle completion time of previous cycle) while next task takes 2 seconds to complete. So overall, second cycle takes 5 seconds to complete. Total time = 10 seconds.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivamagarwal">shivamagarwal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-11-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>