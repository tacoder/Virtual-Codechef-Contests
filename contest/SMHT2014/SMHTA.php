<?php require("../../includes/header.php"); ?><h1>Game of Mourinho</h1><div class="content">
<h3>Problem Statement</h3>
<p> Jose Mourinho wants his players to play football differently . So he decides to make his players score goals in a pattern. He has <b>N</b> players in his team and he wants <b>P</b> goals to be scored with following conditions.First every player has to score atleast one goal and before a player scores his second goal atleast <b>M</b> different players should have scored in between those two goals. Help Mourinho to calculate , in how many different ways his players can score goals in this fashion. </p>
<h3>Input</h3>
<p>The first Line contains T , the no of test cases followed by T lines.<br />
  Each line has 3 integers N,M,P </p>
<h3>Output</h3>
<p> Output has T lines ,with each line containing no of different ways mourinho can make his players score goals .Since answer A can be too large, print A modulo 1000000007.</p>
<h3>Example</h3>
<h3>Input</h3>
<pre>
3
3 3 3			
1 0 4		
1 1 4
</pre><h3>Output</h3>
<pre>
6
1
0
</pre><h3>Constraints</h3>
<pre>
1&lt;= N &lt;=100
0&lt;= M &lt;=N
N&lt;= P &lt;=100
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arun08">arun08</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-01-2014</td>
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