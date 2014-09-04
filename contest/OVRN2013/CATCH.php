<?php require("../../includes/header.php"); ?><h1>Catch Me If You Can</h1><div class="content">

<p><b>Problem Statement</b></p>
<p>Today we are going to play a very interesting game. In the game N balls will be thrown at you horizontally from one side of the arena one after the other. Each ball will be thrown at a specified height above the ground and since the arena is gravity free, the balls will reach you at the same height that they were thrown. You will be given a bucket to catch these incoming balls from across the game arena. The bucket will be initially placed on the ground (Height=0). In order to catch a ball you must bring your bucket to the height at which the ball is coming. However, the bucket has a special property. Once it has been raised to a particular height, it can either stay at the same height or move higher in order to catch subsequent balls, but not move lower. Now assuming that you play optimally, we want you to find the maximum number of balls that you can catch in a given game.</p>
<p><b>Input Specification</b></p>
<ul>
<li>The first line of input contains an integer T, the number of games to be played.</li>
<li>Then T test cases follow each containing 2 lines.</li>
<li>The first line contains an integer N which is the number of balls that will be thrown in each game.</li>
<li>The next line contains an array  of n integers specifying the predefined height at which the balls will be thrown. Thus the 1st value is the height at which the 1s ball will be thrown, the 2nd value is the height of the second ball and so on.</li>
</ul>
<p></p>
<p><b>Constraints</b></p>
<ul>
<li>1&lt;=T&lt;=100</li>
<li>1&lt;=N&lt;=1000</li>
<li>0&lt;=Height at which each ball is thrown &lt;=1000000</li>
</ul>
<p></p>
<p><b>Output Specification</b></p>
<ul>
<li>A single line for each game containing the maximum number of balls that you can catch in that game provided you play optimally.</li>
</ul>
<p></p>
<p><b>Sample Input</b></p>

<p><code><br />
2</code></p>
<p>6</p>
<p>1 8 5 6 7 9</p>
<p>6</p>
<p>7 5 3 1 9 5</p>
<p></p>
<p></p>
<p><b>Sample Output</b></p>

<p><code><br />
5</code></p>
<p>2</p>
<p></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/transcendence">transcendence</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2013</td>
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
            <td>C, CPP 4.3.2, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>