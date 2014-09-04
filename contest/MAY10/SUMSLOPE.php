<?php require("../../includes/header.php"); ?><h1>Summing Slopes</h1><div class="content">

<p>
A digit in a number N is a minima if it is lesser than both the digits adjacent to it. Similarly, a digit is a maxima if it is greater than both the digits adjacent to it. The slope of N is the number of digits in N (leaving out the first and the last digit) which are either a minima or a maxima. Given A and B, count the sum of the slopes of all numbers between A and B.
</p>
<p>
Input :
</p>
<p>
The first line contains the number of test cases T. Each of the next T lines contains two integers A and B.
</p>
<p>
Output :
</p>
<p>
Output T lines one for each test case, containing the required sum for the corresponding test case.
</p>
<pre>
Sample Input :
3
101 101
1 100
100 150

</pre><pre>
Sample Output :
1
0
19

</pre><pre>
Constraints :
1 &lt;= T &lt;= 50000
1 &lt;= A &lt;= B &lt;= 1000000000000000 (10^15)
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/syco">syco</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/keshav_57">keshav_57</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-04-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>10000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>