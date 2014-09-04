<?php require("../../includes/header.php"); ?><h1>Truly magical numbers</h1><div class="content">

<p>Prashant thinks that the number 142857 is magical. When he multiplies the number with 2, he gets 285714 which is a permutation of the digits of the original number. On multiplying with 3,4,5 and 6 too he observes a similar behaviour.</p>
<p>Now Prashant wants to find out truly magical numbers. A truly magical number of order N is a number P with the following properties:</p>
<ul>
<li> P should have N digits and the first digit should be non-zero
</li><li> On multiplying the number with any i such that 1&lt;=i&lt;=k, the result should be a permutation of the digits of P
</li><li> There should not exist any N digit number Q (without leading zeros) with the property that for all i such that 1&lt;=i&lt;=k+1, Q*i is a permutation of digits of Q (Here k has the same value as in the previous point)
</li><li> N should not have consecutive zero digits anywhere
</li></ul>
<p>
</p><p>It is easily seen that P=142857 is indeed a truly magical number of order 6. P has no leading zeros or consecutive zeros appearing anywhere. For 1&lt;=i&lt;=6, P*i is a permutation of digits of P. Also, there does not exist any number Q such that for all 1&lt;=i&lt;=7, Q*i is a permutation of digits of Q.</p>
<p>Given an integer N, find a truly magical number of order N. Note that for certain values of N there may be more than one truly magical number of order N. In such a case, it is enough to output any one of the truly magical numbers of order N.</p>
<h3>Input</h3>
<p>The first line of input contains an integer T (&lt;=100), the number of test cases to follow.</p>
<p>Following this are T lines, each containing an integer N, 250&lt;=N&lt;=40000</p>
<h3>Output</h3>
<p>Output T lines, each containing a truly magical number of order N</p>
<h3>Example</h3>
<p>The input limits are such that an example cannot be shown here. However, to explain the formatting of the input and output, we show here a sample case that has N outside the input limit range</p>
<pre>
<b>Input:</b>
2
2
6

<b>Output:</b>
13
142857
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2011</td>
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