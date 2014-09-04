<?php require("../../includes/header.php"); ?><h1>Grid</h1><div class="content">

<p>
Your task in this problem is very straightforward. You are given a point in the cartesian plane (m,n) where m>0 and n>0. You start at (0,0) and are allowed to make unit moves along the positive x-axis or the positive y-axis. In other word if you are at a point (x,y) you can move to either (x+1,y) or (x,y+1). Your task is to find out the total number of ways you can reach (m,n) from (0,0) modulus K.
</p>
<h3>Input</h3>
<p>
First line contains 'T', the number of testcases(T &lt;= 50). The next 'T' lines contain three space separated integers m,n,K 1&lt;=m,n&lt;=1,000 K&lt;=1,000,000
</p>
<h3>Output</h3>
<p>A single integer denoting the total number of paths mod K.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
896 547 916661

<b>Output:</b>
179742
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/technovanza10">technovanza10</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2010</td>
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