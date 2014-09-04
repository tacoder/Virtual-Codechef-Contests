<?php require("../../includes/header.php"); ?><h1>Dish Owner</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/DISHOWN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/DISHOWN.pdf">Russian</a>.</h3>
<p>This summer, there is a worldwide competition being held in Chef Town and some of the best chefs of the world are participating. The rules of this competition are quite simple.<br />
</p><p />
</p><p> Each participant needs to bring his or her best dish. The judges will initially assign a score to each of the dishes. Now, several rounds will follow. In each round, any two chefs will be called up on the stage. Each of the chefs can then choose any one dish to battle against the other chef and the one having the dish with the higher score will win this round. The winner of the round will also obtain all the dishes of the loser who will then be eliminated. In case both the dishes have equal scores, this round will be considered as a tie and nothing else will happen. Note that initially each chef will have only one dish and all the chefs play the rounds optimally.<br />
</p><p />
</p><p> Your task is to simulate and answer some queries related to this. You will be given <b>N</b> dishes numbered from <b>1</b> to <b>N</b> with the <b>i<sup>th</sup></b> dish belonging to the <b>i<sup>th</sup></b> chef initially. You will also be given an array <b>S</b> where <b>S[i]</b> denotes the score given by the judges to the <b>i<sup>th</sup></b> dish before starting the rounds. You will have to answer <b>Q</b> queries, each of which can be of the following types : <br /> <br /></p>
<p>1. <b> 0 x y</b> : This denotes that the chef containing dish number <b>x</b>  competes with the chef containing dish number <b> y </b> currently in this round. If a single chef is the owner of both the dishes, print <b>"Invalid query!"</b> (without quotes), otherwise execute and store the result of this round as described by the rules above. <br /> <br /></p>
<p>2. <b> 1 x </b> : You need to output the index of the chef containing dish <b>x</b>  at this point.</p>
<h3>Input</h3>
<p>First line of input contains an integer <b>T</b> denoting the number of test cases. For each test case, the first line contains an integer <b>N</b> denoting the number of chefs in the contest. The next line contains <b>N</b> space separated integers where the <b>i<sup>th</sup></b> integer represents <b>S[i]</b>. The next line contains an integer <b>Q</b> denoting the number of queries. <b> Q </b> lines follow where each line can be of the format <b> 0 x y </b> or <b> 1 x </b> as described in the problem statement. </p>
<h3>Output</h3>
<p> For each test, print in each line the answer for the queries as described in the problem statement .</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>25</b> </li>
<li> <b>1</b> ≤ <b>N</b> ≤ <b>10000(10<sup>4</sup>)</b> </li>
<li> <b>0</b> ≤ <b>S[i]</b> ≤ <b>1000000(10<sup>6</sup>)</b>
</li><li> <b>1</b> ≤ <b>Q</b> ≤ <b>10000(10<sup>4</sup>)</b>
</li><li> <b>1</b> ≤ <b>x, y</b> ≤ <b> N</b>
</li></ul>
<p><br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
1
2
1 2
2
0 1 2
1 1
<b>Output:</b>
2
</pre><h3>Explanation</h3>
<p>
There are two chefs with scores of dishes <b> 1 </b> and <b> 2 </b> respectively. After the first query, chef <b> 2 </b> acquires dish <b> 1 </b> since <b> S[2] &gt; S[1] </b>. Hence, the answer for the second query, i.e owner of the <b>first</b> dish is chef <b>2</b>.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/viv001">viv001</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-04-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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