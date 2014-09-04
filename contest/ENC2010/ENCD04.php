<?php require("../../includes/header.php"); ?><h1>Shortest Path Problem</h1><div class="content">

<p>
Consider a two dimensional array of numbers comprehended between 0 and 9(as shown below). The Matrix can be traversed following any orthogonal direction (i.e., north, south, east and west). Considering that each cell represents a cost, Your task is to find the minimum cost value to go from the top-left corner to the bottom-right corner of a given number array of size NxM where 1 &lt;= N, M &lt;= 999. Note that the solution for the given example is 24.</p>
<pre>

		0	3	1	2	9

		7	3	4	9	9

		1	7	5	5	3

		2	3	4	2	5
</pre><h3>Input</h3>
<p>The input contains several Test cases. Each test case is defined by: one line with the number of rows, N; one line with the number of columns, M; and N lines, one per each row of the Matrix, containing the numbers separated by spaces. Terminate the input with (no. of rows)N=0.</p>
<h3>Output</h3>
<p>For each maze, output one line with the required minimum value. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
5
0 3 1 2 9
7 3 4 9 9
1 7 5 5 3
2 3 4 2 5
1
6
0 1 2 3 4 5
0

<b>Output:</b>
24
15
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rscrbv">rscrbv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-01-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>