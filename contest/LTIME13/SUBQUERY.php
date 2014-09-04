<?php require("../../includes/header.php"); ?><h1>Substring Query</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/mandarin/SUBQUERY.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/russian/SUBQUERY.pdf">Russian</a>.</h3>
<p>You are given a string <b>S</b> and <b>N</b> queries. Each query is defined by two integers - <b>L<sub>i</sub></b> and <b>P<sub>i</sub></b>. Count the number of strings of the length <b>L<sub>i</sub></b> that occur <b>exactly P<sub>i</sub></b> times (as the consecutive substrings) in the string <b>S</b>.</p>
<h3>Input</h3>
<p>The first line of input contains the string <b>S</b>.
</p>
<p>The second line of input contains the integer <b>N</b> - the number of queries.</p>
<p>Then there are <b>N</b> lines, the <b>i</b>-th one contains numbers <b>L<sub>i</sub></b> and <b>P<sub>i</sub></b> for the <b>i</b>-th query.</p>
<h3>Output</h3>
<p>For each query output the answer at the corresponding line of the output.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>50</b>, <b>1</b> ≤ <b>N</b> ≤ <b>100</b> : 13 points.</li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>N</b> ≤ <b>10000</b> : 27 points.</li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>200000</b>, <b>1</b> ≤ <b>N</b> ≤ <b>500000</b> : 60 points.</li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b>, <b>P<sub>i</sub></b> ≤ <b>N</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
abacaba
1
3 2

<b>Output:</b>
1
</pre><p> </p>
<h3>Explanation</h3>
<p>The only such string is <b>aba</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/furko">furko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-06-2014</td>
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