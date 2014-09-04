<?php require("../../includes/header.php"); ?><h1>Iterated Bitcount Function</h1><div class="content">

<pre>
Let f(x) be the number of 1's in the binary representation of x.
We can define f^k(x) as f(x) for k = 1, and f^(k-1)(f(x)) for k > 1. Let f^*(x) be the smallest k >= 1 
such that f^k(x)=1.
</pre><p>Given N and K, how many numbers x between 1 and N inclusive have f^*(x) = K ? <br /></p>
<h3>Input</h3>
<p style="text-align:justify;">
The first line contains the number of test cases T. Each of the next T lines contains two space separated numbers N and K.</p>
<h3>Output</h3>
<p style="text-align:justify;">
Output one line corresponding to each test case, containing the answer for the corresponding test case. Output all answers modulo 1000000007.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
6
1 1
2 1
3 1
3 2
13 3
20 2

<b>Output</b>
1
2
2
1
3
10

<h3>Constraints</h3>
</pre><li>1 &lt;= T &lt;= 1000</li>
<li>1 &lt;= N &lt;= 10^500</li>
<li>1 &lt;= K &lt;= 10</li>
<ul>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divij">divij</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2010</td>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>