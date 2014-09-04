<?php require("../../includes/header.php"); ?><h1>Shortest Path in Binary Trees</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/BINTREE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/BINTREE.pdf">Russian</a>.</h3>
<p>Consider an infinite full binary tree (each node has two children except the leaf nodes) defined as follows. For a node labelled <b>v</b> its left child will be labelled <b>2*v</b> and its right child will be labelled <b>2*v+1</b>. The root is labelled as <b>1</b>.</p>
<p>You are given <b>N</b> queries of the form <b>i j</b>. For each query, you have to print the length of the shortest path between node labelled <b>i</b> and  node labelled <b>j</b>.
</p>
<h3>Input</h3>
<p>First line contains <b>N</b>, the number of queries. Each query consists of two space separated integers <b>i</b> and <b>j</b> in one line.</p>
<h3>Output</h3>
<p>For each query, print the required answer in one line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>i,j</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 2
2 3
4 3

<b>Output:</b>
1
2
3
</pre><h3>Explanation</h3>
<p>For first query, 1 is directly connected to 2 by an edge. Hence distance 1.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-03-2014</td>
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