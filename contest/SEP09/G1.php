<?php require("../../includes/header.php"); ?><h1>A Bowling Game</h1><div class="content">

<p>Mary and Johnny are playing a game with bowling pins. There is a row of N bowling pins. Mary and Johnny alternatively take their turn to bowl. They are such skillful bowling players that at each player's turn, any of them can take out any row of adjacent bowling pins, provided that the number of pins taken out is no more than K. It is important to notice that all the pins taken out must be adjacent. It is impossible to knock down pins separated by a greater distance. Whoever knocks out the last bowling pin wins the game.</p>
<p>You have just come down to watch Mary and Johnny playing the game. Some pins are already removed and now it is Mary's turn. With a good knowledge of mathematical games, you know that it is possible to compute in advance whether Mary or Johnny will win the game, provided that the winner always plays the perfect strategy. So why not impress your two friends by telling them who will win? If Mary could win the game, show her a winning move. Since Mary always wants to win the game as fast as possible, if there are more than one possible winning moves, show her the move that has the most number of pins taken out. If there are still several solutions, show her the move in which the pins taken out are as near to the left as possible.</p>
<p><img src="http://www.codechef.com/download/bowling.jpg" alt="" width="400" /></p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 15). Then t test cases follow. Each test case has the following form:</p>
<ul>
<li>The first line contains two numbers N and K (1 ≤ N ≤ 2000, 1 ≤ K ≤ 20)</li>
<li>The second lines contains a string of N characters 0 or 1 (without spaces) representing the row of N bowling pins. A character 0 means the bowling pin at the corresponding position is already taken out whereas a character 1 means the bowling pin is still in its position.</li>
</ul>
<p>Each test case is separated by a blank line.</p>
<h3>Output</h3>
<p>For each of the test case, print either the string "Mary wins" or "Johnny wins" depending on who will win the game. If Mary could win the game, in the next line print N characters 0 or 1 representing the row of N bowling pins after Mary's move. Use the same format as that of the input data.</p>
<p>Remember to print a blank line after the output for each test case.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
2

3 2
111

8 3
10110111

8 4
11111111

<strong>Output:</strong>
Mary wins
101

Johnny wins

Mary wins
11000011
</pre><h3>Output details</h3>
<p>Case 1: Mary knocks down the middle pin. Regardless of which pin Johnny takes out in the next move, Mary always takes out the remaining pin and wins the game.</p>
<p>Case 2: Mary will lose the game regardless of which move she plays. For example if she takes out the rightmost pin, it is easy to verify that Johnny will always win if he then takes out the leftmost pin.</p>
<p>Case 3: There is more than one move that allows Mary to win the game. The four middle pins make the most number of pins that Mary can take out.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-08-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>