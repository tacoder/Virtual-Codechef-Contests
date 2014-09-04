<?php require("../../includes/header.php"); ?><h1>Inverse Binomial Coefficient</h1><div class="content">

<p>The binomial coefficient <b>C(N, K)</b> is defined as <b>N! / K! / (N − K)!</b> for <b>0 ≤ K ≤ N</b>.<br /> Here <b>N! = 1 * 2 * ... * N</b> for <b>N ≥ 1</b>, and <b>0! = 1</b>.</p>
<p>You are given integers <b>n</b> and <b>R</b>.<br /> You need to find the smallest <b>K</b> in the range <b>{0, 1, ..., 2<sup>n</sup> − 1}</b>, for which <b>C(2<sup>n</sup> − 1, K) mod 2<sup>n</sup> = R</b>.<br /> Here <b>A mod B</b> denotes the remainder of the division of <b>A</b> by <b>B</b>. If no such <b>K</b> exists output <b>-1</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases.<br /> The description of <b>T</b> test cases follows.<br /> The only line of each test case contains two space-separated integers <b>n</b> and <b>R</b>.</p>
<h3>Output</h3>
<p>For each test case output the answer on the separate line.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>120</b></li>
<li><b>0</b> ≤ <b>R</b> &lt; <b>2<sup>n</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 0
1 1
3 7
4 3

<b>Output:</b>
-1
0
1
7
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> We have <b>C(1, 0) = C(1, 1) = 1</b>. Hence <b>C(1, K) mod 2 ≠ 0</b> for all <b>K</b>. Therefore, the answer is <b>-1</b>.</p>
<p><b>Example case 2.</b> Since <b>C(1, 0) mod 2 = 1</b>, the answer is <b>0</b>.</p>
<p><b>Example case 3.</b> Since <b>C(7, 0) mod 8 = 1 ≠ 7</b> and <b>C(7, 1) mod 8 = 7 mod 8 = 7</b>, the answer is <b>1</b>.</p>
<p><b>Example case 4.</b> Here <b>C(15, 7) mod 16 = 15! / 7! / 8! mod 16 = 6435 mod 16 = 3</b>. It can be shown that for all smaller values of <b>K</b> we have <b>C(15, K) mod 16 ≠ 3</b>. Therefore, the answer is <b>7</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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