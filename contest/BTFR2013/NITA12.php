<?php require("../../includes/header.php"); ?><h1>Game For Better Programming</h1><div class="content">

<p> </p>
<p>The Smart Boy from KASUMBI has come up with a new developing game for children. The Boy thinks that this game will help children to understand programming better.</p>
<p>The main object of the game is finite rooted trees, each of their edges contains some lowercase English letter. Vertices on any tree are always numbered sequentially from 1 to m, where m is the number of vertices in the tree.
</p>
<p>Before describing the actual game, let's introduce some definitions.</p>
<p> </p>
<p>We'll assume that the sequence of vertices with numbers v1, v2, ..., vk (k ≥ 1) is a forward path, if for any integer i from 1 to k - 1 vertexvi is a direct ancestor of vertex vi + 1. If we sequentially write out all letters from the the edges of the given path from v1 to vk, we get some string (k = 1 gives us an empty string).
</p>
<p>We'll say that such string corresponds to forward path v1, v2, ..., vk.</p>
<p>We'll assume that the sequence of tree vertices with numbers v1, v2, ..., vk (k ≥ 1) is a backward path if for any integer i from 1 to k - 1vertex vi is the direct descendant of vertex vi + 1. If we sequentially write out all the letters from the edges of the given path from v1 to vk, we get some string (k = 1 gives us an empty string).
</p>
<p>We'll say that such string corresponds to backward path v1, v2, ..., vk.</p>
<p>Now let's describe the game that the Smart Boy from KASUMBI has come up with. The game uses two rooted trees, each of which initially consists of one vertex with number 1. The player is given some sequence of operations. Each operation is characterized by three values (t, v, c) </p>
<p>where:</p>
<p>•	t is the number of the tree on which the operation is executed (1 or 2);
</p>
<p> </p>
<p>•	v is the vertex index in this tree (it is guaranteed that the tree contains a vertex with this index);
</p>
<p> </p>
<p>•	c is a lowercase English letter.</p>
<p>The actual operation is as follows: vertex v of tree t gets a new descendant with number m + 1 (where m is the current number of vertices in tree t), and there should be letter c put on the new edge from vertex v to vertex m + 1.</p>
<p>We'll say that an ordered group of three integers (i, j, q) is a good combination if:</p>
<p>•	1 ≤ i ≤ m1, where m1 is the number of vertices in the first tree;
</p>
<p> </p>
<p>•	1 ≤ j, q ≤ m2, where m2 is the number of vertices in the second tree;
</p>
<p> </p>
<p>•	there exists a forward path v1, v2, ..., vk such that v1 = j and vk = q in the second tree;
</p>
<p> </p>
<p>•	the string that corresponds to the forward path in the second tree from vertex j to vertex q equals the string that corresponds to the backward path in the first tree from vertex i to vertex 1 (note that both paths are determined uniquely).
</p>
<p> </p>
<p>Your task is to calculate the number of existing good combinations after each operation on the trees.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains integer n — the number of operations on the trees. Next n lines specify the operations in the order of their execution. Each line has form "t v c", where t is the number of the tree, v is the vertex index in this tree, and c is a lowercase English letter.</p>
<p>Solve the problem with 1 ≤ n ≤ 20000.
</p>
<h3>Output</h3>
<p>Print exactly n lines, each containing one integer — the number of existing good combinations after the corresponding operation from the input.
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 1 a
2 1 a
1 2 b
2 1 b
2 3 a
<b>Output:</b>
1
3
3
4
7
</pre><p> </p>
<h3>Explanation</h3>
<p><b>After the first operation the only good combination was (1, 1, 1). After the second operation new good combinations appeared, (2, 1, 2) and (1, 2, 2). The third operation didn't bring any good combinations. The fourth operation added good combination (1, 3, 3). Finally, the fifth operation resulted in as much as three new good combinations — (1, 4, 4), (2, 3, 4) and (3, 1, 4).</b> ...</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/upendra1234">upendra1234</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>