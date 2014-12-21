<?php require("../../includes/header.php"); ?><h1>Help Chandan Count Triplets</h1><div class="content">
<p> </p>
<h3>Problem description.</h3>
<p>Chandan is always excited to solve algorithmic problem. He finds a contest going on at codechef. One of the problems in the contest asks him to  find the number of <b>unique triplets</b> of integers from a given array A such that their <b>sum is less than or equal to</b> a given integer M.<br />
Two triplets are considered same if all elements in them are same.<br />
Chandan asks you to help him solve the problem.
</p>
<h3>Input</h3>
<p>The first line of input consists of <b>T</b> denoting the number of test cases.<br /> Then the test cases follow. Each test case is described by 2 lines.<br /> The first line consists of two space separated integers <b>N</b> denoting the number of elements in array <b>A</b> and <b>M</b> the integer to which the sum of elements in triplets should evaluate to.<br /><br />
The second line consists of N space separated integers.
</p>
<h3>Output</h3>
<p>For each test case, output a single line denoting the answer for the question.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^3</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>3*(10^6)</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10^6</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1<br />
5 6<br />
1 2 3 1 4<br />

<b>Output:</b>
4
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br /><br />
The possible triplets are (1, 2, 3), (1, 2, 1),  (1, 3, 1), (1, 1, 4)
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-10-2014</td>
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