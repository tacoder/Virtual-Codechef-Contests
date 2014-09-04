<?php require("../../includes/header.php"); ?><h1>Central Point</h1><div class="content">

<p>Given a set of N integer points on the Cartesian plane. Your task is to find an integer point satisfying its sum of distances to N given points (<b>S</b>) is minimum.
</p>
<h3>Input</h3>
<p>There are several test cases (fifteen at most), each formed as follows:</p>
<ul>
<li>The first line contains a positive integer N (N ≤ 2,000).</li>
<li>N lines follow, each containing a pair of integers (each having an absolute value of 10<sup>9</sup> at most) describing coordinates of a given point.</li>
</ul>
<p>The input is ended with N = 0.
</p>
<h3>Output</h3>
<p>For each test case, output on a line a real number (with exactly 6 decimal places) which is the respective minimum sum <b>S</b> found.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 1
2 2
3 3
5
1 4
2 3
5 2
3 5
4 1
0

<b>Output:</b>
2.828427
9.640986
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
            <td>7-03-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>15 sec</td>
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