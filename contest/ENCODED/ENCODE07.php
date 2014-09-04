<?php require("../../includes/header.php"); ?><h1>Mobius Multiplications</h1><div class="content">

<p>The classical Mobius function µ(n) is an important multiplicative function in number theory and combinatorics. µ(n) is defined for all positive integers n and has its values in {-1, 0, 1} depending on the factorization of n into prime factors. It is defined as follows:</p>
<p>* µ(n) = 1 if n is a square-free positive integer with an even number of prime factors.</p>
<p>* µ(n) = -1 if n is a square-free positive integer with an odd number of prime factors.</p>
<p>* µ(n) = 0 if n is not square-free.</p>
<p>Given N, find the number of tuples (a,b) with 1&lt;=a&lt;=N and 1&lt;=b&lt;=N, such that µ(a*b) = µ(a) * µ(b)</p>
<h3>Input</h3>
<p>The first line of input contains a number T(1&lt;=T&lt;=10), the number of test cases.<br />
Then T lines follow, each containing a single number N(1&lt;=N&lt;=100000).</p>
<h3>Output</h3>

<p>Output T lines, one line for each input, containing the number of tuples satisfying stated property.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1
2
4


<b>Output:</b>
1
3
14

<b>Explanation:</b>
In case of N=4, only the tuples (2,2) and (3,3) do not satisfy the required condition, the other 14 tuples do.

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/encoded_admin">encoded_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2011</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, ICON, JAR, JAVA, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>