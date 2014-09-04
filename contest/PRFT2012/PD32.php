<?php require("../../includes/header.php"); ?><h1>How many Fibs</h1><div class="content">

<p>Recall the definition of the Fibonacci numbers:<br />
</p>
<p>    f1 := 1<br />
    f2 := 2<br />
    fn := fn-1 + fn-2 (n>=3) </p>
<p>Given two numbers a and b, calculate how many Fibonacci numbers are in the range [a,b].</p>
<h3>Input</h3>
<p>
The input contains several test cases. Each test case consists of two non-negative integer numbers a and b. Input is terminated by a=b=0. Otherwise, a&lt;=b&lt;=10^100. The numbers a and b are given with no superfluous leading zeros.</p>
<h3>Output</h3>
<p>
For each test case output on a single line the number of Fibonacci numbers fi with a&lt;=fi&lt;=b.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

10 100
1234567890 9876543210
0 0


<b>Output:</b>

5
4

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mani_yadav">mani_yadav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-02-2012</td>
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