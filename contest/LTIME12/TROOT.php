<?php require("../../includes/header.php"); ?><h1>Roots of a Tree</h1><div class="content">
<h3>Read problems statements in <a target="_blank" href="/download/translated/LTIME12/mandarin/TROOT.pdf">Mandarin Chinese </a> and <a target="_blank" href="/download/translated/LTIME12/russian/TROOT.pdf">Russian</a>.</h3>
<p>You are given a tree with <b>N</b> nodes, numbered from 1 to <b>N</b>. You need to handle the queiries of the following two types:</p>
<h3>Read problems statements in <a target="_blank" href="/download/translated/LTIME12/mandarin/TROOT.pdf">Mandarin Chinese </a> and <a target="_blank" href="/download/translated/LTIME12/russian/TROOT.pdf">Russian</a>.</h3>
<p>You are given a tree with <b>N</b> nodes, numbered from 1 to <b>N</b>. You need to handle the queiries of the following two types:</p>
<ul>
<li>+ <b>x</b> <b>y</b>. Add a path going from the node <b>x</b> to the node <b>y</b> (or from <b>y</b> to <b>x</b> because it's actually irrelevant). We will never add the path that is already a present one.</li>
<li>- <b>x</b> <b>y</b>. Delete the path going from the node <b>x</b> to the node <b>y</b>. It is guaranteed that such path exists and after its last adding it haven't yet been deleted.</li>
</ul>
<p>If we root the tree at the node <b>t</b> and for every present (added and not yet deleted) path, the least common ancestor of its endpoints is also one of the endpoints of this path, then we call the node <b>t</b> a possible root.</p>
<p>We ask you to output the product of all the possible roots' indexes after every query.</p>
<h3>Input</h3>
<p>The first line of input contains two single space separated integers <b>N</b> and <b>M</b> - the number of nodes in the tree and the number of queries respectively.</p>
<p>The following <b>N-1</b> lines contain pairs of integers denoting the edges of a tree. The pair <b>X Y</b> corresponds to the edge between the nodes <b>X</b> and <b>Y</b>.</p>
<p>Then there are <b>M</b> lines denoting the queries in the form described above.</p>
<h3>Output</h3>
<p>Output <b>M</b> lines. Output the product of all the possible roots' numbers modulo <b>10<sup>9</sup>+7</b> after the performing of the <b>i</b>-th query on the <b>i</b>-th line. If there are no possible roots, output <b>-1</b> on this line instead.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>X, Y</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>x, y</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>100</b> - 42 points.</li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>5</sup></b> - 58 points.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 4
1 2
2 3
3 4
4 5
+ 1 3
+ 3 5
- 1 3
- 3 5

<b>Output:</b>
60
15
30
120
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-04-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>