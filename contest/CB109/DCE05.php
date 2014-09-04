<?php require("../../includes/header.php"); ?><h1>Odd</h1><div class="content">

<p>The captain of the ship TITANIC is a little .... off the track. He needs to select the crew for the ship. But everyone seems to be eligible. So to test their intelligence, he plays a game. </p>
<p>The contestants have to stand in a line. They are given the numbers in the order in which they stand, starting from 1. The captain then removes all the contestants that are standing at an odd position. </p>
<p>Initially, standing people have numbers - 1,2,3,4,5...<br />
After first pass, people left are - 2,4,...<br />
After second pass - 4,....<br />
And so on.</p>
<p>You want to board the ship as a crew member. Given the total number of applicants for a position, find the best place to stand in the line so that you are selected.</p>
<h3>Input</h3>
<p>First line contains the number of test cases t (t&lt;=10^5). The next t lines contain integer n, the number of applicants for that case. (n&lt;=10^9)</p>
<h3>Output</h3>
<p>Display t lines, each containg a single integer, the place where you would stand to win a place at TITANIC.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5
12


<b>Output:</b>
4
8
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/uploader0">uploader0</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>