<?php require("../../includes/header.php"); ?><h1>Chef and String</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME08/russian/CHRL2.pdf">Russian</a> also.</h3>
<p>Chef likes playing with strings. The most interesting game are named "CHEF in string". The move of the game consists of the following: Chef takes a <b>subsequence</b> of string's letters that form the word "CHEF" and then he removes that symbols. The goal of the game is to make the maximal number of moves. Please, help Chef and tell him the maximal possible number of moves that he is able to make for the given string <b>S</b>.</p>
<h3>Input</h3>
<p> The first line of each test case contains a given string. This string consists of uppercase letters from the set {"C", "H", "E", "F"}. </p>
<h3>Output</h3>
<p>Output a single line containing the maximal possible number of moves.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 </b> ≤ <b>|S|</b> ≤ <b>100000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
CHEFCHEFFFF

<b>Output:</b>
2

</pre><pre><b>Input:</b>
CHHHEEEFFCC

<b>Output:</b>
1

</pre><h3>Scoring</h3>
<p>Subtask 1 (25 points): <b>|S|</b> ≤ 2000 <br /><br />
Subtask 2 (75 points):  See the constraints. <br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2014</td>
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