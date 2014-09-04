<?php require("../../includes/header.php"); ?><h1>Tree Game</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/mandarin2/TREEGAME.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/russian/TREEGAME.pdf">Russian</a> as well.</h3>
<p>
Alice and Bob are playing the game. Initially, there is a single rooted tree. Players take turns alternately, Alice starts.
</p>
<p>
In a single turn, Alice should choose any non-empty subset of roots of tree (or trees) and remove them. On the other hand, Bob should choose any non-empty subset of leafs and remove them from the tree (or trees). (<b>Please note</b> that Bob always takes some of the <b>deepest</b> in the original tree leafs.) It's not allowed to skip the turn. The game ends when a player can't take a turn.
</p>
<p>
The Alice's goal is to minimize the number of turns made by the both players, while Bob wants this number to be the maximal. Considering they both play optimally, what is the number of turns eventually made?
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of nodes of the tree. </p>
<p>The next <b>N-1</b> lines contain pairs of nodes' numbers <b>U<sub>i</sub></b> and <b>V<sub>i</sub></b> (one pair per line), denoting the edges of the tree.</p>
<p>
The nodes are numbered from <b>1</b> to <b>N</b>, inclusive, and the node with the index <b>1</b> is the root of the tree.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>40</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>U<sub>i</sub>, V<sub>i</sub></b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
1 2
7
1 3
1 4
4 2
4 5
4 6
6 7
1

<b>Output:</b>
2
5
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-04-2014</td>
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