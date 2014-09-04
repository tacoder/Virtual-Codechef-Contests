<?php require("../../includes/header.php"); ?><h1>Problem 1</h1><div class="content">

<p> </p>
<p>You're playing a video game, in which you will get an achievement if you complete all of the levels consecutively without dying. You can play the levels in any order, and each time you play a level you'll either complete it or die. Each level has some probability that you'll complete it, and takes some amount of time. In what order should you play the levels so that the expected time it takes you to get the achievement is minimized? Assume that it takes equally long to beat a level or to die in it, and that you will start again from the first level in your ordering as soon as you die.</p>
<p>
Note: If you fail to complete a level, you do not personally die—only your character in the game dies. If that were not the case, only a few people would try to earn this achievement.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input gives the number of test cases, T. T test cases follow, each of which consists of three lines. The first line of each test case contains a single integer N, the number of levels. The second line contains N space-separated integers Li. Li is the number of seconds level i lasts, which is independent of whether you complete the level or die. The third line contains N space-separated integers Pi. Pi is the percent chance that you will die in any given attempt to complete level i.
</p>
<h3>Output</h3>
<p>For each test case, output one line containing "Case #x: ", where x is the case number (starting from 1), followed by N space-separated integers. The jth integer in the list should be the index of the jth level you should attempt to beat in order to minimize the amount of time you expect to spend earning the achievement.</p>
<p>
Indices go from 0 to N-1. If there are multiple orderings that would give the same expected time, output the lexicographically least ordering. Out of two orderings, the lexicographically smaller one is the one with the smaller index at the first location where they differ; out of many orderings, the lexicographically least one is the one that is lexicographically smaller than every other ordering.
</p>
<h3>Limits</h3>
<ul>
<li>1 = T = 100.</li>
<li>0 = Pi &lt; 100.</li>
</ul>
<h3>Small dataset</h3>
<ul>
<li>1 = N = 20.</li>
<li>Li = 1.</li>
</ul>
<h3>Sample</h3>
<ul>
<li>Input </li>
<li>3</li>
<li>4</li>
<li>1 1 1 1</li>
<li>50 0 20 20</li>
<li>3</li>
<li>100 10 1</li>
<li>0 50 0</li>
<li>3</li>
<li>100 80 50</li>
<li>40 20 80</li>
<p></p>
<li>Output </li>
<li>Case #1: 0 2 3 1</li>
<li>Case #2: 1 0 2</li>
<li>Case #3: 2 0 1</li>
</ul>
<h3>Note that the second and third samples do not satisfy the constraints for the small input.</h3>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rggroups">rggroups</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2013</td>
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