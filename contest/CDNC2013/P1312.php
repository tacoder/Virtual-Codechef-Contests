<?php require("../../includes/header.php"); ?><h1>Prevent Cheating</h1><div class="content">

<p> </p>
<p>Due to the decreasing quality of students in each new session , all the teachers formed a committee and came up with a decision of changing the seating pattern of students in class.</p>
<p>
The classroom can be regarded as a rectangle of M rows by N columns of unit squares, where each unit square represents a seat. The teachers decided to set the following rule to prevent cheating. Assume a student is able to see his left, right, upper-left, and upper-right neighbors' answer sheets. The assignment of seats must guarantee that nobody's answer sheet can be seen by any other student.</p>
<p>
Some seats of the classroom are broken and no student can be made to sit on the broken seat.</p>
<p>Your goal is to find the maximum number of students that can be placed in the classroom so that no one can cheat.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input gives the number of cases, C. C test cases follow. Each case consists of two parts.<br />
The first part is a single line with two integers M and N: The height and width of the rectangular classroom.<br />
The second part will be exactly M lines, with exactly N characters in each of these lines. Each character is either a '.' (the seat is not broken) or 'x' (the seat is broken, lowercase x).
</p>
<h3>Output</h3>
<p>For each test case, output one line containing "Case #X: Y", where X is the case number, starting from 1, and Y is the maximum possible number of students that can take the exam in the classroom.</p>
<h3>Constraints</h3>
<pre>C = 20
1 ≤ M ≤ 80
1 ≤ N ≤ 80
</pre><h3>Example</h3>
<pre><b>Input:</b>
4
2 3
...
...
2 3
x.x
xxx
2 3
x.x
x.x
10 10
....x.....
..........
..........
..x.......
..........
x...x.x...
.........x
...x......
........x.
.x...x....

<b>Output:</b>
4
1
2
46

</pre><p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivendra14">shivendra14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.6 sec</td>
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