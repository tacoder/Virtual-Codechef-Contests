<?php require("../../includes/header.php"); ?><h1>Tree and Queries</h1><div class="content">
<p> </p>
<p>
You are given a rooted tree with <b>N</b> nodes. Tree is rooted at node 1. Each node of the tree contains some value. Initially value of each node will be given.
</p>
<p>
You are given <b>Q</b> queries. Queries can be of two types, type U and type Q.</p>
<ul>
<li> Type U: This query is represented by U x v, which means that you<br />
	have to add value v to node x. </li>
<li> Type Q: This query is represented by Q x, which means that you<br />
	have to output number of nodes in the subtree rooted at node x having value equal to zero. </li>
</ul>

<h3>Input</h3>
<p>
First line of the input contains two space separated integers <b>N</b> and <b>Q</b>.
</p>
<p>
For next N - 1 lines, each line contains two space separated integers u, v<br />
denoting that there is an edge between u and v in the tree. It is guaranteed that 1 ≤ u, v ≤ N, u != v.<br />
It is also guaranteed that no edge is repeated in the input.
</p>
<p>
Next line contains N space separated integers denoting the initial weight of each node in order, 1 to N. Weights will be between -10^9 to 10^9 (both inclusive).
</p>
<p>
For next Q lines, each line contains a query of either type U or type Q.
</p>
<h3>Output</h3>
<p>
For each query of type Q, output a single line containing an integer corresponding to answer of the query.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10^5</b></li>
<li>For query of type U, <b>-10^9</b> ≤ <b>v</b> ≤ <b>10^9</b></li>
<li>For query of type U and V, <b>1</b> ≤ <b>x</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 3                                                                                                      
1 2
1 3
2 4
5 -2 0 3
Q 1
U 3 1
Q 1

<b>Output:</b>
1
0

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>