<?php require("../../includes/header.php"); ?><h1>Smart Chef vs Evil Chef</h1><div class="content">

<p>Evil Chef recently challenged Smart Chef in the following way:<br />
Evil Chef will design a maze, and Smart Chef will provide a route through the maze.<br />
The maze consists of a square grid of cells, one of which is marked as the starting<br />
point, and one of which is marked as the exit.  A robot will be placed at the starting<br />
point, which will attempt to execute each move of Smart Chef's route one at a time.<br />
If the robot cannot move in the specified direction (either because the cell in that direction is impassable,<br />
or because doing so would move the robot off the grid) the move will be ignored.<br />
Otherwise it will move one space in the specified direction.<br />
It then checks to see if it has exited the maze, and if so ignores the rest of the route.<br />
If the robot makes it to the exit, Smart Chef wins.  Otherwise Evil Chef wins.</p>
<p>But Smart Chef's task is not as easy as it seems.<br />
Smart Chef must provide the route without knowing what the maze looks like.<br />
Furthermore, Evil Chef may cheat and change the layout of the maze after he finds<br />
out Smart Chef's route.<br />
Luckily, Evil Chef is not very smart, and only knows how to make a limited number of mazes.<br />
And Smart Chef is so smart that he knows all the mazes Evil Chef is capable of making.<br />
He's also smart enough to know when to ask for help,<br />
and has asked for your help in designing the route.</p>
<p>Your task is to design a route guarantees Smart Chef will win.<br />
In other words, your route must be able to solve all of Evil Chef's mazes.<br />
Your goal is to minimize the length of the route, but it is not necessary to find the shortest possible route<br />
(see the scoring section for additional details).<br />
As long as your route solves all the mazes, does not exceed 10000 moves in length, and no prefix of your route solves all mazes, your solution will be judged as correct.
</p>
<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases that follow.<br />
Each test case begins with an integer K, the number of mazes.<br />
K maze descriptions follow.<br />
Each maze description begins with 2 integers M and N, the height and width of the maze, respectively.<br />
M lines follow with N characters each.<br />
A '.' character indicates a passable cell.<br />
A '#' character indicates an impassable cell.<br />
A 'S' character indicates the starting point, and a 'E' character indicates the exit point.<br />
There will be exactly one 'S' character and one 'E' character per maze.
</p>
<h3>Output</h3>
<p>Output one line per test case containing the route Smart Chef should use, as a sequence of<br />
'N', 'E', 'S', and 'W' characters, corresponding to the directions North, East, South, and West,<br />
respectively.  Your route must not exceed 10000 moves in length.</p>
<h3>Scoring</h3>
<p>Your score for each test case is the length of your route.<br />
Your total score for each test file is the sum of your scores on the individual test cases.<br />
Your overall score is the average of your scores on the individual test files.</p>
<h3>Sample Input</h3>
<pre><code>2
2
6 7
.###.##
..#...#
#S#.#..
.....#.
#.##..#
E...#..
6 7
.##.#.#
.......
#.#.#.#
..E#S..
.##..#.
#...#..
3
5 6
...E#.
#.##..
...##.
.##.#.
.....S
5 6
##.###
#...##
E##..#
.##.#.
..S...
6 6
#..###
.#..##
.S.#.#
.#.#.E
#..#.#
##....
</code></pre><h3>Sample Output</h3>
<pre><code>SSSWENENNWWWWSSE
ESSSWWWWNWNNESEEEWNNEE

</code></pre><p>This sample output would score 16+22=38.  Note that better scores may be possible.</p>
<h3>Test case generation</h3>
<p>For each official test file, T is 10.<br />
K is chosen uniformly between 2 and 25, inclusive.<br />
An integer L is calculated as floor(45/sqrt(K)) and H as floor(70/sqrt(K)).<br />
Then for each maze M and N are each chosen uniformly between L and H, inclusive.</p>
<p>
Each maze is generated using a random walk algorithm.<br />
Initially all cells are marked as impassable.  One cell, chosen randomly, is marked as passable, and a marker is placed in this cell.  The following process repeated 10000000 times: The marker is moved to a random adjacent cell.  Then, if the marker is in a cell adjacent to exactly one passable cell, the cell with the marker becomes passable.
</p>
<p>
Finally, the exit is chosen randomly among all passable cells with only one passable neighbor, and the start cell is chosen randomly among all remaining passable cells.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-12-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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