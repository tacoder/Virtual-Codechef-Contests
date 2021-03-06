<?php require("../../includes/header.php"); ?><h1>The Perfect Chocolate Candy</h1><div class="content">

<p>The chef is a fan of candies with chocolate and caramel, and has devoted much of his life<br />
to finding the perfect ratio of chocolate to caramel.<br />
He recently discovered the perfect ratio, but to his dismay,<br />
none of his favourite candy shoppes sell candies with exactly that ratio.<br />
So the chef crafted a plan to buy several candies, and melt them together into a larger candy<br />
so that the resulting candy will have the perfect ratio.<br />
How many candies will he have to buy?<br />
The chef may buy multiple candies of the same type.
</p>
<h3>Input:</h3>
<p>Input begins with an integer N,<br />
the number of different candies available at the various shoppes.<br />
N lines follow, each containing 2 integers Chocolate<sub>i</sub> and Caramel<sub>i</sub> indicating the grams of chocolate and caramel,<br />
respectively, contained in the (i)th candy.<br />
Finally, there is a line containing 2 integers desiredChocolate and desiredCaramel, indicating the chef's desired ratio of<br />
chocolate to caramel.</p>
<h3>Output:</h3>
<p>For each test case, output on a single line the minimum number of candies the chef will have to buy.<br />
If it is impossible to produce a candy with the desired ratio, output -1 instead.</p>
<h3>Example</h3>
<p><b>Input 1:</b></p>
<pre>3
4 5
2 4
4 1
1 1
 </pre>
<p><b>Output 1:</b></p>
<pre>3
 </pre>
<p>In this example, the chef purchases one of each candy and combines them to form a candy with 8 grams chocolate and 8 grams caramel.</p>
<p><b>Input 2:</b></p>
<pre>3
2 3
4 6
10 15
5 8
 </pre>
<p><b>Output 2:</b></p>
<pre>-1
 </pre>
<h3>Constraints:</h3>
<p>1 ≤ N ≤ 15<br />
1 ≤ Chocolate<sub>i</sub> ≤ 500<br />
1 ≤ Caramel<sub>i</sub> ≤ 500<br />
1 ≤ desiredChocolate ≤ 500<br />
1 ≤ desiredCaramel ≤ 500<br />
For all candies, Chocolate<sub>i</sub>/Caramel<sub>i</sub> ≠ desiredChocolate/desiredCaramel<br />
No two candies will be identical.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/maksflow">maksflow</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>