<?php require("../../includes/header.php"); ?><h1>Cutting Recipes</h1><div class="content">

<p>The chef has a recipe he wishes to use for his guests,<br />
but the recipe will make far more food than he can serve to the guests.<br />
The chef therefore would like to make a reduced version of the recipe which has the same ratios of ingredients, but makes less food.<br />
The chef, however, does not like fractions.<br />
The original recipe contains only whole numbers of ingredients,<br />
and the chef wants the reduced recipe to only contain whole numbers of ingredients as well.<br />
Help the chef determine how much of each ingredient to use in order to make as little food as possible.</p>
<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.<br />
Each test case consists of a single line.<br />
The line begins with a positive integer N, the number of ingredients.<br />
N integers follow, each indicating the quantity of a particular ingredient that is used.</p>
<h3>Output</h3>
<p>For each test case, output exactly N space-separated integers on a line,<br />
giving the quantity of each ingredient that the chef should use in order to make as little food as possible.</p>
<h3>Sample Input</h3>
<pre>3
2 4 4
3 2 3 4
4 3 15 9 6
</pre><h3>Sample Output</h3>
<pre>1 1
2 3 4
1 5 3 2
</pre><h3>Constraints</h3>
<p>T&le;100<br />
2&le;N&le;50<br />
All ingredient quantities are between 1 and 1000, inclusive.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-11-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>