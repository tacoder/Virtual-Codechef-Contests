<?php require("../../includes/header.php"); ?><h1>Patterns and Sequences</h1><div class="content">

<p>Patterns and sequences always interests humans. So we brings to you quite an unusual Pattern. This pattern has the following properties:</p>
<pre>

                     1   1   1   1   1   1   .
                       2   1   3   1   .   .   .
                         1   2   2   1   .   .   .
                           1   1   1   1   1   1   .
		    (example pattern)
</pre><p>1. Infinite set of numbers arranged in a triangular grid.<br />
2. The pattern has k(k&gt;=2) rows, each one consisting of an infinite set of numbers. The first and the last row are exclusively composed by ones.<br />
3. Each set of four adjacent numbers,</p>
<pre>
                                    A
                                 B   C
                                    D
</pre><p>satisfies the relationship B*C = A*D + 1 .The complete pattern can be determined by the values of the first column and this rule.<br />
The example above shows some of the first values of this pattern. You must have come to know your task, find the value of a position in the pattern, given the values of the first column.</p>
<p><h3>Input</h3>
</p><p>The Input consists of several test cases. The first line of each test case is an integer value N given that N&gt;2 and N≤1000, that specifies the number of rows of the pattern. The second line of each test case corresponds to a pair of integer numbers i, j, with i and j both being greater then 1 and also i is less than N and j is less than 100,000,000, i specify the row and j specifies the position in the row of the value to be reported. The last line contains N values, v1, v2,..., vN , with vi&gt;0&amp;vi≤1000, (for each row), that correspond to the values of the first element in each row.<br /> notice that v1 = vN = 1 . It is guaranteed that every described pattern contains only integer values. The end of the input is recognized by a number 0 in the place that should correspond to the number of rows of a pattern.<br />
</p>
<h3>Output</h3>

<p>Each line of the output must give the unique integer value corresponding to the value in the position (i, j) of the pattern.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2 3
1 2 1 1
6
5 9
1 1 1 1 2 1
0

<b>Output:</b>
3
4
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>10 sec</td>
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