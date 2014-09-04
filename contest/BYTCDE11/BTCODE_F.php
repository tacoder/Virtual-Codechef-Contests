<?php require("../../includes/header.php"); ?><h1>Life Game</h1><div class="content">

<p>Gobo and Muku were really bored of working and decided to play a game on their respective laptops - the game of life. It is a one player game which consists of an M*N rectangular grid. Each cell of the grid contains exactly one magical potion. The potion at the j<sup>th</sup> column of the i<sup>th</sup> row of the grid increases the player's current health by V<sub>ij</sub>.(This value can be negative, in which case the player's health decreases). At any point of time, the health of a player can be negative too (i.e. He does not die). From a cell(i,j), the player can move to cells (i+1,j-1) or (i+1,j) or (i+1,j+1), as long as these cells exist in the grid. Initially, the player has a health of 0. He can start from any column on the first row (1,j). If he chooses to enter a cell, then he is forced to drink the potion in that cell. The game is completed when any column of the last row is reached. There are 2 modes in which the game can be played: the "min" mode and the "max" mode. In "max" mode, the aim is to finish the game with maximum health H<sub>max</sub> satisfying the condition A &lt;= H<sub>max</sub> &lt;= B. Similarly, in "min" mode the aim is finish the game with minimum health H<sub>min</sub>, satisfying the conditions A &lt;= H<sub>min</sub> &lt;= B. Now, Gobo decides to play the game in "max" mode on his laptop, and Muku decides to play the game in "min" mode on his laptop. Can you help Gobo and Muku finish with maximum and minimum health respectively, satisfying the above conditions?</p>
<h3>Input</h3>
<p>The first line of input contains an integer 't', denoting the number of test cases.</p>
<p><br/>For each test case, the first line contains 2 space separated integers 'M' and 'N'. The next line contains 2 space separated integers 'A' and 'B'.</br/></p>
<p>Each of the next 'M' lines contain 'N' integers. The j<sup>th</sup> integer on the i<sup>th</sup> line denotes the value V<sub>ij</sub>.</p>
<h3>Output</h3>
<p>Output 2 space separated integers H<sub>max</sub> and H<sub>min</sub>, the maximum and minimum health with which Gobo and Muku can finish the game.</p>
<p>H<sub>max</sub> and H<sub>min</sub> should satisfy A &lt;= H<sub>max</sub>, H<sub>min</sub> &lt;= B. If it is not possible to achieve such a health, output "NO" (quotes for clarity).</p>
<p>Gobo and Muku start playing on 2 different instances of the same game independently. i.e the values of A,B and initial values of V<sub>ij</sub> are same for both grids.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 3
5 10
2 5 10
-1 -10 3
-3  6 -2
2 3
8 11
2 5 10
-1 -10 2

<b>Output:</b>
6 10
NO NO

<b>Constraints:</b>
t &lt;= 10
1 &lt;= M,N &lt;= 25
-1000 &lt;= A &lt;= B &lt; 1000
-25 &lt;= V<sub>ij</sub> &lt;= 25

</pre><p><b>Explanation:</b></p>
<p>Test case 1: Take the path (1,2) -> (2,1) -> (3,2), to get a value 5-1+6=10. Take the path (1,2) -> (2,3) -> (3,3), to get a value 5+3-2=6.<br />
<br/>Test case 2: There is no valid path which satisfies the above conditions.</br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suh_ash2008">suh_ash2008</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2011</td>
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