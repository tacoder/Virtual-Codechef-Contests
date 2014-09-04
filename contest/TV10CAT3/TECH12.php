<?php require("../../includes/header.php"); ?><h1>Frequent Prime Ranges</h1><div class="content">

<p>A range [L..H] is called a <i>K-Frequent Prime</i> range if there are atleast K primes amongst the numbers L,L+1,..,H.
</p>
<p>Given N and K, calculate how many subranges of the range [2..N] are K-Frequent Prime.</p>
<h3>Input</h3>
<p>The first line contains the number of test cases T (&lt;= 100). Each of the next T lines contains 2 integers N and K. (2 &lt;= N &lt;= 100000, 0 &lt;= K &lt;= 10000)
</p>
<h3>Output</h3>
<p>Output T lines, one corresponding to each test case, containing the required answer.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2 1
5 2
5 1
9 3

<b>Output:</b>
1
4
9
8
</pre><p>
<br/></br/></p>
<p>
Note: For the first test case, the only valid subrange is [2..2], whereas for the second test case, the valid subranges are : [2..3],[2..4],[2..5],[3..5].
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/technovanza10">technovanza10</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-01-2010</td>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>