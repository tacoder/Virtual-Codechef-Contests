<?php require("../../includes/header.php"); ?><h1>Nice SubSegments</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/mandarin/SUBSGM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/russian/SUBSGM.pdf">Russian</a>.</h3>
<p>Let's call arrays of the form <b>x</b> <b>x+1</b> ... <b>x+k</b> nice. In other words nice arrays are arrays that form increasing arithmetic progression with the difference of one.</p>
<p>You are given an array of <b>N</b> integers. Let's denote it's numbers by <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>N</sub></b>. You are also given <b>M</b> change queries. Every change query is a query of the form "<b>X</b> <b>Y</b>" with the meaning that the <b>X</b>-th number in it becomes equal to <b>Y</b>. We perform these queries one after another, strictly in this order. Please, calculate the length of the longest nice subarray of this array, i.e. the length of the longest segment [<b>L</b>; <b>R</b>] that (<b>a<sub>L</sub></b>, <b>a<sub>L+1</sub></b>, ... <b>a<sub>R</sub></b>) is a nice array before all the queries and after every query.</p>
<h3>Input</h3>
<p>The first line of input consists of two integers <b>N</b> and <b>M</b>, separated by a single space - the length of the array and the number of queries.<br /><br />
The second line of input consists of <b>N</b> integers, the <b>i</b>-th equals to <b>a<sub>i</sub></b> - namely the <b>i</b>-th number in the array.<br /><br />
The following <b>M</b> lines contains the queries in the form "<b>X</b> <b>Y</b>", where <b>X</b> and <b>Y</b> are natural numbers with the meaning that the <b>X</b>-th number becomes equal to <b>Y</b>. </p>
<h3>Output</h3>
<p>Output the length of the longest nice subarray of the initial array at the first line of output. Then, output <b>M</b> integers at separate lines. The <b>i</b>-th such line should contain the length of the longest nice subarray after the <b>i</b>-th changing query.<br /><br />
Anytime <b>a<sub>i</sub></b> &lt;= 2 * <b>N</b> holds.
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 5
1 4 3 5 2
2 2
4 4
5 5
3 7
4 8

<b>Output:</b>
1
3
4
5
2
2
</pre><h3>Scoring</h3>
<p>
1 &lt;= <b>N</b> &lt;= 100, 1 &lt;= <b>M</b> &lt;= 1000 : 20 points. <br /><br />
1 &lt;= <b>N</b>, <b>M</b> &lt;= 5000 : 26 points. <br /><br />
1 &lt;= <b>N</b>, <b>M</b> &lt;= 10<sup>5</sup>  : 54 points.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko‎">Rubanenko‎</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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