<?php require("../../includes/header.php"); ?><h1>Parenthesis</h1><div class="content">

<p>The captain of TITANIC is a mathematics freak. He has recently been given a problem that he is unable to solve. And he has asked your help to solve it.</p>
<p>There are n numbers in a given expression.</p>
<p>X1 X2 X3 ....  Xn</p>
<p>What is the number of ways to put parenthesis in the expression.</p>
<p>For n=4, the different ways are </p>
<pre>
(((x1.x2).x3).x4)
((x1.x2).(x3.x4))
(x1.((x2.x3).x4))
(x1.(x2.(x3.x4)))
((x1.(x2.x3)).x4)
</pre><p>
Hence the required answer would be 5.</p>
<h3>Input</h3>
<p>The first line contains the number of test cases t &lt;=10.<br />
Each of the next t lines contain single integers &lt;=1000 denoting n.</p>
<h3>Output</h3>
<p>Display t lines containg the number of ways to put parenthesis in the expression of length n modulo 10000.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4
5


<b>Output:</b>
5
14
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/uploader0">uploader0</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>