<?php require("../../includes/header.php"); ?><h1>Dynamic GCD</h1><div class="content">

<p>You're given a <a href="http://en.wikipedia.org/wiki/Tree_%28graph_theory%29">tree</a> on <b>N</b> vertices. Each vertex has a positive integer written on it, number on the i<sup>th</sup> vertex being <b>v<sub>i</sub></b>. Your program must process two types of queries :</p>
<p>
1. Find query represented by <b>F u v</b>   : Find out <a href="http://en.wikipedia.org/wiki/Greatest_common_divisor">gcd</a> of all numbers on the unique path between vertices <b>u</b> and <b>v</b> in the tree (both inclusive).<br />
2. Change query represented by <b>C u v d</b> : Add <b>d</b> to the number written on all vertices along the unique path between vertices <b>u</b> and <b>v</b> in the tree (both inclusive). </p>
<h3>Input</h3>
<p>First line of input contains an integer <b>N</b> denoting the size of the vertex set of the tree. Then follow <b>N - 1</b> lines, i<sup>th</sup> of which contains two integers <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b> denoting an edge between vertices <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b> in the tree. After this follow <b>N</b> space separated integers in a single line denoting initial values <b>v<sub>i</sub></b> at each of these nodes. Then follows a single integer <b>Q</b> on a line by itself, denoting the number of queries to follow. Then follow <b>Q</b> queries, each one on a line by itself. Each query is either a find query or a change query with format as given in problem statement. Note that all vertices are 0-based.</p>
<h3>Output</h3>
<p>For every find query, print the answer to that query in one line by itself.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
0 4
0 5
1 5
5 2
3 5
3 1 3 2 4 2
5
F 3 5
C 1 3 1
C 3 4 4
F 3 0
F 2 5

<b>Output:</b>
2
7
1
</pre><p><br/></br/></p>
<h3>Constraints</h3>
<p>1 &lt;= <b>N</b> &lt;= 50000<br/><br />
1 &lt;= <b>Q</b> &lt;= 50000<br/><br />
0 &lt;= <b>u</b>, <b>v</b> &lt;= <b>N-1</b> <br/><br />
1 &lt;= <b>v<sub>i</sub></b> &lt;= 10^4 <br/><br />
0 &lt;= <b>d</b> &lt;= 10^4<br/></br/></br/></br/></br/></br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/yellow_agony">yellow_agony</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-12-2011</td>
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