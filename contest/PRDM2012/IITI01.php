<?php require("../../includes/header.php"); ?><h1>Martian Football Tournament</h1><div class="content">

<p><i>Freakin' news has recently claimed that they have discovered a civilization on mars and that they have established contact with the martians. Following is a summary of the breakfast hour breakin' news on freakin' news :</i></p>
<p>The king of the martians wants to conduct a martian football tournament.  There are n football teams participating in the tournament numbered form 1,2,...n. The martian sports analysts have rated the teams according to footballing ability and team i has been assigned integer rating a[i]. (a[i]'s might be negative.)</p>
<p>The tournament is conducted as follows : A permutation f of (1,2,...n) is taken as reference. All pairs of teams with team numbers adjacent in the permutation f play exactly one match in the tournament. More formally, (n-1) matches are played in the tournament and the ith match is played between teams f(i) and f(i+1).</p>
<p>The disparity of a match is the absolute difference in the ratings of the two teams playing the match. The disparity of the tournament is the sum of the disparities of all matches in the tournament.</p>
<p>The king of the martians likes to see routs more than close contests and is therefore interested in maximizing the disparity. The king wants to select a permutation f so as to maximize the total disparity of the tournament.</p>
<p>For this purpose he has asked freakin' news to find out the maximum possible disparity of the tournament given the number of teams and their ratings. <i>Your job is to do this task for freakin' news.</i></p>
<p>[In case you were wondering who wins the tournament, the winner is the team which the queen thinks is the most adorable. That however, is irrelevant to your task.]</p>
<h3>Input</h3>
<p>The first line of input contains a single integer n. The next line consists of n space seperated integers a[1], a[2], ... a[n] : the team ratings.</p>
<h3>Output</h3>
<p>On the only line of output, output a single integer : the maximum possible disparity of the tournament.</p>
<h3>Constraints</h3>
<p>2&lt;=n&lt;=1000 <br /><br />
|a[i]|&lt;=100000 <br /></p>
<h3>Sample Input 1:</h3>
<p>2 <br /><br />
6 -4</p>
<h3>Sample Output 1:</h3>
<p>10</p>
<h3>Sample Input 2:</h3>
<p>3 <br /><br />
3 5 7</p>
<h3>Sample Output 2:</h3>
<p>6</p>
<h3>Explanation:</h3>
<p>1 : Absolute disparity of 10 can be obtained by the permutations (1,2) and (2,1). <br /><br />
2 : Absolute disparity of 6 can be obtained by the permutations (1,3,2), (2,1,3), (2,3,1) and (3,1,2). <br /></p>
<p>Consider the permutation (2,1,3) in the second sample test case. The absolute disparity in this test case is | a[2]-a[1] | + | a[1]-a[3] | = |5-3| + |3-7| = 6 <br /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-03-2012</td>
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