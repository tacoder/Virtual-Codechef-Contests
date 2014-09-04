<?php require("../../includes/header.php"); ?><h1>Omax</h1><div class="content">

<p>Given a matrix sized m x n, we define an O-region as a non-empty sub-block with another non-empty sub-block inside removed, such that the removed sub-block has no common boundaries with the outside.  That is, the leftmost column of the removed sub-block must be different from the leftmost column of the outer sub-block, and similarly the rightmost columns, topmost rows, and bottommost rows are different. The removal of the inner sub-block leaves a region which looks like the letter O.
</p>
<p>The value of an O-region is the sum of all numbers in the outer sub-block but not in the removed one. Your task is finding the maximal value of all O-regions appearing in the given matrix.
</p>
<h3>Input</h3>
<p>There are several test cases (fifteen at most), each formed as follows:</p>
<ul>
<li>The first line contains two positive integers m, n (3 ≤ m, n ≤ 77).</li>
<li>m lines follow, each containing n integers (each having an absolute value of 10<sup>5</sup> at most) describing the matrix.</li>
</ul>
<p>The input is ended with m = n = 0.
</p>
<h3>Output</h3>
<p>For each test case, output on a line an integer which is the respective maximal value found.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 3
1 1 1
1 3 -1
1 1 1
4 5
1 -2 3 -4 5
-5 4 -3 2 -1
1 -3 5 -7 9
-9 7 -5 3 -1
0 0
<b>Output:</b>
6
19
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-01-2011</td>
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