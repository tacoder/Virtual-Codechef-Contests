<?php require("../../includes/header.php"); ?><h1>Cards, bags and coins</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/ANUCBC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/ANUCBC.pdf">Russian</a>.</h3>
<h3>Statement</h3>
<p>Yet another game from chef. Chef gives you <b>N</b> cards and <b>M</b> bags. Each of the <b>N</b> cards has an integer written on it. Now chef asks you to close your eyes and choose a subset of them. He then sums the numbers written on chosen cards, takes its absolute value and gives you those many coins. You win the game if you can divide these coins into <b>M</b> bags with each bag having equal share. As a first step to calculate the probability of winning, you would like to know the <b>number of different subsets which will make you win</b>. Note that all the cards are of different color, so even if 2 cards have the same number written on it, they are still considered as different cards.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
First line of each test case contains two integers <b>N</b> and <b>Q</b>. <b>Q</b> denotes the number of queries to be answered. Second line of each test case contains <b>N</b> integers, the numbers written on cards.<br />
Following <b>Q</b> lines contain an integer <b>M</b>.</p>
<h3>Output</h3>
<p>For each query output the required Answer modulo <b>1000000009</b>. Answer is the number of subsets that will ensure you win.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>30</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100</b></li>
<li><b>-10^9</b> ≤ <b>Number on card</b> ≤ <b>10^9</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
2
5 1
1 2 -1 4 5
9
5 2
1 2 3 4 5
5
15

<b>Output</b>
4
8
2
</pre><h3>Explanation</h3>
<p><b>Test Case #1, Query #1</b><br />
{}, {1,-1}, {1,-1,4,5}, {4,5} are winning subsets. Sums are 0, 0, 9, 9 respectively.</p>
<p><b>Test Case #2, Query #1</b><br />
{}, {5}, {1,4}, {2,3}, {1,4,5}, {2,3,5}, {1,2,3,4}, {1,2,3,4,5} are winning subsets. Sums are 0, 5, 5, 5, 10, 10, 10, 15 respectively.</p>
<p><b>Test Case #2, Query #2</b><br />
{}, {1,2,3,4,5} are winning subsets. Sums are 0 and 15 respectively.</p>
<h3>Author's Note</h3>
<p>Time Limit is not very strict (Yes, not very loose either) if correct Algorithm is used.Author's solution passes with 2 sec Time Limit (C++ solution, using scanf and printf).<br />
Maximum Input File Size &lt; 4MB.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-01-2014</td>
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