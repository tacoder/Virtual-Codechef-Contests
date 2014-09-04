<?php require("../../includes/header.php"); ?><h1>Pairwise AND sum</h1><div class="content">
<p>You are given a sequence of <b>N</b> integer numbers <b>A</b>. Calculate the sum of <b>A<sub>i</sub> AND A<sub>j</sub></b> for all the pairs (<b>i</b>, <b>j</b>) where <b>i &lt; j</b>. </p>
<p> The <b>AND</b> operation is the <b>Bitwise AND</b> operation, defined as in <a href="http://en.wikipedia.org/wiki/Bitwise_operation#AND">here</a>. </p>
<h3>Input</h3>
<p>The first line of input consists of the integer <b>N</b>. <br /><br />
The second line contains <b>N</b> integer numbers - the sequence <b>A</b>.</p>
<h3>Output</h3>
<p>Output the answer to the problem on the first line of the output.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 3 4 5

<b>Output:</b>
9

</pre><h3>Scoring</h3>
<p>
Subtask 1 (13 points): <b>N</b> &lt;= 1000, <b>A<sub>i</sub></b> &lt;= 1. <br /><br />
Subtask 2 (39 points): <b>N</b> &lt;= 1000, <b>A<sub>i</sub></b> &lt;= 10<sup>9</sup>. <br /><br />
Subtask 3 (21 points): <b>N</b> &lt;= 10<sup>5</sup>, <b>A<sub>i</sub></b> &lt;= 1. <br /><br />
Subtask 4 (27 points): <b>N</b> &lt;= 10<sup>5</sup>, <b>A<sub>i</sub></b> &lt;= 10<sup>6</sup>. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-07-2013</td>
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