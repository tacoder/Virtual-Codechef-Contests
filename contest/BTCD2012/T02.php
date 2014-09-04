<?php require("../../includes/header.php"); ?><h1>Palindrome Magic</h1><div class="content">

<p>In Math-World, each student is issued a unique ID which is a palindromic number. This ensures that the students can easily remember their ID. But the administration is afraid of a problem. It is afraid that if it keeps a very small ID, then it may soon run out of unique palindrome numbers. Thus, it has hired you as they've run out of mathematicians and programmers. So, they tell you the problem and then ask you to solve the following problem.<br />
For a n-digit palindrome, what is the kth palindrome (if arranged in ascending order) that can be formed?<br />
For eg. In the list of 2 digit palindromes, the 7th palindrome is 77 (1st being 11, 2nd being 22 and so on).<br />
The input will be of the form of an ordered pair n,k where n&lt;=9. Find the kth n-digit palindrome.</p>
<p>Note: This problem is pretty elementary to such an expereinced person as you, and so the administration asks you to solve it as fast as possible, so try and minimize the running time of your code as much as possible.</p>
<h3>Input</h3>
<p>The first line of the input contains T, the number of test cases that follow. The following T lines contain two values separated by a space. The first one is n (number of digits in the palindrome) and the next is k (the kth number in ascending order to be found)</p>
<h3>Output</h3>
<p>The output should be of T lines, where each line has the corresponding output of the test case. That is line 2 will contain kth n-digit palindrome for the 2nd test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4,9
7,50
9,120

<b>Output:</b>
1881
1049401
101191101
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rajatkhanduja">rajatkhanduja</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-08-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>