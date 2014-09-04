<?php require("../../includes/header.php"); ?><h1>Chef and Kingship</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/COOK43/mandarin/KINGSHIP.pdf" target="_blank">Mandarin Chinese</a> and <a href="/download/translated/COOK43/russian/KINGSHIP.pdf" target="_blank">Russian</a> as well.</h3>
<p>Chef is the new king of the country Chefland. As first and most important responsibility he wants to reconstruct the road system of Chefland. There are <b>N</b> (<b>1</b> to <b>N</b>) cities in the country and each city <b>i</b> has a population <b>P<sub>i</sub></b>. Chef wants to build some bi-directional roads connecting different cities such that each city is connected to every other city (by a direct road or through some other intermediate city) and starting from any city one can visit every other city in the country through these roads. Cost of building a road between two cities <b>u</b> and <b>v</b> is <b>P<sub>u</sub> x P<sub>v</sub></b>. Cost to build the road system is the sum of cost of every individual road that would be built.</p>
<p>Help king Chef to find the minimum cost to build the new road system in Chefland such that every city is connected to each other.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>First line contains an integer <b>N</b> denoting the number of cities in the country. Second line contains <b>N</b> space separated integers <b>P<sub>i</sub></b>, the population of <b>i</b>-th city.</p>
<h3>Output</h3>
<p>For each test case, print a single integer, the minimum cost to build the new road system on separate line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>P<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
5 10
4
15 10 7 13

<b>Output:</b>
50
266
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shiplu">shiplu</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece‎">rustinpiece‎</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-01-2014</td>
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