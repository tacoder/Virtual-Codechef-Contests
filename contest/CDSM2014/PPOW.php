<?php require("../../includes/header.php"); ?><h1>The power of powers</h1><div class="content">
<p>Your task is simple, to calculate the value of a <sup>b </sup> for the given values of a and b and compute the sum of the digits of a<sup>b</sup>.   <br /><br />
8<sup>3</sup>=512     ,   5 + 1 + 2 = 8<br /><br />
The problem consists of many test cases.<br />
The input description of each test case is given below.<br />
 </p>
<h3>Input</h3>
<p>The first line of input contains the number of test cases t.<br />
Then t lines follow each containing two space separated integers a and b.</p>
<h3>Output</h3>
<p>The output contains t lines each containing “Case p: m” (m=sum of digits of a<sup>b</sup> ) for that test case.<br />
Double quotes are only for the purpose of highlighting the output, they are not a part of the output.</p>
<h3>Constraints</h3>
<p>1&lt;= t &lt;=36009<br /><br />
1&lt;= a &lt;=9<br /><br />
0&lt;= b &lt;=4000<br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 32
3 2
2 60

<br />
<b>Output:</b>
Case 1: 58
Case 2: 9
Case 3: 82

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pratku123">pratku123</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/wittyceaser">wittyceaser</a></td>
				</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-11-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>