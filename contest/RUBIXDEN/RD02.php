<?php require("../../includes/header.php"); ?><h1>Wrong Answer</h1><div class="content">

<h3>Problem Statement Modified </h3>
<p>
John is an accountant in the company. Unknowningly he made a mistake by taking wrong values.<br />
Before the meeting he realized his mistakes and due to short of time he needs your help to rectify the error.
</p>
<h3>Input</h3>
<p>
Each test date will contain a formula used to calculate the result. After each formula there will be correct value(may or may not change)<br />
Input is Terminated with a 0.<br />
Formula will contain basic operation(+,-,/,*) excuted from left to right.
</p>
<h3>Output</h3>
<p>
For each test case print one line for the correct result; As John is careless he doesn't really care about the precision.<br />
Take mod 1000000007 if the result exceeds.
</p>
<h3> Constraints </h3>
<p>
Test Case Approx. 10000 <br />
0 &lt; Length of Formula &lt; 500 <br />
0 &lt; Values in the formula &lt; 101 <br />
0 &lt; Corrected Values &lt; 11
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5/83+80*54-12
3
4
1
9
7
4/2*33+5
6
10
4
8
7+93+5*66+13/74+6
8
7
6
1
9
6
4
0

<b>Output:</b>
2
8
9
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/moneymachine">moneymachine</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-11-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>