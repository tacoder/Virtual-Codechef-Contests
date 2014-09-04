<?php require("../../includes/header.php"); ?><h1>Everything Goes Around</h1><div class="content">

<pre>
<div style="text-align:justify">
Ram and Shyam are two brothers. It&rsquo;s the summer time now and they are getting bored at home. 
So they decided to play an interesting game called &lsquo;Everything Goes Around&rsquo;.
In this game, Ram has a 2-Dimensional square matrix of integers, and converts it to another 2-
Dimesnional square matrix by some legal sequence of moves. Shyam&rsquo;s job is to check if the
second matrix can be obtained from the first by any legal sequence of moves.

There are two kinds of moves:

<b>Column Move</b>: You may pick any column of the array and rotate it up or down by one step.

For example, consider the following array:
12 29 40  3
39 25 14 12
14 71 9 61
47 21 53 11

Rotating the fourth column of this array up by one step gives
12 29 40 12
39 25 14 61
14 71 9 11
47 21 53 3

<b>Row Move</b>: You may pick any row of the array and rotate it to the right or left by one step.

For example, rotating the third row of the array above to the left by one results in
12 29 40 12
39 25 14 61
71 9 11 14
47 21 53 3

Continuing, we could now rotate the first row to the right by one and get

12 12 29 40
39 25 14 61
71 9 11 14
47 21 53 3

A <b><i>legal sequence of moves</i></b> consists of a single column move followed by any sequence of
row moves. Thus, the sequence of moves carried out above is a legal sequence of moves.

Given, two arrays, your task is to help Shyam to find if the second one can be obtained from
the first by any legal sequence of moves.

<b>Input format</b>

The first line of the input contains a single integer N indicating the number of rows (and columns) 
in the two arrays. The next N lines (lines 2,...,N+1) contain N integers each and describe the first array.
The next N+1 lines (linesN+2,..., 2N + 1) contain N integers each and describe the second array.

<b>Output format</b>

If the second array cannot be obtained from the first by any legal sequence of moves,
simply output the word "NO". If the second array can be obtained by any legal sequence of
moves then the first line of the output must contain the word "YES".

<b>Test data</b>

You may assume that N &le; 8.

<b>Example</b>

We now illustrate the input and output formats using the above example:

<b>Sample input:</b>
4
12 29 40 3
39 25 14 12
14 71 9 61
47 21 53 11
12 12 29 40
39 25 14 61
71 9 11 14
47 21 53 3

<b>Sample output:</b>
YES

<b>Explanation:</b> By moving 4th column up ,1st row to right and 3rd row to left by one position.
</div>
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