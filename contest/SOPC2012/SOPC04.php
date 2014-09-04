<?php require("../../includes/header.php"); ?><h1>Toss the Coin</h1><div class="content">

<p>
You have an unbiased coin which you want to keep tossing until you get N consecutive heads. You've tossed the coin M times and surprisingly, all tosses resulted in heads. What is the expected number of additional tosses needed until you get N consecutive heads?
</p>
<h3>Input</h3>
<p>
The first line contains the number of cases T. Each of the next T lines contains two numbers N and M.
</p>
<h3>Output</h3>
<p>
Output T lines containing the answer for the corresponding test case. Print the answer rounded to exactly 2 decimal places.
</p>
<h3>Constraints</h3>
<p>
1 &lt;= T &lt;= 100<br />
<br/><br />
1 &lt;= N &lt;= 1000<br />
<br/><br />
0 &lt;= M &lt;= N
</br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2 0
2 1
3 3
3 2

<b>Output:</b>
6.00
4.00
0.00
8.00

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/coding_freak">coding_freak</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>