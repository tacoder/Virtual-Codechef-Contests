<?php require("../../includes/header.php"); ?><h1>Enumeration of rationals</h1><div class="content">

<p>It is well known that rational numbers form a countable set. Hence the set of rational numbers in the open interval (0,1) also form a countable set.</p>
<p>Here we enumerate the rationals in (0,1) in the following fashion. First, every rational is expressed in the lowest terms : ie, as p/q where p and q are positive integers with no common factor other than one. Then we sort the fractions in the ascending order of p+q. In case of a tie, the smaller fraction comes first.</p>
<p>The first few terms in this enumeration are 1/2, 1/3, 1/4, 2/3, 1/5, 1/6, 2/5...</p>
<p>Given a natural number N, find the numerator and denominator of the Nth term in the enumeration.</p>
<h3>Input</h3>

<p>The first line of the input contains T (≤1000), the number of test cases. This is followed by T lines, each containing an integer N(≤10<sup>11</sup>).</p>
<h3>Output</h3>

<p>For each value of N, output separated by space the numerator and denominator (in lowest terms) of the Nth fraction in the enumeration</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
6

<b>Output:</b>
1 4
1 6
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2011</td>
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
            <td>C, CPP 4.3.2, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>