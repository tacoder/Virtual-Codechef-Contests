<?php require("../../includes/header.php"); ?><h1>Adding Fractions</h1><div class="content">

<p>
You have discovered a new way to add fractions ! Now, the result of adding fractions a/b and c/d is (a + c)/(b + d). Similarly the result of adding 3 fractions a/b, c/d, e/f is (a + c + e)/(b + d + f), and so on. You are given a list of N fractions a_1/b_1, a_2/b_2,...,a_N/b_N. You wonder what for each fraction i is the maximum fraction that you can obtain by adding together some continuous fractions in the list (possibly 1) starting at i ?</p>
<p>
For example, let N = 4 and the fractions be 1/1, 4/3, 10/1 and 5/4. The maximum fraction you can obtain by starting at index 1 is 3/1 (1/1 + 4/3 + 10/1). Similarly, the maximum fraction you can obtain by starting at index 2 is 7/2 (4/3 + 10/1). By starting at index 3, the maximum sum you can obtain is 10/1 itself, and by starting at index 4, you can obtain sum 5/4.</p>
<h3>
Input :<br />
</h3>
<p>The first line contains T the number of test cases. T test cases follow. The first line of each test case contains N. Each of the next N lines contains a fraction given in the form "a_i/b_i". A blank line seperates two test cases.</p>
<h3>
Output :<br />
</h3>
<p>For each test case, output N lines. The ith line contains the maximum fraction you can obtain by adding continuous fractions in the list starting at index i. The numerator and denominator of any fraction you output should have gcd 1. Output a blank line after each test case.</p>
<h3>
Sample Input :</h3>
<pre>
2
4
1/1
4/3
10/1
5/4

5
1/3
3/1
2/5
5/6
6/5
</pre><h3>Sample Output :</h3>
<pre>
3/1
7/2
10/1
5/4

1/1
3/1
13/16
1/1
6/5
</pre><h3>
Constraints :<br />
</h3>
<pre>
1 &lt;= T &lt;= 5
1 &lt;= n &lt;= 100000
1 &lt;= a_k,b_k &lt;= 100000
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/syco">syco</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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