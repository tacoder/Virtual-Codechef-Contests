<?php require("../../includes/header.php"); ?><h1>Political Game</h1><div class="content">
<h3>Problem Description </h3>
<p>The C Plus International (CPI) and C Plus International [Mathematicians] (CPI M) have always been against each other. CPI this time around wants to show the people that even they have high maths skills like CPI M. The people of the country try to test this new skill of the party with a simple problem.</p>
<p>The problem is as follows : Given two numbers <i>N</i> and <i>P</i> the problem asks to find the last digit of N<sup>P</sup>. Even this problem is too tough for CPI to handle. So they hire you to write a program to solve this problem.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows<br />
<br /> <br />
each test case contains two space separated Integers N and P</p>
<h3>Output</h3>
<p> For each test case, output a single line containing a single Integer , the<br />
 last Digit of N<sup>P</sup>

<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>10<sup>5</sup></b></li>
<li><b>0</b> &lt;= <b>N,P</b> &lt;= <b> 10<sup>18</sup></b> </li>
</ul>
</p><p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
2 3
2 4
3 3
3 4

<b>Output:</b>
8
6
7
1
</pre><p>
<b>Explanations </b><br />
In the first test case, 2<sup>3</sup> is 8, so the last digit is 8. In the second case 2<sup>4</sup> is 16. But we want only the last digit, so answer is 6.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/phantom11">phantom11</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-02-2014</td>
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
            <td>C, CPP 4.3.2, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>