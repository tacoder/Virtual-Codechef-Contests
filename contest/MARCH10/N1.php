<?php require("../../includes/header.php"); ?><h1>Treasure Hunting</h1><div class="content">

<p>Treasure Hunting is a great computer game that has attracted generations of Bytelandian children.</p>
<p>In the game, there is a maze divided into NxN squares. Dave starts in the top-left corner, which is square (1,1), and needs to go to the bottom-right corner, which is square (n,n).</p>
<p>Some of the squares are blocked and some of the squares contain treasures.</p>
<p>Dave needs to capture all the treasures in the maze before going to square (n,n).</p>
<p>In each second, Dave can go to one of its four adjacent squares (if the destination is not blocked). </p>
<p>Find the earliest time that Dave can reach the destination(n,n) after collecting all the treasures in the maze.</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 15). Then t test cases follow. Each test case has the following form.</p>
<p>The first line contains N (1 &lt;= N &lt;= 13), the size of the maze</p>
<p>The N following lines describe the maze. The meaning of the symbols is as follows:</p>
<p>'.' : an empty square</p>
<p>'*' : a treasure</p>
<p>'#' : a blocked square</p>
<p>The number of treasures in the maze does not exceed 13. Squares (1,1) and (n,n) are always empty.</p>
<p>Each test case's input is separated by a blank line.</p>
<h3>Output</h3>
<p>For each test case, print in a single line the earliest time that Dave can reach the destination after collecting all the treasures. If Dave cannot reach the destination, print -1.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4

3
...
.##
*#.

3
..*
...
...

3
..*
*..
...

4
....
.#.*
.#*.
**#.

<b>Output:</b>
-1
4
6
16
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>2 sec</td>
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