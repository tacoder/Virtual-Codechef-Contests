<?php require("../../includes/header.php"); ?><h1>Correctness of Knight Move</h1><div class="content">

<p>
Chef develops his own computer program for playing chess. He is at the very beginning. At first he needs to write the module that will receive moves written by the players and analyze it. The module will receive a string and it should report at first whether this string represents the correct pair of cells on the chess board (we call such strings correct) and then report whether it represents the correct move depending on the situation on the chess board. Chef always has troubles with analyzing <a href="//en.wikipedia.org/wiki/Knight_%28chess%29">knight moves</a>. So at first he needs a test program that can say whether a given string is correct and then whether it represents a correct knight move (irregardless of the situation on the chess board). The cell on the chessboard is represented as a string of two characters: first character is a lowercase Latin letter from <b>a</b> to <b>h</b> and the second character is a digit from <b>1</b> to <b>8</b>. The string represents the correct pair of cells on the chess board if it composed of 5 characters where first two characters represent the cell where chess figure was, 3rd character is the dash <b>"-"</b> and the last two characters represent the destination cell.</p>
<h3>Input</h3>

<p> The first line contains a single integer <b>T &lt;= 50000</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a non-empty string composed the characters with ASCII-codes from 32 to 126. The length of the string is not greater than <b>10</b>.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the word <b>"Error"</b> if the corresponding string does not represent the correct pair of cells on the chess board. Otherwise output <b>"Yes"</b> if this pair of cells represents the correct knight move and <b>"No"</b> otherwise.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
a1-b3
d2-h8
a3 c4
ErrorError

<b>Output:</b>
Yes
No
Error
Error
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-06-2011</td>
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