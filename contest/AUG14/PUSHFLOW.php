<?php require("../../includes/header.php"); ?><h1>Push the Flow!</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/PUSHFLOW.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/PUSHFLOW.pdf">Russian</a>.</h3>
<p>
You are given a connected undirected graph <b>G</b>, consisting of <b>N</b> vertices and <b>M</b> edges. The vertices of <b>G</b> are indexed with integers 1, 2, 3, ..., <b>N</b>, the edges of <b>G</b> are indexed with integers 1, 2, 3, ..., <b>M</b>. Each edge of <b>G</b> has <i>a capacity</i> - a positive integer parameter. Each pair of the vertices is connected by at most one edge. No edge connects a vertex with itself.
</p>
<p>
Let's call a sequence of vertices <b>A</b> = <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>K</sub></b>(<b>K</b> &gt; 2) <i>a simple cycle</i>, if:
</p>
<p><ul type="square">
<li>There's an edge between vertices <b>A<sub>i</sub></b> and <b>A<sub>i + 1</sub></b>, for each 1 ≤ <b>i</b> &lt; <b>K</b>;
</li><li>There's an edge between vertices <b>A<sub>1</sub></b> and <b>A<sub>K</sub></b>;
</li><li><b>A<sub>i</sub></b> equals to <b>A<sub>j</sub></b> if and only if <b>i</b> equals to <b>j</b>.
    </li></ul>
</p>
<p>It's guaranteed, that each vertex of <b>G</b> belongs to at most one simple cycle.</p>
<p>You task is to implement a data structure, which can process the following queries efficiently:</p>
<p><ul type="square">
<li>0 <b>S</b> <b>T</b>: find the maximum flow in <b>G</b> in case the source is <b>S</b> and the sink is <b>T</b>;
</li><li>1 <b>X</b> <b>NEW_CAPACITY</b>: make the capacity of <b>X</b>'th edge equal to <b>NEW_CAPACITY</b>.
    </li></ul>
</p>
<p>You can read about maximum flow problem here: <a href="http://en.wikipedia.org/wiki/Maximum_flow_problem">http://en.wikipedia.org/wiki/Maximum_flow_problem</a></p>
<h3>Input</h3>

<p>The first line of the input contains two integers <b>N</b> and <b>M</b>, denoting the number of the vertices and the number of the edges.</p>
<p>The next <b>M</b> lines contain the information about the edges of <b>G</b>, each contains three integers <b>U</b>, <b>V</b> and <b>C</b>, which means that this edge connects vertices <b>U</b>-<b>V</b> and has a capacity equal to <b>C</b>. The information about <b>i</b>'th edge is on <b>(i + 1)</b>'th line of the input.</p>
<p>The next line contains an integer <b>Q</b>, denoting the number of queries to process.</p>
<p>The next <b>Q</b> lines contain the queries to process, each contains one query. The format of queries is the same with the one described in the legend.</p>
<h3>Output</h3>
<p>Your output should contain exactly <b>Q<sub>0</sub></b> lines, where <b>Q<sub>0</sub></b> is the number of the queries of the zeroth type in the input.</p>
<p>For each query of the zeroth type you should to output one integer: the maximum flow in the corresponding graph. You should output the answers for the queries in the order they appear in the input.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 100 000;</li>
<li>0 ≤ <b>M</b> ≤ 200 000;</li>
<li>0 ≤ <b>Q</b> ≤ 200 000;</li>
<li>1 ≤ <b>U, V</b> ≤ <b>N</b>, for each edge;</li>
<li>1 ≤ <b>C</b> ≤ 10<sup>9</sup>, for each edge;</li>
<li>1 ≤ <b>S ≠ T</b> ≤ <b>N</b>, for each query of the zeroth type appeared in the input;</li>
<li>1 ≤ <b>X</b> ≤ <b>M</b>, for each query of the first type appeared in the input;</li>
<li>1 ≤ <b>NEW_CAPACITY</b> ≤ 10<sup>9</sup>, for each query of the first type appeared in the input;</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
6 6
1 2 1
4 5 8
4 3 2
6 5 5
1 6 4
2 3 1
6
0 4 5
0 1 3
0 1 2
1 1 5
1 6 5
0 1 2

<b>Output:</b>
9
3
2
7
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-06-2014</td>
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