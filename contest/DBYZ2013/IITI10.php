<?php require("../../includes/header.php"); ?><h1>A Programming Duel</h1><div class="content">

<p>Recently, Hogwarts School of Witchcraft and Wizardry has introduced a course on coumputer programming! As a result, many programming duels now take place in Hogwarts. Lucius Malfoy has challenged Harry Potter to one such programming duel. </p>
<p>
The rules of the duel are as follows:</p>
<p>1) Malfoy chooses two integers <b>N</b>(>0) and <b>K</b>(>=0) and a sequence <b>S</b> of <b>N</b> positive integers.</p>
<p>2) Harry must find the number of distinct non-empty subsequences <b>L</b> of <b>S</b> such that no two integers in <b>L</b> have an absolute difference greater than <b>K</b>.</p>
<p>Since this number may be very large, Harry must report this number modulo (10^9+7).</p>
<h3>Input</h3>
<p>Input will begin with an integer <b>T</b>, the total number of test cases. Description of <b>T</b> test cases follows.</p>
<p>Each test case is described by two lines of input.</p>
<p>The first line of each test case will consist of two space-seperated integers : <b>N</b>,<b>K</b>.</p>
<p>The second line will contain <b>N</b> space seperated integers : <b>S[1],S[2], ... S[N]</b>.</p>
<h3>Output</h3>
<p>For each test case output a single integer : The number that Harry must report to Malfoy.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;=5</p>
<p>1 &lt;= <b>N</b> &lt;= 10^5</p>
<p>0 &lt;= <b>K</b> &lt;= 10^9</p>
<p>1 &lt;= <b>S[i]</b> &lt;=10^9</p>
<h3>Example</h3>
<pre><b>Input:</b>

2
3 1
10 11 12
5 6
12 27 1 13 14

<b>Output:</b>

5
9

</pre><h3>Explanation</h3>
<p>CASE 1 : Possible subsequences : (10), (11), (12), (10,11), (11,12).</p>
<p>CASE 2 : Possible subsequences : (12), (27), (1), (13), (14), (12,13), (12,14), (13,14), (12,13,14).</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>