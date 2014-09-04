<?php require("../../includes/header.php"); ?><h1>Simulator</h1><div class="content">

<p>There is an artificial intelligence program, that needs to be coded, which will act as a simulator for training of the sailor. Every calculation needs to be done in a two-dimensional plane. Let (x1, y1). . . (xn, yn) be a collection of n islands. You are a pilot of the ship and your goal is to navigate the ship from island (x1, y1) to island (xn, yn). The ship can travel a maximum distance of D units before it must refuel. We assume that a ship can only refuel from an island. From any island (xi, yi), the ship may travel to any other island (xj , yj) away at a speed of 1 unit per second. Before it does this, however, the ship must turn until it faces (xj , yj); this turning occurs at a rate of 1 degree per second.<br />
Compute the shortest time needed for the ship to travel from island (x1, y1) to (xn, yn). Assume that<br />
the ship initially faces (xn, yn) and take all intermediate values like angles and distances as integer(hint: can use floor function)</p>
<h3>Input</h3>

<p>The input  will contain multiple test cases. Each test case will begin with a single line containing an integer D, the maximum distance between islands that the ship can  travel (where 5≤ D ≤ 500),<br />
and an integer n, the number of islands (where 2 ≤ n ≤ 25). The next n lines each contain 2 integer values; here, the ith line contains xi and yi (where 0 ≤ xi, yi ≤ 1000). Each of the island is guaranteed to be unique. The end-of-file is denoted by a test case with D = n = −1.</p>
<h3>Output</h3>

<p>The output  should contain a single line per test case indicating the shortest possible time in second<br />
(rounded to the nearest integer) required for the ship to travel from (x1, y1) to (xn, yn). If no trip is<br />
possible, print “impossible” instead.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
10 2
0 0
7 0
10 3
0 0
7 0
14 5
10 3
0 0
7 0
14 10
-1 -1


<b>Output:</b>
7
71
impossible

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aman871988">aman871988</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-03-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>20 sec</td>
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