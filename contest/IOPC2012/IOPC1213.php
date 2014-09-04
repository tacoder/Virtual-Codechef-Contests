<?php require("../../includes/header.php"); ?><h1>Colouring graphs</h1><div class="content">

<p align="justify">In this problem you will be given a simple acyclic graph and asked to perform update or query operations on the graph. Update operations will involve adding an edge to the graph or removing one. You are assured that adding the given edges will not introduce cycles in the graph. Your task is to answer the queries which ask you to find the number of ways the graph can be coloured using K colours such that no two adjacent vertices have the same colour.</p>
<h3>Input</h3>
<p align="justify">The first line of the input gives T, the number of test cases (T ≤ 100). Following this are the descriptions of the test cases. The description of each test case starts with a line containing three space separated integers N, M and Q (1 ≤ N ≤ 100, 0 ≤ M &lt; N; Q ≤ 1000). N and M are the number of vertices and edges in the graph respectively (with numbering of vertices and edges starting from 0), while Q is the total number of update and query operations you will be asked to perform. Following this are M lines of the form i j, denoting that there is an edge between i and j. This is followed by Q lines, each of which will be in one of the three forms:</p>
<ul>
<li> 0 a b : Add an edge between the existing vertices a and b</li>
<li> 1 a b : Remove the existing edge between the vertices a and b</li>
<li> K (K &gt; 1) : Report the number of colourings of the graph with K colours such that no pair of adjacent vertices is coloured same</li>
</ul>
<p></p>
<p align="justify">You are assured that the graph remains simple and acyclic at every stage.</p>
<h3>Output</h3>
<p align="justify">For each query of type K (K &gt; 1), output the number of ways the graph can be coloured validly using K colours. Since the answer could be very large, output it modulo 100000007.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
3 1 5
0 1
4
0 1 2
3
1 0 1
2

<b>Output:</b>
48
12
4
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-01-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>