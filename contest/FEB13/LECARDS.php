<?php require("../../includes/header.php"); ?><h1>Little Elephant and Cards</h1><div class="content">

<p>Little Elephant from the Zoo of Lviv likes cards. He has <b>N</b> cards, each of which has one of <b>1000</b> colors. The colors are numbered from <b>1</b> to <b>1000</b>.
</p>
<p>Little Elephant and Big Hippo are playing the following game. At first Little Elephant takes some subset of cards, and Big Hippo takes the rest of them. Here, Little Elephant can choose to take all of the cards, or none of the cards.
</p>
<p>Then they play <b>1000</b> rounds: in round <b>k</b> (<b>k = 1, 2, ..., 1000</b>), they count the number of cards each has of the color <b>k</b>. Let Little Elephant has <b>a</b> cards of the color <b>k</b>, and Big Hippo has <b>b</b> cards of the color <b>k</b>. Then if <b>a &gt; b</b> Little Elephant scores <b>|a-b|</b> points, otherwise Big Hippo scores <b>|a-b|</b> points in this round, where <b>|x|</b> denotes the absolute value of <b>x</b>.
</p>
<p>You are given the number of cards <b>N</b> and the array <b>C</b> - list of colors of all <b>N</b> cards. Find the number of subsets (among all <b>2<sup>N</sup></b> subsets) for which Little Elephant wins the game: that is, he gains more points than Big Hippo in total, if Little Elephant takes the subset at first. Since the answer can be large, print it modulo <b>1000000007 (10<sup>9</sup>+7)</b>.</p>
<h3>Input</h3>

<p>First line of the input contains single integer <b>T</b> - the number of test cases. Then <b>T</b> test cases follow.
</p>
<p>First line of each test case contains single integer <b>N</b>. Second line contains <b>N</b> integers separated by space - the array <b>C</b>.</p>
<h3>Output</h3>

<p>For each test case, print the answer in one line.</p>
<h3>Constraints</h3>

<p>
<b>1 ≤ T ≤ 100</b><br /><b>1 ≤ N ≤ 1000</b><br /><b>1 ≤ C<sub>i</sub> ≤ 1000</b>, where <b>C<sub>i</sub></b> denotes the <b>i</b>-th element of the array <b>C</b></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
1 2 3
4
1 1 3 2

<b>Output:</b>
4
5

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-04-2012</td>
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