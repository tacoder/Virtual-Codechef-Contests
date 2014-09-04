<?php require("../../includes/header.php"); ?><h1>The LCS Problem Revisited</h1><div class="content">

<p>The Longest Common Subsequence (LCS) problem is a well known problem in Computer Science.<br />
Every computer science students in Byteland knows this problem. Johnny does, too.</p>
<p>Recall that a subsequence of a string S is obtained by deleting some characters from S.<br />
Given two strings S and T, the LCS problem is the find the longest sequence that is a subsequence of both S and T.</p>
<p>Johnny has the habit of deriving harder problems from a familiar problem. This time, based on the LCS problem, he has thought up the following problem:
</p>
<p><i>Given two strings S and T, how many distinct LCS of S and T are there?</i></p>
<p>Write a program to help Johnny solve this problem. Since the result may be very large, you only need to print the remainder of the result when dividing by 23102009.</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 10). Then t test cases follow.</p>
<p>Each test case consists of two lines, the first line is the string S and the second line is the string T. You may assume that the strings consists of only lowercase characters and the length of the each string is at most 1000 characters.
</p>
<p>Successive test cases at input are separated by a single blank line.</p>
<h3>Output</h3>
<p>For each test case, print a single line containing two numbers which are the length of the LCS and the remainder of the number of distinct LCS of S and T when dividing by 23102009.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
2
acbd
acbd

vnvn
vn

<b>Output</b>
4 1
2 1

<b>Output details</b>
<p>The only LCS in the first case is "acbd" and in the second case is "vn".</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3.5 sec</td>
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