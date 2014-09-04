<?php require("../../includes/header.php"); ?><h1>Rotation Puzzle</h1><div class="content">

<p>Recently, with the release of the ultimate computing device bytePad, a platform game with the simple name "Rotation Puzzle" immediately became a phenomenon among Bytelandians. The game is extremely simple, yet quite additive. Here's the rule:</p>
<p>Given a MxN rectangular grid in which each cell contains a unique number from 1 to MxN. In each step, the player can pick any 2x2 subgrid and perform a rotation (whether clockwise or counterclockwise).</p>
<p>The task is to transform from the initial grid to the final configuration, using as few steps as possible.</p>
<p>The final configuration is the configuration</p>
<table>
<tr>
<td>1</td>
<td>2</td>
<td>...</td>
<td>n</td>
</tr>
<tr>
<td>n+1</td>
<td>n+2</td>
<td>...</td>
<td>2n</td>
</tr>
<tr>
<td>...</td>
<td>...</td>
<td>...</td>
<td>...</td>
</tr>
<tr>
<td>(m-1)n+1</td>
<td>(m-1)n+2</td>
<td>...</td>
<td>mn</td>
</tr>
</table>
<p>You may have guessed why this game is addictive: it requires a tremendous visualization skill!</p>
<h3>Input</h3>
<p>The first line contains a number T (about 5000), which is the number of test cases. Each test case has the following form.</p>
<p>The first line contains two numbers M and N (2 &lt;= M, N &lt;= 33).</p>
<p>The next M lines contains the description of the grid.</p>
<p>Each test case's input is separated by a blank line.</p>
<p>It is guaranteed that each input data has a solution.</p>
<h3>Output</h3>
<p>For each test case, output the result in the following format.</p>
<p>The first line contains a number K, the number of steps you need to solve the puzzle. K must not exceed 10000.</p>
<p>Each line of the next K lines contain three numbers c, i, j (c=0 or c=1, 1&lt;=I &lt; M, 1 &lt;= J &lt; N). (i,j) is the top-left coordinate of the 2x2 square that is need to be rotated. c=1 if the rotation if clockwise and c=0 if the rotation is counter-clockwise.</p>
<p>Prints a blank link after each test case's output.</p>
<h3>Scoring</h3>
<p>Given m and n, we pick a random positive integer K* and starting from the final configuration, we perform a random operation K* times to generate the test case.<br />
For each test case, your score is K*/K.<br />
Higher score is<br />
better.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

2 3
1 5 2
4 6 3

2 3
5 6 2
1 4 3

<b>Output:</b>
1
0 1 2

2
1 1 1
0 1 2
</pre>    </div><table>
<tr>
<td>1</td>
<td>2</td>
<td>...</td>
<td>n</td>
</tr>
<tr>
<td>n+1</td>
<td>n+2</td>
<td>...</td>
<td>2n</td>
</tr>
<tr>
<td>...</td>
<td>...</td>
<td>...</td>
<td>...</td>
</tr>
<tr>
<td>(m-1)n+1</td>
<td>(m-1)n+2</td>
<td>...</td>
<td>mn</td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-04-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>