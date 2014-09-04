<?php require("../../includes/header.php"); ?><h1>Chef of The Ancient</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/COOK43/mandarin/COTA.pdf" target="_blank">Mandarin Chinese</a> and <a href="/download/translated/COOK43/russian/COTA.pdf" target="_blank">Russian</a> as well.</h3>
<p>Chef likes to play computer games very much. Recently he played a new game, Dota 2.<br /> Chef is thinking to start a new game called Cota (Chef of the ancient).<br /> There will be two teams in Cota, Radiant and Dire.</p>
<p>There are <b>2*N</b> players in Cota and the players are numbered by integers from <b>0</b> to <b>2*N – 1</b>.<br /> Each team will have <b>N</b> players. One team will have all the players with even numbers <b>(0, 2, …, 2*N - 2)</b><br /> and other team will have all the odd numbered players <b>(1, 3, …, 2*N – 1)</b>.</p>
<p>Some of the players are friends and the power of their friendship can be expressed by an integer number.<br /> If player <b>u</b> and player <b>v</b> are friends, their power of friendship is <b>P<sub>u,v</sub></b> (or <b>P<sub>v,u</sub></b>).</p>
<p>Chef wants to select some players(at least one) as elite players.<br /> An elite player can be a member of Radiant or Dire.<br /> But each Radiant member (maybe non-elite) should have odd number of elite friends and each Dire member (maybe non-elite) should have even number of elite friends (possibly zero).<br /> So Chef has to break some friendships( possible zero) to make that happen.<br /> Chef can break up friendships between any two players but cannot build any new friendship.<br /> As Chef can break up any pair of friendships and he is quite rude, so he breaks up all friendships that are between a elite and a non-elite player ie. there cannot be a friendship between a elite and a non-elite player at all.<br /><br /> He will break the other friendships in such a way that the total power of remaining friendships between elite players<br /> is minimized and also the restriction above is maintained.</p>
<p>Chef has not yet decided which team will be Radiant and which one will be Dire. It is your task to assign teams such that the total power of remaining friendships between elite players is minimized.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>First line contains two space separated integers <b>N</b> and <b>M</b>. Each of the next <b>M</b> lines contain three space separated integers <b>u</b>, <b>v</b> and <b>P<sub>u,v</sub></b>, means <b>u</b> and <b>v</b> are friends and the power of their friendship is <b>P<sub>u,v</sub></b>. No friendship will be mentioned twice in a test case</p>
<h3>Output</h3>
<p>For each test case print the minimum total power of friendship between elite players after assigning the teams<br /> and breaking up the friendships.</p>
<p>There will always be a valid answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>18</b></li>
<li><b>N</b> is divisible by <b>2</b></li>
<li><b>2*N-1</b> ≤ <b>M</b> ≤ <b>2*N(2*N-1)/2</b></li>
<li><b>0</b> ≤ <b>u, v</b> ≤ <b>2*N-1</b> and <b>u</b> ≠ <b>v</b></li>
<li><b>1</b> ≤ <b>P<sub>u,v</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li>For each player <b>u</b> and <b>v (u≠v)</b> , there is a sequence <b>x<sub>0</sub>, x<sub>1</sub>, ... x<sub>k</sub></b>, where <b>x<sub>0</sub> = u</b> and <b>x<sub>k</sub> = v</b> and player <b>x<sub>i</sub></b> and <b>x<sub>i+1</sub></b> (<b>0≤i&lt;k</b>) are friends of each other.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 5
1 2 6
0 3 1
2 0 7
0 1 4
3 1 8
4 11
1 6 6
4 3 1
6 4 7
4 5 4
0 3 2
5 7 7
0 2 8
2 6 6
3 7 8
6 0 9
6 5 5

<b>Output:</b>
5
9
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> If the odd numbered players are assigned as Radiant and even numbered players as Dire, and Chef assigns players {0, 1, 3} as elite players and keeps only the friendships between (0, 1) and (0, 3) and breaks up any other pair of friendships. So the total power of friendship is 1 + 4 = 5. Elite player 1 and 3 have friendship with only elite player 0. So each Radiant player has odd number of elite friends. Similarly player 0 has friendship with 1 and 3, and players 2 do not have any friend(0 elite friends). So each Dire player has even number of elite friends.</p>
<p><b>Example case 2.</b></p>
<p><img src="/download/sample2.png" /></p>
<p>Say the odd numbered players are assigned as Radiant and even numbered players as Dire.<br /> And Chef assigns players {1, 3, 5, 6,  7} as elite players and keeps only the friendships between (1, 6), (3, 7) and (5, 6) and breaks up any other pair of friendships.<br /> So the total power of friendship is 6 + 5 + 8 = 19.</p>
<p>Elite player 1 and 5 have friendship with only elite player 6 and player 3 and 7 have mutual friendship.<br /> So each Radiant player has odd number of elite friends.</p>
<p>Similarly player 6 has friendship with 1 and 5, and players 0, 2 and 4 do not have any friend(0 elite friends).<br /> So each Dire player has even number of elite friends.</p>
<p><img src="/download/Even.png" /></p>
<p>Now say the even numbered players are assigned as Radiant and odd numbered players as Dire.<br /> And Chef assigns players {0, 2, 3, 4, 6} as elite players and keeps only the friendships between (0, 3), (3, 4) and (2, 6) and breaks up any other pair of friendships.<br /> So the total power of friendship is 2 + 1 + 6 = 9.<br /> Elite player 0 and 4 have friendship with only elite player 3 and player 2 and 6 have mutual friendship.<br /> So each Radiant player has odd number of elite friends.</p>
<p>Similarly player 3 has friendship with 0 and 4, and player 1, 5 and 7 do not have any friend(0 elite friends).<br /> So each Dire player has even number of elite friends.</p>
<p><img src="/download/Odd.png" /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shiplu">shiplu</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece‎">rustinpiece‎</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-01-2014</td>
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