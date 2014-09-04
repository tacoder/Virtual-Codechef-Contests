<?php require("../../includes/header.php"); ?><h1>Square It Up</h1><div class="content">

<p>A square piece of paper with integer dimensions NxN is placed with a corner at the origin and two of its sides along the x- and y-axes. Then, we cut it up respecting the following rules:
</p>
<p>1.We only make straight cuts between two points lying on different sides of the square, and having integer coordinates.</p>
<p>2.Two cuts cannot cross, but several cuts can meet at the same border point.</p>
<p>
3.Proceed until no more legal cuts can be made.</p>
<p>Counting any reflections or rotations as distinct, we call C(N) the number of ways to cut an NxN square.</p>
<h3>Input</h3>
<p>First line contains the number of test cases t(1&lt;=t&lt;=1000) and followed by t lines which contain various values of n(1&lt;=n&lt;=330).</p>
<h3>Output</h3>
<p>For each value of n, print value of C(n) MOD (10^8)</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1
2

<b>Output:</b>
2
30

<b>Explanation</b>
For n=2, answer is 
<img src="http://projecteuler.net/project/images/p_270_CutSquare.gif" />
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/killer17">killer17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2010</td>
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