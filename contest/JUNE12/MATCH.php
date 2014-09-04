<?php require("../../includes/header.php"); ?><h1>Expected Maximum Matching</h1><div class="content">

<p>You are given two sets of vertexes <b>U = {U[1], U[2], ..., U[N]}</b> and <b>V = {V[1], V[2], ..., V[M]}</b>. All <b>N + M</b> vertexes here are different. You are also given the matrix <b>P</b> of size <b>N x M</b> composed of real numbers from the segment <b>[0, 1]</b>. The number that stands at the intersection of the <b>i</b><sup>th</sup> row and the <b>j</b><sup>th</sup> column of this matrix is denoted by <b>P[i][j]</b> and means the probability that the vertexes <b>U[i]</b> and <b>V[j]</b> are connected by the bidirected edge. In other words, you are given a <a href="http://en.wikipedia.org/wiki/Complete_bipartite_graph">complete bipartite graph</a> where each edge occurs with some probability. Your task is to find <b>the expected size of the maximum matching</b> of this graph.</p>
<p>What exactly does it mean?</p>
<p>Let's call our complete bipartite graph with random edges as <i>random bipartite graph</i>.<br />
Consider some arbitrary <a href="http://en.wikipedia.org/wiki/Bipartite_graph">bipartite graph</a> <b>G = (U, V, E)</b>. Denote by <b>P(G)</b> the probability that our random bipartite graph is equal to <b>G</b>. How to calculate <b>P(G)</b>? Consider some pair of vertexes <b>(U[i], V[j])</b>. If these vertexes are connected by the edge in <b>G</b> then put <b>P<sub>G</sub>[i][j] = P[i][j]</b> otherwise put <b>P<sub>G</sub>[i][j] = 1 – P[i][j]</b>. Then <b>P(G)</b> is equal to the product of <b>P<sub>G</sub>[i][j]</b> for all <b>N ∙ M</b> pairs of <b>(i, j)</b>, where <b>1 ≤ i ≤ N</b> and <b>1 ≤ j ≤ M</b>.</p>
<p>Next, denote by <b>MM(G)</b> the size of the <a href="http://en.wikipedia.org/wiki/Maximum_matching#Definition">maximum matching</a> in the graph <b>G</b>. In other words, <b>MM(G)</b> is the size of the largest set of edges of <b>G</b> such that no two edges share a common vertex. </p>
<p>Finally, <b>the expected size of the maximum matching</b> is the sum of products <b>P(G) ∙ MM(G)</b> for all possible bipartite graphs <b>G</b> with parts <b>U</b> and <b>V</b>. Note that there are <b>2<sup> N ∙ M </sup></b> such graphs in all. So don't try to calculate the answer directly by definition if you do not want to get verdict <b>Time Limit Exceeded</b> ;)</p>
<h3>Input</h3>
<p>The first line of the input file contains two integers <b>N</b> and <b>M</b>. Each of the following <b>N</b> lines contains <b>M</b> real numbers. <b>j</b><sup>th</sup> number in the <b>i</b><sup>th</sup> line of these <b>N</b> lines denotes <b>P[i][j]</b>, the probability that the vertexes <b>U[i]</b> and <b>V[j]</b> are connected by the direct edge. Each pair of consecutive numbers in every line is separated by exactly one space.</p>
<h3>Output</h3>
<p>In the only line of the output file print the expected size of the maximum matching. Your answer will be considered as correct if it has an absolute error less than <b>10<sup>-6</sup></b>.</p>
<h3>Constraints</h3>
<p><b>1</b> ≤ <b>N</b> ≤ <b>5</b></p>
<p><b>1</b> ≤ <b>M</b> ≤ <b>100</b></p>
<p><b>0</b> ≤ <b>P[i][j]</b> ≤ <b>1</b></p>
<p><b>P[i][j]</b> will have exactly <b>5</b> digits after the decimal point</p>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
3 3
0.38064 0.30000 0.29486
0.41715 0.90000 0.67837
0.53316 1.00000 1.00000

<b>Output 1:</b>
2.575940


<b>Input 2:</b>
2 2
0.40000 1.00000
0.10000 1.00000

<b>Output 2:</b>
1.46
</pre><h3>Explanation</h3>
<p>In the second example we have four different graphs with non-zero value of <b>P(G)</b>. Their adjacent matrices with marked maximum matching as well as the values of <b>MM(G)</b> and <b>P(G)</b> are listed in the table below.</p>
<p><table border="1">
<tbody>
<tr>
<td align="center"><b>Adjacent matrix</b></td>
<td align="center"><b>MM(G)</b></td>
<td align="center"><b>P(G)</b></td>
</tr>
<tr>
<td>
<table border="1" align="center">
<tbody>
<tr>
<td>0</td>
<td bgcolor="yellow">1</td>
</tr>
<tr>
<td>0</td>
<td>1</td>
</tr>
</tbody>
</table>
</td>
<td align="center"><b>1</b></td>
<td align="right">(1 – 0.4) ∙ (1 – 0.1) = 0.6 ∙ 0.9 = <b>0.54</b></td>
</tr>
<tr>
<td>
<table border="1" align="center">
<tbody>
<tr>
<td bgcolor="yellow">1</td>
<td>1</td>
</tr>
<tr>
<td>0</td>
<td bgcolor="yellow">1</td>
</tr>
</tbody>
</table>
</td>
<td align="center"><b>2</b></td>
<td align="right">0.4 ∙ (1 – 0.1) = 0.4 ∙ 0.9 = <b>0.36</b></td>
</tr>
<tr>
<td>
<table border="1" align="center">
<tbody>
<tr>
<td>0</td>
<td bgcolor="yellow">1</td>
</tr>
<tr>
<td bgcolor="yellow">1</td>
<td>1</td>
</tr>
</tbody>
</table>
</td>
<td align="center"><b>2</b></td>
<td align="right">(1 – 0.4) ∙ 0.1 = 0.6 ∙ 0.1 = <b>0.06</b></td>
</tr>
<tr>
<td>
<table border="1" align="center">
<tbody>
<tr>
<td bgcolor="yellow">1</td>
<td>1</td>
</tr>
<tr>
<td>1</td>
<td bgcolor="yellow">1</td>
</tr>
</tbody>
</table>
</td>
<td align="center"><b>2</b></td>
<td align="right">0.4 ∙ 0.1 = <b>0.04</b></td>
</tr>
</tbody>
</table>
</p>
<p>So the answer is <b>0.54 ∙ 1 + 0.36 ∙ 2 + 0.06 ∙ 2 + 0.04 ∙ 2 = 1.46</b>.</p>
    </div><table border="1">
<tbody>
<tr>
<td align="center"><b>Adjacent matrix</b></td>
<td align="center"><b>MM(G)</b></td>
<td align="center"><b>P(G)</b></td>
</tr>
<tr>
<td>
<table border="1" align="center">
<tbody>
<tr>
<td>0</td>
<td bgcolor="yellow">1</td>
</tr>
<tr>
<td>0</td>
<td>1</td>
</tr>
</tbody>
</table>
</td>
<td align="center"><b>1</b></td>
<td align="right">(1 – 0.4) ∙ (1 – 0.1) = 0.6 ∙ 0.9 = <b>0.54</b></td>
</tr>
<tr>
<td>
<table border="1" align="center">
<tbody>
<tr>
<td bgcolor="yellow">1</td>
<td>1</td>
</tr>
<tr>
<td>0</td>
<td bgcolor="yellow">1</td>
</tr>
</tbody>
</table>
</td>
<td align="center"><b>2</b></td>
<td align="right">0.4 ∙ (1 – 0.1) = 0.4 ∙ 0.9 = <b>0.36</b></td>
</tr>
<tr>
<td>
<table border="1" align="center">
<tbody>
<tr>
<td>0</td>
<td bgcolor="yellow">1</td>
</tr>
<tr>
<td bgcolor="yellow">1</td>
<td>1</td>
</tr>
</tbody>
</table>
</td>
<td align="center"><b>2</b></td>
<td align="right">(1 – 0.4) ∙ 0.1 = 0.6 ∙ 0.1 = <b>0.06</b></td>
</tr>
<tr>
<td>
<table border="1" align="center">
<tbody>
<tr>
<td bgcolor="yellow">1</td>
<td>1</td>
</tr>
<tr>
<td>1</td>
<td bgcolor="yellow">1</td>
</tr>
</tbody>
</table>
</td>
<td align="center"><b>2</b></td>
<td align="right">0.4 ∙ 0.1 = <b>0.04</b></td>
</tr>
</tbody>
</table><table border="1" align="center">
<tbody>
<tr>
<td>0</td>
<td bgcolor="yellow">1</td>
</tr>
<tr>
<td>0</td>
<td>1</td>
</tr>
</tbody>
</table><table border="1" align="center">
<tbody>
<tr>
<td bgcolor="yellow">1</td>
<td>1</td>
</tr>
<tr>
<td>0</td>
<td bgcolor="yellow">1</td>
</tr>
</tbody>
</table><table border="1" align="center">
<tbody>
<tr>
<td>0</td>
<td bgcolor="yellow">1</td>
</tr>
<tr>
<td bgcolor="yellow">1</td>
<td>1</td>
</tr>
</tbody>
</table><table border="1" align="center">
<tbody>
<tr>
<td bgcolor="yellow">1</td>
<td>1</td>
</tr>
<tr>
<td>1</td>
<td bgcolor="yellow">1</td>
</tr>
</tbody>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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