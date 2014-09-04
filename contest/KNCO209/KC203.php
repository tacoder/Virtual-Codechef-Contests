<?php require("../../includes/header.php"); ?><h1>Thou Last , Thou Loseth</h1><div class="content">

<p>
<h2>Points:10</h2>
</p>
<p>
One of the favourite games of the Brotherhoood of Brom went by the name of “Thou Last , Thou Loseth”. The game was played on a 5 by 5 board. Initially every array cell had a piece in it. Two players removed pieces alternatively from the board. The player could remove any number of consecutive pieces in a row or column. For example, in the configuration depicted below where one indicates a piece, the player could either remove one piece (A1, A2, or B1), or remove two pieces (A1 and A2, or A1and B1) simultaneously. The game would end when one player was forced to take the last piece, making the other player win the game. </p>
<pre>
  	1	2	3	4	5
A	1	1	0	0	0
B	1	0	0	0	0
C	0	0	0	0	0
D	0	0	0	0	0
E	0	0	0	0	0
</pre><p>
You think this game would make a wonderful summer project at college. But wait, why not go one step ahead in the spirit of your greatest grandfather’s genius.  You will create a program that evaluates board configurations from this game. The program must output ``winning'' when there exists a winning move that no matter how the opponent responds, it will force the opponent to take the<br />
last piece. Otherwise, the program must output ``losing''. <br />
Note that during the game tree evaluation, if the current configuration has a winning move, then it is not necessary to search any further because the configuration is guaranteed to be winning. This can greatly reduce the game tree search time.<br />
</p>
<h3>
Input:</h3>

<p>
The first line consists of total no of test cases T(&lt;50).The next 5T lines will consist of the configuration of each test case.
</p>
<h3>
<p>Output:<br />
</p></h3>
<p>Output is a string "winning" OR "losing"
</p>
<p><h3>
Example:</h3>
</p>
<p><b>Input:</b></p>
<pre>
3
1 1 0 0 0
1 0 0 0 0
0 0 0 0 0
0 0 0 0 0
0 0 0 0 0
1 1 0 0 0
0 0 0 0 0
1 1 0 0 0
0 0 0 0 0
0 0 0 0 0
1 1 1 0 0
1 0 0 0 0
0 0 0 0 0
0 0 0 0 0
0 0 0 0 0
</pre><p><b><br />
Output:</b></p>
<pre>
winning
losing
winning
</pre><h3></h3>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ankitbabbar">ankitbabbar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>