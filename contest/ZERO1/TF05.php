<?php require("../../includes/header.php"); ?><h1>Sequencing Trains</h1><div class="content">

<p>There are T trains on station S. They need to go to station R. i<sup>th</sup> train takes M<sub>i</sub> time to go from S to R and should ideally be at station R by time D<sub>i</sub>. At one time, only one train could be travelling from S to R i.e. next train would start from S only after the previous train has reached R. <br/></br/></p>
<p>Prepare a sequence in which trains should leave so that the maximum time by which a train is late is minimized.</p>
<h3>Input</h3>
<p>The first line contains the number of trains T. Each of the next T lines contains two integers D<sub>i</sub> and M<sub>i</sub>.</p>
<h3>Output</h3>
<p>Output T lines. The i<sup>th</sup> line should contain the minimum maximum lateness you can obtain by optimally sequencing the first i trains on your list. See the sample input for clarification.</p>
<h3>Constraints:</h3>
<p>1 &lt;= T &lt;= 100000<br/><br />
1 &lt;= D<sub>i</sub> &lt;= 100000<br/><br />
1 &lt;= M<sub>i</sub> &lt;= 1000</br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
2 2
1 1
4 3
10 1
2 1


<b>Output:</b>
0
1
2
2
3
</pre><p><br/><br />
<b>Explanation:</b><br />
With only the first train, it reaches in 2 minutes, and so lateness = 0.<br/><br />
With the first two trains, the optimal sequence can be:<br />
train 2, train 1. Train 1 is late by 1 unit of time. <br/><br />
With the first three trains, the optimal sequence can be: train 2, train 1, train 3.</br/></br/></br/></p>
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