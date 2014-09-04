<?php require("../../includes/header.php"); ?><h1>Palindromic Subsequences</h1><div class="content">

<p> The problem is very simple. For every string given as input, you need to tell us the number of subsequences of it that are palindromes (need not necessarily be distinct). Note that the empty string is not a palindrome. </p>
<p>For example, the palindromic subsequences of "aab" are:<br />
"a", "a", "b", "aa", and the method returns 4.</p>
<h3>Input</h3>
<p>
First line contains the number of test cases T (atmost 20). Each of the next T lines contains a single string whose number of palindromic subsequences are to be printed. The maximum length of any input string is 50.</p>
<h3>Output</h3>
<p>
For each test case, print in a single line, the number of palindromic subsequences of the input string.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
aab
dddd
thisisapalindromeemordnilapasisiht
<b>Output:</b>
4
15
814157
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/moneymachine">moneymachine</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-01-2010</td>
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