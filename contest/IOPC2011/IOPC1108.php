<?php require("../../includes/header.php"); ?><h1>Progressive progressions</h1><div class="content">

<p>An arithmetic progression is a sequence of numbers a<sub>1</sub>, a<sub>2</sub>,... a<sub>n</sub> such that a<sub>i+1</sub>-a<sub>i</sub> is equal for all 0≤i&lt;n. This difference is called the common difference of the arithmetic progression.</p>
<p>Now consider a sequence of arithmetic progressions A<sub>1</sub> = (a<sub>1,1</sub>, a<sub>1,2</sub>,... a<sub>1,n<sub>1</sub></sub>), A<sub>2</sub> = (a<sub>2,1</sub>, a<sub>2,2</sub>,... a<sub>2,n<sub>2</sub></sub>),... A<sub>k</sub> = (a<sub>k,1</sub>, a<sub>k,2</sub>,... a<sub>k,n<sub>k</sub></sub>)</p>
<p> A progressive progression is such a sequence with the additional properties that:</p>
<ul>
<li> a<sub>i,n<sub>i</sub></sub> = a<sub>i+1,1</sub> for 1 ≤ i &lt; k
</li>
<li> c<sub>i</sub>, the common difference of A<sub>i</sub>, is a positive factor of a<sub>i,1</sub> for 1 ≤ i ≤ k
</li>
<li> c<sub>i</sub>&lt;c<sub>i+1</sub> for 1 ≤ i &lt; k
</li>
<li> n<sub>i</sub> &gt;1 for 1 ≤ i ≤ k
</li>
<li> k ≥ 1
</li>
</ul>

<p>Find the number of progressive progressions such that a<sub>1,1</sub>=1 and a<sub>k,n<sub>k</sub></sub> = N. As this number can be quite large, output it modulo 100000007.</p>
<h3>Input</h3>

<p>The first line of input contains T (≤ 100), the number of testcases. This is followed by the description of the testcases. The description of each testcase consists of a single integer N (1 &lt; N ≤ 1000000).</p>
<h3>Output</h3>

<p>For each testcase, output modulo 100000007 the number of progressive progressions such that a<sub>1,1</sub>=1 and a<sub>k,n<sub>k</sub></sub> = N</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5
10

<b>Output:</b>
1
6
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>5 sec</td>
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