<?php require("../../includes/header.php"); ?><h1>Grand son of Bonacci (TIEBREAKER)</h1><div class="content">

<p>The famous Fibonacci sequence as you all know<br />
 A<sub>1</sub> = 1, A<sub>2</sub> = 2, A<sub>i</sub> = A<sub>i-1</sub> + A<sub>i-2</sub> (i > 2).</p>
<p>
Now we represent a natural number <b>N</b> by the maximum numbers that are less than or equal to <b>N</b> in Fibonacci sequence: <b>N = b<sub>1</sub>*A<sub>1</sub> + b<sub>2</sub>*A<sub>2</sub> + &hellip;</b> </p>
<p>
Hence <b>N</b> can be represented as: b<sub>n</sub>b<sub>n-1</sub>&hellip;b<sub>1</sub>. For eg, 1 = 1<sub>f</sub>, 2 = 10<sub>f</sub>, etc. </p>
<p>
On writing all <b>N</b> successively in Fibonacci system, we will obtain a sequence like this: 110&hellip; We call this &ldquo;Fibonacci sequence till <b>N</b> in bit format&rdquo;.</p>
<!--Your task is counting the numbers of times that bit 1 appears in first <b>M</b> bits of this sequence.--><!--Your task is counting the numbers of times that bit 1 appears in first <b>M</b> bits of this sequence.--><h3>Input</h3>
<p><b>T</b>, the number of test cases, followed by <b>T</b> lines.
</p><p>Each line containing the positive integer <b>M</b>, where 0&lt;=<b>M</b>&lt;=10<sup>18</sup></p>
<h3>Output</h3>
<p><b>T</b> lines of output, each line contain the positive integer, denoting the count of the numbers of times that bit 1 appears in first <b>M</b> bits of this sequence.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2
8
10

<b>Output:</b>
2
4
6
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/s4p3r_c1n0s">s4p3r_c1n0s</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>5000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>