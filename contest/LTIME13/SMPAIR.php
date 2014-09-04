<?php require("../../includes/header.php"); ?><h1>The Smallest Pair</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/mandarin/SMPAIR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/russian/SMPAIR.pdf">Russian</a>.</h3>
<p>You are given a sequence <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b>. Find the smallest possible value of <b>a<sub>i</sub> + a<sub>j</sub></b>, where 1 ≤ <b>i</b> &lt; <b>j</b> ≤ <b>N</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. </p>
<p>The first line of each description consists of a single integer <b>N</b>.</p>
<p>The second line of each description contains <b>N</b> space separated integers - <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> respectively.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a single integer - the smallest possible sum for the corresponding test case.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>T</b> = <b>10<sup>5</sup></b>, <b>N</b> = <b>2</b> : 13 points.</li>
<li><b>T</b> = <b>10<sup>5</sup></b>, <b>2</b> ≤ <b>N</b> ≤ <b>10</b> : 16 points.</li>
<li><b>T</b> = <b>1000</b>, <b>2</b> ≤ <b>N</b> ≤ <b>100</b> : 31 points.</li>
<li><b>T</b> = <b>10</b>, <b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> : 40 points.</li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
4
5 1 3 4

<b>Output:</b>
4
</pre><p> </p>
<h3>Explanation</h3>
<p>Here we pick <b>a<sub>2</sub></b> and <b>a<sub>3</sub></b>. Their sum equals to 1 + 3 = 4.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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