<?php require("../../includes/header.php"); ?><h1>Permute Digits</h1><div class="content">

<p>
You are given three positive integers <b>A</b>, <b>B</b> and <b>C</b> written in base <b>X &lt;= 10</b> without leading zeros. In how many ways you can permute the digits of <b>A</b> and permute the digits of <b>B</b> such that their sum will be equal to <b>C</b> (in base <b>X</b> of course)? Leading zeros after permutation are allowed. So for example for <b>A=101</b> written in some base all possible ways to permute its digits are: <b>011, 101, 110</b>.</p>
<p><b>Remark.</b> For positive integer <b>A</b> and base <b>X &gt;= 2</b> the digits of <b>A</b> in base <b>X</b> are uniquely determined by the equality <b>A = A<sub>k</sub> * X<sup>k</sup> + A<sub>k-1</sub> * X<sup>k - 1</sup> + ... + A<sub>1</sub> * X + A<sub>0</sub> </b> and inequalities <b>0 &lt;= A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>k</sub> &lt; X</b> and <b>A<sub>k</sub> &gt; 0 </b>. Then <b>A</b> is written as <b>0...0A<sub>k</sub>A<sub>k-1</sub>...A<sub>1</sub>A<sub>0</sub></b> in base <b>X</b>. Here an arbitrary non-negative number of leading zeros is allowed. If there are no leading zeros we say that <b>A</b> is written in canonical form.
</p>
<h3>Input</h3>
<p> The first line contains a single integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains four space separated positive integers <b>X, A, B</b> and <b>C</b>, where <b>A, B, C</b> is written in base <b>X</b> without leading zeros (that is in canonical form). </p>
<h3>Output</h3>
<p> For each test case, output a single line containing the number of possible permutations of digits of <b>A</b> and <b>B</b> such that their sum is equal to <b>C</b>. </p>
<h3>Constraints</h3>
<p><b><br />
1 &lt;= T &lt;= 10<br />
<br />
2 &lt;= X &lt;= 10<br />
<br />
1 &lt;= len(A), len(B), len(C) &lt;= 80/X<br />
<br /></b><br />
where <b>len(N)</b> stands for  the number of digits of number <b>N</b> when it is written in base <b>X</b> in canonical form. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
2 10 10 11
3 2 2 11
10 101 12 23
10 10 100 1000
10 43716 70251864 71130699

<b>Output:</b>
2
1
1
0
4
</pre><h3>Explanation</h3>
<p>In the first case the appropriate ways are 01+10=11 and 10+01=11.<br />
<br />
In the third case the only appropriate way is 011+12=23.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-10-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
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