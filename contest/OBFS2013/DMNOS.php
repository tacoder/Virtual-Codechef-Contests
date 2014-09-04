<?php require("../../includes/header.php"); ?><h1>Dominoes</h1><div class="content">

<p> </p>
<p>Given a 2xn rectangle/grid, you have to find the number of ways of tiling this rectangle/grid with 2x1 dominoes.<br />
Since the answer could be very large, you need to output it modulo 1000000007 (10^9 +7). </p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer T, the number of test cases. Then T test cases follow. Each test case consists of a line which contains a positive integer, n.</p>
<p> </p>
<h3>Output</h3>
<p>Output on a new line the answer corresponding to (n-1) except for n=1.</p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=1000<br />
1&lt;=n &lt;=10^18</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
4 

<b>Output:</b>
1
3 
</pre><p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/prog_iitmandi">prog_iitmandi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP11, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>