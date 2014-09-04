<?php require("../../includes/header.php"); ?><h1>Cricket Tournament</h1><div class="content">

<p>
In Tournament of Cricket N Teams participate and a Knockout fixture is set. If number of teams is not equal to 2^b(for any b) then blank teams are added to make it equal 2^b.<br />
Calculate the minimum number of matches to be played in the tournament.<br />
If a match played b/w A Team Vs Blank Team is not counted. Also there is no match b/w two Blank Teams.
</p>
<h3>Input</h3>
<p>
Each line of Testcase( approx. 10 ^ 6) will give the number of teams(0 &lt; N &lt; 10 ^ 9) to participate. Input will terminate when there is no further input.
</p>
<h3>Output</h3>
<p>
Print Minimum Number of Matches to be played for each given testcase
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5

<b>Output:</b>
1
4

</pre><h3>Explanation</h3>
<pre>
For input as 5:
3 Blank Teams to be added.
1-B , 2-B, 3-B, 4-5 = 1
1-2, 3-W = 2
W - W = 1
Total 4 matches
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/moneymachine">moneymachine</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-11-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>