<?php require("../../includes/header.php"); ?><h1>Maze of Digits</h1><div class="content">

<p>Johnny, a third year computer science student of Byteland University, is rushing with his AI assignment project which is due tomorrow evening. In this project, he has to build a Lego NXT robot which is able to navigate in a maze. Johnny calls his robot WallB (because he likes the movie "WallE" very much).</p>
<p>The maze is an MxN rectangular grid. There are digits 0..9 and obstacles placed at some intersections. Starting at some intersection, in each step, WallB can move to one of the four intersections adjacent to its current position. However, WallB cannot step into an obstacle.</p>
<p><img src='http://www.codechef.com/download/digimaze1.jpg' /></p>
<p style="text-align:center">
A maze intersection with a handwritten digit
</p>
<p>Johnny needs to program WallB to be able to do the following tasks. First, WallB has to traverse through all reachable intersections of the maze and recognize the digits written at the intersections. Johnny has already finished this part of the assignment since he is very good at image recognition algorithms.</p>
<p><img src='http://www.codechef.com/download/digimaze2.jpg' /></p>
<p style="text-align:center">
WallB needs to scan and recognize all the reachable digits.
</p>
<p>The second part of the assignment is harder. Prof. Q will announce a number X. Based on the map of the maze obtained in the first part, Johnny needs to program WallB to find a shortest path that passes through digits which sum up to X.</p>
<p>To be more precise, suppose in his route, WallB passes through the digits d<sub>1</sub>, d<sub>2</sub>, ..., d<sub>k</sub> in order; then we should have d<sub>1</sub> + d<sub>2</sub> + ... + d<sub>k</sub> = X. WallB could pass through a digit more than once.</p>
<p>Johnny gets stuck in this second part of the assignment. Could you write a program to help him?</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 25). Then t test cases follow. Each test case has the following form:</p>
<ul>
<li>The first line contains two integers M, N (0 &lt;= M, N &lt;= 100) representing the size of the maze.</li>
<li>Each line in the next M+1 lines contains N+1 characters describing the structure of the maze. Each character represents an intersection and could be one of:</li>
<ul>
<li>'.': empty intersection</li>
<li>'#': obstacle</li>
<li>'0'..'9': digits</li>
<li>'*': starting position of WallB</li>
</ul>
<li>The last line contains the number X announced by Prof. Q (1 &lt;= X &lt;= 100).</li>
</ul>
<p>Successive test cases are separated by blank lines.<br />
The number of digits in a maze is at most 100.</p>
<h3>Output</h3>
<p>For each test case, print the minimum number of steps that WallB needs to travel to visit the digits that sum up to X. If there is no way for WallB to complete the task, print the number -1.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3

2 3
1.#2
#..#
*.#.
3

2 3
2.#2
#..#
*.#.
5

2 3
2.#2
#.3#
*.#.
5

<b>Output:</b>
8
-1
6
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-11--0001</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>