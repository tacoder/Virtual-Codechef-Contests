<?php require("../../includes/header.php"); ?><h1>Chef and Square</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/CHEFSQUA.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/CHEFSQUA.pdf">Russian</a>.</h3>
<p>Chef loves squares! You are given <b>N</b> points with integers coordinates, Chef asks you to find out how many points he should add to these set of<b> N</b> points, so that one could create at least one square having its vertices from the points of the resulting set. Note that the square created need not to be parallel to the axis.</p>
<h3>Input</h3>
<p>The first line contains singe integer <b>N</b>. </p>
<p>Each of next <b>N</b> lines contains two integers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b> denotine the coordinates of <b>i</b>-th point. </p>
<h3>Output</h3>
<p>In a single line print single integer - the minimal number of points Chef need to paint to receive at least one square. </p>
<h3>Constraints</h3>
<ul>
<li><b>0</b> ≤ <b>N</b> ≤ <b>2000</b></li>
<li><b>-10^6</b> ≤ <b>X<sub>i</sub>, Y<sub>i<sub></sub></sub></b> ≤ <b>10^6</b></li>
<li>There are NO coincided points</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
0 0
2 2
3 3

<b>Output:</b>
2

<b>Input:</b>
5
0 0
100 100
200 200
100 0
0 100

<b>Output:</b>
0
</pre><h3>Explanation</h3>
<p>For the first example Chef can add points <b>(2, 0), (0, 2)</b> or <b>(2, 3), (3, 2)</b></p>
<p>For the second example Chef already has square <b>(0, 0), (100, 0), (0, 100), (100, 100)</b>. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-04-2014</td>
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