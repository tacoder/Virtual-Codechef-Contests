<?php require("../../includes/header.php"); ?><h1>Queries on tree again!</h1><div class="content">

<p>You are given a simple connected graph <b>G</b> with <b>N</b> vertices and <b>N</b> edges (a simple graph is an un-directed graph that has no loops and no more than one edge between any two different vertices).<br /> It is obvious that the graph <b>G</b> contains exactly one cycle and you can assume that the length of this cycle is odd (there are odd number of vertices in this cycle).<br /> The vertices are numbered from 1 to <b>N</b>. Each edge is assigned a corresponding integer weight.<br /> Your mission is to stimulate two types of queries :</p>
<ul>
<li> Update query represented by <b>f u v</b>: change the sign of all the weights of the edges on the shortest path (you can see the definition of shortest path in this problem later on) from vertex <b>u</b> to vertex <b>v</b>. </li>
<li> Find query represented by <b>? u v</b>: On the shortest path from vertex <b>u</b> to vertex <b>v</b>, find the (possibly empty) set of consecutive edges such that the sum of the weights is maximal. In other words, let's define the shortest path from <b>u</b> to <b>v</b> as <b>a_1, a_2, ..., a_k</b> (where <b>a_1</b> = <b>u</b> and <b>a_k</b> = <b>v</b>). You have to find <b>a_i</b> and <b>a_j</b> such that <b>i</b> &lt;= <b>j</b> and the sum of the weights of the edges of the path <b>a_i, a_(i + 1), ..., a_j</b> is as large as possible. You just have to find that sum. </li>
</ul>
<p>The shortest path between two vertices <b>u</b> and <b>v</b> is the path connecting them with the minimal number of vertices. In this problem, it is obvious that there is only one shortest path between any pair of vertices of <b>G</b>.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>N</b>. Each of the next <b>N</b> lines represents an edge of the graph with three integers <b>u v c</b> which mean there is an edge connecting vertices <b>u</b> and <b>v</b> and it is has weight <b>c</b>.<br /> The next line contains an integer <b>Q</b>, the number of queries. Each of the next <b>Q</b> lines represents a query in one of the two forms above.</p>
<h3>Output</h3>
<p>For each <b>find</b> query, print the result of the query (the maximal sum) on a line.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 100,000</li>
<li>1 ≤ <b>u</b>, <b>v</b> ≤ <b>N</b></li>
<li>-10,000 ≤ <b>c</b> ≤ 10,000</li>
<li>1 ≤ <b>Q</b> ≤ 100,000</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
6
1 2 1
2 3 1
3 1 1
2 4 1
4 5 1
3 6 1
3
? 5 6
f 2 3
? 5 6

<b>Output:</b>
4
2
</pre><h3>Explanation</h3>
<p>The shortest path from 5 to 6 is 5, 4, 2, 3, 6. All the edges on this path have weight 1 so the answer to the first query is 4. After the second query, the weight of the edge (2, 3) is - 1. The edges on the path 5, 4, 2, 3, 6 have weights 1, 1, -1, 1 respectively. so the answer for the third query is 2.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-12-2012</td>
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