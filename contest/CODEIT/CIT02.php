<?php require("../../includes/header.php"); ?><h1>Crazy Casino</h1><div class="content">

<p>
In a gambling house, called Crazy Casino, there is a special slot machine before the exit. In this slot machine, there are SLOT many displays, each corresponds to one slot. In each slot, there are few coins with Happy mark and a single coin with Sad mark.  On a hit, the machine independently chooses one element from each slot uniformly at random and displays them in the correponding screen. If the screen has all  Sad marks, the player looses and he has to give up all his winnings. If all the marks are Happy, his earnings get doubled. Before playing this game the player is given iNEW many coins. Using each of these coins the player can increase the number of Happy marks in the slot of his choice. e.g. If the player puts three coins in slot 2, number of Happy marks in slot 2 gets increased by three. The player has to use all the iNEW coins before starting the game. Write a program to find out the minimum probability that a player looses against this machine.<br />
You will be given an int SLOT representing total number of slots, an int[] iList with initial number of coins (INCLUDING the Sad mark)  in each slot and an int  iNEW, total number of additional coins available.</p>
<p>Your program should  output p where 1/p is the minimum probability.</p>
<p>You can assume SLOT &lt; 100, iNEW&lt; 100,  iList[i]&lt;100 for all i.</p>
<h3>Input</h3>
<p>The first input is the number of test cases (int) </p>
<p>For each of the test cases the input numbers are arranged as follows:<br />
<br />
      SLOT, iList[], iNEW<br />
<br />
Note that there is a comma (,) between SLOT and first element of iList. The elements of iList are separated by whitespace. Finally there is again a comma between the last element of iList and iNEW. </p>
<h3>Output</h3>
<p>The datatype of output should be double. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
A sample input sequence may look like the following

2
3, 5 7 2, 2
4, 3 3 3 3, 1
<b>Output:</b>
The corresponding output should be the following

140.00
108.00

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bst0602">bst0602</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-01-2011</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>