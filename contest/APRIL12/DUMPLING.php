<?php require("../../includes/header.php"); ?><h1>Greatest Dumpling Fight</h1><div class="content">

<p>
Chef Shifu and Chef Po are participating in the Greatest Dumpling Fight of 2012.<br />
Of course, Masterchef Oogway has formed the rules of the fight.
</p>
<p>
There is a long horizontal rope of infinite length with a center point P.<br />
Initially both Chef Shifu and Chef Po will stand on the center P of the rope facing each other.<br />
Don't worry, the rope is thick enough to hold Chef Po and Chef Shifu at the same place and at the same time.<br />
Chef Shifu can jump either <b>A</b> or <b>B</b> units to the left or right in one move.<br />
Chef Po can jump either <b>C</b> or <b>D</b> units to the left or right in one move.
</p>
<p>
Masterchef Oogway wants to place exactly one dumpling on the rope such that<br />
both Chef Shifu and Chef Po will be able to reach it independently in one or more moves.<br />
Also the dumpling can be placed at most <b>K</b> units away from the center of the rope.<br />
Masterchef Oogway will let you watch the fight if you can decide the number of possible positions on the rope to place the dumpling.
</p>

<p><h3>Input</h3>
</p>
<p>
First line contains <b>T</b>, the number of test cases. Each of the next <b>T</b> lines contains five positive integers, <b>A B C D K</b>.
</p>
<p>
1&lt;=<b>T</b>&lt;=1000<br />
1&lt;=<b>A</b>,<b>B</b>,<b>C</b>,<b>D</b>,<b>K</b>&lt;=10^18
</p>
<h3>Output</h3>
<p>For each test case, output on a newline, the number of possible positions to place the dumpling on the rope. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 4 3 6 7
1 2 4 5 1
10 12 3 9 16

<b>Output:</b>
3
3
5

<b>Explanation:</b>

For the second case,

Chef Po jumps 2 units to the right and then 1 unit to the left.
Chef Shifu jumps 5 units to the right and then 4 units to the left 
to reach 1 unit right from the center.

Chef Po jumps 2 units to the left and then 1 unit to the right.
Chef Shifu jumps 5 units to the left and then 4 units to the right 
to reach 1 unit left from the center.

Dumpling can also be placed at the center as a chef can reach it in 2 moves.
Thus, there are three different positions at most 1 unit away from the center 
that are reachable by both the chefs in one or more moves.


</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rosyish">rosyish</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-03-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>