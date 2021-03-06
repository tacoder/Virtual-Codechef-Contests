<?php require("../../includes/header.php"); ?><h1>Polynomial Partition Function</h1><div class="content">

<p>
Chef Ciel is participating in an arithmetic contest now.<br />
Why?<br />
Because of the top prize for the contest, a limited edition kitchen knife.
</p>
<p>
But to win the contest she must calculate the values <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) of the function named <i>polynomial partition function</i>.<br />
The polynomial partition function <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) is defined by
</p>
<p><img src="http://www.codechef.com/download/PARPOLY.png" width="474" height="74" /></p>
<p>
where <strong>P</strong> is a given polynomial <strong>P</strong>(<strong>x</strong>) = <strong>C</strong><sub><strong>D</strong></sub> · <strong>x</strong><sup><strong>D</strong></sup> + <strong>C</strong><sub><strong>D</strong>-1</sub> · <strong>x</strong><sup><strong>D</strong>-1</sup> + ... + <strong>C</strong><sub>1</sub> · <strong>x</strong> + <strong>C</strong><sub>0</sub>.
</p>
<p>
For example,
</p>
<p>
 <strong>f</strong>(1, 3, <strong>X</strong>) = <strong>P</strong>(3<strong>X</strong>)
</p>
<p>
 <strong>f</strong>(2, 3, <strong>X</strong>) = <strong>P</strong>(0) <strong>P</strong>(3<strong>X</strong>) + <strong>P</strong>(<strong>X</strong>) <strong>P</strong>(2<strong>X</strong>) + <strong>P</strong>(2<strong>X</strong>) <strong>P</strong>(<strong>X</strong>) + <strong>P</strong>(3<strong>X</strong>) <strong>P</strong>(0) = 2 <strong>P</strong>(<strong>X</strong>) <strong>P</strong>(2<strong>X</strong>) + 2 <strong>P</strong>(0) <strong>P</strong>(3<strong>X</strong>)
</p>
<p>
 <strong>f</strong>(3, 1, <strong>X</strong>) = <strong>P</strong>(0) <strong>P</strong>(0) <strong>P</strong>(<strong>X</strong>) + <strong>P</strong>(0) <strong>P</strong>(<strong>X</strong>) <strong>P</strong>(0) + <strong>P</strong>(<strong>X</strong>) <strong>P</strong>(0) <strong>P</strong>(0) = 3 <strong>P</strong>(0)<sup>2</sup> <strong>P</strong>(<strong>X</strong>)
</p>
<p>
Ciel is a great chef. However, she is not very good at arithmetic. So she needs your help to make her win the contest.<br />
For the given values of <strong>P</strong>, <strong>M</strong>, <strong>N</strong> and <strong>X</strong>, your work is to calculate the value of <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>).<br />
The answer can be very large, so you should print the answer modulo 1000000007 (10<sup>9</sup>+7), that is, you need to find the remainder of division of <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) by 1000000007 (10<sup>9</sup>+7).
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
The first line for each test case has 3 integers <strong>M</strong>, <strong>N</strong> and <strong>X</strong>.<br />
Then the next line has <strong>D</strong>+2 integers. The first integer denotes <strong>D</strong>, and the (<strong>i</strong>+1)-th integer denotes <strong>C</strong><sub><strong>i</strong>-1</sub>.
</p>
<h3>Output</h3>
<p>
For each test case, print the value of <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) modulo 1000000007 (10<sup>9</sup>+7).
</p>
<h3>Constraints</h3>
<p>
1 ≤ <strong>T</strong> ≤ 4<br />
1 ≤ <strong>M</strong> ≤ 400<br />
1 ≤ <strong>N</strong> ≤ 800<br />
0 ≤ <strong>X</strong> ≤ 1000000006 (10<sup>9</sup>+6)<br />
0 ≤ <strong>D</strong> ≤ 10<br />
0 ≤ <strong>C</strong><sub><strong>i</strong></sub> ≤ 1000000006 (10<sup>9</sup>+6)<br />
If <strong>D</strong> ≠ 0, then <strong>C</strong><sub><strong>D</strong></sub> ≠ 0
</p>
<h3>Sample Input</h3>
<pre>3
1 3 2
2 0 1 2
2 3 0
1 1 1
3 1 1
3 1 2 3 4</pre><h3>Sample Output</h3>
<pre>78
4
30</pre><h3>Explanation</h3>
<p>
In the first case, the polynomial is <strong>P</strong>(<strong>x</strong>) = 2 · <strong>x</strong><sup>2</sup> + <strong>x</strong>.<br />
The answer is <strong>P</strong>(3<strong>X</strong>) = <strong>P</strong>(6) = 2 · 36 + 6 = 78.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-09-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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