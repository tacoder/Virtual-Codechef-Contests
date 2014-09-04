<?php require("../../includes/header.php"); ?><h1>Multiplying by Rotation</h1><div class="content">

<p>
Multiplication of natural numbers in general is a cumbersome operation. In some cases however the product can be obtained by moving the last digit to the front. </p>
<p>Example: 179487 * 4 = 717948 </p>
<p>Of course this property depends on the numbersystem you use, in the above example we used the decimal representation. In base 9 we have a shorter example: </p>
<p>17 * 4 = 71 (base 9) </p>
<p>as (9 + 7) * 4 = 7 * 9 +1</p>
<h3>Input</h3>
<p>Input description...<br />
The input for your program is a textfile. Each line consists of three numbers separated by a space: the base of the number system, the least significant digit of the first factor, and the second factor. This second factor is one digit only hence less than the base. The input file ends with the standard end-of-file marker.</p>
<h3>Output</h3>
<p>Output description...<br />
Your program determines for each input line the number of digits of the smallest first factor with the rotamultproperty. The output-file is also a textfile. Each line contains the answer for the corresponding input line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
10 7 4
9 7 4
17 14 12 

<b>Output:</b>
6
2
4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>