<?php require("../../includes/header.php"); ?><h1>Finding Minimum</h1><div class="content">

<p>You are given 'n' integers k<sub>1</sub>, k<sub>2</sub>, ...., k<sub>n</sub> and an integer 'x', which satisfy the equation x<sub>1</sub><sup>k<sub>1</sub></sup> * x<sub>2</sub><sup>k<sub>2</sub></sup> * ..... * x<sub>n</sub><sup>k<sub>n</sub></sup> = x. You are also given values a<sub>1</sub>, a<sub>2</sub>, ...., a<sub>n</sub> and y<sub>1</sub>, y<sub>2</sub>, ...., y<sub>n</sub>. Your task is to find the least positive value 'v', that can be taken by the expression: a<sub>1</sub>*x<sub>1</sub><sup>y<sub>1</sub></sup> + a<sub>2</sub>*x<sub>2</sub><sup>y<sub>2</sub></sup> + ... + a<sub>n</sub>*x<sub>n</sub><sup>y<sub>n</sub></sup>. Note that x<sub>1</sub>, x<sub>2</sub>, x<sub>3</sub>, ..... x<sub>n</sub> are some variables (not necessarily integers), which can only take positive values.</p>
<h3>Input</h3>
<p>The first line of input contains a single integer 't', denoting the number of test cases.<br />
<br/>The first line of each testcase contains two space separated integers 'n' and 'x'.<br />
<br/>Next line contains 'n' integers k<sub>1</sub>, k<sub>2</sub>, ..., k<sub>n</sub>.<br />
<br/>Next line contains 'n' integers a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>n</sub>.<br />
<br/>Next line contains 'n' integers y<sub>1</sub>, y<sub>2</sub>, ..., y<sub>n</sub>.</br/></br/></br/></br/></p>
<h3>Output</h3>
<p>For each testcase output the least positive value 'v' that can be taken by the expression. To avoid floating point errors, round it off to the nearest integer.</p>
<p>For example, 12.6 is rounded off to 13, and 12.4 is rounded off to 12. To avoid ambiguity, there will be no test case for which the fractional part of the answer equals 0.5.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 4
2
3
3
2 6
1 1
1 1
1 1

<b>Output:</b>
24
5

<b>Constraints:</b>
t &lt;= 25
1 &lt;= n &lt;= 20
1 &lt;= x &lt;= 1000000
1 &lt;= k<sub>i</sub>, a<sub>i</sub>, y<sub>i</sub> &lt;=20
x<sub>i</sub> > 0

</pre><p><b>Explanation:</b></p>
<p>Test case 1: x<sub>1</sub><sup>2</sup> = 4. Therefore, x<sub>1</sub> = 2 and 3*x<sub>1</sub><sup>3</sup> = 24.<br />
<br/>Test case 2: x<sub>1</sub>*x<sub>2</sub> = 6. Minimum value of x<sub>1</sub> + x<sub>2</sub> is 2*sqrt(6) = 4.89897. x<sub>1</sub> = sqrt(6) and x<sub>2</sub> = sqrt(6) gives this solution. Answer is 4.89897, which when rounded off to the nearest integer equals 5.</br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suh_ash2008">suh_ash2008</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2011</td>
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