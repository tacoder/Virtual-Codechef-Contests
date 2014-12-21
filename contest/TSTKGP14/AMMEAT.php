<?php require("../../includes/header.php"); ?><h1>Andrew and the Meatballs</h1><div class="content">
<p>Andrew likes meatballs very much.</p>
<p>He has <b>N</b> plates of meatballs, here the <b>i</b><sup>th</sup> plate contains <b>P<sub>i</sub></b> meatballs. You need to find the minimal number of plates Andrew needs to take to his trip to Las Vegas, if he wants to eat there at least <b>M</b> meatballs. Note that each plate is already packed, i.e. he cannot change the amount of meatballs on any plate.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>. The second line contains <b>N</b> space-separated integers <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>
For each test case, output an integer, denoting the minimum number of plates. If it's impossible to take at least <b>M</b> meatballs, print <b>-1</b>.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7777</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>7</b></li>
<li><b>1</b> ≤ <b>M, P<sub>i</sub></b> ≤ <b>10<sup>18</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 7
1 2 3 4

<b>Output:</b>
2
</pre><h3>Explanation</h3>
<p>If he takes <b>3</b><sup>rd</sup> and <b>4</b><sup>th</sup> plates, then we may eat <b>P<sub>3</sub> + P<sub>4</sub> = 7</b> meatballs in Las Vegas. This is the only way for eating at least <b>M = 7</b> meatballs with <b>2</b> plates.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-03-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>