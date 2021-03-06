<?php require("../../includes/header.php"); ?><h1>Whole submatrix</h1><div class="content">

<p>After Chef successfully built a modern <b>(L, K)</b>-window on the attic wall he decided to expand the notion of the <b>(L, K)</b>-window in some other areas. Now he considers a rectangular grid that contains only zeroes and ones and has size <b>N x M</b>. He considers the <b>(L, K)</b>-window here as any submatrix of size <b>L x K</b> that contains only ones. Formally he defines <b>(L, K)</b>-window as any <b>(K+L)</b>-tuple <b>(R<sub>1</sub>, ..., R<sub>L</sub>, C<sub>1</sub>, ..., C<sub>K</sub>)</b> such that <b>1 &lt;= R<sub>1</sub> &lt; ... &lt; R<sub>L</sub> &lt;= N</b>, <b>1 &lt;= C<sub>1</sub>  &lt; ... &lt; C<sub>K</sub> &lt;= M</b> and <b>A[R<sub>i</sub>][C<sub>j</sub>]=1</b> for all <b>1 &lt;= i &lt;= L, 1&lt;= j &lt;= K</b>. Here <b>A[r][c]</b> is the <b>c</b>-th element of the <b>r</b>-th row of considered rectangular grid.</p>
<p>Why does Chef call some <b>(K+L)</b>-tuple of numbers by the window? Just mark all points <b>(R<sub>i</sub>,C<sub>j</sub>)</b> (<b>1 &lt;= i &lt;= L, 1&lt;= j &lt;= K</b>) on the plane and join by line segments all pairs of points that has equal abscises or ordinates and you will see that this picture is like a window.</p>
<p>Now Chef considers some particular <b>N x M</b> grid and wants to calculate the total number of <b>(L, K)</b>-windows in this rectangular grid. Help him. Since this number can be very large calculate the result modulo <b>1000000080798150871</b>.</p>
<h3>Input</h3>

<p> The first line contains a single positive integer <b>T &lt;= 100</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains four positive integers <b>N, M, L, K</b>, where <b>L, N &lt;= 1000, K, M &lt;=3</b>. Next <b>N</b> lines describe the rectangular grid considered by Chef. Each of these lines contains <b>M</b> symbols. Every symbol is either one or zero.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the total number of <b>(L, K)</b>-windows for the given grid modulo <b>1000000080798150871</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 2 2 1
11
01
10
3 3 2 2
111
101
111

<b>Output:</b>
2
5
</pre><h3>Explanation</h3>
<p>In the first case it is just the number of pairs of cells with value 1 that have the same column number.</p>
<p>In the second case we have the following <b>(2, 2)</b>-windows:<br />
<br />
(First row, Second row, First column, Third column)<br />
<br />
(First row, Third row, First column, Second column)<br />
<br />
(First row, Third row, First column, Third column)<br />
<br />
(First row, Third row, Second column, Third column)<br />
<br />
(Second row, Third row, First column, Third column)</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-01-2011</td>
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