<?php require("../../includes/header.php"); ?><h1>Updating Edges on Trees</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/english/UPDTREE.pdf">English</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/mandarin/UPDTREE.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/russian/UPDTREE.pdf">Russian</a> as well.</h3>
<p>You have a <a href="http://en.wikipedia.org/wiki/Tree_(graph_theory)">tree</a> consisting of <b>N</b> vertices numbered <b>1</b> to <b>N</b>.<br /><br />
Initially each edge has a value equal to zero. You have to first perform <b>M1</b> operations and then answer <b>M2</b> queries. Note you have to first perform all the operations and then answer all queries after all operations have been done.<br /><br /><br />
Operations are defined by:<br /><br />
<b>A B C D</b>: On the path between nodes numbered <b>A</b> and <b>B</b> increase the value of each edge by <b>1</b>, except for those edges which occur on the path between <b>C</b> and <b>D</b>. Note that there is an unique path between every pair of nodes ie. we don't consider values on edges for finding the path. All four values given in input will be distinct.<br /><br />
<br /><br />
Queries are of the following type:<br /><br />
<b>E F</b>: Print the sum of values of all the edges on the path between two distinct nodes <b>E</b> and <b>F</b>. Again the path will be unique.
</p>
<h3>Input</h3>
<p>Input description.</p>
<p>First line contains <b>N</b>, <b>M1</b> and <b>M2</b>. Each of the next <b>N-1</b> lines contain two integers <b>u v</b> denoting an undirected edge between node numbered <b>u</b> and <b>v</b>. Each of the next <b>M1</b> lines contain four integers <b>A<sub>i</sub> B<sub>i</sub> C<sub>i</sub> D<sub>i</sub></b>, denoting the operations. Each of the next <b>M2</b> lines contain two integers <b>E<sub>i</sub> F<sub>i</sub></b> denoting the queries.</p>
<h3>Output</h3>
<p>For each query, print the required answer in one line.</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M1, M2</b> ≤ <b>5*10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub>, C<sub>i</sub>, D<sub>i</sub>, E<sub>i</sub>, F<sub>i</sub></b> ≤ <b>N</b></li>

<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 2 2
1 2
2 4
2 5
1 3
1 4 2 3
3 4 2 5
4 5
4 3

<b>Output:</b>
2
4
</pre><h3>Explanation</h3>
<p>On first operation, value of edge (2-4) is increased by one. On second operation, value of edges (1-3), (1-2), (2-4) are increased by one.</p>
<p><b>Warning:</b>Use fast input/output. Large input files.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-09-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>