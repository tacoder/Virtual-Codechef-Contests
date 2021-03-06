<?php require("../../includes/header.php"); ?><h1>Chef attic window</h1><div class="content">

<p>Chef lives in a big house. Almost all is perfect in it except for one thing. Chef has an attic, but there is no window in it. Now, he wants to build a window there.</p>
<p>The attic wall has the form of a right triangle. We can imagine it as a triangle on a coordinate plane with vertices <b>(0; 0), (N; 0), (N; N * A / B)</b>, where <b>N, A, B</b> are some positive integers. </p>
<p>As a modern guy Chef want to build a modern <b>(L, K)</b>-window on the attic wall. A modern <b>(L, K)</b>-window is made up of <b>L+1</b> vertical lines and <b>K+1</b> horizontal lines such that all their intersections lie on the attic wall. Here <b>L, K</b> are positive integers. </p>
<p>Formally he can choose <b>L+1</b> integers <b>0 &lt;= x[0] &lt; x[1] &lt; ... &lt; x[L] &lt;= N</b> and <b>K+1</b> integers <b>0 &lt;= y[0] &lt; y[1] &lt; ... &lt; y[K] &lt;= N*A/B</b> such that all points <b>(x[i], y[j])</b> lie on the wall. Then, rectangular grid with all these points as nodes is required window. </p>
<p>Chef is interested in knowing how many ways he can choose the window. But since this number can be very large he wants to find it modulo <b>900000011</b>. Help him.</p>
<h3>Input</h3>

<p> The first line contains a single positive integer <b>T &lt;= 50</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains five positive integers <b>N, A, B, K, L</b>, where <b>N, A, B &lt;= 10^18</b> and <b>K, L &lt;= 10</b>.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the number of ways to choose a window modulo <b>900000011</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4 2 3 1 1
4 3 2 2 2
1001 101 97 3 2

<b>Output:</b>
5
4
579415965
</pre><h3>Explanation</h3>
<p>In the first case we need calculate the number of rectangles which lie in triangle with vertices <b>(0; 0), (4; 0), (4; 8/3)</b>. There exist 5 such rectangles. Among them 3 have size <b>1 x 1</b>. One has size <b>2 x 1</b> and one have size <b>1 x 2</b>.</p>
<p>In the second case we have two rectangles <b>2 x 2</b> and one rectangle <b>2 x 3</b> where we can choose middle horizontal segment in two ways. So we have in total 4 possible choices.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-12-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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