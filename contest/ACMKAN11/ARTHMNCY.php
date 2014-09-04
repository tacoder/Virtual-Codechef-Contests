<?php require("../../includes/header.php"); ?><h1>Arithmancy</h1><div class="content">

<p>Hermione Granger, the most talented witch of her generation, likes to solve various types of mathematical problems in the Arithmancy class. Today, the professor has given her the following task:<br />
<br />
Find the number of fractions a/b such that-<br />
<br />
1.	<b>gcd(a, b) = 1</b><br />
2.	<b>0 &lt; a/b &lt; 1</b><br />
3.	<b>a * b = (n!) ^ (n!)</b></p>
<p>Where <b>"n!"</b> denotes the factorial of n and "^" denotes power, <b>i.e. (2!) ^ (2!) = 4</b>.<br />
<br />
She is quite confident that she can solve it for <b>n &lt;= 10,000,000 (i.e. 10^7)</b>, but then she remembers that she has to study some case history so that she can help Hagrid to win the case of Buckbeak. So, she wants your help to solve the problem.</p>
<h3>Input</h3>

<p>There will be one line for each test case containing the number <b>n (1 &lt;= n &lt;= 10,000,000)</b>. Input will be terminated by EOF. There will be around <b>20,000</b> test cases.</p>
<h3>Output</h3>

<p>For each case, print the number of fractions in a separate line. This number may be very large, so print the answer modulo <b>10,007</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2

<b>Output:</b>
0
1
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>