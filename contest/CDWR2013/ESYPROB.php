<?php require("../../includes/header.php"); ?><h1>Two Function Conundrum</h1><div class="content">
<p> </p>
<p>This is probably the easiest task of this problem set. To help you understand the task let us define two key functions: <br /> <br /></p>
<p>Let <b>f(p,q)</b> be the set of all integers <b> x </b> such that <strong> (p mod x + q mod x) &gt;= x</strong>. For example: <br /> <b>f(1,7) = {2,4,8}  f(5,7) = {2,3,4,6,8,9,10,11,12}  </b><b>f(6,7) = {4,8,9,10,11,12,13} </b> </p>
<p>
Let <b>E(n)</b> = number of integers <b>{0,1,2, ... ,n-1}</b> that are relatively prime to <b>n</b>.
</p>
<p> Given <b>p</b> and <b>q</b>, your task is to find the summation of <b>E(x)</b> for all <b>x</b> in <b>f(p,q).</b></p>
<h3>Input</h3>
<p>The first and the only line of the input contains two (space separated) integers denoting <b>p</b> and <b>q</b> as described in the problem set.</p>
<h3>Output</h3>
<p>Output the required summation.</p>
<p> </p>
<h3>Constraints</h3>
<p>Both <b>p</b> and <b>q</b> will non-negative and can  have at-most <b>300000</b> decimal digits each.</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1 7

<b>Output:</b>
7
</pre><p> </p>
<h3>Explanation</h3>
<p><b>For the test case:</b>  p = 1 and q = 7, <br /><br />
we have, <b>f(1,7) = {2,4,8}</b>, then <b>E(2) + E(4) + E(8) = 1 + 2 + 4 = 7</b>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Debanjan">Debanjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-09-2013</td>
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