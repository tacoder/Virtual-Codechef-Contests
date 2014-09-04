<?php require("../../includes/header.php"); ?><h1>Tri-Hexagonal Puzzle</h1><div class="content">

<p style="text-align: justify;">Little Johnny wants to play with his friends today. But his babysitter won't let him go! After a lot of begging, the heartless nanny gives him her brand new electronic puzzle and says: "If you solve the puzzle then you are free to go". Not being aware of Little Johnny's IT skills, the nanny leaves the kid alone.</p>
<p style="text-align: justify;">Rapidly, Little Johnny sends you an e-mail asking for your help.</p>
<p style="text-align: justify;">The puzzle consists of three hexagons as shown in the figure. Each vertex is painted black or white. Some of them belong to just one hexagon and some of them belong to more than one. Exactly four of them are painted black, and the other nine are white. The goal is to make the shared vertexes black by means of allowed moves: rotating a hexagon 60 degrees clockwise or counter-clockwise.</p>
<p style="text-align: justify;">Can you help Little Johnny?</p>
<h3>Input</h3>
<p style="text-align: justify;">Input starts with an integer T, the number of puzzles to solve (1&lt;=T&lt;=100). T lines follow, each one having 13 binary digits, corresponding to the top-down, left to right labeling of the vertexes in the puzzle. A '0' means the i-th vertex is painted white, while a '1' means it is painted black.</p>
<h3>Output</h3>
<p style="text-align: justify;">For each test case output M on a single line, the minimum number of moves required to solve the puzzle. Then print M lines, each one describing a move in the following manner: two space separated integers H and C, the rotated hexagon (upper left is 0, upper right is 1, lower one is 2) and the direction (0 for counter-clockwise, 1 for clockwise).</p>
<p style="text-align: justify;">If there is more than one solution, any will suffice.</p>
<h3 style="text-align: center;">Example 1</h3>
<p style="text-align: center;"><img title="TEST 1" src="http://www.spoj.pl/content/yandry:HEXP_1.png" alt="TEST 1" width="375" height="261" /></p>
<pre><strong>Input:</strong><br />1<br />0000000101011<br /><br /><strong>Output:</strong><br />3<br />2 0<br />2 0<br />1 1<br /></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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