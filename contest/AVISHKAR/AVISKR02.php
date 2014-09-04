<?php require("../../includes/header.php"); ?><h1>Flibonakki</h1><div class="content">

<p>Flibonakki series G(n) is defined as</p>
<p>            G(n) = G(n-1) + f(4n-1)   , for n > 0</p>
<p> and    G(0) = 0</p>
<p> f(i) is our good old Fibonacci series.<br />
Given n you need to evaluate G(n).<br />
<h3>Input</h3>
</p><p>First line contains number of test cases t (t&lt;40000). Each of the next t lines contain an integer n ( 0 &lt; n &lt; 2^51 ). </p>
<h3>Output</h3>
<p>For each test case print the nth flibonakki number modulo 1000000007.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2
4


<b>Output:</b>
15
714

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mandark">mandark</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2010</td>
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