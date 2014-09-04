<?php require("../../includes/header.php"); ?><h1>Palindromic Numbers</h1><div class="content">

<p>Johnny has figured out that there are some numbers which have an interesting property: they are the same when read from left to right, and from right to left. For example, 5115 and 929 are such numbers, while 31 and 125 are not. Johnny calls such numbers palindromic numbers.</p>
<p>After a while, Johnny has realized that his definition of palindromic numbers is not really precise. Whether a number is palindromic or not depends on the base in which the number is written. For example, 21 is not palindromic in base 10 but it is palindromic in base 2 (because 21 = 10101<sub>2</sub>).</p>
<p>Johnny finds it interesting that any number becomes palindromic when it is written in an appropriate base.</p>
<p>Given a number N, write a program to help Johnny compute the smallest base B such that N is palindromic when written in base B.</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 1000). Then t test cases follow.</p>
<p>Each test case consists of a number N written in one line (1 &lt;= N &lt;= 10<sup>10</sup>).</p>
<h3>Output</h3>
<p>For each given number N, print a line containing the smallest base B such that N is palindromic in base B.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1
4
21

<b>Output:</b>
2
3
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-11--0001</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>