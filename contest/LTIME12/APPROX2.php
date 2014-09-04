<?php require("../../includes/header.php"); ?><h1>Approximately II</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/LTIME12/mandarin/APPROX2.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/LTIME12/russian/APPROX2.pdf" target="_blank">Russian</a>.</h3>
<p>You are given an array of <b>N</b> integers <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> and an integer <b>K</b>. Find the number of such unordered pairs {<b>i</b>, <b>j</b>} that</p>
<h3>Read problems statements in <a target="_blank" href="/download/translated/LTIME12/mandarin/APPROX2.pdf">Mandarin Chinese </a> and <a target="_blank" href="/download/translated/LTIME12/russian/APPROX2.pdf">Russian</a>.</h3>
<p>You are given an array of <b>N</b> integers <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> and an integer <b>K</b>. Find the number of such unordered pairs {<b>i</b>, <b>j</b>} that</p>
<ul>
<li><b>i</b> ≠ <b>j</b></li>
<li><b>|a<sub>i</sub> + a<sub>j</sub> - K|</b> is minimal possible</li>
</ul>
<p>Output  the minimal possible value of <b>|a<sub>i</sub> + a<sub>j</sub> - K|</b> (where <b>i</b> ≠ <b>j</b>) and the number of such pairs for the given array and the integer <b>K</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br /> The first line of each test case consists of two space separated integers - <b>N</b> and <b>K</b> respectively.<br /><br /> The second line contains <b>N</b> single space separated integers - <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> respectively.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing two single space separated integers - the minimal possible value of <b>|a<sub>i</sub> + a<sub>j</sub> - K|</b> and the number of unordered pairs {<b>i</b>, <b>j</b>} for which this minimal difference is reached.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub>, K</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>N</b> = <b>2</b> - 31 point.</li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000</b> - 69 points.</li>
</ul>
<p> </p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1   
4 9
4 4 2 6

<b>Output:</b>
1 4
</pre>
<h3>Explanation:</h3>
<p>The minimal possible absolute difference of <b>1</b> can be obtained by taking the pairs of <b>a<sub>1</sub></b> and <b>a<sub>2</sub></b>, <b>a<sub>1</sub></b> and <b>a<sub>4</sub></b>, <b>a<sub>2</sub></b> and <b>a<sub>4</sub></b>, <b>a<sub>3</sub></b> and <b>a<sub>4</sub></b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-04-2014</td>
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