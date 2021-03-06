<?php require("../../includes/header.php"); ?><h1>Weight of Numbers</h1><div class="content">

<h3>Statement</h3>
<p>Let us denote an <b>n</b> digit decimal number by a<sub>1</sub>a<sub>2</sub>a<sub>3</sub>...a<sub>n</sub> with the condition that each a<sub>i</sub> should be between 0 and 9 inclusive except a<sub>1</sub> which should be between 1 and 9 inclusive. The weight of such a number is defined as the sum of absolute difference between adjacent numbers. Precisely the weight can be defined as,</p>
<pre style='font-weight:bold;color:grey;'>

	weight = 0
	For i = 1 to n-1
  		weight = weight + ABS(a<sub>i+1</sub> - a<sub>i</sub>)


</pre><p>Here ABS is the absolute value of the argument.<br />
Given <i>n</i> and a weight <i>w</i>, find all the <i>n</i> digit numbers having a weight <i>w</i>. Since the answer could be very large, print the answer modulo 1000007.</p>
<h3>Input Format:</h3>
<p><br /><br />
The first line contains one integer <b>t</b>, the number of testcases. (1 &lt;= <b>t</b> &lt;= 150) <br />
This will be followed by <b>t</b> lines each consisting of numbers <b>n</b> and <b>w</b>.<br />
<br /></p>
<h3>Constraints:</h3>
<p></p>
<ul>
<li>2 &lt;= <b>n</b> &lt;= 20</li>
<li><b>0</b> &lt;= <b>w</b> &lt;= 200</li>
</ul>
<p><br /></p>
<h3>Output Format:</h3>
<p><br /><br />
For each test case print the answer modulo 1000007 in a separate line.<br />
<br /></p>
<h3>Sample Input:</h3>
<p><br /></p>
<pre>
2
10 0
2 1
</pre><h3>Sample Output:</h3>
<p><br /></p>
<pre>
9
17
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anshuman_singh">anshuman_singh</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-09-2010</td>
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