<?php require("../../includes/header.php"); ?><h1>Permutations</h1><div class="content">
<p> </p>
<p>There are N numbers which has to be arranged. You are given M constraints of the form (a, b) which means that a has to appear before b in the arrangement. Compute the number of arrangements possible modulo 1000000007. </p>
<p> </p>
<h3>Input</h3>
<p>Input description.</p>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains 2 integers <b>N</b> denoting the number of numbers to arrange and M denoting the number of constraints. Each of the next M lines has a pair of space separated integers a and b denoting a constraint.</p>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<p>For each test case, output the number of arrangements modulo 1000000007.</p>
<p> </p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b> N </b>≤ <b>20</b> </li>
<li><b>1</b> ≤ <b> M </b>≤ <b>1000</b> </li>
<li><b>1</b> ≤ <b> a,b </b>≤ <b>N</b> </li>

<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 1
1 3

<b>Output:</b>
3
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> There are 3 possible permutations in which 1 comes before 3: 1 2 3, 1 3 2, 2 1 3.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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