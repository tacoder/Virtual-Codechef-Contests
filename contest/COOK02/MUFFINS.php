<?php require("../../includes/header.php"); ?><h1>Baking Cupcakes</h1><div class="content">

<p>
The Chef is planning on serving cupcakes for dessert. However, time is running out and the Chef has only enough time to bake one batch. Thankfully, the cupcake baking tin the Chef plans on using has barely enough spaces to ensure each guest receives one cupcake.</p>
<p>
To the Chef's dismay, some of the spaces in the cupcake tin are too close to each other. If cupcake batter is placed in two such spaces then they will bake together and neither will have the aesthetically pleasing round shape one expects from gourmet cupcakes.</p>
<p>
The Chef wants to impress his guests with this dessert, so he wants all cupcakes to be perfectly round. You must determine if it is possible for the desired number of cupcakes to be baked without any two baking in to each other.</p>
<h3>Input</h3>

<p>
The first line consists of a single integer T ≤ 30 denoting the number of test cases to follow. Each test case begins with a single line consisting of three integers n,m, and g. Here, n is the number of spaces in the cupcake tin, m is the number of conflicting pairs of spaces in the tin, and g is the number of guests. Following this line is m lines describing the conflicting pairs. Each line consists of two distinct integers i and j, both between 0 and n-1. This means spaces i and j are conflicting so batter may only be placed in at most one of them.</p>
<p>
The bounds are 1 ≤ n ≤ 1,000, 1 ≤ m ≤ 20,000, and 0 ≤ g ≤ n. Since the cupcake tin has barely more spaces than guests (if any), then we also have n-g ≤ 15.</p>
<h3>Output</h3>

<p>
The output for each test case consists of a single line containing "Possible" if the Chef can bake all cupcakes perfectly round or "Impossible" if the Chef must settle for some cupcakes being imperfect.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 2 2
0 1
1 2
3 3 2
0 1
1 2
2 0

<b>Output:</b>
Possible
Impossible
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-08-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>