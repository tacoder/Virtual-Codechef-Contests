<?php require("../../includes/header.php"); ?><h1>Trees Again</h1><div class="content">

<p>
Given a tree, you need to count how many subtrees exist such that the length of the longest path in the subtree is at most K.
</p>
<p>
Input :
</p>
<p>The first line contains the number of test cases T.<br />
T test cases follow. For each test case, the first line contains N and K. The following N - 1 lines contain two integers ai and bi, indicating an edge between nodes ai and bi in the tree. There is a blank line after each test case.</p>
<p>
Output :
</p>
<p>
Output T lines, one corresponding to each test case, containing the required answer.
</p>
<pre>
Sample Input :
2
3 1
0 1
1 2

6 3
0 1
1 2
2 3
2 4
3 5

</pre><pre>
Sample Output :
5
23

</pre><pre>
Constraints :
1 &lt;= T &lt;= 2000
2 &lt;= N &lt;= 60
0 &lt;= ai,bi &lt; N
1 &lt;= K &lt;= N - 1
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
            <td>20-08-2010</td>
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