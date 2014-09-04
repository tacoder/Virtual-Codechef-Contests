<?php require("../../includes/header.php"); ?><h1>A function over factors</h1><div class="content">

<p align="justify">A function <i>f</i> is defined over natural numbers as:</p>
<p><center><br />
<p style="font-size:large;">f(N) = &sum; d<sub>i</sub> &mu;(d<sub>i</sub>)</p>
<p></p></center></p>
<p align="justify">Here the summation is over d<sub>i</sub>, all positive integers which are factors of N. </p>
<p align="justify"><i>&mu;(n)</i> is the <i><a href="http://en.wikipedia.org/wiki/M%C3%B6bius_function">M&ouml;bius function</a></i> defined in the following way: If there exists a prime <i>p</i> such that <i>p<sup>2</sup></i> is a factor of <i>n</i>, then <i>&mu;(n)=0</i>. Otherwise, if <i>n</i> has an odd number of prime factors, <i>&mu;(n)=-1</i>. If not, <i>&mu;(n)=1</i>. Thus the first few values for <i>&mu;(n)</i> (starting from 1) are 1, -1, -1, 0, -1, 1, -1, 0... </p>
<p align="justify">Given an integer X (0 &lt;= X &lt;= 10<sup>12</sup>), find the smallest natural number N such that |f(N)|>X.</p>
<h3>Input</h3>
<p align="justify">The first line of the input contains T, the number of test cases (T &lt;= 1000). Following this are T lines, each containing an integer X (0 &lt;= X &lt;= 10<sup>12</sup>) corresponding to the test case.</p>
<h3>Output</h3>
<p align="justify">For each test case in the input, output the smallest natural number N such that  |f(N)|>X.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1
2

<b>Output:</b>
3
5
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
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