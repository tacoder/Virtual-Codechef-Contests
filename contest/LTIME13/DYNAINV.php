<?php require("../../includes/header.php"); ?><h1>Dynamic Inversion</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/mandarin/DYNAINV.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME13/russian/DYNAINV.pdf">Russian</a>.</h3>
<p>You are given a permutation <b>A</b> of the first <b>N</b> positive integers. You are also given <b>Q</b> queries to perform one-by-one, the <b>i</b>-th is defined by a pair <b>X<sub>i</sub></b> <b>Y<sub>i</sub></b> and has the meaning that you swap the <b>X<sub>i</sub></b>-th number in the permutation with the <b>Y<sub>i</sub></b>-th one. After performing each query you should output the number of inversions in the obtained permutation, modulo 2.</p>
<p>The inversion is such a pair (<b>i</b>, <b>j</b>) that <b>i</b> &lt; <b>j</b> and <b>A<sub>i</sub></b> &gt; <b>A<sub>j</sub></b>.</p>
<h3>Input</h3>
<p>The first line of input contains two space separated integers <b>N</b> and <b>Q</b> - the size of the permutation and the number of queries.</p>
<p>The second line contains <b>N</b> space separated integers - the permutation <b>A</b>.</p>
<p>Then there are <b>Q</b> lines. The <b>i</b>-th line contains two space separated integers - <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b>, denoting the <b>i</b>-th query.</p>
<h3>Output</h3>
<p>Output <b>Q</b> lines. Output the number of inversions in the permutation (modulo 2) after performing the first <b>i</b> queries on the <b>i</b>-th line.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b>, <b>1</b> ≤ <b>Q</b> ≤ <b>100</b> : 14 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>Q</b> ≤ <b>1000</b> : 23 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b>, <b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>5</sup></b> : 63 points.</li>
<li><b>1</b> ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>X<sub>i</sub></b> isn't equal to <b>Y<sub>i</sub></b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 1
1 2 3 4 5
2 3

<b>Output:</b>
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>10-06-2014</td>
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