<?php require("../../includes/header.php"); ?><h1>The White Knight</h1><div class="content">

<p>You are given a chessboard of size NxN. There is a white knight and several black pawns located on the board. The knight can move similarly to the normal knight in the game of chess; however it can only move towards the right of the board (see the below figure).</p>
<p><img src="https://vn.spoj.pl/SPOJVN/content/whitekn.png" alt="" /></p>
<p>The mission of the knight is to capture as many black pawns as possible. Its journey ends when it moves to the rightmost column of the board.</p>
<p>Compute the maximum number of black pawns the white knight can capture.</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 10). Then t test cases follow.</p>
<p>Each test case has the following form:</p>
<ul>
<li>The first line contains N, the size of the chessboard (4 ≤ N ≤ 1000).</li>
<li>Then N lines follow, each line containing N characters which may be '.', 'K' or 'P', corresponding to the empty cell, the white knight, and the black pawn, respectively. There is exactly one 'K' character in the whole of the board.</li>
</ul>
<h3>Output</h3>
<p>For each test case, print in a single line the maximum number of black pawns that can be captured.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
1
5
K....
..P..
.P...
...P.
.....

<strong>Output:</strong>
2 
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-06-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>