<?php require("../../includes/header.php"); ?><h1>Jungle Book</h1><div class="content">

<p align="justify">Baloo and Mowgli<br />
Both got bored of their games and decided to find a new game. Both are at start (0)  initially. Shanti being Mowgli’s girlfriend has an upper hand and decides to make them play to her tunes.<br />
She speaks out 2 numbers <b>k1</b> and <b>k2</b> for baloo and <b>c1</b> and <b>c2</b> for Mowgli.  Baloo can jump from his position <b>k1</b> units ahead or <b>k2</b> units ahead. Mowgli being someone special enjoys the privilege of either jumping from his position <b>c1</b> units ahead or <b>c2</b> units ahead.Mowgli can also change his moves(c1 and c2) with the moves of Baloo (k1 and k2) at each step once in the game and then he wont be able to use his moves (c1 and c2) again.Find the number of ways that Mowgli can jump to a given distance considering all the possible moves.Since the output can be really large , print it modulo 10^9+7</p>
<h3>Input</h3>

<p>
The First line consist of T – No of testcases, followed by 4 lines of each testcase. The 1st line gives the value of <b>N</b> (Distance to be moved).The 2nd line gives <b>c1</b> and <b>c2</b> of Mowgli.The 3rd line gives <b>k1</b> and <b>k2</b> for Baloo. </p>
<h3>Output</h3>

<p>Print T lines each having a number M modulo 10^9+7 giving the total ways of reaching postion <b>N</b></p>
<h3>Constraints</h3>

<p>
N&lt;=10^18<br />
T&lt;=10<br />
1&lt;=c1,c2,k1,k2&lt;=7</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5
1 2
2 3

<b>Output:</b>
16
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhidce2013">abhidce2013</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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