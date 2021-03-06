<?php require("../../includes/header.php"); ?><h1>Haunted Maze</h1><div class="content">

<p>
Chef is trapped in a haunted maze.<br />
There are ghosts that patrol the maze by following fixed paths.<br />
Chef is trying to escape the maze, but must avoid the ghosts or he will become frightened and faint.<br />
Additionally, Chef needs to escape within a certain amount of time, or he will faint from hunger.<br />
Your task is to determine if Chef can escape the maze without fainting, and if so the minimum time it will take.
</p>
<p>
You will be given the layout of the maze, including Chef's starting position, the position of<br />
the exit, and the patrol paths of the ghosts.<br />
There is a timer that keeps track of how long Chef has been in the maze.  The timer starts at 0.<br />
Each second, the following happens (in order):</p>
<ul>
<li>If the timer is equal to the maximum time Chef is allowed<br />
to spend in the maze, he will faint from hunger.</li>
<li>Chef may move to one of the adjacent cells of the maze (north, east, south, or west of his current<br />
position), provided that cell is neither a wall nor occupied by a ghost.<br />
Chef also has the option of standing still.
</li>
<li>All of the ghosts move to the next cell in their repsective patrol paths.<br />
If any ghost moves into the cell now occupied by Chef, Chef will faint.</li>
<li>The timer is incremented by 1.</li>
<li>If Chef is now standing at the location of the exit, Chef successfully<br />
escapes the maze.</li>
</ul>

<p>
Ghost patrol paths will be given as a list of waypoints.<br />
Each waypoint will be in-line either horizontally or vertically with the next waypoint in the list,<br />
and the final waypoint will similarly be in-line with the first waypoint.<br />
Ghosts will move from waypoint to waypoint, one square at a time, using the shortest possible path.<br />
Once a ghost reaches its final waypoint, it will travel back to the first waypoint and repeat the cycle.<br />
For example, if a patrol path were given as the waypoints:<br />
(2,3) (1,3) (1,0) (0,0) (0,1) (2,1)<br />
Then the ghost's complete path would be:<br />
(2,3) (1,3) (1,2) (1,1) (1,0) (0,0) (0,1) (1,1) (2,1) (2,2)<br />
After which the sequence would repeat.
</p>
<h3>Input:</h3>
<p>
Input will begin with T, the number of test cases.<br />
Each test case begins with 4 integers: M, N, C, and K,<br />
where M is the height of the maze, N is the width of the maze,<br />
C is the number of ghosts, and K is the number of seconds before Chef will faint from hunger.<br />
C lines follow, each describing the patrol path of a ghost.<br />
Each patrol path begins with an integer L, the number of waypoints in the path, followed by L pairs of integers giving the (x,y)<br />
coordinates of a waypoint on the path, where (0,0) is the top-left corner and (N-1, M-1) is the bottom-right corner.<br />
Finally, M lines of N characters each describe the maze itself.  A '.' character indicates a passable square, and a<br />
'#' character indicates an impassable wall (although the ghosts may pass through walls).  A '@' character indicates<br />
the starting position of Chef (it is guaranteed that no ghost will begin here), and a '$' character indicates the exit<br />
of the maze (there will be exactly one '@' character and one '$' character in each test case).
</p>
<h3>Output:</h3>
<p>For each test case, if Chef can escape without fainting, print the minimum number of seconds it will take him to escape.<br />
Otherwise, print -1.</p>
<h3>Constraints:</h3>
<p>T≤10<br />
1≤M,N≤30<br />
0≤C≤30<br />
0≤K≤100000<br />
2≤L≤10</p>
<h3>Sample Input:</h3>
<pre><code>
4
10 10 0 200
##.$......
@#.######.
.#...#..#.
.###....#.
....###.#.
#.#.....#.
....#.###.
.####.#.#.
.#....#...
..........
3 10 1 18
2 1 1 7 1
###.######
@........$
######.###
5 5 2 13
2 2 4 2 1
3 4 2 3 2 2 2
##@##
##.##
$..##
#####
#####
2 2 1 1000
2 1 1 1 0
@$
..
</code></pre><h3>Sample Output:</h3>
<pre>
22
18
-1
-1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-06-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>