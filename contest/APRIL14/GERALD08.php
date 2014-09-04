<?php require("../../includes/header.php"); ?><h1>Chef and Tree Game</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/GERALD08.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/GERALD08.pdf">Russian</a>.</h3>
<p> </p>
<p>Chef has a rooted tree <b>G</b>, consisting of <b>N</b> vertices. Each edge of the tree has a color black or white.</p>
<p>Once Chef's friend Ksen offered Chef to play a game on the tree <b>G</b>. The game has very simple rule:</p>
<ul>
<li>The players make moves in the game alternately.</li>
<li>On his move Chef deletes a single undeleted black edge. On her move Ksen deletes a single undeleted white edge.</li>
<li>When some edge has been deleted, all the edges that now aren't connected (directly or indirectly) to the root will be deleted too.</li>
<li>One who cannot move lose the game.</li>
</ul>

<p>Chef really likes the game. The only problem is that Ksen knows the game very well. So she always plays optimally. That's why Chef has decided to choose the order of moves. Help Chef: tell him who will win the game if he moves first, and also who will win the game if Ksen moves first. Consider that Chef plays optimally too.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each testcase contains a single integer <b>N</b>. Then <b>N - 1</b> lines follows. Each contains three integers <b>U<sub>i</sub></b>, <b>V<sub>i</sub></b>, <b>C<sub>i</sub></b>. These integers denotes the current edge of the tree: the first two numbers means the numbers of vertices connected by the edge, the last number denotes the color of the edge (zero means black, one means white). Consider all vertices of the tree <b>G</b> are numbered from <b>1</b> to <b>N</b>. The root has number <b>1</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing two strings: the name of the winner if Chef moves first, and the name of the winner if Chef moves second.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>U<sub>i</sub></b>, <b>V<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>C<sub>i</sub></b> ≤ <b>1</b></li>
<li>It's guaranteed that the sum of <b>N</b> values for all tests doesn't exceed 100000.</li>
</ul>
<p><br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1
2
1 2 0
2
1 2 1
3
1 2 0
1 3 1
3
1 2 0
2 3 1

<b>Output:</b>
Ksen Chef
Chef Chef
Ksen Ksen
Ksen Chef
Chef Chef
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gerald">gerald</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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