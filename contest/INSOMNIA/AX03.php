<?php require("../../includes/header.php"); ?><h1>Problem3</h1><div class="content">

<h1>X Word</h1>
<p>A crossword puzzle is a rectangular grid. It consists of grey and red square grids and two lists of descriptions. One list of descriptions is for "words" to be written across grey squares from left to right in the rows and the other list is for words to be written from top to bottom of the grey squares in the columns. One writes the words corresponding to the descriptions on the grey squares of the grid to solve a crossword puzzle. The descriptions relate to the rectangular grid according to sequential integers on grey squares which are deemed "eligible". <b>Grey squares are deemed "eligible" if they have red squares immediately to the left or above them.</b> Even those Grey squares are deemed "eligible" which have no squares either immediately to the left or above. No other squares are numbered. All of the squares on the first row are numbered. The numbering starts with 1 and continues consecutively from left to right of the grey squares of the first row, then from left to right of the eligible grey squares of the second row, then from left to right of the eligible grey squares of the third row and so on across all of the rest of the rows of the puzzle. The picture below illustrates a rectangular crossword puzzle grid with appropriate numbering.</p>
<p>
On a sequence of grey squares, in a row starting on a numbered square that does not follow another grey square in the same row , an "left to right" word for a description is written. The sequence of grey squares for that word goes from left to right of the row of the numbered square, ending immediately before the next red square in the row or in the rightmost square of the row.</p>
<p>
On a sequence of grey squares, in a column starting on a numbered square that does not follow another grey square in the same column, A 'top to bottom' word for a description is written. The sequence of grey squares for that word goes from the top to bottom of the column of the numbered square, ending immediately before the next red square in the column or in the bottom square of the column. Every grey square in a correctly solved puzzle contains a letter.</p>
<p>
You must write a program that takes several solved crossword puzzles as input and outputs the lists of 'left to right' and 'top to bottom' words which constitute the solutions.
</p>
<h3>Input</h3>
<p>Each input starts with a line containing two integers r and c (1&lt; r &lt;10 and 1&lt; c &lt;10), where r (the first number) is the number of rows in the puzzle and c (the second number) is the number of columns. <br />The r rows of input which follow each contain c characters (excluding the end-of-line) which describe the solution. Each of those c characters is an alphabetic character which is part of a word or the character "*", which indicates a red square. <br />The end of input is indicated by a line consisting of the single number 0.</p>
<h3>Output</h3>
<p>Output consists the list of 'left to right' words followed by the list of 'top to bottom' words. Words in each list must be output one-per-line in increasing order of the number of their corresponding descriptions. <br />The heading for the list of left to right words is "Left to right". <br />The heading for the list of top to bottom words is "Top to bottom".<br /> In the case where the lists are empty (all squares in the grid are red), the Left to right and Top to bottom headings should still appear.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6 7
AIM*DEN
*ME*ONE
UPON*TO
SO*ERIN
*SA*OR*
IES*DEA
0


<b>Output:</b>
Left to right
1.AIM
4.DEN
7.ME
8.ONE
9.UPON
11.TO
12.SO
13.ERIN
15.SA
17.OR
18.IES
19.DEA
Top to bottom
1.A
2.IMPOSE
3.MEO
4.DO
5.ENTIRE
6.NEON
9.US
10.NE
14.ROD
16.AS
18.I
20.A

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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>