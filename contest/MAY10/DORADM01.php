<?php require("../../includes/header.php"); ?><h1>Lights Out</h1><div class="content">

<p>Johnny is playing Lights Out, an electronic game consisting of an NxN grid of lights. Initially, each light may be on or off. Pressing a light will toggle it and the lights non-diagonally adjacent to it.
</p>
<p>The object of the game is to try and get all the lights turned off. It is not always possible, and what's more, Johnny's game is faulty. Pressing some lights has no effect. (They can still be turned on and off if they are next to working lights.)
</p>
<p>Help Johnny write a program that checks whether a puzzle can be solved or not, given the initial description of the grid and the positions of the faulty lights.</p>
<h3>Input</h3>

<p>The first line contains a number t (about 10), the number of test cases. Each test case has the following form:
</p>
<p>The first line contains two numbers N and K (2 &lt;= N &lt;= 200, 0 &lt;= K &lt;= N). Each line in the next N lines contains N characters '0' or '1' representing the initial state of the grid. '1' denotes a light that is on and '0' a light that is off.
</p>
<p>Each line in the next K lines contains 2 integers, i and j (1 &lt;= i, j &lt;= N), representing the row and column of a faulty light. Rows are numbered from the top and columns from the left.</p>
<h3>Output</h3>

<p>For each test case, print YES if there is a solution, otherwise print NO.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

3 1
010
111
010
2 2

4 2
1110
1110
1001
1101
2 2
4 3

<b>Output:</b>
NO
YES
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/MichaelD">MichaelD</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/keshav_57">keshav_57</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-04-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 4 sec</td>
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