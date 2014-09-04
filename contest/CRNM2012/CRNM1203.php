<?php require("../../includes/header.php"); ?><h1>All Champions Mathematics Contest</h1><div class="content">

<p align="justify">
Turtur has started preparation for All Champions Mathematics Contest going to be held in Feb. this year. Although he is very good at mathematics, but his weakest among all topics is Number Theory. So he has been studying various Number Theory problems from past few days. He came across one of the problems called <b>Excessivity of a number problem.</b></p>
<p><b>Excessivity</b> of a number is defined as the product of <b>Summation excess function</b> of every prime below or equal to that number.<br />
<br /><b>Summation excess function</b> for a prime number is defined as sum of <b>Excess function</b> of all positive powers till power <b>K</b> of that prime number.<br />
<br /><b>Excess function</b> of a number is defined as the sum of all divisors of that number (including 1 and itself) minus that number itself.</p>
<p>Excess(x) = sum of divisors of "x" – x.<br />
SummationExcess(P,K) =<img src="http://www.csidtu.com/cranium/problem3_1.JPG" /> <br />
Excessivity(N,K) = <img src="http://www.csidtu.com/cranium/problem3_2.JPG" /></p>
<p>Turtur has found a very nice solution for this problem for some values of <b>N</b> &amp; <b>K</b>. But since he is weak in Number Theory, he is unsure of his results and he wants to crosscheck his answers for given values of <b>N</b> &amp; <b>K</b>. Since this result can be pretty large, just tell him the Excessivity(N,K) modulo 10^9+7.</p>
<h3>Input</h3>

<p>First line consists of <b>T</b> the number of test cases. Each of the next <b>T</b> lines contains two integers <b>N</b> and <b>K</b>.</p>
<h3>Output</h3>

<p>Output <b>T</b> lines each containing the Excessivity(N,K) modulo 10^9+7.</p>
<h3>Constraints</h3>

<p>
1&lt;=N&lt;=10^6<br />
1&lt;=K&lt;=10^9<br />
1&lt;=T&lt;=10</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 3
5 2

<b>Output:</b>
11
140
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhidce2013">abhidce2013</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>