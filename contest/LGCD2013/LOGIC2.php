<?php require("../../includes/header.php"); ?><h1>Chips</h1><div class="content">
<p>Zach and Cody are playing a game. There are initially <b>N</b> chips on a table. Zach starts the game making the first move. In each turn one has to choose a move from a set of moves. The set of moves consists of all the moves of removing <b>p<sup>k</sup></b> chips from the table, where <b>p</b> is any prime and <b>k</b> is any non negative integer. The winner is the one to take the last chip. Can you decide who will win the game, assuming both the players follow a perfect strategy? If Zach wins, what will be the smallest possible number that he can remove in his first move?</p>
<h3>Input</h3>
<p>An integer <b>T</b>, denoting the number of test cases.</p>
<p>Each test case contains one integer <b>N</b>, the number of chips on the table.</p>
<h3>Output</h3>
<p>Print "Zach" if Zach wins or "Cody" if Cody wins. Print the output for each test case on a new line (without quotes).</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 100000</p>
<p>1 &lt;= <b>N</b> &lt;= 100000</p>
<h3>Example</h3>
<p><b>Sample Input</b><br />3<br />1<br />5<br />6<br /><br /><b>Sample Output</b><br />Zach 1<br />Zach 5<br />Cody<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/adurysk">adurysk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2013</td>
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