<?php require("../../includes/header.php"); ?><h1>Rooks on a Chessboard</h1><div class="content">

<p>A chessboard of size N X N and N rooks are given where N is a positive integer. Let X and Y be two points on the edges of the squares determining the chessboard. A path connecting X and Y is a continuous curve along the edges of the squares of the chessboard with X and Y as endpoints. The length of the curve is the length of the path. Johnny is asked to complete the following task: First, he places all the rooks on the chessboard in such a way that no two rooks attack each other. He then draws a path of length 2N connecting the top-left corner and the bottom-right corner so that all of the rooks are on the same side of the path. You need to tell us the number of ways in which Johnny can complete this task.</p>
<p>Note: Two different paths for the same placement of rooks are considered as different.</p>
<h3>Input</h3>
<p>The first line contains the number of test cases T, at most 100. Each of the next T lines contain a single integer N, at most 100.</p>
<h3>Output</h3>
<p>For each test case in the input, output the number of ways in which Johnny can complete this task.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1
2

<b>Output:</b>
2
6
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/moneymachine">moneymachine</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-01-2010</td>
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