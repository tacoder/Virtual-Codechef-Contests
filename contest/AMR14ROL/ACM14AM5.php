<?php require("../../includes/header.php"); ?><h1>Supercomputer</h1><div class="content">
<p>The ISRO (Indian Space Research Organization) has recently built a supercomputer with the help of C-DAC (Center for Development of Advanced Computing), for processing data generated from MOM (Mars Orbiter Mission). Before using it for real data, they want to test it out with the following problem, as they feel it is very hard for a normal computer to solve this problem.</p>
<p>Given a number <b>N</b>, find the sum of <b>f(x)</b> for all x such that <b>1</b> &lt;= x &lt;= <b>N</b>.<br />
<b>f(x)</b> is defined as the sum of all digits in base 10 representation of the number <b>x</b>.</p>
<p>For example, <b>f(121)</b> = 1 + 2 + 1 = 4.</p>

<p>As the number <b>N</b> is very big, it is given in the following run length encoded format - <b>N</b> is represented as a sequence of <b>M</b> blocks, where each block i (<b>0</b> &lt;= i &lt; <b>M</b>) is represented by two integers - (<b>len[i]</b>, <b>d[i]</b>). This implies that the digit <b>d[i]</b> occurs <b>len[i]</b> number of times.</p>
<p>For example, {(2,1), (1,2), (2,9)} represents the number 11299.</p>
<p>Can you help them by writing a solution to validate the supercomputer's output?</p>

<p><b><u>Note</u></b>: There will be no leading zeros in the given number.</p>

<h3>Input</h3>
<p>The first line contains a single integer <b>T</b>, denoting the number of test cases.</p>
<p>For each test case, the first line contains an integer <b>M</b>.</p>
<p>Each of the following <b>M</b> lines contain 2 space separated integers, where the i<sup>th</sup> line describes the i<sup>th</sup> block with length <b>len[i]</b> and digit <b>d[i]</b> respectively.</p>

<h3>Output</h3>
<p>For each test case, print the result modulo <b>1000000007</b> on a separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>25</b></li>
<li><b>1</b> &le; <b>M</b> &le; <b>10000</b></li>
<li><b>d[0]</b> &gt; <b>0</b></li>
<li><b>0</b> &le; <b>d[i]</b> &le; <b>9</b></li>
<li><b>1</b> &le; <b>len[i]</b> &le; <b>10<sup>18</sup></b></li>
<li><b>1</b> &le; Total length of <b>N</b> &le; <b>10<sup>18</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1
1 5
2
1 1
1 0

<b>Output:</b>
15
46

</pre>
<h3>Explanation</h3>
<p>For case 1, the N is 5 and the result is 1 + 2 + 3 + 4 + 5 = 15.</p>
<p>For case 2, the N is 10 and the result is 1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + (1 + 0) = 46.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-10-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.8.1, CPP11, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>