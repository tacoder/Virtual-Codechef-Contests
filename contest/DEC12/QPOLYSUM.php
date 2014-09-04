<?php require("../../includes/header.php"); ?><h1>Quasi-Polynomial Sum</h1><div class="content">

<p>
You are given a polynomial <b>P(X) = C<sub>D</sub> * X<sup>D</sup> + ... + C<sub>1</sub> * X + C<sub>0</sub></b> with integer coefficients <b>C<sub>0</sub>, C<sub>1</sub>, ..., C<sub>D</sub></b>. You are also given a non-negative integer <b>Q</b> and positive integers <b>M</b> and <b>N</b>. Your task is to find the following sum
</p>
<p>
                        <b>(P(0) * Q<sup>0</sup> + P(1) * Q<sup>1</sup> + ... + P(N − 1) * Q<sup>N − 1</sup>) mod M</b>.
</p>
<p>
Here <b>A mod B</b> means the remainder of the division of <b>A</b> by <b>B</b>.
</p>
<p>
Usually polynomials are given by the sequence of their coefficients. However, in this problem you will be given the sequence <b>A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>D</sub></b>, where <b>A<sub>i</sub> = P(i) mod M</b>, as an input. One can prove that these values are enough to restore the value of <b>P(K) mod M</b> for any integer <b>K</b>. Therefore, the value of the above sum is uniquely determined by the values <b>M, Q, N, D, A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>D</sub></b>.
</p>
<p>
The function of the form <b>P(X) * Q<sup>X</sup></b> sometimes is called <i>quasi-polynomial</i>, hence the title of the problem.
</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains four space-separated integers <b>M, Q, N, D</b>. The second line contains <b>D + 1</b> space-separated integers <b> A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>D</sub></b>.
</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the value of the corresponding sum.
</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5000</b></li>
<li><b>1</b> &lt; <b>M</b> &lt; <b>10<sup>18</sup></b></li>
<li><b>0</b> ≤ <b>Q</b> &lt; <b>M</b></li>
<li><b>1</b> ≤ <b>N</b> &lt; <b>10<sup>100000</sup></b></li>
<li><b>0</b> ≤ <b>D</b> &lt; <b>20000</b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> &lt; <b>M</b> for <b>i = 0, 1, ..., D</b></li>
<li>The sum of <b>D + 1</b> over each input file does not exceed <b>20000</b>.</li>
<li>The overall number of digits in all numbers <b>N</b> in each input file does not exceed <b>10<sup>5</sup></b>.</li>
<li><b><b>M</b> is not divisible by any number from <b>2</b> to <b>D + 14</b>, inclusive.</b></li>
<li>It is guaranteed that there exists a polynomial <b>P(X)</b> of degree at most <b>D</b> with integer coefficients such that <b>A<sub>i</sub> = P(i) mod M</b> for <b>i = 0, 1, ..., D</b>.</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
101 2 5 0
1
289 1 6 2
1 4 9

<b>Output:</b>
31
91
</pre><h3>Explanation</h3>
<p>
<b>Example case 1.</b> We have <b>M = 101, Q = 2, N = 5, D = 0</b> and <b>P(0) mod M = 1</b>. Therefore,  <b>P(X) = C<sub>0</sub></b> and <b>P(0) mod 101 = 1</b>. Hence, <b> C<sub>0</sub> mod 101 = 1</b>. So we can take, for example, <b>C<sub>0</sub> = 1</b>. Then the corresponding sum takes the form of <b>(P(0) * Q<sup>0</sup> + P(1) * Q<sup>1</sup> + ... + P(N − 1) * Q<sup>N − 1</sup>) mod M = (1 * 2<sup>0</sup> + 1 * 2<sup>1</sup> + 1 * 2<sup>2</sup> + 1 * 2<sup>3</sup> + 1 * 2<sup>4</sup>) mod 101 = (1 + 2 + 4 + 8 + 16) mod 101 = 31 mod 101 = 31.</b> Note, that the polynomial <b>P(X)</b> is not unique. We can take, for example, <b>C<sub>0</sub> = 102</b> or <b>C<sub>0</sub> = 2021</b>. However, the same will be always the same.
</p>
<p>
<b>Example case 2.</b> We have <b>M = 289, Q = 1, N = 6, D = 2</b> and <b>P(0) mod M = 1, P(1) mod M = 4, P(2) mod M = 9</b>. It is easy to see that we can take <b>P(X) = (X + 1)<sup>2</sup></b>. Then the corresponding sum takes the form of <b>(1<sup>2</sup> + 2<sup>2</sup> + 3<sup>2</sup> + 4<sup>2</sup> + 5<sup>2</sup> + 6<sup>2</sup>) mod 289 = (1 + 4 + 9 + 16 + 25 + 36) mod 289 = 91.</b> Note that the polynomial <b>P(X)</b> again is not unique. In fact, the set of all polynomials of degree at most 2 that satisfy the conditions <b>P(0) mod 289 = 1, P(1) mod 289 = 4, P(2) mod 289 = 9</b> has the form of <b>{(X + 1)<sup>2</sup> + 289 * (C<sub>2</sub> * X<sup>2</sup> + C<sub>1</sub> * X + C<sub>0</sub>) | C<sub>0</sub>, C<sub>1</sub>, C<sub>2</sub></b> are integers}.
</p>
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
            <td>29-10-2012</td>
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