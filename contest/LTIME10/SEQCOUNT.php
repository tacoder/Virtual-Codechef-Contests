<?php require("../../includes/header.php"); ?><h1>How many sequences</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/mandarin/SEQCOUNT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/russian/SEQCOUNT.pdf">Russian</a>.</h3>
<p>Consider the sequence of <b>K</b> natural numbers: <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>K</sub></b>. Tooru thinks that this sequence is nice if and only if:
<ul>
<li><b>a<sub>1</sub></b>+<b>a<sub>2</sub></b>+...+<b>a<sub>K</sub></b> = <b>N</b></li>
<li><b>a<sub>1</sub></b> &lt; <b>a<sub>2</sub></b> &lt; ... &lt; <b>a<sub>K</sub></b></li>
<li><b>a<sub>i+1</sub></b> - <b>a<sub>i<sub></sub></sub></b> &lt;= <b>D</b> for every natural <b>i</b>, smaller than <b>K</b></li>
<li><b>a<sub>1</sub></b> &lt;= <b>D</b>
</li></ul>
</p><p><br /><br />
You are given <b>N</b>, <b>K</b> and <b>D</b>. Please, count the number of nice sequences for her. This number can be huge, so we ask you to output it modulo <b>10<sup>9</sup>+7</b>.
</p>
<h3>Input</h3>
<p>The first and only line of the input consists of the integers <b>N</b>, <b>K</b> and <b>D</b>, separated by a single space.</p>
<h3>Output</h3>
<p>Output the number of nice sequences on the first line of the output modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
10 4 1

<b>Output:</b>
1
</pre><h3>Explanation</h3>
<p>The only suitable sequence is (1, 2, 3, 4).</p>
<h3>Scoring</h3>
<p>1 &lt;= <b>N</b>, <b>K</b>, <b>D</b> &lt;= 10 : 17 points.<br /><br />
1 &lt;= <b>N</b>, <b>K</b>, <b>D</b> &lt;= 400 : 23 points.<br /> 1 &lt;= <b>N</b>, <b>K</b>, <b>D</b> &lt;= 2000 : 20 points.<br /><br />
1 &lt;= <b>N</b>, <b>K</b>, <b>D</b> &lt;= 10<sup>5</sup> : 40 points.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko‎">Rubanenko‎</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2014</td>
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