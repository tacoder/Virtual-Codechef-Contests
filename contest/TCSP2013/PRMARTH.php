<?php require("../../includes/header.php"); ?><h1>Primary Arithmetic</h1><div class="content">

<p>
Children are taught to add multi-digit numbers from right to left, one digit at a time.<br />
Many find the “carry” operation, where a 1 is carried from one digit position to the<br />
next, to be a significant challenge. Your job is to count the number of carry operations for each of a set of addition problems so that educators may assess their difficulty.</p>
<h3>Input</h3>
<p>
Each line of input contains two unsigned integers less than 10 digits. The last line of input contains “0 0”.</p>
<h3>Output</h3>
<p>
For each line of input except the last, compute the number of carry operations that result from adding the two numbers and print them in the format shown below.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
123 456
555 555
123 594
0 0

<b>Output:</b>
No carry operation.
3 carry operations.
1 carry operation.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/assasin143">assasin143</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-01-2013</td>
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