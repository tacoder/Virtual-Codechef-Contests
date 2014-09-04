<?php require("../../includes/header.php"); ?><h1>Adding Least Common Multiples</h1><div class="content">

<p>Given A and B, compute the sum of lcm(a, b) over all pairs of positive integers a and b such that:</p>
<p>(1)  a&lt;=A and b&lt;=B. <br />
(2) There is no integer n&gt;1 such that n<sup>2</sup> divides both a and b. </p>
<p>Give your answer modulo 2<sup>30</sup>.</p>
<h3>Input</h3>

<p>The first line contains the number of test cases, t (about 200). Each of the next t lines contains two space-separated integers A and B (1&lt;=A, B&lt;=4000000).</p>
<h3>Output</h3>

<p>Print the answer to each test case on a separate line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

4
2 4
3 3
6 5
8 3

<b>Output:</b>

24
28
233
178
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/MichaelD">MichaelD</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anshuman_singh">anshuman_singh</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-05-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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