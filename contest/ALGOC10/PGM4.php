<?php require("../../includes/header.php"); ?><h1>Conversion</h1><div class="content">

<p>	The formula for converting a Zahrenheit temperature G to the corresponding Xelsius temperature X is T=(Z-A)*B/C. An integer Zahrenheit temperature is converted to Xelsius and rounded to the nearest integer (rounding up to break the tie); the resulting integer Xelsius temperature is converted back to Zahrenheit and rounded to the nearest integer (rounding up to break the tie too). For how many Zahrenheit temperature T with A &lt;= T &lt;= N does the original temperature equal the final temperature?<br />
Note: the given equation may not be Z=(X-32)*5/9.</p>
<h3>Input</h3>
<p>There are multiple test cases.<br />
Each test case consists of a single line containing the four intergers-A, B, C and N, listed in this order.<br />
Input is terminated by EOF (End of File). </p>
<h3>Output</h3>
<p>For each test case, output one line - the answer. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
32 5 9 1000 

<b>Output:</b>
539
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mariojuana">mariojuana</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-02-2010</td>
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
            <td>C, CLOJ, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>