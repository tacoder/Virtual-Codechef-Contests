<?php require("../../includes/header.php"); ?><h1>Snake Snaky</h1><div class="content">

<p>
Chef loves to play the computer game "Snake Snaky". In this game the player controls a long thin creature, resembling a snake that crawls on the rectangular field with width <b>N</b> and height <b>M</b> surrounded by walls. Snake itself consists of <b>L</b> links each of which occupies one cell of the field. Any two consecutive links of the snake must be in adjacent cells of the field and the snake should not have self-intersections (i.e. no two links of the snake can not be located in the same cell).</p>
<p>Snake moves all the time and the player can't stop it, but you can change the direction of its movement using cursor keys. The longer the player can control the snake avoiding self-intersections and collision with the wall the more points he earns. The snake moves in such a way that the first link (head) will occupy a cell adjacent to its previous position in the direction corresponding to the current pressed cursor key. Each successive snake link in a new position occupies the cell which was occupied by the previous link in the old position. Thus the connection of the snake is preserved. The cell which was occupied by the last link (tail) in the old position will be free. All movements made simultaneously so the cell that was occupied by the tail can be occupied by the head in the new position. If no key is pressed, the head of the snake will move in the same direction as in the previous move.</p>
<p>In the middle of a game, the Chef leaves the computer but does not shut down the game so the snake is now moving on its own. Determine the number of movements of the snake before it collides with a wall or some part of its body.</p>
<h3>Input</h3>

<p> The first line contains a single integer <b>T &lt;= 40</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains five positive integers <b>N, M, x, y, L</b>. Here <b>N</b> and <b>M</b> are sizes of the field (<b>1 &lt;= N, M &lt;=1000</b>), <b>x</b> and <b>y</b> are coordinates of the cell which is occupied by the snake tail (<b>1 &lt;= x &lt;= N, 1 &lt;= y &lt;= M</b>) and <b>L</b> is the snake length (<b>2 &lt;= L &lt;= N*M</b>). The next line contains the sequence of <b>L-1</b> symbols corresponding to the direction the snake moved in the last <b>L-1</b> steps before the Chef left. Symbol <b>'U'</b> means that the corresponding movement was up, <b>'D'</b> - down, <b>'L'</b>  - left, <b>'R'</b>  - right. The positive x-axis is directed right and the positive y-axis is directed up. The coordinate of lower left cell is <b>(1, 1)</b>. It is guaranteed that the input describes a valid snake that did not intersect itself or collide with a wall before the Chef left. The size of the input file does not exceed <b>4 MB</b>.</p>
<h3>Output</h3>

<p> For each test case output <b>"WALL"</b> if the snake will come into collision with the wall. Otherwise snake will come into collision with part of its body and you must output <b>"BODY"</b>. After that, print a space followed by the number of movements before the collision.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
10 10 3 2 6
URDDL
6 6 1 6 13
RRRRRDDDLLLU

<b>Output:</b>
WALL 2
BODY 1

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-03-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>