<?php require("../../includes/header.php"); ?><h1>Problem4</h1><div class="content">

<h1>vTechnical Festival Axis (TFA) is marketing a new computerized Yahtzee game</h1>
<p>Yahtzee<br />
is a widely popular and interesting game of skill and chance. Every player is awarded marks based on the roll of 5 completely unbiased dice.The players can apply the dice to a single category in order to maximize their marks. The categories and associated marks are shown below:
</p>
<pre>Category -> How to Score
All 1's -> Count and add only 1's
All 2's -> Count and add only 2's
All 3's -> Count and add only 3's
All 4's -> Count and add only 4's
All 5's -> Count and add only 5's
All 6's -> Count and add only 6's
All evens -> Count and add only evens
All odds -> Count and add only odds
Full house (3 of a kind and a pair) -> Score 15
Small Straight (Sequence of 4, i.e. 1,2,3,4 or 2,3,4,5 or 3,4,5,6) -> Score 20
Large Straight (Sequence of 5, i.e. 1,2,3,4,5 or 2,3,4,5,6) -> Score 30
Yahtzee(Akin to a full house, when all dice show the same number) -> Score 40
</pre><p>The user and computer play against each other. Write a Program to make the highest total for a given roll of the 5 dice, assuming all categories can be chosen.</p>
<h3>Input</h3>
<p>The input will consist of multiple test cases. The first line of input will be an integer n,<br />
indicating the number of test cases. The next n lines will each contain a single test case.<br />
each test case will be the 5 integers (from 1 to 6) separated by a single space.
</p>
<h3>Output</h3>
<p>For each test give the highest score possible with that set of dice.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 2 1 2 2
6 4 2 1 1
5 4 5 5 2


<b>Output:</b>
15
12
15

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xpurgate">xpurgate</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>