<?php require("../../includes/header.php"); ?><h1>GCD Sum</h1><div class="content">
<p> </p>
<p>You are provided with a set of numbers which is infinitely large. The numbers in this set are of the form :-<br />
{ 2<sup>2<sup>n</sup></sup> + 1 } where n is a positive integer. Now these set of numbers are kept in sorted order.</p>
<p>
Now queries are defined on this set such that given a range of terms [X...Y] you must calculate the sum of pairwise GCD(greatest common divisor) of the entire range (inclusive of X and Y ).</p>
<p>For example, if range contains the numbers A,B,C,D then the result of the query on this range will be<br />
GCD(A,B)+GCD(A,C)+GCD(A,D)+GCD(B,C)+GCD(B,D)+GCD(C,D).</p>
<p> </p>
<h3>Input</h3>
<p>The input consists of T( 1&lt;=T&lt;=100 ) test cases. Each test case consists of a single line containing two integers X and Y (1&lt;=X,Y&lt;=10<sup>9</sup>) the range on which to query.</p>
<h3>Output</h3>
<p>For each test case print a single line continaing the result of the query.
</p>
<h3>Example</h3>
<pre><b>Input:</b>

1
1 3

<b>Output:</b>

3
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitrc17">amitrc17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td> - 1 sec</td>
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