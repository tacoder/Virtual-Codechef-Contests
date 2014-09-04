<?php require("../../includes/header.php"); ?><h1>Little Elephant and T-Shirts</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/TSHIRTS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/TSHIRTS.pdf">Russian</a>.</h3>
<p>Little Elephant and his friends are going to a party. Each person has his own collection of T-Shirts. There are <b>100</b> different kind of T-Shirts. Each T-Shirt has a unique id between <b>1</b> and <b>100</b>. No person has two T-Shirts of the same ID.</p>
<p>They want to know how many arrangements are there in which no two persons wear same T-Shirt. One arrangement is considered different from another arrangement if there is at least one person wearing a different kind of T-Shirt in another arrangement.</p>

<h3>Input</h3>
<p>First line of the input contains a single integer <b> T </b> denoting number of test cases. Then <b>T</b> test cases follow.</p>
<p>For each test case, first line contains an integer <b>N</b>, denoting the total number of persons. Each of the next <b>N</b> lines contains at least <b>1</b> and at most <b>100</b> space separated distinct integers, denoting the ID's of the T-Shirts <b>i</b><sup>th</sup> person has.</p>
<h3>Output</h3>
<p>For each test case, print in single line the required number of ways modulo <b>1000000007 = 10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ N ≤ 10</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
3 5
8 100
3
5 100 1
2
5 100

<b>Output:</b>
4
4
</pre><h3>Explanation</h3>
<p>For the first case, <b>4</b> possible ways are <b>(3,8)</b>, <b>(3,100)</b>, <b>(5,8)</b> and <b>(5,100)</b>.For the second case, <b>4</b> possible ways are <b>(5,2,100)</b>, <b>(100,2,5)</b>, <b>(1,2,100)</b>, and <b>(1,2,5)</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>