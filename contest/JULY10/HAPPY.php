<?php require("../../includes/header.php"); ?><h1>Happy Days</h1><div class="content">

<p>Johnny has a pool in his garden. There are several islands in the pool. Some islands are connected by bridges. Any bridge can be removed. Every day Johnny removes some bridges so that there is only one way from any island to any other. In the evening he returns removed bridges to their places. Also he has some favorite bridges which he never removes. Johnny will be happy if he is able to make a configuration of bridges on the given day which he has never made before. You have to count the amount of days he will be happy. Of course, if the favorite bridges themselves don't satisfy the happiness condition Johnny will not be happy for even single day.</p>
<h3>Input</h3>

<p>The first line of input file contains number t – the number of test cases. Then the description of each test case follows. The first line of each test case contains number n – the number of islands. Islands are numbered with integers from 1 to n. Then n lines follow each containing n characters defining the connectivity matrix of those islands. Character in column x of line y will be ‘1’ if the islands with numbers x and y are connected and ‘0’ otherwise. The next line is number p – the number of favorite bridges. The next p lines contain the pairs of islands that are connected by favorite bridges.</p>
<h3>Output</h3>

<p>For each test case print the number of days Johnny will be happy in this situation.</p>
<h3>Constraints</h3>

<p>1 &lt;= t &lt;= 5<br />
2 &lt;= n &lt;= 30<br />
1 &lt;= p &lt;= min(6, n-1)</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
4
0111
1011
1101
1110
2
1 2
3 4

<b>Output:</b>
4

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/spooky ">spooky </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anshuman_singh">anshuman_singh</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-05-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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