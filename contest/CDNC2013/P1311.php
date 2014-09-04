<?php require("../../includes/header.php"); ?><h1>Factory Transport</h1><div class="content">

<p> </p>
<p>A large quantity of goods are being produced by the factory every day. Consider the carrier machine of the factory which is used to transport the finished products from the workshop to the dispatch centre. </p>
<p>
Finished products are kept on the carrier machine from one end, the machine takes the products to the dispatch centre, and the products are taken out at the dispatch center.</p>
<p>The machine can take n products in t minutes and return in t minutes. m products arrive at the terminal by a given schedule. What is the earliest time that all the products can be transported to the center? What is the minimum number of trips that the operator must make to deliver all products by that time?
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input contains c, the number of test cases. Each test case begins with n, t, m. m lines follow, each giving the arrival time for a product (in minutes since the beginning of the day). The operator can run the machine whenever he or she wishes, but can take only the products that have arrived up to that time. </p>
<h3>Output</h3>
<p>For each test case, output a single line with two integers: the time, in minutes since the beginning of the day, when the last product is delivered to the other side of the river, and the minimum number of trips made by the machine to carry the products within that time.</p>
<p>You may assume that 0 &lt; n, t, m &lt; 1440. The arrival times for each test case are in non-decreasing order.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 10 10
0
10
20
30
40
50
60
70
80
90
2 10 3
10
30
40


<b>Output:</b>
100 5
50 2

</pre><p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivendra14">shivendra14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.3 sec</td>
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