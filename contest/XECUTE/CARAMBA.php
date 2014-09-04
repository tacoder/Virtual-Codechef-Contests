<?php require("../../includes/header.php"); ?><h1>Caramba!</h1><div class="content">

<p>BKK was playing the ever popular game, Coconut Caramba. In this game, there are N cups numbered 0 to N-1 are kept upside down and one marble. Initially, the Player keeps the marble under the Xth cup. Now, S swaps are done between the cups by the Game organizer without the Player’s knowledge. In a swap, two cups are selected and swapped. The selection of two cups i and j have a probability of P[i,j] where P is the probability matrix, which is given as input. After S swaps, the Player selects the cup 'Y' and opens it. If that cup contains the marble, then the player wins. Else, he loses. As BKK is a Mathematics teacher, he wants to accurately determine the probability of winning.</p>
<h3>Input</h3>

<p>The first line of the input consists of t, the number of test cases. The first line of each test case contains 3 integers, N, X, Y and S denoting the number of cups, the cup under which the marble was initially placed, the cup which is checked for the marble and the number of swaps. The next N lines contain the probability matrix, with each line containing exactly N integers. Each element (i,j) denotes the probability of swapping the cup i and j my the game organizer. The matrix contains integers, which need to be transformed into probability by dividing each element with the sum of that row. Note that X and Y are zero based.</p>
<h3>Output</h3>

<p>The output contains a single number for each test case denoting the probability. The probability must be rounded to 4 decimal places.</p>
<pre>
CONSTRAINTS:
T &lt;=100, N &lt;=50, 0 &lt; X,Y &lt; N, S &lt;= 50
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
1
3 0 1 2
0 1 9
1 0 1
3 7 0
<b>Output:</b>
0.6300
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/styrofox">styrofox</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-03-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td> - 1 sec</td>
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