<?php require("../../includes/header.php"); ?><h1>The Black and White Knights</h1><div class="content">

<p>
How many ways are there to place a black and a white knight on an N * M chessboard such that they do not attack each other? The knights have to be placed on different squares. A knight can move two squares horizontally and one square vertically, or two squares vertically and one square horizontally. The knights attack each other if one can reach the other in one move.
</p>
<p>
Input :
</p>
<p>
The first line contains the number of test cases T. Each of the next T lines contains two integers N and M.
</p>
<p>
Output :
</p>
<p>
Output T lines, one for each test case, each containing the required answer for the corresponding test case.
</p>
<pre>
Sample Input :
3
2 2
2 3
4 5

</pre><pre>
Sample Output :
12
26
312

</pre><pre>
Constraints :
1 &lt;= T &lt;= 10000
1 &lt;= N,M &lt;= 100000
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/syco">syco</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-04-2010</td>
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