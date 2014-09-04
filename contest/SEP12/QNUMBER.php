<?php require("../../includes/header.php"); ?><h1>Queries About Numbers</h1><div class="content">

<p>Chef loves number theory very much. Now it is time to solve a new kind of problem.</p>
<p>There is given a natural number <b>N</b>. Chef has to answer <b>Q</b> queries of the form <b>T K</b>.</p>
<p>Here <b>T</b> is the type of query and <b>K</b> is the natural number.<br />
<br />If <b>T=</b>1, Chef must find the number of natural numbers which is divisor of both <b>N</b> and <b>K</b>.<br />
<br />If <b>T=</b>2, Chef must find the number of natural numbers which is divisor of <b>N</b> and is divisible by <b>K</b>.<br />
<br />If <b>T=</b>3, Chef must find the number of natural numbers which is divisor of <b>N</b> and is not divisible by <b>K</b>.<br />
<br /><br />Chef can solve all these queries, but you will be hungry for night if this happens, because Chef will not have free time to cook a meal. Therefore you compromise with him and decided that everyone must do his/her own job. You must program and Chef must cook.</p>
<h3>Input</h3>
<p>There will be 2 numbers in the first line: <b>N</b> and <b>Q</b>.<br />
<br /><b>Q</b> lines follow with 2 numbers each: <b>T</b> and <b>K</b></p>
<h3>Output</h3>
<p>For each of the <b>Q</b> lines you must output the result for corresponding query in separat line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
12 6
1 6
1 14
2 4
2 3
3 12
3 14

<b>Output:</b>
4
2
2
3
5
6

</pre><h3>Explanation</h3>
<p>Numbers for each query:<br />
<br />{1,2,3,6}<br />
<br />{1,2}<br />
<br />{4,12}<br />
<br />{3,6,12}<br />
<br />{1,2,3,4,6}<br />
<br />{1,2,3,4,6,12}</p>
<h3>Constraints</h3>
<p>1&lt;=<b>N</b>&lt;=10<sup>12</sup><br />
<br />1&lt;=<b>Q</b>&lt;=5*10<sup>5</sup><br />
<br />1&lt;=<b>T</b>&lt;=3<br />
<br />1&lt;=<b>K</b>&lt;=10<sup>12</sup></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kamranmaharov ">kamranmaharov </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-07-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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