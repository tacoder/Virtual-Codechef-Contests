<?php require("../../includes/header.php"); ?><h1>Selecting Teams</h1><div class="content">
<p>There are n players out of which atmost k players are chosen to form the team squad. Out of those players, some subset of them are selected to form a team, and a player of the selected team is appointed as the captain of the team. Given n and k, determine how many possible configurations exist. Two configurations differ if either the players in the team squad differ, or if the number of players in the team differ, or the players in the team differ, or if the captain differs.</p>
<p>For example,the possible configurations for n = 2 and k = 2 are :</p>
<p>1) Team squad : {1}, Team : {1}, Captain : 1</p>
<p>2) Team squad : {2}, Team : {2}, Captain : 2</p>
<p>3) Team squad : {1,2}, Team : {1}, Captain : 1</p>
<p>4) Team squad : {1,2}, Team : {2}, Captain : 2</p>
<p>5) Team squad : {1,2}, Team : {1,2}, Captain : 1</p>
<p>6) Team squad : {1,2}, Team : {1,2}, Captain : 2</p>
<h3>Input :</h3>
<p>The first line contains T the number of test cases. Each of the next T lines contain 2 integers : n,k</p>
<h3>Output :</h3>
<p>Output T lines, one for each test case, containing the required total number of configurations. Since the answers can get very big, output the answer modulo 8388608.</p>
<h3>Sample Input :</h3>
<pre>3
2 2
7 1
5 3
</pre><h3>Sample Output :</h3>
<pre>6
7
165
</pre><h3>Constraints :</h3>
<p>1 &lt;= T &lt;= 10000</p>
<p>1 &lt;= k &lt;= n &lt;= 100000</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/fctrl">fctrl</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-12-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>