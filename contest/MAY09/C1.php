<?php require("../../includes/header.php"); ?><h1>Swapping mismatches</h1><div class="content">

<p>You are given a sequence <var>w</var> of integers. A mismatch is any such pair of neighbouring elements of sequence w[i] and w[i+1], that w[i]>w[i+1]+1.<br />
As long as there is any mismatch, you solve it by swapping the mismatching numbers. Given an input sequence, calculate one of the possible output mismatch-less sequences obtained by successively solving mistmatches by swapping.</p>
<h3>Input</h3>
<p>First - 1&lt;=<var>t</var>&lt;=10 - the number of tests. For each test: first - 1&lt;=<var>n</var>&lt;=100000. Then, <var>n</var> nonnegative integers.</p>
<h3>Output</h3>
<p>For each test, you should output exactly <var>n</var> integers.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4
4 3 2 1
4
4 3 1 2

<b>Output:</b>
4 3 2 1
1 4 3 2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>