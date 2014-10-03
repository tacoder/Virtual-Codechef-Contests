<?php require("../../includes/header.php"); ?><h1>Grid painting</h1><div class="content">
<p>
You have a rectangular grid of dimension N x M. You need to paint the grid with black or white color such that there is no rectangle of size X x Y having same color in each cell. Find the number of ways to paint the grid, modulo 1000000007.
</p>
<h3>Input</h3>
<p>
A single line containing 4 space separated integers, N, M, X and Y. </p>
<h3>Output</h3>
<p>
A single line containing the answer modulo 1000000007
</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ X ≤ 3</li>
<li>1 ≤ N ≤ 10^6</li>
<li>2 ≤ Y ≤ M </li>
<li>If (X = 1), then M ≤ 10^3, no other constraint on N </li>
<li>If (X = 2), then M ≤ 7, no other constraint on N </li>
<li>If (X = 3), then N ≤ 8, M ≤ 5</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2 2 1 2
<br />
<b>Output:</b>
4
<br />

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>