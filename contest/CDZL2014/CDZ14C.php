<?php require("../../includes/header.php"); ?><h1>Cross the Maze</h1><div class="content">
<p>In the secret vault, Eon gets information about the existence of Codezilla's castle and he finds a map with its location. But on his way to the castle, Eon encounters a maze. Now this is no ordinary maze. The maze is in the form of a rectangle with n rows and m columns. Each cell of the maze is a room and a room in the ith row and jth column is addressed as room(i,j). Rows are numbered from 1 to n from bottom to top and columns are numbered from 1 to m from left to right.</p>
<p>The maze has two types of rooms: type A and type B. In each room of type A, there is a monster who is very hungry and Eon must give him a candy otherwise the monster will eat him. The room also contains one gold coin. In each room of type B, there is a guard who is very greedy and Eon must give him a gold coin otherwise the guard will kill him. The room also contains a candy.</p>
<p>Every room has a door to every adjacent room (Rooms that share an edge are adjacent rooms). Before entering the maze Eon has the choice of taking either a gold coin or a candy. Eon enters the maze from room(1,1) and he has to reach the room(n,m) to get out of the maze. Eon does not have much time. Tell Eon the minimum number of rooms he needs to visit to get out of the maze alive.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. First line of each test case consists of two integers <b>n</b> and <b>m</b>.Then follows n lines with m characters each describing the maze. '0' for room of type A and '1' for room of type B.</p>
<h3>Output</h3>
<p>For every test case print the minimum number of rooms Eon needs to visit to get out of the maze. If it is not possible to cross the maze, print "-1" without the quotes.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>m</b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
011
001
000
2 2
11
00

<b>Output:</b>
5
-1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tussharsingh13">tussharsingh13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-02-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>