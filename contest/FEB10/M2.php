<?php require("../../includes/header.php"); ?><h1>Motorbike Racing</h1><div class="content">

<p>It's time for the annual exciting Motorbike Race in Byteland.</p>
<p>There are N motorcyclists taking part in the competition. Johnny is watching the race. At the present moment (time 0), Johnny has taken note of the current velocity and position of each motorcyclist.</p>
<p>Johnny wants to know at a given point of time, which motorcyclist is in a specific place in the rank list. Please help him!</p>
<p>If at any given time two motorcyclists are in same position, the motorcyclist with the smaller index will be placed before the one with the larger index.</p>
<p>To make the problem simple, Johnny assumes that each motorcyclist is moving at a constant velocity.</p>
<h3>Input</h3>
<p>The first line contains a number t (about 10) which is the number of test cases. Then t test cases follow. Each test case has the following form.</p>
<p>The first line of the test case contains a number N (1 &lt;= N &lt;= 2000), the number of motorcyclists.</p>
<p>The i-th line in the next N lines contains two numbers, v and x, which are the velocity and the current position of the i-th motorcyclist (1 &lt;= v, x &lt;= 100,000).</p>
<p>The next line contains a number Q (1 &lt;= Q &lt;= 2000), the number of time queries.</p>
<p>Each line in the next Q lines contains two numbers, t (1 &lt;= t &lt;= 1,000,000,000) and k (1 &lt;= k &lt;= n), representing the query: "at time t, which motorcyclist is positioned k-th in the rank list?"</p>
<h3>Output</h3>
<p>For each test case, print Q lines, with each line containing the index of the motorcyclist for the corresponding query.</p>
<p>Remember to print a new line after each test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
4
2 100
3 50
4 60
5 1
4
1 1
50 2
60 4
100 1

<b>Output:</b>
1
4
1
4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>