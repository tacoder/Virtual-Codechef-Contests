<?php require("../../includes/header.php"); ?><h1>No Zeroes please!</h1><div class="content">

<p>A robot named as Maestro, works on right most digit of number. For eg. 123456 is a number. Maestro would work with 6. But now, if number is 12345600. It will work with  6.  </p>
<h3>Input Specification</h3>
<p>
Input a variable t which is the number of test cases. Then input a string having alternate integers and multiplication characters. Your job is to calculate the last non zero digit in that mathematical expression.<br />
Number can be as large as 10^19.<br />
                         0 &lt; t&lt;100
</p>
<h3>Output Specification</h3>
<p>Output consists of a single number which is the last non zero digit of the value of the expression.<br />
If the expression evaluates to be zero, output should be &ldquo;Robot hanged.&rdquo;
</p>
<h3>Example</h3>
<pre>
<b>Sample Input:</b>
2
2X3X7X5
2X0X4X25


<b>Sample Output:</b>
1
Robot hanged.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/jasleenkb">jasleenkb</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2012</td>
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