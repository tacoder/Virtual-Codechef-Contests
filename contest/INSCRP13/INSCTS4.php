<?php require("../../includes/header.php"); ?><h1>Cool Numbers</h1><div class="content">
<p> </p>
<p>Well, 42 is the answer to the life, universe and everything else. No wonder all other numbers want to get as close to 42 as possible. We'll call this the "coolness" factor of the number. Given multiple sequences of numbers, a number appearing in the same sequence of 42 has a "coolness" factor of 1 and those not appearing in the sequence with 42 but with another number of "coolness " factor 1 has a "coolness" factor 2 and so on.<br />
The number 42 has a "coolness" factor 0(infinitely cool).</p>
<p> </p>
<h3>Input</h3>
<p>The first line of each test case contains n, m and r, where n is the number of sequences,m is the number of integers in each sequence and r is the number of queries. This is followed by n lines containing m integers each each. The last line in each test case contains r integers for which the "coolness" factor must be calculated with regard to the the sequences.</p>
<h3>Output</h3>
<p>Output should contain r lines,each corresponding to the minimum possible "coolness" factors of the numbers in the query. If the "coolness" factor cannot be determined, it should output -1 for that case.</p>
<h3>Constraints</h3>
<ul>
<li>1&lt;=n&lt;=100</li>
<li>1&lt;=m&lt;=100</li>
<li>1&lt;=r&lt;=10</li>
<li>1&lt;= integers in sequence &lt;=2000</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input 1:</b>
3 4 3
11 17 42 3
22 15 11 10
6 7 8 9
15 11 9

<b>Output 1:</b>
2
1
-1
</pre><p><br /></p>
<pre><b>Input 2:</b>
3 4 2
42 19 1 6
11 13 15 17
13 16 18 15
11 19

<b>Output 2:</b>
-1
1
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> For the first case, 11 is in the same sequence as 42 and hence has a "coolness" factor as 1. 15 is in the same sequence as 11, which has a "coolness" factor 1. Hence coolness factor of 15 is 2. The "coolness" factor of 9 cannot be determined because it does appear in a sequence containing 42, nor does it appear in a sequence, in which atleast one of the number's "coolness" factor can be determined.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tavan_edla">tavan_edla</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-10-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>