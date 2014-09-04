<?php require("../../includes/header.php"); ?><h1>Magic Strings</h1><div class="content">

<p>
Magic strings, invented by the Bytelandians, are strings that contain immense magical power within themselves. Magic strings could bring luck and happiness to the Bytelandian citizens. Formally, a string S of length n is a magic string if it satisfies the following conditions:
</p>
<ul>
<li>All letters of S are lowercase letters of the English alphabet.</li>
<li>S<sub>i</sub> is lexicographically smaller than S<sub>n-i+1</sub> for all odd i from 1 to [n/2].</li>
<li>S<sub>i</sub> is lexicographically greater than S<sub>n-i+1</sub> for all even i from 1 to [n/2].</li>
</ul>
<p>(S<sub>i</sub> (1 ≤ i ≤ n) denotes the i<sup>th</sup> character of S). For example, the word "difference" is a magic string, while "similar" is not.</p>
<p>Given a string S of lowercase English letters, write a program to find the longest magic string than can be obtained by removing some letters of S. If there are more than one solutions, choose the longest magic string which is lexicographically smallest.</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 10). Then t test cases follow. Each test case contains a string S written in a single line. S does not contain more than 2000 letters.</p>
<h3>Output</h3>
<p>For each test case, print the longest magic string that is lexicographically smallest in a single line.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
3
difference
similarq
caaat

<b>Output</b>
difference
imilaq
aat
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
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>