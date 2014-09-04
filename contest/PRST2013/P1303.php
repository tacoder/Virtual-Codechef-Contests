<?php require("../../includes/header.php"); ?><h1>Cheese Hunt</h1><div class="content">

<p>A rat started his search of cheese from the (1,1) cell and has to reach (n,n) cell for it. He can move only in the 4 directions i.e. left, right, up or down. The obstructed cells for the rat are marked with 1 and allowed cells are marked with 0 in the maze.</p>
<p>
Your task is to find a path through which the rat move from the starting position (1,1) to the final position where cheese is (n,n). List the total no of possible paths which the rat can take to reach the cheese.</p>
<h3>Input</h3>
<p>First line contains the size of the square maze.</p>
<p>The next n lines contain n binary values separated by space. 0 denotes an open cell while 1 denotes a blocked cell.</p>
<p>You have to find paths which contain only cells which are open, and finally print the total no of such unique paths. Retracing the 1 or more cells back and forth is not considered a new path. The set of all cells covered in a single path should be unique from other paths</p>
<h3>Output</h3>
<p>The output should be the total no. of paths possible on the first line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

7

0 0 1 0 0 1 0
1 0 1 1 0 0 0
0 0 0 0 1 0 1
1 0 1 0 0 0 0 
1 0 1 1 0 1 0
1 0 0 0 0 1 0
1 1 1 1 0 0 0

<b>Output:</b>

4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivendra14">shivendra14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
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