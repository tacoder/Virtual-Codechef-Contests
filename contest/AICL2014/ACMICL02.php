<?php require("../../includes/header.php"); ?><h1>DATING A GIRL</h1><div class="content">
<p> </p>
<p>
<h3>Problem description.</h3>
</p>
<p>Abhishek is taking a girl from his office to a date but he lacks money.<br />
Unfortunately this is not the first time something like this has happened, and reason is obvious - Abhishek goes out on way too many dates. He makes up his mind to solve this problem just before the date starts and he starts planning for it. He wants a limit for the total expense on any date and tries to have the most possible fun with regard to this limit.</p>
<p>Abhishek know beforehand the cost of each item on the menu and makes an estimate of how much his date would enjoy ordering each item. </p>
<p>Write a program which finds the optimal set of menu items that offer the most enjoyment to Abhishek's date. Maximize their enjoyment, without crossing the budget. Needless to say but he wants to save money for other dates as well, so he wants to spend only the amount actually required and save as much as he can.<br />
Abhishek is lucky as he can always choose the menu items to order.</p>
<h3>Input:</h3>
<p>
The first line of the input specifies your date budget and the number N of items on menu. </p>
<p>The following N lines contain two numbers each. The first number indicates the cost of each item. Items cost between $5 and $25. The second number indicates the amount of enjoyment given by each item, given as an integer number ranging from 1 to 10(both inclusive). </p>
<p>The budget will not exceed $500 and there will be at most 100 items. All numbers are separated by a single space. </p>
<p>There are many test cases. Input ends with 0 0.
</p>
<h3>Output</h3>
<p>For each test case your program must output the total cost of all the items and the total enjoyment of an optimal solution. Both numbers must be separated by a single space.</p>
<h3>Example</h3>
<pre><b>Input:</b>
50 5
12 3
15 8
16 9
16 6
10 2

0 0

<b>Output:</b>
47 23
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ninja13">ninja13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-02-2014</td>
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