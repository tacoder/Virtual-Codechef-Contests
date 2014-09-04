<?php require("../../includes/header.php"); ?><h1>Number Game Revisited</h1><div class="content">

<p>Alice and Bob play the following game.They choose a number N to play with.The runs are as follows :</p>
<p>1.Bob plays first and the two players alternate.</p>
<p>2.In his/her turn ,a player can subtract from N any prime     number(including 1) less than N.The number thus obtained is the new N.</p>
<p>3.The person who cannot make a move in his/her turn loses the game.</p>
<p>Assuming both play optimally,who wins the game ?</p>
<h3>Input format:</h3>

<p>The first line contains the number of test cases T.Each of the next lines contains an integer N.</p>
<h3>Output format:</h3>

<p>Output T lines one for each test case,containing "ALICE" if Alice wins the game ,or "BOB" if Bob wins the game.</p>
<h3>Example</h3>
<pre>
<b>Sample Input:</b>
2
1
2
<br />
<b>Sample Output:</b>
ALICE
BOB
<br />
<b>Constraints:</b>
1 &lt;= T &lt;= 1000000
1 &lt;= N &lt;= 1000000000
</pre><p>
Note : For the first test case, Bob cannot make any move and hence Alice wins the game. For the second test case, Bob subtracts 1 from N. Now, Alice cannot make a move and loses the game.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/nssprogrammer">nssprogrammer</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-11-2010</td>
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