<?php require("../../includes/header.php"); ?><h1>Brand New Game</h1><div class="content">
<h3>Read problems statements in <a target="_blank" href="/download/translated/LTIME12/mandarin/BNGAME.pdf">Mandarin Chinese </a> and <a target="_blank" href="/download/translated/LTIME12/russian/BNGAME.pdf">Russian</a>.</h3>
<p>Consider the following game that is played on the field of the size of 1 x <b>N</b> cells. The cells are numbered from 1 to <b>N</b>. In the i-th cell there are two positive integers written - <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b>.</p>
<h3>Read problems statements in <a target="_blank" href="/download/translated/LTIME12/mandarin/BNGAME.pdf">Mandarin Chinese </a> and <a target="_blank" href="/download/translated/LTIME12/russian/BNGAME.pdf">Russian</a>.</h3>
<p>Consider the following game that is played on the field of the size of 1 x <b>N</b> cells. The cells are numbered from 1 to <b>N</b>. In the i-th cell there are two positive integers written - <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b>.</p>
<p>The game is as follows. Initially, the player stands at the fictive cell with the index <b>0</b> that is located right before all the <b>N</b> cells of the board. Then, he makes moves. Each move consists in moving by no more than by <b>K</b> cells forward. The goal of the game is to reach the fictive <b>N+1</b>-th cell that is located right after all the <b>N</b> cells.</p>
<p>After the <b>N+1</b>-th cell is reached, the player's penalty is calculated. The penalty equals to max(<b>A<sub>x</sub></b>) * max(<b>B<sub>y</sub></b>), where <b>x</b> and <b>y</b> are the indices of the cells that were visited in between (during the movement to the <b>N+1</b>-th cell).</p>
<p>Please find the minimal possible penalty that can be reached in this game.</p>
<h3>Input</h3>
<p>The first line of input contains two single space separated integer numbers - <b>N</b> and <b>K</b> respectively.</p>
<p>Then, there are <b>N</b> lines, each containing a pair of signle space separated integers - <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b> respectively.</p>
<h3>Output</h3>
<p>Output the minimal possible penalty on the first line.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b>, <b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>100</b> - 27 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>32000</b> - 20 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5 * 10<sup>5</sup></b>, <b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>32000</b> - 53 points.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 3
1 5
2 4
3 3
4 2
5 1

<b>Output:</b>
9
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-05-2014</td>
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