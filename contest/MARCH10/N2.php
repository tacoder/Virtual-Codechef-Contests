<?php require("../../includes/header.php"); ?><h1>Heroes of Magical Might</h1><div class="content">

<p>
You are playing the game Heroes of Magical Might. Your  hero is in a grid map divided into MxN squares.
</p>
<p>
There are three kinds of possible objects in each square:
</p>
<ul>
<li>Obstacles: these can be trees, mountains, houses, and so on. Your hero cannot walk into these squares. These squares are represented by the characters '#'.
</li><li>Treasures: your hero can find some gold or earn experience points when collecting these treasures. These squares are represented by the characters '*'.
</li><li>Gates: these gates form a complex interconnected network in the map. Your hero can travel almost instantly between the gates, represented by the characters '@'.
</li></ul>
<p>You control the hero turn by turn. In each turn, you can:</p>
<p>Choose one of the four possible directions, and move to the adjacent square in that direction. However, due to fog, your hero will only succeed with probability P. He may go in the remaining 3 directions with equal probability (1-P)/3. If the adjacent square is an obstacle or is outside the maze, the hero remains in the current square.</p>
<p>In addition, if your hero's current square is a gate, your hero could choose to enter the gate. He will appear in one of the remaining gates with equal probabilities, i.e. with probability 1/(Number of Gates - 1).</p>
<pre>
.@.
@#@
</pre><p>For example, in the above map, suppose your hero's starting position is at (1,1) and P = 0.8. If the hero moves down in the first turn, he may succeed and end up in the gate at (2,1) with probability 0.8. With probability 0.2 / 3, he may go right and end up in the gate at (1,2). With probability 2*0.2 / 3, he just remains at (1,1) since the top and left direction would lead him out of the maze.</p>
<p>If the hero chooses to enter the gate at (2,1), he may end up at (1,2) or (2,3) with equal probability 1/2.</p>
<p>Find the optimum strategy to control your hero such that <i>the expected number of turns to collect the first treasure</i> is minimized.</p>
<h3>Input</h3>
<p>
The first line contains t, the number of test cases (about 15). Then t test cases follow, preceded by empty lines. Each test case has the following form.</p>
<p>The first line contains two numbers M and N (1&lt;=M,N&lt;=20), describing the dimensions of the map.</p>
<p>Each line in the next M lines contains N characters describing the maze. The meanings of the characters are:</p>
<ul>
<li>'*': treasure
</li><li>'#': obstacle
</li><li>'.': empty square
</li><li>'@': gate
</li><li>'S': starting point of the hero
</li></ul>
<p>You are guaranteed that the hero can always collect at least one treasure with probability greater than 0. The number of gates will never be 1. There is exactly one 'S' character in the maze.</p>
<h3>Output</h3>
<p>For each test case, output the minimum expected number of turns until the hero collects the first treasure, rounded to two decimal places.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4

1 2
S*
0.7

1 2
S*
0

2 4
S##*
@##@
0.8

2 18
S...*.#@*......*@.
.@....#...........
0.6

<b>Output:</b>
1.43
3.00
3.50
6.41
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>