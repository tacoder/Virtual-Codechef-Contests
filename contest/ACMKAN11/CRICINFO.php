<?php require("../../includes/header.php"); ?><h1>CricInfo</h1><div class="content">

<p>I guess the most visited site of the past 3 months is <a href="http://www.cricinfo.com" title="www.cricinfo.com">www.cricinfo.com</a>. First World Cup Cricket, then Australia tour to Bangladesh and now IPL T20. I believe there are lots of cricket fans among you. So I do not need to describe the game rule. But for the purpose of this problem here is short description of scoring. Any rule out of this problem description is not applicable for this problem. </p>
<p> For this problem we will use only the following outcomes in a ball: </p>
<p>I guess the most visited site of the past 3 months is <a title="www.cricinfo.com" href="http://www.cricinfo.com">www.cricinfo.com</a>. First World Cup Cricket, then Australia tour to Bangladesh and now IPL T20. I believe there are lots of cricket fans among you. So I do not need to describe the game rule. But for the purpose of this problem here is short description of scoring. Any rule out of this problem description is not applicable for this problem.</p>
<p>For this problem we will use only the following outcomes in a ball:</p>
<p></p>
<style type="text/css"><!--
.cricinfotable td
{
   border: 1px solid #000;
   padding:3px;
}
--><!--
.cricinfotable td
{
   border: 1px solid #000;
   padding:3px;
}
--></style><table border="1" cellpadding="5" class="cricinfotable">
<tbody>
<tr>
<th>Possible Outcome in a Ball</th>
<th>Runs</th>
<th>Is the Ball valid?</th>
</tr>
<tr>
<td>. (dot)</td>
<td>0</td>
<td>Yes</td>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>Yes</td>
</tr>
<tr>
<td>2</td>
<td>2</td>
<td>Yes</td>
</tr>
<tr>
<td>3</td>
<td>3</td>
<td>Yes</td>
</tr>
<tr>
<td>4</td>
<td>4</td>
<td>Yes</td>
</tr>
<tr>
<td>6</td>
<td>6</td>
<td>Yes</td>
</tr>
<tr>
<td>Wd</td>
<td>1</td>
<td>No</td>
</tr>
<tr>
<td>1Wd</td>
<td>2</td>
<td>No</td>
</tr>
<tr>
<td>2Wd</td>
<td>3</td>
<td>No</td>
</tr>
<tr>
<td>4Wd</td>
<td>5</td>
<td>No</td>
</tr>
<tr>
<td>Nb</td>
<td>1</td>
<td>No</td>
</tr>
<tr>
<td>1Nb</td>
<td>2</td>
<td>No</td>
</tr>
<tr>
<td>4Nb</td>
<td>5</td>
<td>No</td>
</tr>
<tr>
<td>6Nb</td>
<td>7</td>
<td>No</td>
</tr>
<tr>
<td>W</td>
<td>0</td>
<td>Yes</td>
</tr>
</tbody>
</table>
<p> </p>
<p>(<b>Wd</b> stands for <b>Wide</b>, <b>Nb</b> for <b>No Ball</b> and <b>W</b> for <b>Wicket</b>)</p>
<p>In cricinfo we always watch the score card. In cricket an over consists of <b>6 valid balls</b>. A score card of an over may look like below:</p>
<p> </p>
<table class="cricinfotable">
<tbody>
<tr>
<td>1</td>
<td>.</td>
<td>W</td>
<td>.</td>
<td>Wd</td>
<td>Nb</td>
<td>.</td>
<td>6</td>
</tr>
</tbody>
</table>
<p> </p>
<p>In this over there were <b>1</b> wicket and <b>9</b> runs. In the last over of second innings of a match, a team requires N runs to win. You are to output number of ways of the outcome of the over. Note that, as you are watching second innings of the match, so it may be possible that he can score <b>N</b> runs in first 4 balls and win the match. That means, it is not necessary to play an entire over to score <b>N</b> runs. Also suppose you do not know how many wickets are already gone. So it may also be possible that after a few wicket falls they are all out. Also note that, if a team scores greater or equal to <b>N</b> runs the team wins and does not play any ball.</p>
<h3>Input</h3>
<p>First line contains number of test case <b>T (T &lt;= 10000)</b>. For each test a line contains <b>N<br /> (1 &lt;= N &lt;= 10000)</b>.</p>
<h3>Output</h3>
<p>For every test case, output the case number and number of ways of outcome of the <b>last</b> over where the team needs N runs to win. As the answer can be very big, so output in mod <b>10000007</b>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
1

<b>Output:</b>
Case 1: 946
</pre>    </div><table border="1" cellpadding="5" class="cricinfotable">
<tbody>
<tr>
<th>Possible Outcome in a Ball</th>
<th>Runs</th>
<th>Is the Ball valid?</th>
</tr>
<tr>
<td>. (dot)</td>
<td>0</td>
<td>Yes</td>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>Yes</td>
</tr>
<tr>
<td>2</td>
<td>2</td>
<td>Yes</td>
</tr>
<tr>
<td>3</td>
<td>3</td>
<td>Yes</td>
</tr>
<tr>
<td>4</td>
<td>4</td>
<td>Yes</td>
</tr>
<tr>
<td>6</td>
<td>6</td>
<td>Yes</td>
</tr>
<tr>
<td>Wd</td>
<td>1</td>
<td>No</td>
</tr>
<tr>
<td>1Wd</td>
<td>2</td>
<td>No</td>
</tr>
<tr>
<td>2Wd</td>
<td>3</td>
<td>No</td>
</tr>
<tr>
<td>4Wd</td>
<td>5</td>
<td>No</td>
</tr>
<tr>
<td>Nb</td>
<td>1</td>
<td>No</td>
</tr>
<tr>
<td>1Nb</td>
<td>2</td>
<td>No</td>
</tr>
<tr>
<td>4Nb</td>
<td>5</td>
<td>No</td>
</tr>
<tr>
<td>6Nb</td>
<td>7</td>
<td>No</td>
</tr>
<tr>
<td>W</td>
<td>0</td>
<td>Yes</td>
</tr>
</tbody>
</table><table class="cricinfotable">
<tbody>
<tr>
<td>1</td>
<td>.</td>
<td>W</td>
<td>.</td>
<td>Wd</td>
<td>Nb</td>
<td>.</td>
<td>6</td>
</tr>
</tbody>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>