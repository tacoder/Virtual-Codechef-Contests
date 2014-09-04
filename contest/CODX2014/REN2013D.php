<?php require("../../includes/header.php"); ?><h1>Subset Sum</h1><div class="content">
<p> </p>
<p>You have been given a set of positive integers.Let the minimum element be LO and sum of all elements in set be HI.</p>
<p>
Your task is to find out if, for each integer X, ( where X is between LO and HI inclusive ) can a subset of the set be chosen such that the sum of elements in this subset is equal to X.</p>
<h3>Input</h3>
<p>
The first line of the test file contains a single integer T ( T&lt;=100 ) the number of test cases.</p>
<p>
The first line of each test case contains a single integer N(N&lt;=10^5) the number of elements in the set.<br />
The next line contains a space separated list of the elements of the set.Each element will be between 0 and 10^9.</p>
<h3>Output</h3>
<p>For each test case print "YES" (without quotes) on a single line if it is possible to select the required subsets for each value of X. Print "NO" (without quotes) on a single line otherwise.
</p>
<h3>Example</h3>
<pre><b>Input:</b>

2
5
4 8 2 1 16
4
5 1 2 7


<b>Output:</b>
YES
NO
</pre><p> </p>
<h3>Explanation</h3>
<p>
For first test case all values between 1 and 31 can be made using the given numbers.</p>
<p>
For the second test case for values between 1 and 15 the values 4 and 11 cannot be made.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitrc17">amitrc17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
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