<?php require("../../includes/header.php"); ?><h1>Overlapping discs</h1><div class="content">

<p>You are given <var>n</var> discs on plane, of the same radius (<var>r</var>=1). Output the area of the part of the plane which is covered by <b>each</b> disc.</p>
<h3>Input</h3>
<p>First, 1&lt;=<var>t</var>&lt;=10, the number of tests. Each testcase is of the following form: 1&lt;=<var>n</var>&lt;=100000, then <var>n</var> pairs of floating point coordinates follow: -1000&lt;=<var>x<sub>i</sub>,y<sub>i&lt;=1000</sub></var>, representing the location of the <var>i</var>-th disc.</p>
<h3>Output</h3>
<p>For each testcase, output the total area covered by the intersection of all discs. Round the answer to 6 decimal digits after the point.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
1
2
0 0
0 1

<strong>Output:</strong>
1.228370
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 5 sec</td>
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