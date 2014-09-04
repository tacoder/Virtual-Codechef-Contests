<?php require("../../includes/header.php"); ?><h1>Squares Game</h1><div class="content">

<p>Fat Tony and Fit Tony are playing the square painting game. There are n squares drawn on a plane. The sides of the squares are parallel to the axes. Squares don't intersect, but some of them can be inside others. In his turn a player can choose any square and paint it's internal area black. All squares inside the painted one are also painted black. The player can't paint the squares that were already painted. The loser is the player who can't make a turn. Determine the winner of the game if both players play optimally and Fat Tony's turn is the first. Also if Fat Tony can win the game determine which square he has to paint on his first turn in order to win. If there are many squares which guarantee victory to Fat Tony choose the one with the smallest number.</p>
<h3>Input</h3>

<p>The first line of input contains t - the number of test cases. Each test case starts with n - the number of squares. Next n lines consist of three integers each x, y, a - the coordinates of the lowest left corner of the square and the length of it's sides. The squares in the input are numbered from 1 to n in the order they are listed.</p>
<h3>Constraints</h3>

<p>1 &lt;= t &lt;= 10<br />
1 &lt;= n &lt;= 50000<br />
The total number of squares over all test cases in one file won't exceed 250000.<br />
x, y won't exceed 10<sup>8</sup> in absolute value.<br />
a will be positive and less than 10<sup>8</sup>.</p>
<h3>Output</h3>

<p>For each test case print "Fat x", where x - is the number of square which needs to be painted on the first turn in order to win (if there are many such square chose the one with the smallest number), if Fat Tony wins or "Fit" if Fit Tony wins.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5
0 0 10
15 15 1
1 1 3
5 5 1
14 14 3
2
1 1 1
3 3 1

<b>Output:</b>
Fat 2
Fit

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/spooky ">spooky </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-12-2010</td>
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