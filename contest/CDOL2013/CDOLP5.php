<?php require("../../includes/header.php"); ?><h1>No Change In Flow</h1><div class="content">

<p>
You are given a flow graph <b>G</b>. The flow graph <b>G</b> has <b>N</b> vertices numbered from <b>1</b> to <b>N</b>. <b>1</b> is Source and <b>N</b> is Sink.<br />
There is no incoming edge into Source and no outgoing edge from Sink. There is either edge (u,v) or (v,u) in <b>G</b>. You are also given the capacity of each edges. Assume all capacities are positive integers.<br />
You calculated the maximum flow value in <b>G</b>. Now capacity of exactly one edge is increased by some positive integer value but not more than 1000.<br />
And you found that there was no change in maximum flow.<br />
Now your task is to find out that how many such edges are present in the graph <b>G</b>.
</p>
<h3>Input</h3>
<p>
First line will contain two integers <b>N</b> and <b>E</b> separated by space, where N is the number of vertices and<br />
E is the number of edges.<br />
Next E lines will contain 3 integers <b>u</b>, <b>v</b> and <b>c</b> separated by space. Which means is that there is an edge from <b>u</b> to <b>v</b> having capacity <b>c</b>.
</p>
<h3>Output</h3>
<p>
You have to output an integer which is the number of edges(one at a time) for which increase in their capacity by not more than 1000 will not lead to increase in maximum flow.
</p>
<h3>Input Constrain:</h3>
<pre>
2 &lt;= N &lt;= 50
1 &lt;= E &lt;= Maximum possible edges in graph
u != v
1 &lt;= c &lt;= 100000

</pre><h3>Example:</h3>
<pre>
<b>Input:</b>
4 5
1 2 8
1 3 10
2 3 5
2 4 2
3 4 3

<b>Output:</b>
3

</pre><p><b>Explanation:</b></p>
<p>
Increasing the capacity of edge (1,2),(1,3) and (2,3) (INDIVIDUALLY) does not have any effect on maximum flow.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhics1">abhics1</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2013</td>
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