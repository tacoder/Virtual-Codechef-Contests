<?php require("../../includes/header.php"); ?><h1>Gap Filler Game</h1><div class="content">

<p><i>Now we are all bored playing, probably that is why they call it board game.</i></p>
<p>Chef is facing severe problems at his restaurant. Because his kitchen is small so only small number of cooks can fit in which results in slow service. Customers don't like waiting for their food. While he has already started looking for new place to move in, this might take some time. So in meanwhile he has come up with an innovative idea. He'd put up a board game puzzle on all tables so that customers can play the game while waiting for their orders to arrive. To make this gap filler idea more viral, he'd further give a discount to people who successfully solve the puzzle.</p>
<p>Game that he has chosen consists of N * M grid with each cell having a light and a switch. Once a switch of a cell is pressed, all lights in the same column or row including the cell toggle once.  Note that light in the cell whose switch is pressed is toggled once and not twice. Game starts with some lights on and rest off and the objective of the game is to turn on all the lights.</p>
<p>He however fears that a lot of people may win discounts. He is a great cook but he is not good with puzzle solving. He seeks your help in determining how easy or tough this game is. Given board dimensions, your task is to find out how many initial configurations of the game can be solved. Two configurations are different if there is at least one cell which is off in one and on in other. As this number might get huge, only print the answer modulo 10^9 + 7.</p>
<p></p>
<h3>Input</h3>

<p>
First line of the input contains a single integer T, the number of test cases. Each of the next T lines represents a single test case containing two integers N &amp; M separated by a space. N &amp; M are the dimensions of the board. You can assume that T &lt;= 50000 and 1 &lt;= N,M &lt;= 10^18</p>
<h3>Output</h3>

<p>
For each test case, print the number of initial configurations of N * M board that can be solved modulo 10^9 + 7.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 1
1 3
3 3

<b>Output:</b>
2
2
32
</pre><p></p>
<p><b>Description :</b> </p>
<p>In first case 1 * 1 board can have 2 configurations - off or on. Both can be solved. <br />
In second case we've a row of 3 lights. There are total of 8 configurations. Out of these only 2 configurations can be solved (one with all lights on and one with all lights off)</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/yellow_agony">yellow_agony</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-11-2011</td>
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