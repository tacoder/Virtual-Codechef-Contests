<?php require("../../includes/header.php"); ?><h1>Sereja and Graph</h1><div class="content">
<h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/SEAGRP.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/SEAGRP.pdf">Russian</a>.</h3>
<p>Sereja has undirected graph, which consists of <b>n</b> vertexes and <b>m</b> edges. Sereja can delete edges from the graph. Now Sereja is interested in one question : is it possible to delete edges in the graph so that the degree of each vertex in the graph will be equal <b>1</b>?</p>
<p>Please, help Sereja.</p>
<h3>Input</h3>
<p>First line contains integer <b>T</b>. <b>T</b> testcases follow. The first line of each testcase contains integers <b>n</b> and <b>m</b>. Following <b>m</b> lines contain descriptions of the edges of the graph, each line contains two numbers — indexes of the vertexes, which are connected with edge. There can be multiple edges in the graph, but can not be any loops.</p>
<h3>Output</h3>
<p>For each test case print <b>"YES"</b>, if you can remove the edges so that the degrees of all vertexes will be equal to <b>1</b>, and <b>"NO"</b> otherwise. Print the words without quotation marks.</p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>10</b></li>
<li><b>1</b> &lt;= <b>n, m</b> &lt;= <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 2
1 2
1 2
3 2
1 2
2 3
4 6
1 2
1 3
1 4
2 3
2 4
3 4

<b>Output:</b>
YES
NO
YES
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-06-2013</td>
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