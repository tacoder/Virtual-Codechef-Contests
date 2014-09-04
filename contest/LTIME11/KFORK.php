<?php require("../../includes/header.php"); ?><h1>Knight Fork</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/mandarin/KFORK.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/russian/KFORK1.pdf">Russian</a>.</h3>
<p>Forking is an important tactics in the game of chess. A piece is said to perform a fork if <br /><br />
1) It is on a safe square, i.e., the next move by the opponent does not kill the piece<br /><br />
2) It targets atleast 2 of the opponents pieces in its next move. So even if the opponent moves one of his pieces to safety, one of his remaining pieces can be killed.<br /><br />
<br /><br />
You are given an <b>NxN</b> board, containing <b>M</b> White Queens. Remember, a Queen can move vertically, horizontally and diagonally; and kills any opponents piece directly in these directions. A Knight has 8 possible moves from position (i,j), viz (i+1,j+2), (i+1,j-2), (i-1,j+2), (i-1,j-2), (i+2,j+1), (i+2,j-1), (i-2,j+1), (i-2,j-1) (while remaining inside the NxN board). You have to find out the number of unoccupied positions on the NxN board, where a Black Knight can be placed such that it forks atleast 2 Queens.<br /><br />
<br /><br />
<b>INPUT:</b><br /><br />
First line contains <b>T</b>, number of testcases<br /><br />
Each testcase starts with a line containing two integers <b>N</b> and <b>M</b><br /><br />
Then M lines follow, ith line containing two space separated integers X[i] and Y[i], the coordinates of the ith Queen<br /><br />
<br /><br />
<b>OUTPUT:</b><br /><br />
For each testcase, output a single line containing the answer to the question<br /><br />
<br /><br />
<b>CONSTRAINTS:</b><br /><br />
1&lt;=T&lt;=10<br /><br />
1&lt;=X[i],Y[i]&lt;=N <br /><br />
0&lt;=M&lt;=N*N <br /><br />
40 points : 1&lt;=N&lt;=8<br /><br />
60 points : 1&lt;=N&lt;=1000<br /><br />
No two queens can be in the same square.<br /><br />
<br /><br />
<b>SAMPLE INPUT:</b><br /><br />
1<br /><br />
5 2<br /><br />
1 1<br /><br />
3 1<br /><br />
<br /><br />
<b>SAMPLE OUTPUT:</b><br /><br />
1<br /><br />
<br /><br />
<b>EXPLANATION:</b><br /><br />
Only forking position is (2,3)</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/piyushkumar">piyushkumar</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2014</td>
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