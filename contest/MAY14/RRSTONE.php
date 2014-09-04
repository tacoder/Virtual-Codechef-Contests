<?php require("../../includes/header.php"); ?><h1>Stone</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/RRSTONE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/RRSTONE.pdf">Russian</a>.</h3>
<p>Roman has no idea, why this problem is called Stone. He also has no idea on how to solve the followong problem: given array of <b>N</b> integers <b>A</b> and a number <b>K</b>. During a turn the maximal value over all <b>A<sub>i</sub></b> is chosen, let's call it <b>MAX</b>. Then <b>A<sub>i</sub></b> =<br />
<b>MAX</b> - <b>A<sub>i</sub></b> is done for every <b>1 &lt;= i &lt;= N</b>. Help Roman to find out how will the array look like after <b>K</b> turns.
</p>
<h3>Input</h3>
<p>The numbers <b>N</b> and <b>K</b> are given in the first line of an input. Then <b>N</b> integers are given in the second line which denote the array <b>A</b>. </p>
<h3>Output</h3>
<p>Output <b>N</b> numbers on a single line. It should be the array <b>A</b> after <b>K</b> turns.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> &lt;= <b>N</b> &lt;= <b>10<sup>5</sup></b></li>
<li><b>0</b> &lt;= <b>K</b> &lt;= <b>10<sup>9</sup></b></li>
<li><b>A<sub>i</sub></b> does not exceed <b>2 * 10<sup>9</sup></b> by it's absolute value.</li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
4 1
5 -1 7 0

<b>Output:</b>
2 8 0 7
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-04-2014</td>
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