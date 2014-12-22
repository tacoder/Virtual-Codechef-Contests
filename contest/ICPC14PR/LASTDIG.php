<?php require("../../includes/header.php"); ?><h1>Last Digit Sum</h1><div class="content">

<p>For a non-negative integer N, define S(N) as the sum of the odd digits of N<br />
plus twice the sum of the even digits of N.<br />
For example, S(5)=5, S(456)=2*4+5+2*6=25, and S(314159)=3+1+2*4+1+5+9=27.<br />
Define D(N) as the last digit of S(N).<br />
So D(5)=5, D(456)=5, and D(314159)=7.<br />
Given 2 non-negative integers A and B, compute the sum of D(N) over all N between A and B, inclusive.
</p>
<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.<br />
T lines follow, each containing 2 integers A and B.</p>
<h3>Output</h3>
<p>For each test case, output a single integer indicating the corresponding sum.</p>
<h3>Sample Input</h3>
<pre>3
1 8
28 138
314159 314159
</pre><h3>Sample Output</h3>
<pre>36
495
7
</pre><h3>Constraints</h3>
<ul>
<li>T ≤ 1000</li>
<li>0 ≤ A ≤ B ≤ 400,000,000</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-09-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>