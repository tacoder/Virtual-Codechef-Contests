<?php require("../../includes/header.php"); ?><h1>Rational Numbers</h1><div class="content">

<p>
Rational Numbers from Repeating Fractions</p>
<p>A rational number is any which can be written in the form p/q, where p and q are integers. All rational numbers less than </p>
<p>1 (that is, those for which p is less than q) can be expanded into a decimal fraction, but this expansion may require </p>
<p>repetition of some number of trailing digits. For example, the rational number 7/22 has the decimal expansion .3181818.. </p>
<p>Note that the pair of digits 1 and 8 repeat ad infinitum. Numbers with such repeating decimal expansions are usually </p>
<p>written with a horizontal bar over the repeated digits, like this: </p>
<p>If we are given the decimal expansion of a rational fraction (with an indication of which digits are repeated, if </p>
<p>necessary), we can determine the rational fraction (that is, the integer values of p and q in p/q) using the following </p>
<p>algorithm.</p>
<p>Assume there are k digits immediately after the decimal point that are not repeated, followed by a group of j digits which </p>
<p>must be repeated. Thus for 7/22 we would have k = 1 (for the digit 3) and j = 2 (for the digits 1 and 8). Now if we let X </p>
<p>be the original number (7/22), we can compute the numerator and denominator of the expression:</p>
<p>For  we obtain the following calculation for the numerator of this fraction:</p>
<p>The denominator is just 1000 - 10, or 990. It is important to note that the expression in the numerator and the </p>
<p>denominator of this expression will always yield integer values, and these represent the numerator and denominator of the </p>
<p>rational number. Thus the repeated fraction  is the decimal expansion of the rational number 315/990. Properly reduced, </p>
<p>this fraction is (as expected) just 7/22.</p>
<h3>Input</h3>
<p>
The input data for this problem will be a sequence of test cases, each test case appearing on a line by itself, followed </p>
<p>by a -1. Each test case will begin with an integer giving the value of j, one or more spaces, then the decimal expansion </p>
<p>of a fraction given in the form 0.ddddd (where d represents a decimal digit). There may be as many as nine (9) digits in </p>
<p>the decimal expansion (that is, the value of k+j may be as large as 9).</p>
<h3>Output</h3>
<p>
For each test case, display the case number (they are numbered sequentially starting with 1) and the resulting rational </p>
<p>number in the form p/q, properly reduced.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>


2 0.318
1 0.3
2 0.09
6 0.714285
-1

<b>Output:</b>
Case 1: 7/22
Case 2: 1/3
Case 3: 1/11
Case 4: 5/7
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gauravmunjal">gauravmunjal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-12-2009</td>
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