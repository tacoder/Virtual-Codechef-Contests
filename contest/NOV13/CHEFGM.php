<?php require("../../includes/header.php"); ?><h1>Chef Game</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/mandarin/CHEFGM.pdf"> Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/russian/CHEFGM.PDF"> Russian</a>.</h3>
<p>Chef Ciel is playing a game with one of her colleagues.</p>
<p> In this game, there are <em>k</em> piles of numbers. There are <em>ni</em> numbers in <em>i</em>th pile. In each move, player has to select a pile and finally a number from that pile. After that, all the numbers which are greater than or equal to chosen number will be removed from that pile. Players take turn alternatively. Player who is unable to move loses the game. </p>
<p>Chef Ciel always make first move. But before making her move, she must choose either EVEN or ODD. If she chooses even then each time she selects a number it must be even and her opponent must select odd number in his/her turn. And vice versa for the other case. </p>
<p>Please help Chef Ciel to make her choice. If neither choice can make her win game, print DON'T PLAY otherwise EVEN or ODD depending on which choice she should make to win game. If you think then you will understand BOTH can not be answer.</p>
<p>Assume that both players play intelligently, if they can force win they will. </p>
<p> <strong>Input : </strong><br /> First line of test case contains t, number of test cases.<br /> Then t test cases follow. First line of each test case contains k, number of piles. <br /> Then description of k piles follow. <em>i</em>th pile description contains number <em>ni</em>, then <em>ni</em> numbers follow in the same line.</p>
<p><strong>Output :</strong> <br /> Print "EVEN", "ODD" or "DON'T PLAY" accordingly.</p>
<p><strong>Constraints : <br /></strong> t &lt;= 1000, k &lt;=100, ni &lt;= 45. Numbers in pile will be non-negative and less than 2^31.</p>

<p><strong>Sample Input :</strong></p>
<div>2</div>
<div>2 </div>
<div>2 3 4</div>
<div>2 4 5</div>
<div>1</div>
<div>3 1 2 3</div>

<p><strong>Sample Output :</strong></p>
<p>DON'T PLAY<br />ODD</p>

<p><b>Explanation:</b> </p>
<p>In the first test case, if you have chosen ODD to play with, it means you will select only ODD numbers and your opponent may choose only EVEN numbers. So you have two options. Either select 3 from first pile or 5 from second pile. If 3 is selected, 3 and 4 are removed from first pile and in next move your opponent's only move will be 4 from second pile removing every numbers thus you lose. If you had selected 5, then your opponent's optimal move would be selecting 4 from first pile. Next you will select 3 and your opponent 4 leaving nothing for you. So if you choose ODD you will lose. Similarly if you choose EVEN you will lose as well. So the answer is DON'T Play.</p>
<p>In the second case, if you choose ODD just select 1 and you will win. If you choose EVEN you have only one move that is 2, and in response your opponent will choose 1 and leave you nothing. Thus answer is ODD.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/div_adm">div_adm</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-08-2012</td>
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