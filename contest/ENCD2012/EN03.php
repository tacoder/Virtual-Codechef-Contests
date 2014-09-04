<?php require("../../includes/header.php"); ?><h1>Word Mess</h1><div class="content">

<pre>
<div style="text-align:justify">
The Restaurant was starting to fill up as Debra Morgan walked in. She scanned the crowd
for her sister, brother-in-law, and nephew. Seeing her sister waving from the far end of the
restaurant, she made her way back to their booth. &ldquo;Hi, Debra&rdquo;, her sister and brother-inlaw,
Astor and Quinn Chapman, greeted her.

&ldquo;Hi, guys&rdquo;, she replied. &ldquo;What are you doing, John?&rdquo; she asked her nephew. He was busy
working on one of the restaurant's activity sheets with a crayon.

&ldquo;I'm doing a word search game,&rdquo; John explained. &ldquo;I have to find all of these words in this big
mess of letters. This is really hard.&rdquo; John looked intently at the paper in front of him.

&ldquo;Can I help?&rdquo; asked Debra, looking across the table at the activity sheet.

&ldquo;Sure. These are the words we're looking for. They're the names of different kinds of
Planes, Trains, and Automobiles.&rdquo;

<b>Input</b>
The first line of input will specify the length of the sides of the letter matrix (the matrix of
letters will be <b>square</b>). The length, l, will be in the range 1 &le; l &le; 100. The next l lines of
input will be the matrix itself, each line will contain l uppercase letters.
A list of words will follow. Each word will be on a line by itself; there will be 100 or fewer
words. Each word will be 100 or fewer characters long, and will only contain uppercase
letters.

The final line of input will contain a single zero character.

<b>Output</b>
Your program should attempt to find each word from the word list in the puzzle. A word is
&ldquo;found&rdquo; if all the characters in the word can be traced in a single (unidirectional)
horizontal, vertical, or diagonal line in the letter matrix. Words may not &ldquo;wrap around&rdquo;
rows, columns or diagonals.

-Horizontal words may proceed from right to left (''backwards'') and vice versa.

-Vertical words may proceed upwards and downwards.

-Diagonal words may proceed from left to right (both upward and downward) but not in
right to left direction.

For each word that is found, your program should print the coordinates of its first and last
letters in the matrix on a single line, separated by a single space. Coordinates are pairs of
comma-separated integers (indexed from 1), where the first integer specifies the row
number and the second integer specifies the column number.

If a word is not found, the string &ldquo;Not found&rdquo; should be output instead of a pair of
coordinates.

Each word from the input can be &ldquo;found&rdquo; at most once in the puzzle.

<b>Sample Input</b>
5
EDEEE
DISKE
ESEEE
ECEEE
EEEEE
DISC
DISK
IEEE
DISP
0

<b>Sample Output</b>
1,2 4,2
2,1 2,4
2,2 5,5
Not found
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