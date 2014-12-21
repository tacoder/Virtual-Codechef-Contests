<?php require("../../includes/header.php"); ?><h1>Devu and Adding Two Numbers</h1><div class="content">

<p>
Devu is a little boy. He does not know how to take carries while adding two numbers in decimal base. eg. He will struggle in adding numbers 83 and 19, because<br />
3 + 9 = 12 and he needs to take a carry of 1.</p>
<p></p><p>
You are given an integer n. Can you write it in terms of sum of two positive integers such that while adding them in base 10, Devu doesn't need to use any carries.
</p>
<h3>Input</h3>

<p>
First line of the input contains an integer <b>T</b> denoting number of test cases.
</p>
<p>
For each test case, there is a single line containing an integer n.
</p>

<h3>Output</h3>

<p>For each test case, print a single line YES or NO according to situation in the problem.</p>
<h3>Constraints</h3>

<ul>
<li> 1 ≤ T ≤ 1000 </li>
<li> 1 ≤ n ≤ 10^5 </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1
9
<b>Output:</b>
NO
YES
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> 1 can not written in desired way.</p>
<p><b>Example case 2.</b> 9 can be written as sum of 2 and 7. Devu doesn't need to use any carries here. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>