<?php require("../../includes/header.php"); ?><h1>Little Chefs Team</h1><div class="content">
<h3>Problem description</h3>
<p>This year’s IPL is set to be bigger than ever before. Several new international venues and players are going to play in this year’s edition. The new president of the organizing committee has thus introduced a set of new rules: </p>
<p></p>
<ul>
<li>A team can consist of one or more number of players but each player should be willing to play with every other player of his team.</li>
<li>If ‘P’ is willing to play with ‘Q’ and ‘Q’ is willing to play with ‘R’ then ‘P’ will also be willing to play with ‘R’.</li>
<li>If ‘P’ is willing to play with ‘Q’ and ‘Q’ is also willing to play with ‘P’ then ‘P’ and ‘Q’ should play for the same team ( or else they will fix the match :P)</li>
<li>A team can play with any other team if and only if at least one of the team members is willing to play with at least one team member of the other team.</li>
</ul>
<p></p>
<p>Little Chef wants to cheer the team that can play with all the remaining team (He wants to see his team beating every other team). It's your turn to help Little Chef. </p>
<h3>Input</h3>
<p>First line contains 2 space separated integers N and M where N is the total number of players. Each player is labeled uniquely from 1 to N. M lines follow. Each line contains 2 space separated integers X and Y signifying that the player X is willing to play with player Y.</p>
<h3>Output</h3>
<p>Output should consist of 2 lines. First line should contain the number of members in the team that the Chef should choose. The second line should contain a space separated list of all the players in Chef’s team in increasing order. If no such team exist then print “-1” in a single line. (Second line not required).</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10^6</b></li>
<li><b>1</b> ≤ <b>X,Y</b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
8 13
1 2
5 1
2 5
5 6
2 6
2 3
6 7
7 6
3 7
4 3
3 4
7 8
4 8

<b>Output:</b>
3
1 2 5      
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td> - 0.5 sec</td>
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