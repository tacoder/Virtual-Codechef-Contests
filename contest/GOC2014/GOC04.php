<?php require("../../includes/header.php"); ?><h1>DMS Mathematica</h1><div class="content">
<h3>Problem description</h3>
<p>Chef Boogy has now turned very fond of reading books written by ancient Greek and roman mathematicians. One day he discovered a formula called DMS Mathematica in one of his books. The formula was to calculate the value of a function X which was as following D(&lt; a1,a2,a3,..,an &gt;) = |a1-a2| + |a2-a3| + ... +|an-1-an|  where &lt; a1,a2,a3,...,an &gt; is a sequence of n distinct integers.<br />
Boogy is particularly interested in knowing what could possibly be the maximum value of X for a given set of integers S. It's given that, S = set of all possible permutation that can be made with n different integers and the range of integers would be [1...n].<br />
Now help Boogy to find the maximum value of X which can be obtained, if he tries each and every permutation from the set S as an argument for X. </p>
<h3>Input</h3>
<p>There will be T&lt;=105 test cases. For each case there is a single line. Each single line contains an integer 1&lt;=n&lt;=109 which specifies the number of distinct integers. The integers are in the range [1..n]. </p>
<h3>Output</h3>
<p>For each test case you have to output the required answer in a single line. .</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
2
<b>Output:</b>
1
1
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/giriraj">giriraj</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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