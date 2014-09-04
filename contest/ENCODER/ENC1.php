<?php require("../../includes/header.php"); ?><h1>Children</h1><div class="content">

<p> Little John Von Neumann has just been introduced to the world of numbers by his father. He has been fiddling around with them for some time now and already makes much more sense of them than a seasoned professional. (Note: He's just 6 years old) <br />
In particular, he is fascinated by the fact that how just 9 digits can form countless numbers. In his terminology, a number m is child of a parent number n if </p>
<ul>
<li>they have the same non-zero digits (their order may be different),</li>
<li>the number of zero digits in the child are less than or equal to the number of zero digits in his parent and </li>
<li>m is less than n.</li>
</ul>
<p> For example numbers 120, 102, 12, etc are children of 1200.<br />
(Note: Leading zeros are not allowed in m)<br />
<br />
Little Von Neumann is interested in finding the number of children of a number. Could you amuse him?
 </p>
<h3>Input</h3>
<p> First line contains, 1&lt;= t&lt;=50, the number of test cases, and then t lines follows, <br />
Each line has one number n;</p>
<ul>
<li>n will not start with a '0'.</li>
<li>n will have between 1 and 50 characters, inclusive.</li>
<li>n will consists of only digits between ('0', '9').</li>
<li>There will be at most 2^63 - 1 children with the same non-zero digits as n that are less than n</li>
</ul>

<h3>Output</h3>
<p> For each test case output total number of children possible. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
9177
1020
50000000000000
1030000040000

<b>Output:</b>
9
7
13
1414

<b>Explanation:</b>
For test case 1 Children of 9177 are: 7179, 7719, 7791, 7971, 7197, 1779, 1797, 1797 and 1977.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kunalsangwan">kunalsangwan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>