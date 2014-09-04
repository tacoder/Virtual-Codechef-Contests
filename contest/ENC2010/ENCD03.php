<?php require("../../includes/header.php"); ?><h1>Interesting List</h1><div class="content">

<p>The Problem is simple. You will be given n integers .Find an arrangement of these n integers so that summation of the absolute differences between adjacent elements is maximized. Suppose n = 4 and the given integers are &lt;4 2 1 5&gt;. The re-arrangement &lt;2 5 1 4&gt; yields the maximum summation.<br />
For this arrangement, sum = abs(2-5) + abs(5-1) + abs(1-4) = 3+4+3 = 10.<br />
Of all the 24 different arrangements of the above list, you won’t get any summation whose value exceeds 10. We will call this value, 10, the "Interesting list sum".</p>
<h3>Input</h3>

<p>The Input will consist of number of test cases. Each case consists of a line that starts with n. n will be greater than 1 and smaller than 51, followed by n non-negative integers separated by a single space. None of the elements of the given list will exceed 1000. Terminate the input with n=0.<br />
</p>
<h3>Output</h3>

<p>For each case, output the "Interesting list sum".</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4 4 2 1 5
4 1 1 1 1
2 10 1
0
<b>Output:</b>
10
0
9
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rscrbv">rscrbv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-01-2010</td>
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