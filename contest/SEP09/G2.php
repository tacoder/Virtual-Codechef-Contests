<?php require("../../includes/header.php"); ?><h1>Smart Frog</h1><div class="content">

<p>Bibi the Smart Frog is playing a jumping game on an m <em>x</em> n rectangular board. There is a number written in each cell of the board (Bibi can read these numbers since he is very smart!)</p>
<p>Bibi starts the game by picking any cell on the board and stays there. At each step, Bibi will jump to another cell. He can either:</p>
<ul>
<li>Jump to the <strong>right</strong> to a cell in the <strong>same row</strong>, provided that the number written in that cell is <strong>not smaller than</strong> the number written in the current cell.</li>
<li>Jump <strong>downwards</strong> to a cell in the <strong>same column</strong>, provided that the number written in that cell is <strong>not greater than</strong> the number written in the current cell.</li>
</ul>
<p>To win the game, Bibi needs to jump through as many cells as possible. But no, he is not so extraordinarily smart that he could compute the optimal way to play the game. After all, he is only a frog, you know! Write a program to help Bibi compute the maximum number of cells that he can jump into.</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 10). Each test case has the following form:</p>
<ul>
<li>The first line contains two integers m, n (1 ≤ m, n ≤ 500).</li>
<li>Then, m lines follow, each line containing n numbers representing the rectangular board. It is guaranteed that no number exceeds 10<sup>6</sup>.</li>
</ul>
<p>Each test case is separated by a blank line.</p>
<h3>Output</h3>
<p>For each test case, print a single number that is the maximum number of cells that Bibi can jump into.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
2

2 3
2 1 1
2 1 1

4 4
6 2 5 2
4 5 3 8
9 7 8 9
9 9 9 5

<strong>Output:</strong>
3
5

<strong>Output details</strong>
A possible set of cells that Bibi could jump into is marked in bold:
2 <strong>1</strong> <strong>1</strong>
2 1 <strong>1</strong>

6 <strong>2</strong> <strong>5</strong> 2
4 5 <strong>3</strong> <strong>8</strong>
9 7 8 9
9 9 9 <strong>5</strong>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-08-2009</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CAML, CLPS, CPP 4.8.1, CPP11, CS2, D, FORT, GO, HASK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>