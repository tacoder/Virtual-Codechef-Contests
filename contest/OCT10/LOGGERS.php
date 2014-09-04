<?php require("../../includes/header.php"); ?><h1>Logging Game</h1><div class="content">

<p>Logging can be a very mundane job, but Alice and Bob have devised a game to help them<br />
pass the time.  They take turns choosing a log, and cutting it into 2 smaller logs.<br />
The sum of the lengths of the 2 logs equals the length of the original log.  The only<br />
restriction is that neither of the resulting logs may be shorter than 1 meter in length (but<br />
exactly 1 meter is fine).  In other words, non-integer lengths are allowed.  Alice makes the first cut, and the first logger who cannot<br />
make a legal cut loses.</p>
<h3>Input</h3>
<p>Input begins with an integer T, the number of test cases (less than 450).  T test cases<br />
follow, each on its own line.  Each test case begins with an integer N, the number of<br />
logs at the start of the game.  N integers follow, giving the initial lengths of the logs.<br />
There are at most 7 logs, and the total length of the logs will not exceed 250 meters.<br />
Note that the initial lengths of the logs are integers, but logs may be cut to non-integer lengths.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the name of the winner of the game,<br />
assuming both loggers choose their cuts optimally.</p>
<h3>Sample Input</h3>
<pre>3
1 2
2 3 4
3 7 8 9
</pre><h3>Sample Output</h3>
<pre>Alice
Alice
Bob
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anshuman_singh">anshuman_singh</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-07-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>