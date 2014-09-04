<?php require("../../includes/header.php"); ?><h1>Rectangles Counting</h1><div class="content">

<p>Given N separate integer points on the Cartesian plane satisfying: there is no any three of them sharing a same X-coordinate. Your task is to count the number of rectangles (whose edges parrallel to the axes) created from any four of given points.
</p>
<h3>Input</h3>
<p>There are several test cases (ten at most), each formed as follows:</p>
<ul>
<li>The first line contains a positive integer N (N ≤ 10<sup>5</sup>).</li>
<li>N lines follow, each containing a pair of integers (each having an absolute value of 10<sup>9</sup> at most) describing coordinates of a given point.</li>
</ul>
<p>The input is ended with N = 0.
</p>
<h3>Output</h3>
<p>For each test case, output on a line an integer which is the respective number of rectangles found.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
7 1
3 5
3 1
1 5
1 1
7 5
0

<b>Output:</b>
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-03-2011</td>
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