<?php require("../../includes/header.php"); ?><h1>Stepping Numbers</h1><div class="content">

<p>Call a number stepping if adjacent digits, as well as the first and last digits, differ by one. How many n-digit base 11 stepping numbers are there? Give your answer modulo 4294967143.</p>
<p>For example, 8789A9 is a 6-digit base 11 stepping number. 9A0A and 234 are not stepping.</p>
<h3>Input</h3>

<p>The first line contains an integer T, the number of test cases (about 20000). Each of the next T lines contains an integer n (2≤ n &lt; 2<sup>64</sup>). </p>
<h3>Output</h3>

<p>Output the answer to each test case on a separate line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2
4
6
10

<b>Output:</b>
19
54
171
1958
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/MichaelD">MichaelD</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/innocentboy">innocentboy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-07-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>