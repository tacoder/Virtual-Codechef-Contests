<?php require("../../includes/header.php"); ?><h1>Prime Palindrome</h1><div class="content">
<p>Problem Description </p>
<p>Given a string, find the number of palindromic substrings of the string whose length is a prime number.The string consists only of lowercase english alphabet.<br />
These palindromes need not be distinct.
</p>
<h3>Input</h3>
<ul>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. Then, T lines follow. Each line contains a string.</ul>
<p><b>Note:</b> N is the string length.</p>
<h3>Output</h3>
<p>For each test case, output a single integer containing the answer to the corresponding test case.</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000 (10<sup>5</sup>)</b></li>
<h3>Example</h3>
<pre><b>Sample Input:</b>
2
abac
ababac
<p></p>
<b>Sample Output:</b>
1
4
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The palindromic substrings in the string are <b>"a","b", "a",and "aba"</b>. But only palindrome <b>"aba" </b>is of prime length . So, output is 1.</p>
<p><b>Example case 2.</b> The palindromic substrings in the string are <b>"a", "b", "a" , "b", "a", "c", "aba", "aba", "bab", "ababa"</b>.The prime length palindromes are "aba", "aba", "bab", and "ababa"  . So, output is 4. Here, we take both “aba” and “aba” as two different palindromes.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cdev">cdev</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>