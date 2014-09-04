<?php require("../../includes/header.php"); ?><h1>Sine Partition Function</h1><div class="content">

<p>
Chef Ciel is participating an arithmetic contest now.<br />
Why?<br />
Because of the top prize for the contest, a limited edition toaster oven.
</p>
<p>
She must calculate the values <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) of function named <i>sine partition function</i> to be the first place.<br />
The sine partition function <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) is defined by
</p>
<p><img src="http://www.codechef.com/download/PARSIN.png" width="513" height="74" /></p>
<p>
Examples are following:
</p>
<p>
 <strong>f</strong>(1, 3, <strong>X</strong>) = sin(3<strong>X</strong>)
</p>
<p>
 <strong>f</strong>(2, 3, <strong>X</strong>) = sin(0) sin(3<strong>X</strong>) + sin(<strong>X</strong>) sin(2<strong>X</strong>) + sin(2<strong>X</strong>) sin(<strong>X</strong>) + sin(3<strong>X</strong>) sin(0) = 2 sin(<strong>X</strong>) sin(2<strong>X</strong>)
</p>
<p>
 <strong>f</strong>(3, 1, <strong>X</strong>) = sin(0) sin(0) sin(<strong>X</strong>) + sin(0) sin(<strong>X</strong>) sin(0) + sin(<strong>X</strong>) sin(0) sin(0) = 0
</p>
<p>
Ciel is a great chef, however she is not good at arithmetic.<br />
For given <strong>M</strong>, <strong>N</strong> and <strong>X</strong>, your work is calculating the value of <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>).
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
Each test case has 2 integers <strong>M</strong>, <strong>N</strong> and a real number <strong>X</strong>.<br />
<strong>X</strong> has at most two digits after the decimal point.
</p>
<h3>Output</h3>
<p>
For each test case, print the value of <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>).<br />
This value must have an absolute or relative error no more than 10^-1.<br />
You can safely assume the magnitude of the answer is at most 10^300.
</p>
<h3>Constraints</h3>
<p>
1 &lt;= <strong>T</strong> &lt;= 10<br />
1 &lt;= <strong>M</strong> &lt;= 30<br />
1 &lt;= <strong>N</strong> &lt;= 1000000000 (10^9)<br />
0 &lt;= <strong>X</strong> &lt;= 6.28 &lt; 2*PI
</p>
<h3>Sample Input</h3>
<pre>5
1 3 1.57
2 3 0
3 1 2.12
1 1 5
1 30 0.3</pre><h3>Sample Output</h3>
<pre>-0.99999714638
0
0
-0.959
0.412</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro">masked_zorro</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-09-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
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