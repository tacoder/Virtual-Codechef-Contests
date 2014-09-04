<?php require("../../includes/header.php"); ?><h1>Sines Sum Queries</h1><div class="content">

<p> You are given a sequence of integers <b>A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>N-1</sub></b>. Initially <b>A<sub>i</sub>=i</b> for all <b>i</b>. You need to perform some strange queries with it. Each query has the form <b>"L R D"</b> where <b>0 &lt;= L &lt;= R &lt; N</b> and <b>D</b> is an integer. If <b>D=0</b> then you need to find the sum of sines of the numbers <b>A<sub>L</sub>, A<sub>L+1</sub>, ..., A<sub>R</sub></b> that is <b>sin A<sub>L</sub> + ... + sin A<sub>R</sub></b>. Otherwise you need to add <b>D</b> to the numbers <b>A<sub>L</sub>, A<sub>L+1</sub>, ..., A<sub>R</sub></b>. </p>
<h3>Input</h3>
<p> The first line contains two positive integers <b>N</b> and <b>Q</b>. Here, <b>N &lt;= 10<sup>9</sup></b> is the length of the initial sequence and <b>Q &lt;= 100000</b> is the number of queries you need to perform with it. The next <b>Q</b> lines describe queries, one per line. The <b>i</b>'th such line contains three integers <b>L</b>, <b>R</b> and <b>D</b>. Here <b>0 &lt;= L &lt;= R &lt; N</b> and <b>-10000 &lt;= D &lt;= 10000</b>. </p>
<h3>Output</h3>
<p> The output consists of answers for all queries where <b>D=0</b>. For each such query you must produce a line with the corresponding sines sum. Answers within an absolute error of  <b>10<sup>-6</sup></b> will be accepted. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 6
0 4 0
0 2 1
3 4 2
0 4 0
2 3 -1
1 4 0

<b>Output:</b>
1.1350859
0.65354865
0.782376860

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-06-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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