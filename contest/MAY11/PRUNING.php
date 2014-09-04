<?php require("../../includes/header.php"); ?><h1>Pruning Trees</h1><div class="content">

<p>
You have a tree (an acyclic, connected graph) with edge weights, but it is far too big. You are to prune the tree by deleting some edges so that the following property holds. For each connected component C of the pruned tree, there is some node r<sub>C</sub> such that for every node v in C, the total weight of the edges on the path between v and r<sub>C</sub> is at most some given value d.</p>
<p>
You happen to like heavy trees so you want to delete the minimum possible total edge weight to satisfy this property.</p>
<h3>Input</h3>

<p>
The first line of each test case is an integer T ≤ 40 indicating the number of test cases to follow. The first line of each test case contains two integers n and d that indicate there are n nodes in the tree and d is as specified in the problem description. Suppose the nodes in the tree are indexed by integers between 0 and n-1. Then n-1 lines follow, each containing three integers u,v, and w. This indicates that there is an edge of weight w between nodes u and v. The input will be such that the graph is connected with no cycles. No edge will be given more than once and no edge in the input will be a loop (<i>i.e.</i> u ≠ v for each input edge).</p>
<p>
Bounds: 1 ≤ n ≤ 100, 0 ≤ d ≤ 10<sup>9</sup>, and, for each edge u,v,w in the input, 0 ≤ u &lt; v ≤ n-1 and 1 ≤ w ≤ 10<sup>7</sup>.</p>
<h3>Output</h3>

<p>
The output for each test case consists of a single line containing a single integer denoting the maximum total weight of edges that can remain after deleting some edges so that the remaining graph satisfies the property described in the problem description.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5 10
0 1 10
1 2 9
1 3 10
3 4 9
10 1
0 1 1
0 2 1
1 3 1
1 4 1
2 5 1
2 6 1
2 7 1
6 8 1
6 9 1
7 2
0 1 1
0 2 2
1 3 1
1 4 2
2 5 2
2 6 7

<b>Output:</b>
29
7
7
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-01-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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