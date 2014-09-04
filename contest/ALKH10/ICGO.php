<?php require("../../includes/header.php"); ?><h1>Icarus GO</h1><div class="content">

<p style="text-align:justify;">
Icarus is super enthusiastic in becoming the best GO player in the world, and right now he is aiming to surpass his rival Troy. That is why he is training hard in many creative ways.</p>
<p style="text-align:justify;">
He knows that a great ability for a good GO player is to count the number of groups and the degrees of freedom of each one just with a quick sight.</p>
<p style="text-align:justify;">
As you know, a group is a set of stones in which each stone of the group is adjacent to another stone of the group; and the freedom degree a group is equal to the number of empty intersections that are at least adjacent to one stone in the group. In GO, adjacency is only vertical or horizontal, not diagonal. As the diagram shows, in this reduced 6x6 board there are one big white group consisting of four stones and freedom degree five (5), one black group of two stones and<br />
freedom degree four (4) and two black groups of one stone with two freedom degree two (2) each.</p>
<p style="text-align:justify;">
A good friend of him made a quick random board generator. It creates a GO board with a certain number of stones placed on it and then Icarus estimates the groups and their degrees of freedom. After that, the computer checks if he was right counting them manually. The only<br />
problem is that the computer validation has not been implemented yet, so your task is to help Icarus by writing a program that generates the correct answer. This way, Icarus will be able to validate his answers and finally defeat Troy.
</p>
<p><center><br />
<img border="0" src="http://dl.dropbox.com/u/4372589/2.jpg" alt="http://picasaweb.google.com/anvaysrivastava/Alkhawarizm?authkey=Gv1sRgCKiltti18crPxwE#5522750289107311042" width="195" height="197" /><br />
</center></p>
<p style="text-align:justify;">
<h3>Input</h3>
</p><p>The first line contains an integer T, which species the number of test cases. Then, T test case descriptions will follow.
</p>
<p style="text-align:justify;">
The first line contains a pair of integers N and S, which specify the length of the board (which is always square) and the number of stones in it. Then, S lines will follow, each one containing the following items separated by a single white space:<br /></p>
<ul>
<li>A character 'B' or 'W' if the stone is black or white respectively.</li>
<li>An integer C<sub>i</sub> represents the column where the stone i is placed.</li>
<li>An integer R<sub>i</sub> represents the row where the stone i is placed.</li>
</ul>
<p><br /><br />
Remember that the bottom-left intersection in the board is (1,1) and the top-right intersection is (N,N).
</p>
<h3>Output</h3>
<p style="text-align:justify;">
For each board you must print the string "Case #i:" in a line, where i is the board number, starting from 1. Then, you must print one line for each group in the board, printing a character 'B' if the group is black or 'W' if the group is white, the number of stones in the set and the freedom degrees of that group; those three elements should be separated by single a white space. The groups should be sorted by the following rules:</p>
<ol>
<li>Put black groups before white groups.</li>
<li>If two groups are of the same color, put bigger groups first.</li>
<li>If two groups are of the same color and the same size, put groups with greater freedom degree first.</li>
<pre>
<h3>Example</h3>
<b>Input</b>
3
6 8
B 5 2
W 4 2
B 5 4
W 4 4
B 5 5
W 5 3
B 6 3
W 4 3
9 6
W 5 5
B 9 5
B 9 1
W 1 1
B 1 2
B 2 1
6 5
B 1 1
B 1 2
W 3 1
W 2 2
W 3 2

<b>Output</b>
Case #1:
B 2 4
B 1 2
B 1 2
W 4 5
<br />Case #2:
B 1 3
B 1 2
B 1 2
B 1 2
W 1 4
W 1 0
<br />Case #3:
B 2 2
W 3 5

<h3>Constraints:</h3>
<p style="text-align:justify;">
<ul>
<li>T will be between 1 and 200, inclusive.</li>
<li>N will be between 1 and 10<sup>6</sup>, inclusive.</li>
<li>S will be between 1 and min(N<sup>2</sup>,250), inclusive.</li>
<li>C<sub>i</sub> will be between 1 and N, inclusive, for all i between 1 and S.</li>
<li>R<sub>i</sub> will be between 1 and N, inclusive, for all i between 1 and S.</li>
<li>There will not be more than one stone in the same intersection.</li>
</ul></p>
</pre></ol>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divij">divij</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>