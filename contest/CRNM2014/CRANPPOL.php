<?php require("../../includes/header.php"); ?><h1>Princess Polynomial</h1><div class="content">
<p> </p>
<p>We do not know why you have to solve the task below, but we assure you that a beautiful princess is involved,a charming prince, the question of life and death and yes whether they will be able to kiss or not. <br /><br />
<br /><br />
You are given n integers ( a_1 , a_2 , a_3 ,...., a_n ), and an integer k. You have to determine if there exists a polynomial f(x) with degree at most k such that for each<b> 1&lt;=i&lt;=n, </b>  <b><b>f(i) = a_i </b></b></p>
<p> </p>
<h3>Input</h3>
<p>The first line will contain t-number of test cases.<br /><br />
Each test case consists of 2 lines.<br /><br />
The first line of each test case contains an integer k.<br /><br />
The second line contains an integer n followed by n space separated integers.</p>
<h3>Output</h3>
<p>For every test case print YES if f(x) exists else NO..</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>k</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>1000</b></li>
<li><b>-10^9</b> ≤ <b>a_i</b> ≤ <b>10^9</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
5 0 1 2 3 4

<b>Output:</b>
YES
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> The polynomial f(x)=x-1 satisfies the given data,also the degree of f(x)&lt;=3</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/apoorv_j">apoorv_j</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-02-2014</td>
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