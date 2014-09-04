<?php require("../../includes/header.php"); ?><h1>Statements Checking</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/mandarin/CORRCHK.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/russian/CORRCHK.pdf">Russian</a>.</h3>
<p>Run has given you a list of statements of the form "A+B=C", where A, B and C consist only of decimal digits and small latin letters from 'a' to 'f'. Moreover, the first symbol of <b>A</b>, <b>B</b>, <b>C</b> is always not a zero and the length of <b>A</b>, <b>B</b>, <b>C</b> is not greater than 8.  How many statements have an integer <b>Q</b> in the range [2; 16] such that <b>A</b>+<b>B</b> equals to <b>C</b> in the base <b>Q</b>?</p>
<h3>Input</h3>
<p>The first line of input consists of an integer <b>T</b> - the number of statements. Then, <b>T</b> statements in the form "A+B=C" (without any spaces) follow, each on a separate line.</p>
<h3>Output</h3>
<p>Output an answer to the problem of the first line of output.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2+2=10
1+2=a
3+5=8

<b>Output:</b>
2
</pre><h3>Scoring</h3>
<p><b>T</b> = 10<sup>5</sup>, Every statement is either true in the base 10, either false in all the bases : 50 points.<br /><br />
<b>T</b> = 10<sup>5</sup>, No additional constraints : 50 points. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>8-03-2014</td>
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