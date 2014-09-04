<?php require("../../includes/header.php"); ?><h1>Fair bases</h1><div class="content">

<p align="justify">Consider integers N and K such that 2 &le; K &le; N. Write all the numbers 0 ≤ i &lt; N in base K, adding leading zeros where necessary so that all the numbers are of equal length in base K. The score of an integer i (0 ≤ i &lt; N) in the list is defined in the following fashion : Consider the first digit of i in base K. Count the total number of times this digit occurs as first digit of some integer in the list. This is the score of the first digit of i. The number of times the second digit of i appears as the second digit of some integer in the list is the score of the second digit of i, and so on. The sum of scores of all digits of i is the score of i.</p>
<p align="justify">As an example, suppose N=4 and K=3. Then the numbers in the list are 00,01,02 and 10. Let us find the score of i=00. The first digit of i appears as the first digit thrice (00,01,02) and the second digit of i appears as second digit twice (00,10). Thus the score of 00 is 3+2=5.</p>
<p align="justify">An integer K (2 ≤ K ≤ N) is called a fair base of N if the scores of all i (0 ≤ i &lt; N) are equal for base K. The number of fair bases in the range 2 ≤ K ≤ N is termed the fairness factor of the integer N.</p>
<p align="justify">Given integers a and b (2 ≤ a ≤ b ≤ 10<sup>12</sup>), find the sum of fairness factors of all i such that a ≤ i ≤ b.</p>
<h3>Input</h3>
<p align="justify">The first line of input contains T, the number of test cases (T ≤ 20). Following these are T lines, each containing two space separated integers a and b (2 ≤ a ≤ b ≤ 10<sup>12</sup>).</p>
<h3>Output</h3>
<p align="justify">For each (a,b) pair in the input, output the sum of fairness factors of i in the range a ≤ i ≤ b.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 8
20 30

<b>Output:</b>
9
27
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 - 5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>BF, C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>