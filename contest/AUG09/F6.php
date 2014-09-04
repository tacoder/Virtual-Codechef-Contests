<?php require("../../includes/header.php"); ?><h1>Divide and conquer</h1><div class="content">

<p>The Chef has one long loaf of bread of length 1. He wants to cut it into as many little loaves as he can. But he wants to adhere to the following rule: <em>At any moment, the length of the longest loaf which he possesses may not be larger than the length of shortest one, times some constant factor.</em> Every time, he is only allowed to cut exactly one loaf into two shorter ones.</p>
<h3>Input</h3>
<p>One floating-point number, 1 ≤ k ≤ 1.999, meaning the stated constant factor. The number will have at most 3 digits after the decimal point.</p>
<h3>Output</h3>
<p>
First, you should output one number n, the maximal achievable number of loaves for the given value of the constant factor. Then, you should output any proof that this number of loaves is in fact achievable: n-1 descriptions of cutting, using the following notation. At each step, you print two numbers: first, the index of the loaf that you want to cut into two parts; second, the length of the newly created loaf (cut off from the original one). It is assumed that the starting loaf has index 0. Each newly created loaf will be given the lowest possible free integer index (so, at the ith step this will be i). Each time, the size of size of the original loaf will be decreased by the size of the newly created loaf.</p>
<h3>Example</h3>
<pre>
<strong>Input:</strong>
1.5
<strong>Output:</strong>
4
0 0.4
0 0.3
1 0.2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-07-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>