<?php require("../../includes/header.php"); ?><h1>Coprime Triples</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/mandarin/COPRIME3.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/russian/COPRIME3.pdf">Russian</a>.</h3>
<p>You are given a sequence <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b>. Count the number of triples (<b>i, j, k</b>) such that 1 ≤ <b>i</b> &lt; <b>j</b> &lt; <b>k</b> ≤ <b>N</b> and GCD(<b>a<sub>i</sub>, a<sub>j</sub>, a<sub>k</sub></b>) = 1. Here <b>GCD</b> stands for the Greatest Common Divisor.</p>
<h3>Input</h3>
<p>The first line of input contains a single integer <b>N</b> - the length of the sequence.</p>
<p>The second line contains <b>N</b> space-separated integers - <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> respectively.</p>
<h3>Output</h3>
<p>Output the required number of triples on the first line of the output.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b> : 22 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b> : 23 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> : 55 points.</li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 2 3 4

<b>Output:</b>
4
</pre><p> </p>
<h3>Explanation</h3>
<p>Any triple will be a coprime one.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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