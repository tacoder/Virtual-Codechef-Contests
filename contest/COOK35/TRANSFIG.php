<?php require("../../includes/header.php"); ?><h1>Transfiguring Trees</h1><div class="content">

<p>Hermione has come home for the holidays after a grueling first year at Hogwarts. She then picks up a Muggle book on "Graph Theory" and starts reading about <b>rooted K-ary trees</b>: Trees that are rooted and in which each node has at most <b>K</b> children. Since Transfiguration is her favorite subject at Hogwarts, she excitedly starts inventing a spell to Transfigure some such trees into others.</p>
<p>After a while, she has succeeded in her spell. However, she notices something strange about the transfigured tree. Suppose she started with the tree <b>T</b>, and transfigured it into tree <b>T'</b>. Then, she found that the preorder traversal of <b>T</b> was the same as the preorder traversal of <b>T'</b>, and that the postorder traversal of <b>T</b> was also the same as the postorder traversal of <b>T'</b>.</p>
<p>She then realizes that her spell is capable of transfiguring tree <b>T</b> into another tree <b>T'</b> only if the preorder and postorder traversals of both are the same. She thus wonders, given a particular permutation of nodes <b>P1</b> and another permutation of nodes <b>P2</b>, along with the value of <b>K</b>, how many rooted <b>K</b>-ary trees <b>T</b> are there that the preorder traversal of <b>T</b> is <b>P1</b>, and the postorder traversal of <b>T</b> is <b>P2</b>.</p>
<p>We give the explicit pseudocode of the preorder and postorder traversals of rooted <b>K</b>-ary trees:</p>
<pre><code>
class node
	int label;
	node children[K];
//children[i] is "null" if the i'th child is not present

void preorder(node subroot)
	output subroot.label;
	for(int i = 0; i &lt; K; i++)
		if(subroot.children[i] != null)
			preorder(subroot.children[i]);

void postorder(node subroot)
	for(int i = 0; i &lt; K; i++)
		if(subroot.children[i] != null)
			postorder(subroot.children[i]);
	output subroot.label;
</code>
</pre><p>Two rooted <b>K</b>-ary trees <b>T1</b> and <b>T2</b> are considered different if there is some node <b>n</b>, such that the <b>children[]</b> array of node <b>n</b> is different in <b>T1</b> and in <b>T2</b>.</p>
<p> </p>
<pre>Some examples of differences:
K=2.
<code>
   1 : (1.children = [2, 3])
  / \
 2   3
</code>
is different from
<code>
   1 : (1.children = [3, 2])
  / \
 3   2
</code>

Also,
K=2.
<code>
   1 : (1.children = [null, 2])
    \
     2
</code>
is different from
<code>
   1 : (1.children = [2, null])
  /
 2
</code>
is different from
<code>
   2
    \
     1 : (1.children = [null, null], 2.children = [null, 1])
</code>
</pre><p> </p>
<h3>Input</h3>
<p>The first line contains <b>T</b>, the number of test-cases. </p>
<p> Each test-case, begins with a line consisting of two integers <b>N</b> and <b>K</b>, <b>N</b> is the number of nodes of the tree, and <b>K</b> is the maximum number of children of each node. </p>
<p> This is followed by a line containing a <b>permutation of 1 to N</b>, the supposed preorder traversal. </p>
<p> This is followed by another line containing a <b>permutation of 1 to N</b>, the supposed postorder traversal.</p>
<h3>Output</h3>
<p>For each testcase, output the possible number of rooted <b>K</b>-ary trees having the first permutation as its preorder traversal and the second permutation as its postorder traversal. Since the answer can be large, output the answer modulo <b>1000000007</b> (<b>10<sup>9</sup> + 7</b>).</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>5</b> </li>
<li> <b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> </li>
<li> <b>1</b> ≤ <b>K</b> &lt; <b>N</b> </li>
<li> Both lines will contain permutations of <b>1</b> to <b>N</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
2 2
1 2
2 1
4 2
1 2 3 4
2 3 4 1
3 2
2 1 3
1 3 2
4 3
1 3 2 4
2 1 3 4

<b>Output:</b>
2
0
1
0
</pre><h3>Explanation</h3>
<p>The first case has two possibilities:</p>
<pre><code>
  1
 /
2
</code>
and
<code>
  1
   \
    2
</code>
</pre><p>The second case gives us a tree where the root 1 has 2, 3 and 4 as its children. Since <b>K = 2</b>, this violates the condition that each node has <b>atmost K children</b>.</p>
<p>The fourth case is impossible for any tree to have the given preorder and postorder traversals.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pragrame">pragrame</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-06-2013</td>
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