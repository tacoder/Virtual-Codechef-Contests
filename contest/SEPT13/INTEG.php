<?php require("../../includes/header.php"); ?><h1>Chef and Integers</h1><div class="content">
<p>Chef has an array of <b>N</b> integers. He wants to play a special game. In this game he needs to make all the integers in the array greater or equal to <b>0</b>.</p>
<p>Chef can use two types of operations. The first type is to  increase all the integers of the given array by <b>1</b>, but it costs <b>X</b> coins. The operation of the second type is to add <b>1</b> to only one integer of the given array and to use this operation you need to pay <b>1</b> coin. You need to calculate the minimal cost to win this game (to make all integers greater or equal to <b>0</b>)</p>
<p>Chef has an array of <b>N</b> integers. He wants to play a special game. In this game he needs to make all the integers in the array greater than or equal to <b>0</b>.</p>
<p>Chef can use two types of operations. The first type is to  increase all the integers of the given array by <b>1</b>, but it costs <b>X</b> coins. The operation of the second type is to add <b>1</b> to only one integer of the given array and to use this operation you need to pay <b>1</b> coin. You need to calculate the minimal cost to win this game (to make all integers greater than or equal to <b>0</b>)</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of elements in the given array. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given array. The third line contains number <b>X</b> - cost of the first type operation.</p>
<h3>Output</h3>
<p> </p>
<p>For each test case, output a single line containing minimal cost required to make all the integers greater than or equal to zero.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b> 10<sup>9</sup> </b></li>
<li><b>0</b> ≤ <b>X </b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
-1 -2 -3
2

<b>Output:</b>
5
</pre>
<h3>Explanation</h3>
<p><b>Example case 1:</b> Use the first type operation twice and the second type once.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>18-06-2013</td>
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