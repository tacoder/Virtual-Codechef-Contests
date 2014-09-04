<?php require("../../includes/header.php"); ?><h1>Multiples of 3</h1><div class="content">

<p>
There are N numbers a[0],a[1]..a[N - 1]. Initally all are 0. You have to perform two types of operations :
</p>
<p>
1) Increase the numbers between indices A and B by 1. This is represented by the command "0 A B"
</p>
<p>
2) Answer how many numbers between indices A and B are divisible by 3. This is represented by the command "1 A B".
</p>
<p>
Input :
</p>
<p>
The first line contains two integers, N and Q. Each of the next Q lines are either of the form "0 A B" or "1 A B" as mentioned above.
</p>
<p>
Output :
</p>
<p>
Output 1 line for each of the queries of the form "1 A B" containing the required answer for the corresponding query.
</p>
<pre>
Sample Input :
4 7
1 0 3
0 1 2
0 1 3
1 0 0
0 0 3
1 3 3
1 0 3

</pre><pre>
Sample Output :
4
1
0
2

</pre><pre>
Constraints :
1 &lt;= N &lt;= 100000
1 &lt;= Q &lt;= 100000
0 &lt;= A &lt;= B &lt;= N - 1
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
            <td>11-04-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>