<?php require("../../includes/header.php"); ?><h1>Canteen</h1><div class="content">
<p>IIIT-Delhi’s canteen has five workstations, one for Chinese, one for Mexican, one for Italian, one for South Indian and one for Punjabi food.<br />
Each workstation can work only on two dishes at a particular time and each station takes exactly 5 units of time to prepare one dish.
</p>
<p>
You have a list of people who come in at different times and order food at the canteen  according to the cuisine. At a particular time, only two items of a person’s order will be sent to the kitchen to be made at the workstations and then the person will be sent to the end of the line (waiting queue), while the order of the next customer will be taken. The customer who has been sent at the end of the line will then wait for his turn at the counter again. The two items which will be sent to the kitchen will be according to the order in which they have been taken as an input. No customer can leave the restaurant in between. There is ONLY ONE counter which entertains only ONE person at a time (i.e. at a time, only one person would be placing order).
</p>
<p>You are required to calculate the total waiting time for which the customers will wait AT THE COUNTER on a particular day. Only at the counter and not at the queue. </p>
<h3>Input</h3>
<p>First line of input contains the number of test cases T.<br />
<br />The first line of each test case contains the number of customers N. Next N lines contain information about the orders placed. Each line has six space separated integers, specifying the arrival time (UNIQUE), number of items for Chinese, Mexican, Italian, South Indian and Punjabi respectively.<br />
The input will be provided in the order of the arrival time.<br />
<br />NOTE : Number of items for each cuisine will always be an even number.<br />
<br /><br /></p>
<h3>Output</h3>
<p>The output for each test case would be a single number which gives the total waiting time of the customers at the ordering counter ONLY.<br />
<br /><br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
1
2
1 2 4 0 0 0
2 2 4 0 0 0

<b>Output:</b>
16
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/procon_13">procon_13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-08-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>