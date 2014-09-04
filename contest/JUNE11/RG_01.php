<?php require("../../includes/header.php"); ?><h1>Maximal Score Path</h1><div class="content">

<p><h3>Problem Statement</h3>
</p><p> Given a weighted and undirected graph G = (V, E), let us define the score of an edge as its weight, and the score of a path as the minimum of the scores of its edges. For each pair of vertices (u, v), let us define a best path as a path with the maximal score, that starts at u and ends at v. Your task is to find out the score of a best path over all pairs of distinct vertices (u, v) given the description of the graph G.</p>
<h3>Input</h3>

<p> The first line contains V, the number of vertices, and E, the number of edges in the graph. The graph will be weighted, undirected, simple (no self loops and no parallel edges), and connected. Each of the next E lines contains three non-negative integers u, v, and w, denoting that there is an edge (u, v) in the graph with a score of w. u and v are guaranteed to be distinct, and no edge will repeat in the input.</p>
<h3>Output</h3>

<p> Output a total of V lines each containing V integers. The vth integer on the uth line should be 0 if u = v, or the score of a best path that starts at vertex u and ends at vertex v.</p>
<h3>Constraints</h3>
<p>2 ≤ V ≤ 1000<br />
<br />V - 1 ≤ E ≤ V(V - 1)/2<br />
<br />0 ≤ u, v ≤ V - 1<br />
<br />0 ≤ w ≤ 10^8</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 3
0 1 1
1 2 2
0 2 3

<b>Output:</b>
0 2 3
2 0 2
3 2 0

<h3> Warning</h3> Large Input/Output. Use faster Input/Output techniques.</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rahulakaneo">rahulakaneo</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-04-2011</td>
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