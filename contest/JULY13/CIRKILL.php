<?php require("../../includes/header.php"); ?><h1>Circle of death</h1><div class="content">
<p>In the land of Chefton there is a trio of killers known as <b>Team Rocket (TR)</b>. Chefton is basically a set of tiles, only a single person can stand on a tile at a given instance. Each tile can be described by <b>X</b> and <b>Y</b> co-ordinates describing the position of the tile. For the purpose of this problem, you may assume that a tile does not have any length of breadth. It is only a point.</p>
<p><b>TR</b> kill in a very unique way. Lets say the three members of the trio stand on the tiles <b>T1, T2, T3</b> respectively. If a <b>unique circle</b>, say <b>C</b>, can be formed using <b>T1, T2, T3</b> then all the people standing on the tiles lying within or on the circle <b>C</b> will be killed.</p>
<p>Chefton Intelligence Agency <b>(CIA)</b> send their top agent <b>Ash</b> to Chefton. Let us assume that <b>TR</b> and <b>Ash</b> are standing on random tiles, satisfying the following constraints</p>
<p><b>All four individuals, the three members of TR and Ash are on different tiles.</b></p>
<p>There may be several ways in which the four individuals are placed. You may assume that the three members of <b>TR</b> are indistinguishable, while considering how many ways can everyone be placed. Any one of these ways now, is equiprobable. For clarity, refer to the explanation section.</p>
<p>What is the probability that <b>Ash</b> can be killed by <b>Team Rocket</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains a single integer <b>N</b>, the number of tiles in Chefton. The next <b>N</b> lines consist of <b>2</b> space separated integers each, where the <b>i'th</b> line specifies the <b>X</b> and <b>Y</b> co-ordinates of the <b>i'th</b> tile.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the probability that <b>Team Rocket</b> kills <b>Ash</b>. Your answer is considered correct if it has an absolute error less than <b>10<sup>-6</sup></b>.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 10</b><br />
<b>4 ≤ N ≤ 30</b><br />
<b>-50 ≤ X, Y ≤ 50</b><br />
<b>All (X,Y) in a test case are unique.</b>
</p>
<h3>Sample</h3>
<pre>
<b>Input</b>
2
4
-1 0
0 0
0 1
1 0
5
-1 0
0 -1
0 0
0 1
1 0

<b>Output</b>
0.25
0.4

</pre><h3>Explanation</h3>
<p><b>Test 1:</b> There are 4 ways TR may be placed. Each one of them has the probability 0.25, of occuring.</p>
<p>
<ul>
<li>{ (-1,0), (0,0), (0,1) }, Ash is at (1,0). Ash cannot be killed even though TR has a valid and unique "kill circle".</li>
<li>{ (-1,0), (0,0), (1,0) }, Ash is at (0,1). Ash cannot be killed because TR does not have a unique "kill circle".</li>
<li>{ (-1,0), (0,1), (1,0) }, Ash is at (0,0). Ash can be killed since he is standing inside TR's "kill circle".</li>
<li>{ (0,0), (0,1), (1,0) }, Ash is at (-1,0). Ash cannot be killed even though TR has a valid and unique "kill circle".</li>
</ul>
</p>
<p><b>Test 2:</b> There are 10 ways TR may be placed. Each one of them has the probability 0.1, of occuring. For each one of those placements, Ash may be placed at one of the 2 remaining positions. Thus, with probability 0.05 each, there are 20 total arrangements to consider. Ash can be killed by TR in 8 of these 20 cases.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-06-2013</td>
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