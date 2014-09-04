<?php require("../../includes/header.php"); ?><h1>Childhood Game</h1><div class="content">
<p> </p>
<p>Childhood is indeed the most amazing part of one’s life. One of the various memorable things that we did were the games that we played. Everyone has played Tic-Tac-Toe in their childhood (And most of continue to do so in all the boring lectures!). One other game that all of us must have played was the game of completing a pattern by joining the various dots without lifting the pen or overwriting a previously drawn line between two dots. This was indeed difficult than Tic-Tac-Toe but guess what, we engineers never liked to do the easy things. So once again, this game is here to try out your wit but as we all have evolved from our childhood, this game has evolved too!! And, fortunately somewhere while we were growing up, computers came in our life and they now stand besides us (or in front of us!) to help us tackle this evolved game.<br />
You would be provided with a set of points numbered 1 to n, which make up a pattern. Also, the pair of points between whom a line exist would be given. Now you have to develop a program which tells if it would be possible to complete this pattern, without lifting the pen and drawing a line between the given pair of points only once.</p>
<p> </p>
<h3>Input</h3>
<p><ul>
<li>The first line of the input contains an integer <b>N</b> denoting the number of test cases.</li>
<li>The next line would contain the number of points in the pattern followed by the no of pairs between which lines exist(H).<br />
The next H lines will contain the pairs of point between which the lines exist in separate lines.The pair of points would be separated by single white space.
</li>
</ul>
</p><p> </p>
<h3>Output</h3>
<p>The output of the program must show if it is possible to make the pattern in the given constraints or not for each test case (N). If possible the program must show ‘Possible’ or in other case show ‘Not Possible’.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
7 8
1 2
2 3
3 4
4 2
2 5
5 6
6 2
2 7
5 8
1 2
2 3
3 4
4 5
5 1
1 4
2 5
2 4
4 6
1 2
2 3
3 4
4 1
1 3
2 4

<b>Output:</b>
Possible
Possible
Not Possible
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gothicprakhar">gothicprakhar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-04-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>