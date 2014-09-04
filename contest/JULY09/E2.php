<?php require("../../includes/header.php"); ?><h1>Lights Off</h1><div class="content">

<p>Lights Off is a puzzle game consisting of an n x n grid of lights. At the beginning of the game, some of the lights are switched on. When a light is pressed, this light and the four adjacent lights are toggled, i.e., they are switched on if they were off, and switched off otherwise. The purpose of the game is to switch all the lights off.</p>
<p>The following figure illustrates the game:</p>
<p><img src="http://vn.spoj.pl/SPOJVN/content/lightsoff.png" alt="" width="500" /></p>
<p>Johnny has become addicted to playing the Lights Off game on his new iPhone. Yesterday he got stuck at a difficult level. He asked you, the talented programmer, for help. Please write a program to help Johnny solve the Lights Off game, not only for the regular 5x5 board size, but also for much larger dimensions!</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 10). Then t test cases follow.</p>
<p>Each test case has the following form:</p>
<ul>
<li>The first line contains n, the size of the board (3 ≤ n ≤ 30).</li>
<li>Then n lines follow, each line contains n characters '0' or '1'. The character in the i<sup>th</sup> line and j<sup>th</sup> column is '0' if the corresponding light is off and '1' if it is on.</li>
</ul>
<h3>Output</h3>
<p>For each test case, in the first line, print k, the number of times Johny must press a light. Any valid solution in which k does not exceed 5000 is accepted.</p>
<p>Then k lines follow, each line containing two numbers i and j (1 ≤ i, j ≤ n), describing the position of a light to be pressed. Note that (i,j) means the light in the i<sup>th</sup> row and j<sup>th</sup> column; the rows are numbered 1 to n from top to bottom, and the columns are numbered 1 to n from left to right.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
1
3
000
110
010

<strong>Output:</strong>
5
1 1
2 1
2 2
3 2
3 3

<strong>Output details:</strong>
The states of the game after pressing each light are:
  010   -&gt;  110   -&gt;  100   -&gt;  011   -&gt;  000
--&gt;
<table border="0">
<tr>
<td>000<br />110<br />010</td>
<td>(1,1)</td>
<td>110<br />010<br />010</td>
<td>(2,1)</td>
<td>010<br />100<br />110</td>
<td>(2,2)</td>
<td>000<br />011<br />100</td>
<td>(3,2)</td>
<td>000<br />001<br />011</td>
<td>(3,3)</td>
<td>000<br />000<br />000</td>
</tr></table>
</pre>    </div><table border="0">
<tr>
<td>000<br />110<br />010</td>
<td>(1,1)</td>
<td>110<br />010<br />010</td>
<td>(2,1)</td>
<td>010<br />100<br />110</td>
<td>(2,2)</td>
<td>000<br />011<br />100</td>
<td>(3,2)</td>
<td>000<br />001<br />011</td>
<td>(3,3)</td>
<td>000<br />000<br />000</td>
</tr></table><table cellspacing="0" cellpadding="0" align="left">
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
            <td>4 - 8 sec</td>
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