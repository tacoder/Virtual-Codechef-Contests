<?php require("../../includes/header.php"); ?><h1>SudokuX</h1><div class="content">

<p>SudokuX is a variation of the popular game Sudoku. Similar to standard Sudoku, in SudokuX, we have to enter the numbers 1 - 9 once in each row, column and 3 x 3 square within the 9x9 puzzle grid. In addition to standard Sudoku, the numbers must only occur <b>once in each of the two diagonals</b>.</p>
<p><img src='http://www.codechef.com/download/sudokux.gif' /></p>
<p>Johnny is very interested in playing SudokuX. He believes that this game is so challenging that even the best computer programs could not solve it efficiently.</p>
<p>Let's show Johnny the power of computers by writing a program to solve even the hardest SudokuX puzzles within seconds!</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 10). Then t test cases follow.</p>
<p>Each test case consists of 9 lines. Each line contains 9 characters '.' (blank grid), or '1'..'9' representing a SudokuX puzzle.</p>
<p>Each test case is separated by a blank line.</p>
<p>You are guaranteed that each given SudokuX puzzle has a unique solution.</p>
<h3>Output</h3>
<p>For each puzzle, output the solution in the same format as the input. Print a blank line after each test case.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
2
.8....2..
.1....5..
..34..7..
..9.5....
.2...46..
3........
9...2....
.........
......4.7

....41...
...6....5
.....7.9.
....1.3..
.5......1
.2.......
..18...76
.7......2
........3

<b>Output</b>
486715293
712938546
593462718
679251384
128394675
354876129
945627831
867143952
231589467

293541768
748692135
615387294
864715329
357269481
129438657
531824976
476953812
982176543
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
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>