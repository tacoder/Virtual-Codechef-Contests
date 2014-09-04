<?php require("../../includes/header.php"); ?><h1>Love in Peril</h1><div class="content">
<p> </p>
<p>
<h3>Problem description.</h3></p>

<p>Mike and Harvey on their tour to India have learnt a new game “TAMBOLA”. But considering their ability to memorize numbers, the dealer made some changes in the game. There would be N numbers in their tickets each. Then the dealer would start announcing the numbers one by one and a player would have to strike-off the number if it is present in his ticket. A player wins the game if all the numbers in his ticket are striked-off. Also, the dealer may announce a number multiple times.</p>
<h3>Input</h3>
<p>The first line contains T, the number of test cases and then description of each test case follows. The first line of each test case contains an integer N, the number of numbers in each ticket. Next two lines contains the numbers in Mike’s and Harvey’s tickets respectively. Next line contains numbers announced by the dealer. End of test case is indicated by a number 0.</p>
<h3>Output</h3>
<p>Output a single line for each test case indicating the winner of the game.<br />
Print “MIKE” if he wins or “HARVEY” or “MIKE HARVEY” if there is a tie.<br />
Print “0” if no one wins.
</p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 100 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 100 </b></li>
<li><b>All numbers announced are positive integers &lt;=1000</b></li>
<li><b>The dealer announces maximum 1000 numbers.</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<p>3
5
1 2 3 4 5
6 7 8 9 10
1 5 3 8 4 5 2
0
3
1 2 5
4 5 6
8 10 8 1 4 2 7 4 6 34 5
0
7
1 2 3 4 5 6 7
4 5 6 7 8 9 10
1 10 16 42 13 28 3 4 6 2 7 3 6
0
</p>

<b>Output:</b>
<p>MIKE
MIKE HARVEY
0
</p>
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
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