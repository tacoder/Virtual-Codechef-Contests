<?php require("../../includes/header.php"); ?><h1>Generalized Spanning Trees</h1><div class="content">

<p>
A spanning tree of an undirected, connected graph (V,E) with vertex set V and edge set E is a subset of edges F such that the graph (V,F) is connected and has no cycles. After a few moments thought, one realizes that an equivalent way to say this is to say:</p>
<ul>
<li>1) |F| = |V| - 1</li>
<li>2) For any non-empty subset of nodes S, the number of edges with <b>both</b> endpoints in S is does not exceed |S|-1.</li>
</ul>

<p>
There is a fairly simple algorithm that can determine if a set of edges F is indeed a spanning tree of a graph.  Simply check that |F| = |V| - 1 and that the graph (V,F) is connected using your favorite connectivity algorithm.</p>
<p>
As in all topics in mathematics, the next step is to generalize what is known.  So, consider the following generalization of spanning trees.  Say a generalized spanning tree (GST) of a graph (V,E) is a function f from the set of edges E = {e<sub>1</sub>, e<sub>2</sub>, ..., e<sub>M</sub>} to the real interval [0,1] such that the following conditions hold:</p>
<ul>
<li>1) f(e<sub>1</sub>) + f(e<sub>2</sub>) + ... + f(e<sub>M</sub>) = |V| - 1</li>
<li>2) For any non-empty subset of nodes S, the sum of the f(e) values for edges e with <b>both</b> endpoints in S does not exceed |S|-1.</li>
</ul>

<p>
One can see that this generalizes the notion of a spanning tree since spanning trees (in the classical sense) correspond to GSTs by setting f(e) = 1 if e is in the spanning tree and f(e) = 0 if e is not in the spanning tree.</p>
<p>
Your task is to determine if a given function is a GST of a given graph.</p>
<h3>Input:</h3>

<p>
The first line contains a single integer T (about 20) indicating the number of test cases to follow.</p>
<p>
Each test case begins with two integers N and M where N is the number of nodes and M is the number of edges. The following M lines describe the edges, one per line. Each line contains three values u, v, f where 1 &lt;= u, v &lt;= n are the endpoints of the edge and f is a rational number between 0 and 1 (inclusive).  This rational number is the value of the edge in the proposed GST.</p>
<p>
The rational numbers are always presented as n/d (even if d=1) where both n and d are non-negative and have no common factors.</p>
<p>
The input graphs have no parallel edges or loops and are, of course, undirected. Consecutive cases will be separated by a blank line (including a blank line preceding the first case).</p>
<p>
Bounds: 2 &lt;= N &lt;= 50, 1 &lt;= M &lt;= 100, and no denominator of any fraction in the input exceeds 30.</p>
<h3>Output:</h3>

<p>
If the function is a GST, you are to simply print a single line saying "GST".</p>
<p>
If the first constraint (the sum of the values of all edges is N-1) is violated, then you should print a single line displaying just the number 1.</p>
<p>
Otherwise, if constraint 1) holds but constraint 2) is violated for some non-empty set S, you should print three lines. The first line simply contains the integer 2. The second contains the size of a non-empty<br />
subset of the nodes whose corresponding constraint is violated. The third line lists the nodes (in any order) that are part of such a set with a violated constraint (the number of nodes is as reported in the second line).</p>
<p>
If there are multiple non-empty sets whose constraints are violated, then any will do. Print a blank line after the output for each case.</p>
<h3>Example:</h3>
<h3>Input:</h3>
<pre>
3

3 3
1 2 2/3
2 3 2/3
3 1 2/3

3 3
1 2 1/1
2 3 1/1
3 1 1/1

4 6
1 2 1/5
1 3 1/5
1 4 1/5
2 3 4/5
2 4 4/5
3 4 4/5
</pre><h3>Output:</h3>
<pre>
GST

1

2
3
2 3 4
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/keshav_57">keshav_57</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-04-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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