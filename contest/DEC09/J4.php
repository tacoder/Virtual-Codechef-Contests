<?php require("../../includes/header.php"); ?><h1>Effective Sets</h1><div class="content">

<p>Johnny has been hired to write a program to analyse strategic data for the Bytelandian Navy. His task is described below.</p>
<p>There are N battleships represented as N points on the plane. The <b>radius</b> of a ship is defined to be the distance from that ship to the ship closest to it. The <b>effective set</b> for a ship is defined to be the set of all ships (excluding itself) which are at a distance from that ship of <b>no more than twice</b> its radius. The number of elements in the effective set of a ship is called the <b>effective value</b> of that ship.</p>
<p>Johnny needs to write a program to calculate the radius and the effective value of each battleship. This task is so tough that without your help, Johnny could never finish it. Let's help him!</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 5). Then t test cases follow. Each test case has the following form:</p>
<ul>
<li>The first line contains an integer N, the number of battleships (1 &lt;= N &lt;= 30000).</li>
<li>Each line in the next N lines contains two integers X, Y (0 &lt;= X, Y &lt;= 10000) represents the coordinates of a battleship.</li>
</ul>
<p>Each test case's input is separated by a blank line. There may be more than one ships located at the same place.</p>
<h3>Output</h3>
<p>For each test case, print N lines. Each line should contain two numbers which are the radius and the effective value of the corresponding battleship. The radius should be rounded to 2 decimal points.</p>
<p>Print a blank line after each test case's output.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
2

3
0 0
0 0
3 4

5
5 3
7 8
0 9
3 1
4 4

<b>Output</b>
0.00 1
0.00 1
5.00 2

1.41 2
5.00 4
6.40 4
2.83 2
1.41 1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>