<?php require("../../includes/header.php"); ?><h1>Crease Painting</h1><div class="content">

<p align="justify">In cricket, the long white line before the batsman and the runner is called crease. We have a painting machine that can be programmed to paint white lines on the field. Imagine the cricket ground as an infinite grid of cells and the painting machine is initially located at the cell (0,0) which is already colored white and all other cells are in green color. Each instruction to the machine is of the form "direction distance", where direction is one of 'U' (up), 'D' (down), 'R' (right) or 'L' (left) and distance is a positive integer. On reading an instruction, the machine moves in the specified direction for specified distance and paints all the unpainted (green) cells with white color. Given a sequence of N instructions, find the number of cells that are painted white, for each of them.</p>
<h3>Input</h3>

<p>First line contains N, number of instructions ( 1 ≤ N ≤ 1000 ). Each of the next N lines contains an instruction of the form DIR DIST, where DIR is one of ( U/D/R/L ) and DIS is a positive integer ( 1 ≤ DIS ≤ 10<sup>9</sup> )</p>
<h3>Output</h3>

<p>For each instruction in the given order, output the number of cells that are painted white for each of them, in a separate line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
R 100
U 10
L 120
D 10
R 200


<b>Output:</b>
100
10
120
10
99
</pre><p>
<b>Explanation:</b><br />
R 100 : all 100 cells from (1,0) to (100,0) are painted white</p>
<p>U 10 : all 10 cells from (100,1) to (100,10) are painted white</p>
<p>L 120 : all 120 cells from (99,10) to (-20,10) are painted white</p>
<p>D 10 : all 10 cells from (-20,9) to (-20,0) are painted white</p>
<p>R 200 : The cells [ (0,0) to (100,0) ] are already painted white, so only the 19 cells [ (-19,0) to (-1,0) ] + the 80 cells [ (101,0) to (180,0) ] are painted white in this step.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/maksflow">maksflow</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-04-2012</td>
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