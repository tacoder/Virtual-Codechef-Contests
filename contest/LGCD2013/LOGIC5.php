<?php require("../../includes/header.php"); ?><h1>Piles</h1><div class="content">
<p><b>A</b> and <b>B</b> are playing a game. They start with two piles of <b>p</b> and <b>q</b> chips, respectively. <b>A</b> and <b>B</b> take a move alternately(<b>A</b> starts the game). A move consists of removing any pile and splitting the other pile into two piles (of any sizes). The loser is the one who cannot make a move any more. Can you decide who will win the game, assuming both the players play optimally?</p>
<h3>Input</h3>
<p>An integer <b>T</b>, denoting the number of test cases. Each test case contains two integers <b>p</b> and <b>q</b>, the size of the two piles.</p>
<h3>Output</h3>
<p>For every test case print "A" if <b>A</b> wins or "B" if <b>B</b> wins in a new line(without quotes). </p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 100000</p>
<p>1 &lt;= <b>p</b> &lt;= 10<sup>18</sup></p>
<p>1 &lt;= <b>q</b> &lt;= 10<sup>18</sup></p>
<h3>Example</h3>
<p><b>Sample Input</b><br />3<br />1 3<br />5 6<br />6 7<br /><br /><b>Sample Output</b><br />B<br />A<br />A<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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