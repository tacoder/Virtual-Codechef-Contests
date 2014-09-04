<?php require("../../includes/header.php"); ?><h1>Chef and Graph Queries</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/GERALD07.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/GERALD07_new.pdf">Russian</a>.</h3>
<h3>Problem Statement</h3>
<p>Chef has a undirected graph <b>G</b>. This graph consists of <b>N</b> vertices and <b>M</b> edges. Each vertex of the graph has an unique index from <b>1</b> to <b>N</b>, also each edge of the graph has an unique index from <b>1</b> to <b>M</b>.</p>
<p>Also Chef has <b>Q</b> pairs of integers: <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b> (<b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>M</b>). For each pair <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>, Chef wants to know: how many connected components will contain graph <b>G</b> if Chef erase all the edges from the graph, except the edges with indies <b>X</b>, where <b>L<sub>i</sub></b> ≤ <b>X</b> ≤ <b>R<sub>i</sub></b>. Please, help Chef with these queries. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />The first line of each test case contains three integers <b>N</b>, <b>M</b>, <b>Q</b>. Each of the next <b>M</b> lines contains a pair of integers <b>V<sub>i</sub></b>, <b>U<sub>i</sub></b> - the current edge of graph <b>G</b>. Each of the next <b>Q</b> lines contains a pair of integers <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b> - the current query.</p>

<h3>Output</h3>
<p>For each query of each test case print the required number of connected components.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b>.</li>
<li><b>1</b> ≤ <b>N</b>, <b>M</b>, <b>Q</b> ≤ <b>200000</b>.</li>
<li><b>1</b> ≤ <b>U<sub>i</sub></b>, <b>V<sub>i</sub></b> ≤ <b>N</b>.</li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>M</b>.</li>
<li>Sum of all values of <b>N</b> for test cases is not greater than <b>200000</b>. Sum of all values of <b>M</b> for test cases is not greater than <b>200000</b>. Sum of all values of <b>Q</b> for test cases is not greater than <b>200000</b>.</li>
<li>Graph <b>G</b> can contain self-loops and multiple edges.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 5 4
1 3
1 2
2 1
3 2
2 2
2 3
1 5
5 5
1 2
1 1 1
1 1
1 1
<b>Output:</b>
2
1
3
1
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gerald">gerald</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
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