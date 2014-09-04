<?php require("../../includes/header.php"); ?><h1>Khefu and GCD</h1><div class="content">
<p> </p>
<p>Khefu is a highschool student from India. She adores maths. In maths, her favorite topic is number theory. Today, she is playing with the <a href="http://en.wikipedia.org/wiki/Greatest_common_divisor">GCD</a> function.  What she is doing is just randomly picking up a pair of integers <strong>(x,y)</strong> and computing their GCD. She noticed that many times the  <strong>GCD(x,y) </strong> is <strong>1</strong>. Khefu is quite intrigued by these pairs and wanted to count them. </p>
<p> Given a upper-bound <strong>N</strong>, help khefu to count the number of pair of integers  <strong>(x,y)</strong>  such that <strong> <b>0</b> ≤ <b>x,y</b> &lt; <b>N</b>
<p></p></strong> and <strong> GCD(x,y) = 1 </strong> .</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.The first and the only line of each test case contains a single integer denoting the upper-bound <strong>N</strong> as described in the problem statement. </p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the value of the required count.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3

<b>Output:</b>
5
</pre><p> </p>
<h3>Explanation</h3>
<p>For the upper bound <b>N = 3.</b> we have exactly <b>5</b> pairs for which the <b>GCD</b> is <b>1</b>: <strong>(0,1),(1,0),<br />
(1,1),(1,2),(2,1) <strong> </strong></strong></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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