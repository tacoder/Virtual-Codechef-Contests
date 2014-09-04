<?php require("../../includes/header.php"); ?><h1>Number Game</h1><div class="content">

<p>Let's denote d(n) as the number of divisors of a positive integer n. You are given three integers a, b and c. Your task is to calculate sum:</p>
<p>               ∑ (i=1) to a  ∑ (j=1) to b  ∑(k=1) to c  d(i.j.k).</p>
<p>Find the sum modulo 1073741824  (2^30).</p>
<h3>Input</h3>
<p>The first line contains three space-separated integers a, b and c </p>
<h3>Output</h3>
<p>Print a single integer — the required sum modulo 1073741824 (2^30). </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>a, b, c</b> ≤ <b>2000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2 2 2

<b>Output:</b>
20
</pre><pre><b>Input:</b>
4 4 4

<b>Output:</b>
328
</pre><pre><b>Input:</b>
10 10 10

<b>Output:</b>
11536
</pre><h3>Explanation</h3>
<p>For the first example.<br />
	d(1•1•1) = d(1) = 1;
</p>
<p>	d(1•1•2) = d(2) = 2;
</p>
<p>	d(1•2•1) = d(2) = 2;
</p>
<p>	d(1•2•2) = d(4) = 3;
</p>
<p>	d(2•1•1) = d(2) = 2;
</p>
<p>	d(2•1•2) = d(4) = 3;
</p>
<p>	d(2•2•1) = d(4) = 3;
</p>
<p>	d(2•2•2) = d(8) = 4.
</p>
<p>So the result is 1 + 2 + 2 + 3 + 2 + 3 + 3 + 4 = 20.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/upendra1234">upendra1234</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2013</td>
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