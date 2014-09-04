<?php require("../../includes/header.php"); ?><h1>Battleship V</h1><div class="content">

<p><b>This problem was part of the <a href="http://www.codechef.com/APRIL09/">CodeChef April Challenge</a>.  All user submissions for this contest problem are publicly available <a href="http://www.codechef.com/APRIL09/status/B3/">here</a>.</b></p>
<p>In the game of "BattleShip V", you control a cannon which is attacking a large enemy battleship, armed with many guns. Your goal is to destroy as many of the guns as possible.</p>
<p>The battle field is a 2D Cartesian grid, where your cannon is located at the origin.</p>
<p>The enemy battleship is a horizontal line segment located from the coordinates (X1 , Y) to (X2, Y).<br />
There are exactly (X2 - X1 + 1) guns on the ship, located at the integer points (X1, Y), (X1+1, Y), ..., (X2, Y).
</p>
<p>
However, the problem is, you cannot always fire at a gun. There are supernatural rocks located at all points of the battlefield whose X and Y coordinates are both integers. In order to fire successfully at an enemy's gun, the line connecting your cannon and that gun must not<br />
go through any rocks.
</p>
<p>
How many guns you successfully destroy?
</p>
<h3>Input</h3>
<p>
The first line contains t, the number of test cases (about 100). Then t test cases follow.
</p>
<p>
Each test case consists of one line containing three numbers Y, and X1, X2 (2100000000 > &#8804; Y &#8804; 2100000000, -2100000000 &#8804; X <sub>1</sub> &#8804; X<sub>2</sub> &#8804; 2100000000).
</p>
<h3>Output</h3>
<p>
For each test case, output the number of the enemy battleship's guns that your cannon can destroy.
</p>
<h3>Example</h3>
<pre>
<b>Input</b>
1
2 -2 1


<b>Output</b>
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-03-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>