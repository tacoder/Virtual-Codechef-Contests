<?php require("../../includes/header.php"); ?><h1>BiCo Gaming Grid</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/mandarin/BICO.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/russian/BICO.pdf">Russian</a> as well.</h3>
<p></p><p>The much anticipated video game "BiCo Grid" has been released. The rules of "Bico Grid" are very simple.</p>
<p>The game field is a 100x100 matrix, where each cell is either a blocked cell, or a cell with some number of coins. For a regular player the look of the field seems pretty random, but the programmer in you recognizes the following pattern: the <b>i</b>-th cell on the <b>n</b>-th row contains <b>C(n, i)</b> coins if and only if <b>0</b> ≤ <b>i</b> ≤ <b>n</b>, all other cells are blocked. Record <b>C(n, i)</b> denotes binomial coefficient "<b>n</b> choose <b>i</b>".</p>
<p>The player starts from the cell situated at row <b>R</b> and column <b>C</b> in the matrix. The objective is to collect <b>exactly G</b> number of coins from matrix in several moves. There are some rules: </p>
<ul>
<li>On each move the player must collect all the coins from some unblocked cell in the current column.</li>
<li>The rules of the game state, that player mustn't be really greedy, so the number of coins he collected must not increase. In other words, if at some move the player collected <b>X</b> coins then further he cannot collect more than <b>X</b> coins in a single move.</li>
<li>After each move, the player is immediately moved to some cell of the column <b>W-1</b> (where <b>W</b> denotes the current column of the player). If the current column of the player has index <b>0</b>, the game ends.</li>
<li>The game ends when player collects <b>exactly G</b> number of coins.</li>
</ul>

<p>You are given the description of the game. Please, output the sequence of moves that win the game (collect exactly <b>G</b> coins)! It is guaranteed that if the player will play optimally it is possible to win the game.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Then <b>T</b> lines follows. Each containing three integers, <b>R</b> denoting the starting row, <b>C</b>, denoting the starting column, and <b>G</b>, denoting the number of coins to be collected.</p>
<h3>Output</h3>
<p>For each test case, output two lines. First line contains <b>K</b>, the number of column visited before completion of game. Second line contains <b>K</b> space separated integers, the number of coins collected from the cells, in the order they were collected.</p>
<p>It is guaranteed that a solution exists. And if there are multiple solutions, print any of them.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 10000<br />0 ≤ <b>C</b> ≤ 49<br />0 ≤ <b>R</b> ≤ 99<br />1 ≤ <b>G</b> ≤ 10<sup>12</sup></p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 2 5
3 3 10
5 4 7

<b>Output:</b>
2
3 2 
1
10 
3
5 1 1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> We first pick 3 coins from [3, 2] then we pick 2 coins from [2, 1]<br /><b>Example case 2.</b> As 3rd column contains 10 coins in cell [5, 3] we pick it.<br /><b>Example case 3.</b> We first pick 5 coins from [5, 4] then we pick 1 coin from [3, 3] and again we pick 1 coin from [2, 2].</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vinayak garg">vinayak garg</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-02-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>