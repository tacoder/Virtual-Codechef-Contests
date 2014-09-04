<?php require("../../includes/header.php"); ?><h1>Game</h1><div class="content">
<p>You are playing following game: given an array <b>A</b> of <b>N</b> natural numbers. All numbers in the array <b>A</b> are at most <b>M</b>. On every turn you may pick any two different elements <b>A<sub>i</sub></b> and <b>A<sub>j</sub></b> (<b>i</b>≠<b>j</b>), such that <b>A<sub>i</sub>, A<sub>j</sub> ≤ M</b>, and add <b>K</b> to both. The game ends when you are not able to continue. That is, when there is no pair <b>(i,j)</b> left such that both of them are less than equal to <b>M</b>.</p>
<p><b>Let's call two arrays <i>different</i> if the sum of all their elements is different</b>. When the game ends, you note down the final array <b>A</b>. How many <i>different</i> final arrays can you have.</p>
<h3>Input</h3>
<p>The first line contains three integers <b>N</b>, <b>M</b> and <b>K</b>. <b>N</b> elements of the array follow in the next line.</p>
<h3>Output</h3>
<p>Output single integer - answer for the given problem modulo <b>10<sup>9</sup>+7</b>.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<b> </b>
</ul>
<p> </p>
<li> 1 ≤ N ≤ 10<sup>5</sup> </li>
<li> 1 ≤ M,K ≤ 10<sup>12</sup> </li>
<li> 1 ≤ A<sub>i</sub> ≤ M
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3 3 2
1 2 3
<b>Output:</b>
2
</pre>
<h3>Explanation</h3>
<p> </p>
<p>All possible sums are 14 and 10. You can get them by, for example, these arrays:<br /><br /> <b>A=(5, 4, 5),</b><br /><br /> <b>A=(1, 4, 5)</b><br /><br /> The above arrays are different because their sums are different.</p>
</li>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/utkarsh_lath">utkarsh_lath</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-09-2013</td>
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