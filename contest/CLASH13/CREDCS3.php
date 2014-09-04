<?php require("../../includes/header.php"); ?><h1>Balance it Out</h1><div class="content">
<p>Amit was given a balance and n weights (where n is a positive integer) of weight 2^0, 2^1, 2^2,.... 2^(n-1). He is now assigned a task to place the weight that has not been placed on the balance, either on the right pan or the left pan until all of the weights have been placed.But at every step he needs to make sure that the right pan is never heavier than left pan. You have to help him determine the number of ways in which this can be done.
</p>
<p><h3>Input</h3>
</p><p>
First line contains <b>T</b>, the number of test cases.<br />
<b>T</b> test cases follow.<br /><br />
Each test case contains a single line containing <b>N</b>, the total number of weights.
</p>
<h3>Output</h3>
<p>The total number of possible ways modulo 10^9+7.</p>
<h3>Constraints</h3>
<p>0 &lt;= <b>N</b> &lt;= 100<br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
3
8

<b>Output:</b>
3
15
2027025
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ashmew2">ashmew2</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 1.6 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>