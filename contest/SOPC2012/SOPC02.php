<?php require("../../includes/header.php"); ?><h1>Playing Cards</h1><div class="content">

<p>
Here is an algorithm for shuffling N cards:<br />
<br/><br />
1) The cards are divided into K equal piles.<br />
<br/><br />
2) The bottom N/K cards belong to pile 1 in the same order (so the bottom card of the initial pile is the bottom card of pile 1).<br />
<br/><br />
3) The next N/K cards from the bottom belong to pile 2, and so on.<br />
<br/><br />
4) Now the top card of the shuffled pile is the top card of pile 1. The next card is the top card of pile 2,..., the Kth card of the shuffled pile is the top card of pile K. Then (K+1)th card is the card which is now at the top of pile 1, the (K+2)th is the card which is now at the top of pile 2 and so on.<br />
<br/><br />
Given N and K, what is the least number of shuffles needed after which the pile is restored to its original order?
</br/></br/></br/></br/></br/></p>
<h3>Input</h3>
<p>
The first line contains the number of test cases T. The next T lines contain two integers each N and K.
</p>
<h3>Output</h3>
<p>
Output T lines, one for each test case containing the minimum number of shuffles needed. If the deck never comes back to its original order, output -1.
</p>
<h3>Constraints</h3>
<p>
K will be a factor of N.<br />
<br/><br />
T &lt;= 10000<br />
<br/><br />
2 &lt;= K &lt;= N &lt;= 10^9
</br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
6 3
4 2
5 5

<b>Output:</b>
6
4
2

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
            <td>2 - 10 sec</td>
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