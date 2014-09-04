<?php require("../../includes/header.php"); ?><h1>Product of Digits Again</h1><div class="content">

<p>
Chef has called on you many times in the past to solve unusual tasks that<br />
seem irrelevant to cooking, and today is no different.<br />
Today Chef demands that you find integers whose product of digits is equal to a given integer,<br />
but in bases besides 10.<br />
Given a string S, you are to determine the smallest positive integer I such that there<br />
exists a base B&gt;1 for which the product of the digits of I<br />
gives the integer represented by S.<br />
For example, if S="11", then the smallest I is 8, because the base 3<br />
representation of I is 22, and in base 3 2*2=11.
</p>
<p>Formally, your task is this: find the smallest integer I such that there exists<br />
an integer B&gt;1 and integers A<sub>i</sub> for which:</p>
<ul>
<li>A<sub>n</sub>*B<sup>n</sup>+A<sub>n-1</sub>*B<sup>n-1</sup>+...+A<sub>1</sub>*B+A<sub>0</sub> = I</li>
<li>0≤A<sub>i</sub>&lt;B for all i</li>
<li>A<sub>n</sub>≠0</li>
<li>A<sub>n</sub>*A<sub>n-1</sub>*...*A<sub>1</sub>*A<sub>0</sub> =<br />
S<sub>m</sub>*B<sup>m</sup>+S<sub>m-1</sub>*B<sup>m-1</sup>+...+S<sub>1</sub>*B<sup>1</sup>+S<sub>0</sub>,<br />
where S<sub>m</sub> is the leftmost character of S, and S<sub>0</sub> is the rightmost character of S.</li>
<li>0≤S<sub>i</sub>&lt;B for all i</li>
</ul>

<h3>Input</h3>
<p>Input begins with an integer T, the number of test cases (at most 50).<br />
Each test case consists of a single line containing a string S<br />
comprised of 0-9 and A-Z characters.<br />
Characters A-Z represent the decimal values 10-35, respectively.  S will have between 1 and 4 characters, and the first character will not be 0.
</p>
<h3>Output</h3>
<p>For each test case, output a single integer on a line, giving the minimum<br />
value of I (printed in decimal).<br />
It is guaranteed that I will fit in a 64-bit integer.</p>
<h3>Sample Input</h3>
<pre>4
9
11
7Q2
PIES
</pre><h3>Sample Output</h3>
<pre>9
8
15227
7845414
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-04-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>20 sec</td>
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