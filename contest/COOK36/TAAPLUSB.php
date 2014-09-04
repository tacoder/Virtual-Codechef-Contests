<?php require("../../includes/header.php"); ?><h1>A Plus B Again!</h1><div class="content">
<p>Have you ever implemented a program adding two big integers that cannot be represented by the primitive data type of your programming language? The algorithm is just simulation of the column addition method that we have been taught in elementary school. Sometimes we forget the carry and the result is incorrect.</p>
<p>In this problem, you need to evaluate the expected value of the number of times we have non-zero carry when adding two non-negative integers that contain <b>at most N</b> digits each. Note that we are adding the numbers in their <b>base 10</b> representation.</p>
<p>For example, the following table shows the number of carries when adding some pairs of numbers:</p>
<table align="center" cellpadding="3" border="1">

<tr>
<td><b>A</b></td>
<td><b>B</b></td>
<td><b>Number of carries</b></td>
</tr>
<tr>
<td>20</td>
<td>4</td>
<td>0</td>
</tr>
<tr>
<td>111</td>
<td>119</td>
<td>1</td>
</tr>
<tr>
<td>123</td>
<td>923</td>
<td>1</td>
</tr>
<tr>
<td>1235</td>
<td>98765</td>
<td>5</td>
</tr>

</table>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /> Each test case has a single line containing an integer <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the required expected value.<br /> Your answer will be accepted if the error is less than 10 <sup>-6</sup>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100,000(10<sup>5</sup>)</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000(10<sup>5</sup>)</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
1
2
3

<b>Output:</b>
0.45
0.945
1.4445

</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br /> We have 10*10 = 100 cases of adding two 1-digit number.<br /> The carry appears when adding 1 and 9, 2 and 9, 3 and 9 ... and so on,<br /> there are 45 cases in total and in each case, the carry appears exactly once.</p>    </div><table align="center" cellpadding="3" border="1">

<tr>
<td><b>A</b></td>
<td><b>B</b></td>
<td><b>Number of carries</b></td>
</tr>
<tr>
<td>20</td>
<td>4</td>
<td>0</td>
</tr>
<tr>
<td>111</td>
<td>119</td>
<td>1</td>
</tr>
<tr>
<td>123</td>
<td>923</td>
<td>1</td>
</tr>
<tr>
<td>1235</td>
<td>98765</td>
<td>5</td>
</tr>

</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/keshav_57">keshav_57</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-05-2013</td>
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