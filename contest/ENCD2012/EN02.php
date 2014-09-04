<?php require("../../includes/header.php"); ?><h1>Simple Sorting</h1><div class="content">

<pre>
Stark has a selection of balls. Each ball has a number on it. The balls are placed in a
sequence, and Stark wants to sort them (in ascending order). He has a device to manipulate
the balls, which performs the following operation. Stark can select a subset of balls, and the
device will lift the selected subset, shift the selected subset to the right (keeping the order
in the subset), shift the not-selected subset to the left, filling up empty spaces (keeping the
order in the subset), then finally move the raised balls to be in one level again.

For example: 
If Stark has the sequence: 3,5,1,2,8,7,6,4 and selects the subset in bold:
<b>3</b>,<b>5</b>,1,2,<b>8</b>,7,<b>6</b>,4 then the result is: 1,2,7,4,3,5,8,6.

Help stark to write a program that will calculate the minimal number of moves required to
sort the given sequence of balls in ascending order of numbers.

<b>Input</b>
First line of input contains the number of test cases t, 1 ≤ t ≤ 10. Then, t test cases follow.
Each test case starts with 1 to 105 (the number of balls) followed by the n integer values
describing the number on ball in the sequence.

<b>Output</b>
For each test case, in a separate line, print the answer to that test case i.e. minimum
number of moves.

<b>Example</b>

<b>Input:</b>
1
6 1 3 5 2 4 6
<b>Output:</b>
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pc_chawla">pc_chawla</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-02-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>