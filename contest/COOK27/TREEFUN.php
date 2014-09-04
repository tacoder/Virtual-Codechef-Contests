<?php require("../../includes/header.php"); ?><h1>Tree Fun</h1><div class="content">

<p style="text-align:justify">David is a computer science student who loves his future profession. He is one of those who think that trees grow down, not up.</p>
<p style="text-align:justify">David likes connected undirected acyclic graphs, also known as trees. He especially likes solving problems about trees. Recently David found a piece of paper with a tree with <b>N</b> vertices drawn on it. He also found <b>M</b> queries on the same piece of paper, where each query was a non-empty list of some vertices of this tree. For each query, it was asked to find the number of vertices in the tree (which didn't belong to the list) such that if you removed this vertex and all edges incident to it from the tree, then all vertices from the list would belong to pairwise different connected components.</p>
<p style="text-align:justify">David spent seven unhappy days and six sleepless nights trying to solve this problem efficiently. He is still trying. As you're known to be a good problem solver, David's friend asked for your help. David won't sleep until he knows the answer to each query. Write a program which answers all the queries correctly.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains a single integer <b>T</b>, the number of test cases (no more than 5). Each test case is described as follows. The first line contains two integers <b>N</b> and <b>M</b> (2 ≤ <b>N</b> ≤ 50000, 1 ≤ <b>M</b> ≤ 50000), the number of vertices in the tree and the number of queries, respectively. <b>N</b>-1 lines follow, describing the edges of the tree. The <b>i<sup>th</sup></b> line contains two integers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b> (1 ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ <b>N</b>, <b>X<sub>i</sub></b> ≠ <b>Y<sub>i</sub></b>), the indices of the vertices connected by the <b>i<sup>th</sup></b> edge. Then <b>M</b> lines follow, describing the queries. The <b>i<sup>th</sup></b> line contains an integer <b>K<sub>i</sub></b> (2 ≤ <b>K<sub>i</sub></b> ≤ <b>N</b>) followed by <b>K<sub>i</sub></b> distinct integers <b>A<sub>i, j</sub></b> (1 ≤ <b>A<sub>i, j</sub></b> ≤ <b>N</b>), the indices of the vertices in the <b>i<sup>th</sup></b> query.</p>
<p style="text-align:justify">It is guaranteed that the given graph is a tree in all the test cases. The sum of all <b>K<sub>i</sub></b> in each test case doesn't exceed 100000.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case output <b>M</b> lines containing a single integer each -- the answer to the corresponding query from the input.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5 3
1 2
1 3
1 4
4 5
2 2 5
3 2 3 4
3 1 3 5

<b>Output:</b>
2
1
0
</pre><h3>Explanation</h3>
<p style="text-align:justify">In the first query, vertex 1 is such a vertex. If you remove vertex 1 and all the edges that connect 1 to other vertices, then vertices 2 and 5 will belong to separate connected components. Similarly, vertex 4 is also valid.</p>
<p style="text-align:justify">In the second query, vertex 1 is the only valid vertex. If you remove vertex 1 and all the edges that connect 1 to other vertices, then the connected components will be {2}, {3} and {4, 5}. It's easy to see that vertices 2 and 3 will belong to separate components, vertices 3 and 4 will belong to separate components, and vertices 2 and 4 will belong to separate components.</p>
<p style="text-align:justify">In the third query, you cannot remove a single vertex from the set {2, 4} (and the corresponding edges) so that any pair of vertices from the set {1, 3, 5} will be in separate connected components.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-10-2012</td>
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