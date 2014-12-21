<?php require("../../includes/header.php"); ?><h1>Let us construct palindrome</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/PRPALN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/PRPALN.pdf">Russian</a>.</h3>
<p>Given a string <b>s</b>. Can you make it a palindrome by deleting exactly one character? Note that size of the string after deletion would be one less than it was before. </p>
<h3>Input</h3>
<p>First line of the input contains a single integer T denoting number of test cases.</p>
<p>For each test case, you are given a single line containing string <b> s. </b></p>
<h3>Output</h3>
<p>For each test case, print <b>YES</b> or <b>NO</b> depending on the answer of the problem. </p>
<h3>Constraints</h3>
<p>
<b> Subtask 1, 35 points </b></p>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>2</b> ≤ <b> size of string s</b> ≤ <b>1000</b></li>
<li> String <b>s</b> contains lowercase English alphabets (ie. from 'a' to 'z').
</li></ul>

<p>
<b> Subtask 2, 65 points </b> </p>
<ul>
<li><b>2</b> ≤ <b> size of string s</b> ≤ <b>10^5</b></li>
<li> Sum of size of string <b>s</b> over all the input test cases won't exceed 10^6</li>
<li> String <b>s</b> contains lowercase English alphabets (ie. from 'a' to 'z').
</li></ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
aaa
abc
abdbca
abba

<b>Output:</b>
YES
NO
YES
YES
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Delete any one 'a', resulting string is "aa" which is a palindrome.</p>
<p><b>Example case 2.</b> It is not possible to delete exactly one character and having a palindrome.</p>
<p><b>Example case 3.</b> Delete 'c', resulting string is "abdba" which is a palindrome. </p>
<p><b>Example case 4.</b> Delete 'b', resulting string is "aba" which is a palindrome. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-10-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>