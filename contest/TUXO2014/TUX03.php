<?php require("../../includes/header.php"); ?><h1>Balanced Team</h1><div class="content">
<h3>Problem description</h3>
<p> The IPL Auctions are finally over and cricket legend Rahul Dravid now wants to find the most balanced team in the league.<br />
Each player is bought at some price X in the auction. Dravid defines the balance of each team as the largest price difference between<br />
any 2 players in that team. The most balanced team is the one with the smallest price difference i.e. smallest value of balance . There are a total of 10 teams, numbered 1 to 10, in the IPL this season and each team has exactly 15 players.
</p>
<p> Your job is to print the index of the most balanced team and it's balance value . If more than 1 team has the least balance, then print the index of the team with highest index value among these teams and it's balance. Give the answer for T such queries.
</p>
<h3><b> Input </b>:</h3>
<p>First line contains T, the total number of queries. Each query consists of 10 lines. Each of the next 10 lines contains 15 space separated integers , not necessarily in sorted order , denoting the price of each player bought by the i'th team (1 ≤ i ≤ 10).
</p>
<h3>Output</h3>
<p>For each query, print 2 space separated integers denoting the index and balance of the most balanced team .</p>
<h3>Constraints</h3>
<p> 1 ≤ T ≤ 100 <br /><br />
    Price of each player is a positive number less or equal to 10^6 (1,000,000).</p>
<h3>Example</h3>
<pre><b>Input:</b>

<p>1 <br />
3 6 9 12 15 18 21 24 27 30 33 36 39 42 45 <br />
2 4 6 8 10 12 14 16 18 20 22 24 26 28 30 <br />
4 8 12 16 20 24 28 32 36 40 44 48 52 56 60 <br />
5 10 15 20 25 30 35 40 45 50 55 60 65 70 75 <br />
6 12 18 24 30 36 42 48 54 60 66 72 78 84 90 <br />
7 14 21 28 35 42 49 56 63 70 77 84 91 98 105 <br />
8 16 24 32 40 48 56 64 72 80 88 96 104 112 120 <br />
9 18 27 36 45 54 63 72 81 90 99 108 117 126 135 <br />
10 20 30 40 50 60 70 80 90 100 110 120 130 140 150 <br />
11 22 33 44 55 66 77 88 99 110 121 132 143 154 165 <br />
 </p>
<b>Output:</b>
</pre><p> 2 28 </p>
<h3>Explanation</h3>
<p>The second team , with index 2, has balance equal to 30 - 2 = 28 which is lowest among all the 10 teams.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tusharmakkar08">tusharmakkar08</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-04-2014</td>
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