<?php require("../../includes/header.php"); ?><h1>The Reversed World</h1><div class="content">

<p>Given three numbers A, B and C all having N digits, little Johnny needs to write a program to permute the digits of the number C so that the new number is greater than both A and B.</p>
<p>This problem would be so easy if Johnny's teacher didn't require that Johnny's program must be correct in both the real world and <i>the reversed world</i>. What happens once the world is reversed? One thing Johnny knows for sure is that all the numbers are also reversed. The second thing, the "greater than"  relation becomes the<br />
"smaller than" relation.
</p>
<p>For the sake of clarity, we will use a<sup>R</sup> to denote the number a in the reversed world (for instance, 113<sup>R</sup> = 311).
</p>
<p>Thus Johnny task is now permute the digits of C so that the new number is greater than both A and B. In additional, the reverse of the new number should be smaller than both A<sup>R</sup> and B<sup>R</sup>. If there are multiple possible solutions, Johnny needs to find the smallest one.</p>
<p>As usual, please help Little Johnny with his task!</p>
<p><h3>Input</h3>
</p>
<p>The first line contains a number T (about 10) which is the number of the test cases. Each test case has the following form.
</p>
<p>The first line contains N (1 &lt;= N &lt;= 1000000).
</p>
<p>The second line contains the number A.
</p>
<p>The third line contains the number B.
</p>
<p>The fourth line contains the number C.
</p>
<p>Each test case's input is separated by a blank line.</p>
<h3>Output</h3>
<p>For each test case, print the solution in a single line. If there is no solution, print the number -1.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

2
12
23
32

3
124
324
335

<b>Output:</b>
-1
353
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-03-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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