<?php require("../../includes/header.php"); ?><h1>Divisible Pairs</h1><div class="content">

<p>
Given <b>N</b> and <b>M</b> Dexter wants to know how many pairs <b>a,b(1 &lt;= a &lt; b &lt;=N)</b> are there such that <b>(a+b)</b> is divisible by <b>M</b>.<br />
For example when <b>N=4</b> and <b>M=3</b>, there are 2 possible pairs the sum of which is divisible by <b>M</b>  and they are (1,2) and (2,4).</p>
<h3>Input</h3>

<p>
First line of input contains <b>T(&lt;=100000)</b> which is the number of test cases. Each of the next <b>T</b> lines contains two integers <b>N(1 &lt;= N &lt;= 10^9)</b> and <b>M(2 &lt;= M &lt;= 10^9)</b>.</p>
<h3>Output</h3>

<p>
Output one line per testcase, the number of pairs <b>(a,b)</b> as described before.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 3
4 3
1 6

<b>Output:</b>
1
2
0

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rustinpiece">rustinpiece</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-03-2012</td>
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