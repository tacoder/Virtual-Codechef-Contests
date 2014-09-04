<?php require("../../includes/header.php"); ?><h1>Finding Primes</h1><div class="content">

<p>One commonly used method to calculate all primes in the range [2..n] is to start with the number 2, mark it as prime, and mark all its multiples (excluding itself) as not prime. Then, we find the next smallest unmarked number, mark it as prime, and mark all its multiples (excluding itself) as not prime. Continuing this way, we get a list of all primes. </p>
<p>Now, let us say that we modified the above algorithm, and start with n instead of 2. We mark it as prime, and mark all its factors (excluding itself) as not prime. Then we find the next greatest unmarked number, mark it as prime, and mark all its factors (excluding itself) as not prime. Continuing this way, we get a list of all primes.</p>
<p>Now you wonder, given a value of n, how many numbers are such that both the above algorithms will mark them as prime?</p>
<h3>Input :</h3>
<p>The first line contains T the number of test cases. Each of the next T lines contain an integer n.</p>
<h3>Output :</h3>
<p>Output T lines, one for each test case, containing the required answer.</p>
<h3>Sample Input :</h3>
<pre>
3
2
4
7
</pre><h3>Sample Output :</h3>
<pre>
1
1
2
</pre><h3>Constraints :</h3>
<p>1 &lt;= T &lt;= 100000</p>
<p>2 &lt;= n &lt;= 10000000</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/fctrl">fctrl</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>