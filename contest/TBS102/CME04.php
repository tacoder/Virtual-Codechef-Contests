<?php require("../../includes/header.php"); ?><h1>Problem 4</h1><div class="content">

<p>
Ramesh is contemplating putting a new flooring throughout his house, but he has an important constraint: no tiles must be cut in the process of tiling any room. The floor of every room must be completely tiled, and all tiles in a particular room must be orientated the same way. This will make it easier for him to count tiles in any room that he is in because he won't have to estimate, and subsequently, add fractions of tiles into the total. Of course Willard is quite happy to put different tiles in each room to make counting them more interesting.<br />
Fortunately, the dimensions of every room in Ramesh's house are integral(interger) number units on each side and every room is a perfect rectangle. As well, Willard has found a tile manufacture that offers a variety of tile sizes, all of which, by coincidence are also an integral(integer) number of units on each side. Of course, the tiles are rectangular.<br />
The manufacture, who offers the different sizes for aesthetic reasons, and not to satisfy the somewhat compulsive behaviors of the likes of Willard, is somewhat taken aback b y Ramesh's request that the manufacture guarantee that a particular size of tile will exactly cover a room (i.e., the whole floor is covered and no tile is cut).However, the manufacturer is business minded and asks you to write a simple computer program. This program will help them match tile sizes up for each room in Ramesh's house and thereby meet his request.</p>
<h3>Input</h3>
<p>
The first line contains the number of test cases.<br />
Following lines represent a single room in the house and a possible tile to be used in that room. Each line contains 4 integer values. The first two values are the dimensions of a room and the last two values are that of a tile. No room is larger than 250 X 250, no tile is larger than 50 X 50 and Ramesh's house has no more rooms than 100.</p>
<h3>Output</h3>
<p>
Each line represents the answer for a particular room(the first line for the first room, the second line for the second room etc.). If the room can be exactly tiled with the tiles of the given dimension then the line would consist of the word "yes" else "no".</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
50 70 2 3 

<b>Output:</b>
no
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vishesh_sigma">vishesh_sigma</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>50 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>