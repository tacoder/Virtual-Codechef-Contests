<?php require("../../includes/header.php"); ?><h1>A Prime Conjecture</h1><div class="content">

<p>Chef has been exploring prime numbers lately, and has recently made a conjecture resembling<br />
one of Goldbach's conjectures.<br />
Chef's conjecture is that any odd number greater than 61 can be expressed as the sum of<br />
a prime, a square of a prime, and a cube of a prime.<br />
He wants you to help verify his conjecture for small numbers.</p>
<p>Note: negative numbers are never considered to be prime, nor are 0 and 1.</p>
<h3>Input</h3>
<p>Input will consist of a series of odd numbers greater than 61 and less than 10<sup>6</sup>,<br />
one per line, terminated by the number 0 on a line by itself.<br />
There will be at most 1000 lines.</p>
<h3>Output</h3>
<p>For each odd number in the input, print 3 primes P<sub>1</sub>, P<sub>2</sub>, P<sub>3</sub> on a line,<br />
where P<sub>1</sub> + P<sub>2</sub><sup>2</sup> + P<sub>3</sub><sup>3</sup> is equal to the number from the input.<br />
If no such primes exist, print "0 0 0" instead (quotes for clarity).<br />
If there are multiple triplets of primes that satisfy the equation, print any such triplet.</p>
<h3>Sample Input</h3>
<pre>81
85
155
0
</pre><h3>Sample Output</h3>
<pre>5 7 3
73 2 2
5 5 5
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-04-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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