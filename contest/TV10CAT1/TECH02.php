<?php require("../../includes/header.php"); ?><h1>rnumber</h1><div class="content">

<p>
In this problem your task is to reduce a given number 'N' to a non-positive number in as little moves as possible. </p>
<p>The moves allowed are : Given an integer 'N' you can subtract one of its factors (excluding 'N' itself) from 'N' and continue the same process with the resulting number until you reach a non-positive number. Note that there is a special case when N=1, you can subtract '1' to reach 0.</p>
<h3>Input</h3>
<p>
First line contains the number of test cases 'T'. 'T' lines follow containing a single integer 'N' 2&lt;=N&lt;100,000.</p>
<h3>Output</h3>
<p>
A single integer denoting the minimum number of moves necessary.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
10

<b>Output:</b>
5
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/technovanza10">technovanza10</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>102 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>