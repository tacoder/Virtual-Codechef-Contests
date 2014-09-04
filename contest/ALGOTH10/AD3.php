<?php require("../../includes/header.php"); ?><h1>STRINGENT STRINGS</h1><div class="content">

<p>A war is going on and Cody our spy is receiving information from the other side. But there is a problem, due to weak transmitters on other side; he misses out parts of the strings (made of bits 0s and 1s) he receives, so he needs your help. As part of an error correction technique the strings are made such that the number of 0s and number of 1s have difference less than or equal to 2. This stringent condition applies to every substring of the given string also. i.e. </p>
<p>
-2&lt;=[count of 1s – count of 0s]&lt;=2
</p>
<p>
Your job is to find all possible combinations that could be made from the incomplete strings.
</p>
<h3>Input</h3>
<p>First line of input consists of ‘t’ (1&lt;=t&lt;=15)  test cases, then ‘t’ test cases follows, each case with 1 lines and length  of each string is maximum 50..</p>
<p>Each line consisting of 1s 0s and *s, with each * denoting a missing bit. </p>
<h3>Output</h3>

<p>The output must contain ‘n’ lines of output, with 1 integer in each line. The integer is the number of possible combinations the string can form satisfying the error correction technique! </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
10**00
10***11 

<b>Output:</b>
1
2 

<b>Explanation</b>
Test case 1 : 101100  [1]

Test case 2 : 1010011,  1001011  [2] 

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/killer17">killer17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>