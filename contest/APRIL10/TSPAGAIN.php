<?php require("../../includes/header.php"); ?><h1>Travelling Salesman Again !</h1><div class="content">

<p>
There are N cities numbered from 0..N-1. A salesman is located at city 0. He wishes to visit all cities exactly once and return back to city 0. There are K toll booths. Each toll booth has a certain range of functioning. The parameters for toll k are given as x_k and y_k. If the salesman travels from city i to j, he has to pay 1 dollar toll fee to each toll p having x_p &gt;= i and y_p &lt;= j. Calculate the cheapest way for the salesman to complete his tour.</p>
<h3>
Input :<br />
</h3>
<p>The first line contains T the number of test cases. T test cases follow. The first line of each test case contains two space seperated integers N and K. Each of the next K lines contains 2 integers, the ith line containing x_i and y_i (0 &lt;= x_i,y_i &lt; N). A blank line seperates two test cases.</p>
<h3>
Output :<br />
</h3>
<p>Output T lines, one for each test case, containing the required answer.</p>
<h3>
Sample Input :</h3>
<pre>
2
3 2
2 0
0 2

3 4
1 0
2 1
0 1
1 2

</pre><h3>
Sample Output :</h3>
<pre>
3
6

</pre><h3>
Constraints :</h3>
<pre>
1 &lt;= T &lt;= 50
2 &lt;= n &lt;= 1000
1 &lt;= K &lt;= 10000
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
            <td>60 sec</td>
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