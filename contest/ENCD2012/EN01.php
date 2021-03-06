<?php require("../../includes/header.php"); ?><h1>The Shed Problem</h1><div class="content">

<pre>
Dexter is the manager of Miami Wildlife Sanctuary. During rains, many species find it
difficult to survive, so he decided to erect a large shed in the Sanctuary (a rectangular field)
to protect these species. However, there are a number of trees on this land and Dexter does
not wish to cut any of them.

Here is a description of Sanctuary as a rectangular grid where "." indicates the absence of
a tree and " T " indicates the presence of a tree.

. . . . . T . .
. T . . T . . .
. . . . . T . .
T . . . . . . .
. . . . . . . .
. . . . . T . .
. . T . . . . .

In this case, Dexter can build a 4 ×4 square shed, as indicated below:

. . . . . T . .
. T . . T . . .
. s s s s T . .
T s s s s . . .
. s s s s . . .
. s s s s T . .
. . T . . . . .

You may verify that this is the largest square shed he can put up without cutting any trees.
Your task is to help Dexter determine the area of the largest shed he can put up without
cutting any trees.

<b>Input format</b>
The first line of input contains two integers M and N indicating the dimensions of the
Sanctuary. This is followed by M lines of input, each containing N letters each of which is a
"." or a "T".

<b>Output format</b>
The output consists of a single line with a single integer indicating the area of the largest
square shed that Dexter can put up in Sanctuary without cutting any trees. Also return -1 if
not possible to erect the square shed.

<b>Constraints</b>
You may assume that M ≤1000 and N ≤1000 in all inputs.

<b>Example</b>

We now illustrate the input and output formats using the above example.

<b>Sample input</b>

7 8
.....T..
.T..T...
.....T..
T.......
........
.....T..
..T.....

<b>Sample output</b>
16
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pc_chawla">pc_chawla</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>