<?php require("../../includes/header.php"); ?><h1>Mouse</h1><div class="content">

<p> Claude Shannon has just begun designing his electronic mouse experiment. In this experiment of his, he's trying to build an intelligent mechanical mouse which can find the quickest way to reach the centre of a maze it's put in. But before getting on with his design, Shannon wants to have an idea of the shortest path his mouse would take for a given maze. He needs such data for testing his system. <br /><br /><br />
Being involved in matters of greater importance, he's hired you as his project intern. Your task is to list out the shortest path his mouse can take, given the dimensions of a two dimensional maze and the expected start and end points of the mouse. If there are multiple such shortest paths, just mention one of them. </p>
<p><br /></p>
<h3>Input</h3>
<p> First line contains, 1&lt;= t&lt;=10, the number of test cases, and then t test cases follow <br /><br />
The first line of each test case starts with two integers, n m, which is the size of the field. The first cell is addressed as '0 0' <br /><br />
In the maze inaccessible cells are represented as '#' and the accessible cells are represented as '.' <br /><br />
The next line contains two pair of integers; first pair corresponds to the starting point and the second pair corresponding to the end point. <br /><br />
Then the maze of n x m size follows (see example).<br />
 </p>
<h3>Output</h3>
<p> If there exists a path between the given starting and the end point, then output the address of each cell starting from the starting cell, in order to be followed to reach the end cell (see example). In case more than one path exists than output any of them.<br /><br />
In case no such path exists, output -1.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 5
0 0 4 4	
.....
####.
.....
.####
.....
4 4
0 0 3 3
....
####
....
....

<b>Output:</b>
0 0
0 1
0 2
0 3
0 4
1 4
2 4
2 3
2 2
2 1
2 0
3 0
4 0
4 1
4 2
4 3
4 4
-1

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kunalsangwan">kunalsangwan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>