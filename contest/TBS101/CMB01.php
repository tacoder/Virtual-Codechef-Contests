<?php require("../../includes/header.php"); ?><h1>Problem 1</h1><div class="content">

<p>
Reversed number is a number written in arabic numerals but the order of digits is reversed.</p>
<p>The first digit becomes last and vice versa. For example, if the number is 1245,it will become</p>
<p>5421 .Note that all the leading zeros are omitted. That means if the number ends with a zero, </p>
<p>the zero is lost by reversing (e.g. 1200 gives 21). Also note that the reversed number never has</p>
<p>any trailing zeros. Your task is to add two reversed numbers and output their reversed sum. Of </p>
<p>course, the result is not unique because any particular number is a reversed form of several </p>
<p>numbers (e.g. 21 could be 12, 120 or 1200 before reversing). Thus we must assume that no zeros </p>
<p>were lost by reversing (e.g. assume that the original number was 12).</p>
<h3>Input</h3>
<p>
The input consists of N cases (equal to about 10000). The first line of the input contains </p>
<p>only positive integer N. Then follow the cases. Each case consists of exactly one line with </p>
<p>two positive integers separated by space. These are the reversed numbers you are to add.</p>
<h3>Output</h3>
<p>
For each case, print exactly one line containing only one integer - the reversed sum of </p>
<p>two reversed numbers. Omit any leading zeros in the output.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
24 1

<b>Output:</b>
34

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vishesh_sigma">vishesh_sigma</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>50 sec</td>
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