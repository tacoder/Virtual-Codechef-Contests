<?php require("../../includes/header.php"); ?><h1>New Restaurant</h1><div class="content">

<p>Chef Dengklek will open a new restaurant in the city. The restaurant will be open for N days. He can cook M different types of dish. He would like to cook a single dish every day, such that for the entire N days, he only cook at most K distinct types of dishes.</p>
<p>In how many ways can he do that?</p>
<h3>Input</h3>
<p>The first line contains a single integer T, the number of test cases. T test cases follow. Each test case consists of a single line consisting of three integers N, M, K.</p>
<h3>Output</h3>
<p>For each test case, output a single line consisting the number of different ways he can cook for the entire N days, modulo 1000000007.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ T ≤ 100</li>
<li>1 ≤ N ≤ 1000</li>
<li>1 ≤ M ≤ 1000000</li>
<li>1 ≤ K ≤ 1000</li>
</ul>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>
4
1 1 1
2 2 2
4 3 2
5 7 3</pre><p>
<b>Output:</b></p>
<pre>
1
4
45
5887</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/fushar">fushar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-09-2011</td>
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