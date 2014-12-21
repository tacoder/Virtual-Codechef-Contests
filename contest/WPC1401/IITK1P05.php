<?php require("../../includes/header.php"); ?><h1>Maximum Average Sub-Array</h1><div class="content">
<p>
You are given a sequence of N integers, a[1], a[2], , , , a[N].  <br />
Find out the maximum possible average value of sub-sequences of array a.
</p>
<h3>Input</h3>
<p>
First line of the input contains a single integer T denoting number of test cases
</p>
<p>
For each test case, first line contains a single integer denoting N, the number of elements of array a. <br />
Next line contains N space separated integers denoting the array a.
</p>
<h3>Output</h3>
<p>
Print T lines each line containing the maximum possible average value. Your answer will be considered correct if it's absolute or relative error is less than 10 <sup>-6</sup>.
</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ T ≤ 10 </li>
<li>2 ≤ N ≤ 1000</li>
<li>1 ≤ A[i] ≤  10^5</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
5
1 3 2 1 3
<b>Output:</b>
3
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Average value of subsequence 3, 3 is 3. This is the maximum possible average value.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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