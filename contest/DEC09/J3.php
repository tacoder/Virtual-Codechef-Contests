<?php require("../../includes/header.php"); ?><h1>The N Queens Puzzle Revisited</h1><div class="content">

<p>Johnny, a computer science student from the Bytelandian Technological University (BTU), has finally managed to write a program to solve the N queens problem. However, his version of the N queens problem is not really all that similar to the classical one.</p>
<p>Recall that in the N queens problem, there is a square chessboard of size NxN. The goal is to put N queens on the chessboard so that no two queens would be able to attack each other.</p>
<p>
In Johnny's version of the problem (which he states to be "much harder" than the original one), there are K "blocked" squares given on the chessboard. The goal is still the same: to put N queens on the chessboard such that no two queens would be able to attack each other. However, there are some differences due to the existence of blocked squares. First, a queen <b>cannot be put</b> on a blocked square. Secondly, two queens are considered to be able to attack each other only if there is <b>no blocked square</b> between them. Finally, there must be <b>exactly one</b> queen on every column of the board.
</p>
<p>
Johnny claims that his program solves the above problem very effectively. He generates some test cases (which his program can solve within minutes) to challenge you. You know the method Johnny used to generate the test case. For a given N, Johnny randomly picks a number K between 1 and N<sup>2</sup>/2 with equal probability. After that, Johnny picks K blocked squares on the chess board. Any combinations of K squares can be picked with equal probability.
</p>
<p>Write a program that can solve Johnny's test cases within seconds.
</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 5). Then t test cases follow. Each test case has the following form:</p>
<ul>
<li>The first line contains two integers N and K (8 &lt;= N &lt;= 500, 1 &lt;= K &lt;= N<sup>2</sup>/2)</li>
<li>Each line in the next K lines contains two integers i, j which are the row and the column number of a blocked square (1 &lt;= i, j &lt;= N)</li>
</ul>
<p>Each test case's input is separated by a blank line. The rows and the columns of the chessboard are numbered from 1 to N. There is always a solution for each test case.</p>
<h3>Output</h3>
<p>For each test case, print a single line containing N integers a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub> in which a<sub>i</sub> is the row number of the queen in column i. Any correct solution will be accepted.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
1

8 15
7 7
3 1
7 1
4 8
8 3
6 5
4 4
2 1
8 2
6 3
3 7
7 6
2 3
1 2
6 4

<b>Output</b>
4 2 7 5 2 4 6 8 
</pre><p><img src='http://www.codechef.com/download/qpuzzle.png' /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>