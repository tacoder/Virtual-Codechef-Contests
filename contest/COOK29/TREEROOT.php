<?php require("../../includes/header.php"); ?><h1>Root of the Problem</h1><div class="content">

<p>Chef has a binary tree. The binary tree consists of 1 or more nodes. Each node has a unique integer id. Each node has up to 2 children, which are identified by their ids, and each node is the child of at most 1 other node. A node <b>X</b> is considered to be an ancestor of node <b>Y</b> if node <b>Y</b> is a child of node <b>X</b> or if there is some node <b>Z</b> for which <b>X</b> is an ancestor of <b>Z</b> and <b>Y</b> is a child of <b>Z</b>. No node is an ancestor of itself.  A special node called the root node is an ancestor of all other nodes.</p>
<p>Chef has forgotten which node of his tree is the root, and wants you to help him to figure it out. Unfortunately, Chef's knowledge of the tree is incomplete. He does not remember the ids of the children of each node, but only remembers the sum of the ids of the children of each node.</p>
<h3>Input</h3>
<p>Input begins with an integer <b>T</b>, the number of test cases. Each test case begins with an integer <b>N</b>, the number of nodes in the tree. <b>N</b> lines follow with 2 integers each: the id of a node, and the sum of the ids of its children. The second number will be 0 if the node has no children.</p>
<h3>Output</h3>
<p>For each test case, output on a line a space separated list of all possible values for the id of the root node in increasing order. <b>It is guaranteed that at least one such id exists for each test case.</b></p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 50</li>
<li>1 ≤ <b>N</b> ≤ 30</li>
<li>All node ids are between 1 and 1000, inclusive</li>
</ul>
<h3>Sample Input</h3>
<pre>2
1
4 0
6
1 5
2 0
3 0
4 0
5 5
6 5
</pre><h3>Sample Output</h3>
<pre>4
6
</pre><h3>Explanation</h3>
<p>In the first sample test case, there is only one node, which is clearly the root. In the second test case, there are two non-isomorphic trees that satisfy the constraints, as seen in the following picture:</p>
<pre><code>  6           6
   \         / \
    5       1   4
   / \       \
  1   4       5
 / \         / \
2   3       2   3
</code></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-11-2012</td>
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