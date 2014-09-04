<?php require("../../includes/header.php"); ?><h1>Enumeration again</h1><div class="content">

<p align="justify">Those of you who participated in IOPC last time might remember the "Enumeration of rationals" problem. Here is a variant of the same:</p>
<p align="justify">We enumerate the rationals in (0,1) in the following fashion. First, every rational is expressed in the lowest terms : ie, as p/q where p and q are positive integers with no common factor other than one. Then we sort the fractions in the ascending order of p+q. In case of a tie, the smaller fraction comes first.</p>
<p align="justify">The first few terms in this enumeration are 1/2, 1/3, 1/4, 2/3, 1/5, 1/6, 2/5... </p>
<p align="justify">Given an integer N, find the position of 1/N in this enumeration.</p>
<h3>Input</h3>
<p align="justify">The first line of the input contains T, the number of test cases (T &le; 25). This is followed by T lines, each containing an integer N (2 &le; N &le; 10<sup>9</sup>).</p>
<h3>Output</h3>
<p align="justify">For each N in the input, output the position of 1/N in the enumeration.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2
3
4
5

<b>Output:</b>
1
2
3
5
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>