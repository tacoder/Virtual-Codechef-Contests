<?php require("../../includes/header.php"); ?><h1>Lizard pairs</h1><div class="content">
<p> </p>
<p>
N lizards are standing in a line, each of them is either facing left or right with equal probability. A pair of indices (i,j) (iafraid pair if lizard at index i is facing right, and lizard at index j is facing left.<br />
What is the expected number of afraid pairs?
</p>
<p> </p>
<h3>Input</h3>
<p>Input description.</p>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. For each case there is a single line containing N, the number of lizards.</p>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<p>For each test case, output a single line containing the expected number of lizards as an irreducible fraction. See the sample output for the exact format.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b> T </b> = 1000 </li>
<li> <b> 1 </b> &lt;= <b> N </b> &lt;= <b> 10^9 </b> </li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
3

<b>Output:</b>
1/4
3/4
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> There are four possible ways: LL, LR, RR, RL. Of these only 1 has an afraid pair. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>