<?php require("../../includes/header.php"); ?><h1>Delicious Dishes</h1><div class="content">

<p>
Chef is the owner of the loveliest restaurant in ChefTown. To make his work easier, all dishes are numbered by distinct positive integers, and you can order with this positive integer in Chef’s restaurant. Amazingly Chef has many kinds of recipes, so every positive integer denotes exactly one dish. To taste dish numbered with some integer C, you have to pay exactly C dollars.
</p>
<p>
Unfortunately not all the dishes are delicious. After years of working in his restaurant, Chef discovered that a dish is considered to be delicious if the number that denotes this dish consists of different digits. Let’s call such numbers “delicious numbers”. For example numbers 123, 1, 91, 102 are delicious but 122, 11, 900 are not.
</p>
<p>
Ira is a little girl from the University of Lublin and she’s fond of traveling. Tonight she stops in ChefTown and wants to have a meal at Chef’s restaurant. On the one hand she has R dollars in her pocket and she is ready to spend it, on the other hand she wants to seem rich, so she won’t spend less than L dollars. Of course, since she is a little girl, she wants to order just one dish. It is difficult to make a choice for Ira because of variety of dishes.Now she asks you to find out the number of delicious dishes Ira may order, considering her conditions.
</p>
<h3>Input</h3>
<p>First line contains single integer T (1 ≤ T ≤ 200000) – the number of test cases. Each test case consists of two positive integers in a line - L and R (1 ≤ L ≤ R ≤ 10<sup>18</sup>).</p>
<h3>Output</h3>
<p>For every test case, output the answer on a separate line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 13
1 100

<b>Output:</b>
8
90

</pre><h3>Explanation</h3>
<p>
For the first test Ira can order every dish from 5 to 13 except 11.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-08-2012</td>
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