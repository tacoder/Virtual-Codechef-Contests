<?php require("../../includes/header.php"); ?><h1>Valley of Death</h1><div class="content">
<p>Jack and Angelica are in search of fountain of youth and up ahead is the valley of death. Although they could go around the valley, Blackbeard wants to get the chalices before the Spanish so he forces one of them to go through the valley. To decide who would travel through the valley, Jack and Angelica play a game of stones. The game starts with <b>P</b> piles of stones. The <b>i</b><sup>th</sup> pile contains <b>N<sub>i</sub></b> number of stones. The players play the game taking chances alternatively where Jack starts first. In each move, the player whose turn it is has to remove at least one coin from any single pile and ofcourse not more than the number of coins present in that particular pile.</p>
<p>The number of coins which can be removed in one move is defined as a special series for each pile by the Blackbeard. Only the numbers that appear anywhere in the special series of that pile can be removed in one move from that pile. The special series is:</p>
<p>F[i] = F[i-1] + F[i-2], for i &gt;= 2<br /><br />
F[0] = 1 and F[1] = <b>M<sub>i</sub></b> , where <b>M<sub>i</sub></b> is given for each pile</p>
<p>Stating simply, only those number of coins can be removed from a pile if it satisfies <b>F[i]</b> for any <b>i</b> &gt;= <b>0</b> for the special series of that pile.<br />
The player who cannot make a move loses and is forced to jump into the valley of death. You need to tell who would survive if they both always play optimally.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
The first line of each test case contains one integer, <b>P</b>. The next <b>P</b> lines contain two integers, <b>N<sub>i</sub></b> and <b>M<sub>i</sub></b> denoting the number of stones and F[1] of the special series of that pile respectively.</p>
<h3>Output</h3>
<p>For each test case, print "<b>Jack</b>" if Jack wins else print "<b>Angelica</b>".</p>
<h3>Constraints:</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>10</b></li>
<li><b>1</b> &lt;= <b>P</b> &lt;= <b>100</b></li>
<li><b>1</b> &lt;= <b>N<sub>i</sub></b> &lt;= <b>10000</b></li>
<li><b>1</b> &lt;= <b>M<sub>i</sub></b> &lt;= <b>10000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input</b>
2
2
4 3
5 2
2
5 3
5 3
</pre><pre><b>Output</b>
Jack
Angelica
</pre><p><br /><br />
<b>Explanation</b>
</p><p>
In the first test case, the players can remove either 1,3,4.. and so on from pile one and either 1,2,3.. from pile two. If now both play optimally, Jack wins.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divanshu">divanshu</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>