<?php require("../../includes/header.php"); ?><h1>Stepping Up</h1><div class="content">

<h3>Statement</h3>
<p>
Given a directed graph G with N vertices and M edges. For each vertex u, you must assign positive integer F(u) such that:  <br/></br/></p>
<ol>
<li> For each edge e from a to b, F(b) > F(a) </li>
<li> The maximum value m = max( F(u) ) is minimized </li>
</ol>
<p><br/><br />
Output the maximum value m. If no such assignment is possible output "IMPOSSIBLE" (quotes for clarity). <br/></br/></br/></p>
<h3>INPUT FORMAT</h3>
<p>
First line of input contains a number t, the number of test cases. <br/><br />
Each test case contain starts with two space seperated integers N and M, denoting the number of vertices and the number of edges in the graph respectively. <br/><br />
Each of the following M lines contain two space seperated integers a b denoting an edge from vertex a to vertex b.  <br/><br />
There can be multiple edges between two vertices a and b. <br/>
</br/></br/></br/></br/></p>
<h3>OUTPUT FORMAT</h3>
<p>For each testcase output the maximum value m or "IMPOSSIBLE" if no assignment is possible.</p>
<h3>SAMPLE INPUT</h3>
<pre>
2
2 2
1 2
2 1
3 2
1 2
1 3
</pre><h3>SAMPLE OUTPUT</h3>
<pre>
IMPOSSIBLE
2
</pre><h3>CONSTRAINTS</h3>
<pre>
t &lt;= 20
N &lt;= 10000
M &lt;= 20000
1 &lt;= a,b &lt;= N
</pre><h3>EXPLANATION</h3>
<pre>
A feasible assignment for the second testcase is: 

Vertex	             Number
1			1
2			2
3			2

So the maximum value is 2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anshuman_singh">anshuman_singh</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-09-2010</td>
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