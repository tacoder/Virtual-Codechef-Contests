<?php require("../../includes/header.php"); ?><h1>Rearranging Digits</h1><div class="content">

<p>
A number X is called Permut number if X and 2X ( both without leading zeroes ) have same number of digits and are permutations of each other. Given A and B, find the number of Permut numbers &gt;= A and &lt;= B.
</p>
<p>
Note : X is called permutation of Y if every digit ( 0 - 9 ) occurs same number of times in both the numbers ( maybe at different positions ).
</p>
<p>
Input :
</p>
<p>
The first line contains the number of test cases T. T lines follow, containing two integers A and B.
</p>
<p>
Output :
</p>
<p>
Output T lines, one for each test case containing the desired answer for the corresponding test case.
</p>
<pre>
Sample Input :
2
1 100
499875921 499875921

</pre><pre>
Sample Output :
0
1

</pre><pre>
Constraints :
1 &lt;= T &lt;= 10000
1 &lt;= A &lt;= B &lt;= 10000000000 (10^10)
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/syco">syco</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anshuman_singh">anshuman_singh</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-05-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>5000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>