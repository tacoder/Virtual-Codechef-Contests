<?php require("../../includes/header.php"); ?><h1>Binary Tournament</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/BINTOUR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/BINTOUR.pdf">Russian</a>.</h3>
<p>Knights' tournaments were quite popular in the Middle Ages. A lot of boys were dreaming of becoming a knight, while a lot of girls were dreaming of marrying a knight on a white horse.</p>
<p>
In this problem we consider one of these tournaments.
</p>
<p>
Let's us call a tournament <i>binary</i>, if it runs according to the scheme described below:
</p>
<p><ul type="square">
<li>Exactly <b>N</b> knights take part in the tournament, <b>N</b>=2<b><sup>K</sup></b> for some integer <b>K</b> &gt; 0.
</li><li>Each knight has a unique skill called <i>strength</i>, described as an integer from the interval [1, <b>N</b>].
</li><li>Initially, all the knights are standing in a line, waiting for a battle. Since all their strengths are unique, each initial configuration can be described as a permutation of numbers from 1 to <b>N</b>.
</li><li>There are exactly <b>K</b> rounds in the tournament, 2<b><sup>K - i + 1</sup></b> knights take part in the <b>i</b>'th round. The <b>K</b>'th round is called <i>the final</i>.
</li><li>The <b>i</b>'th round runs in the following way: for each positive integer <b>j</b> ≤ 2<b><sup>K - i</sup></b> happens a battle between a knight on the <b>2∙j</b>'th position and a knight on the <b>2∙j+1</b>'th position. The strongest of two continues his tournament, taking the <b>j</b>'th position on the next round, while the weakest of two is forced to leave.
</li><li>The only knight, who has won <b>K</b> rounds, is the winner. The only knight, who has won <b>K - 1</b> rounds, but lost the final, is the runner-up.
	</li></ul>
</p>
<p>
As you can see from the scheme, the winner is always the same, an initial configuration doesn't change anything. So, your task is to determine chances of each knight to appear in the final.
</p>
<p>
Formally, for each knight you need to count the number of initial configurations, which will lead him to the final. Since the number can be extremly huge, you are asked to do all the calculations under modulo 10<sup>9</sup> + 9.
</p>
<h3>Input</h3>

<p>The first line contains the only integer <b>K</b>, denoting the number of rounds of the tournament.</p>
<p> </p>
<h3>Output</h3>
<p>Output should consist of <b>2<sup>K</sup></b> lines. The <b>i</b>'th line should contain the number of initial configurations, which lead the participant with strength equals to <b>i</b> to the final.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ <b>K</b> &lt; 20</p>
<p> </p>
<h3>Examples</h3>
<pre><b>Input:</b>
1

<b>Output:</b>
2
2
</pre>
<pre><b>Input:</b>
2

<b>Output:</b>
0
8
16
24
</pre><p> </p>
<h3>Explanation</h3>
<p>
In the first example we have <b>N</b>=2 knights. Let's consider each initial configuration that could appear and simulate the tournament.
</p>
<p>
(1, 2) -&gt; (2)
</p>
<p>
(2, 1) -&gt; (2)
</p>
<p>
In the second example we have <b>N</b>=4 knights. Let's consider some initial configurations that could appear and simulate the tournament.
</p>
<p>
(1, 2, 3, 4) -&gt; (2, 4) -&gt; (4)
</p>
<p>
(3, 2, 4, 1) -&gt; (3, 4) -&gt; (4)
</p>
<p>
(4, 1, 3, 2) -&gt; (4, 3) -&gt; (4)
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-01-2014</td>
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