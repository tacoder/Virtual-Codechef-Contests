<?php require("../../includes/header.php"); ?><h1>Prime Permutations</h1><div class="content">

<p>A permutation of N <b>distinct</b> integers between 1 and N, both inclusive, is called a prime permutation of size N iff - for all i between 1 and N, the following condition holds:</p>
<p>The i<sup>th</sup> integer is the X<sup>th</sup> smallest integer in the first i integers, where X is either 1 or a prime number.</p>
<p>Your task is to find out how many prime permutations are there of size N.</p>
<h3>Input</h3>
<p>The first line contains a single integer T, denoting the number of test cases. Then T lines follow, each containing a single integer N.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of prime permutations of size N. Since the answers can be very large, output each answer modulo 1,000,000,007.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
1
2
3
4

<b>Output:</b>
1
2
6
18
</pre><h3>Constraints:</h3>
<p>
1 ≤ T ≤ 500,000<br />
1 ≤ N ≤ 5,000,000<br />
Each input file will not be larger than 4 MB (4,000,000,000 bytes) in size.
</p>
<p><b>WARNING!</b> Large I/O files. Use fast I/O methods.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/yellow_agony">yellow_agony</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-06-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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