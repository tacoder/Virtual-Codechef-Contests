<?php require("../../includes/header.php"); ?><h1>Union on Tree</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/BTREE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/BTREE.pdf">Russian</a>.</h3>
<p>There is a country whose road system is a tree, the nodes in the tree represent cities and the edge is the road between them, and each edge is of unit length. For safety, the government should put guards to protect all cities. But the government is in shortage of money. So they might not be able to protect all cites.</p>
<p>You're concerned about the country's safety, so you get the information of the guards. And you know that on the i-th day, there are k[i] guards on the road system, and j-th guard is on node a[j] and can protect every node whose distance to a[j] is not larger than r[j]. And you want to know how many nodes in the road system is protected by at least one guard.</p>
<h3>Input</h3>
<p>The first line contains an integer n, denoting the number of the cities.</p>
<p>Then n-1 lines follows, each line contains 2 integers a and b, denoting there is an edge between city a and b (1-based index).</p>
<p>The next line contains an integer Q, denoting the number of the days.</p>
<p>Then Q lines's description follows, each contains an integer k, denoting the number of guards in that day, and k integer pairs a[i],r[i] denoting the guards's information, for simplicity, no node will have more than 1 guard.</p>
<h3>Constraints</h3>
<ul>
<li> 1 ≤ n, Q ≤ 50000. </li>
<li> The total number of guards in the queries ≤ 500000. </li>
</ul>

<h3>Output</h3>
<p>For each day, output the answer in one line.</p>
<h3>Example</h3>
<pre><strong>Input:</strong></pre><pre>
20
1 2
1 3
1 4
4 5
4 6
2 7
4 8
5 9
7 10
2 11
9 12
8 13
1 14
12 15
9 16
7 17
12 18
1 19
6 20
5
2 9 3 12 5 
3 3 3 4 1 11 5 
3 3 3 10 4 19 2 
2 3 4 10 2 
5 5 4 11 2 16 2 18 1 19 2
</pre><pre><strong>Output:</strong></pre><pre>
16
16
13
16
18
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wjmzbmr">wjmzbmr</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-08-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>