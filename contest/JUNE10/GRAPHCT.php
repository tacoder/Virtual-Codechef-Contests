<?php require("../../includes/header.php"); ?><h1>Graph Counting</h1><div class="content">

<p>
First for some definitions :
</p>
<p>
Let G = (V,E) be an undirected graph containing an edge e = (u,v) with u ≠ v. Let f be a function which maps every vertex in V\{u,v} to itself, and otherwise, maps it to a new vertex w. The contraction of e results in a new graph G′ = (V′,E′), where V′ = (V\{u,v})∪{w}, E′ = E\{e}, and for every x ∈ V, x′ = f(x) ∈ V′ is incident to an edge e′ ∈ E′ if and only if, the corresponding edge, e ∈ E is incident to x in G.
</p>
<p>
An undirected graph H is called a minor of the graph G if H is isomorphic to a graph that can be obtained by zero or more edge contractions on a subgraph of G.
</p>
<p>
A graph is connected if there exists a path between any two vertices. A biconnected graph is one which remains connected even after the removal of any one vertex and all edges incident to it.
</p>
<p>
A simple graph is one which does not have more than one edge between any pair of vertex, nor does it have an edge from a vertex to itself.
</p>
<p>
You need to count how many simple biconnected graphs having n vertices and m edges exist such that they do not have a cycle of length 5 as a minor. Two graphs are considered distinct if there exist vertices having labels i and j which are adjacent in the first graph, but not in the second graph.
</p>
<p>
Input :
</p>
<p>
The first line contains the number of test cases T. Each of the next lines contains two integers n and m.
</p>
<p>
Output :
</p>
<p>
Output T lines, one corresponding to each test case. For a test case, output the number of graphs as described in the question. Output the answer modulo 1000000007.
</p>
<pre>
Sample Input :
5
1 0
3 2
3 3
4 4
5 10

</pre><pre>
Sample Output :
1
0
1
3
0

</pre><pre>
Constraints :
1 &lt;= T &lt;= 2000
1 &lt;= n &lt;= 100
0 &lt;= m &lt;= 10000
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/syco">syco</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-04-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>