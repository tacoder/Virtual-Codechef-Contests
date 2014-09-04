<?php require("../../includes/header.php"); ?><h1>Paint the Tree</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/mandarin2/TREERGB.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/russian/TREERGB.pdf">Russian</a> as well.</h3>
<p>You are given a rooted tree with <b>N</b> nodes. You would like to paint each node of the tree in one of three possible colors: red, green, and blue. The following conditions must be fulfilled:</p>
<ul>
<li>
For each node painted red, there must be no more than <b>R</b> red nodes in its subtree (including this node).
</li>
<li>
For each node painted green, there must be no more than <b>G</b> green nodes in its subtree (including this node).
</li>
<li>
For each node painted blue, there must be no more than <b>B</b> blue nodes in it's subtree (including this node).
</li>
</ul>

<p>
Find the number of ways to paint the tree and output it modulo <b>1000000007</b>.
</p>
<h3>Input</h3>
<p>The first line contains four integers <b>N</b>, <b>R</b>, <b>G</b> and <b>B</b>. </p>
<p>The following <b>N-1</b> lines contain pairs of the nodes' numbers <b>U<sub>i</sub></b> and <b>V<sub>i</sub></b> (one pair per line), describing the edges of the tree.</p>
<p>
The nodes are numbered from <b>1</b> to <b>N</b>, inclusive, and the node with the index <b>1</b> is the root of the tree.
</p>
<h3>Output</h3>
<p>Output the answer to the problem on the first line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>300</b></li>
<li><b>0</b> ≤ <b>R</b>, <b>G</b>, <b>B</b> ≤ <b>300</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input #1:</b>
3 1 1 1
1 2
3 1

<b>Output #1:</b>
12
</pre>
<pre><b>Input #2:</b>
8 2 1 3
1 2
1 4
5 4
7 4
3 2
4 6
8 6

<b>Output #2:</b>
613
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-08-2014</td>
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