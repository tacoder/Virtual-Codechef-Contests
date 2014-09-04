<?php require("../../includes/header.php"); ?><h1>Permutation Game</h1><div class="content">

<p>
Harsha is given 9 integers a<sub>1</sub>, a<sub>2</sub>, a<sub>3</sub>, .... a<sub>9</sub>. This denotes that he is given a<sub>1</sub> 1's, a<sub>2</sub> 2's,......a<sub>9</sub> 9's. Let 'x' = (a<sub>1</sub>  + a<sub>2</sub> + ...a<sub>9</sub>). Now, Harsha makes all possible 'x' digit numbers by using these given digits. Let S be the set of all such numbers which he makes. Now he constructs a directed graph containing |S| nodes, in which each node denotes a unique number from the set. For all numbers u,v belonging to S, there is a directed edge from node 'u' to node 'v in the graph iff u>v. It is easy to note that we obtain a directed acyclic graph. Whats more, the edges of the graph are weighted. The weight of an edge joining node 'u' and node 'v' is equal to u+v. Now, Deepak decides to test Harsha's memory and gives him 'Q' queries. Each query consists of two numbers 'u', 'v' (u>v, both belonging to the set S). For each query Harsha must provide the following answers:</p>
<p>1) How many distinct paths are there from node 'u' to node 'v' in the graph.<br />
<br/>2) For each distinct path 'i' from node 'u' to node 'v', let S<sub>i</sub> denote the sum of weights of all edges on this path. Calculate the value of sum(S<sub>i</sub>), for every distinct path 'i' from node 'u' to node 'v'.</br/></p>
<h3>Input</h3>
<p>
The first line of input contains 9 integers a<sub>1</sub>, a<sub>2</sub>, ....a<sub>9</sub>.<br />
The second line contains a single integer 'Q', denoting the number of queries.<br />
Each of the next 'Q' lines contain 2 numbers 'u' and 'v'.</p>
<h3>Output</h3>
<p>
For each query, output 2 space separted integers denoting the number of distinct paths and sum of weights of all paths respectively. Since the output can be large, output these quantities modulo 1000000007.<br />
<br/></br/></p>
<p>Two paths (v<sub>1</sub>, v<sub>2</sub>, .... v<sub>m</sub>) and (u<sub>1</sub>, u<sub>2</sub>, .... u<sub>n</sub>) are distinct if:<br />
<br/>1) m != n<br />
<br/>2) m = n, there exists some index 'k' (1 &lt;= k &lt;= m) such that v<sub>k</sub> != u<sub>k</sub></br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2 0 1 0 0 0 0 0 0
1
311 113

<b>Output:</b>
2 1110

<b>Constraints:</b>
1 &lt;= (a<sub>1</sub>  + a<sub>2</sub> + .... a<sub>9</sub>) &lt;= 500
1 &lt;= Q &lt;= 20
a<sub>i</sub> >= 0

</pre><p><b>Explanation:</b></p>
<p>Test case 1: The set S for the above problem is {311, 113, 131}. The edges of the graph are 311->131, 311->113, 131->113. There are 2 distinct paths from 311 to 113, namely (311->131->113) and (311->113). The sum of weights of edges on path-1 = (311+131)+(131+113) = 686. For path-2, the sum of weights of edges = (311+113) = 424. Therefore, answer  = 686 + 424 = 1110.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suh_ash2008">suh_ash2008</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>15 sec</td>
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