<?php require("../../includes/header.php"); ?><h1>Progressions</h1><div class="content">

<p>Do you remember those questions of Sequence and Series chapter of Class 11th in which we were required to find the next number of a particular sequence? If not then let us revise a few concepts first.</p>
<p>The sequences can be generally described by polynomials.  For e.g. the sequence 1, 2, 3, 4, 5 can be easily understood as a trivial polynomial. The next number is 6. But even more complex sequences, like 1, 2, 4, 7, 11, can be described by a polynomial, 1/2.n<sup>2</sup>-1/2.n+1 . Note that even if the members of the sequence are integers, polynomial coefficients may be any real numbers.</p>
<p>Polynomial is an expression in the following form:<br />
P(n) = a<sub>k</sub>.n<sup>k</sup>+a<sub>k-1</sub>.n<sup>k-1</sup>+...+a<sub>1</sub>.n+a<sub>0</sub> </p>
<p>If a<sub>k</sub> != 0, the number k is called a degree of the polynomial. Note that a constant function of the form P(n) = C is of degree 0, and the zero function P(n) = 0 is of degree -1. </p>
<h3>Input</h3>

<p>There are multiple test cases in the input. The input begins with a single integer which gives the number of test cases. Each test case consists of two lines. First line of each test case contains two integers L and Q separated by a space, 1 ≤ L &lt; 100, 1 ≤ Q &lt; 100, (L+Q) ≤ 100. Here L is the length of the given sequence and Q is the amount of numbers you are required to find to complete the sequence.
</p>
<p>The second line of each test case contains L integer numbers Z<sub>1</sub>, Z<sub>2</sub>, ..., Z<sub>L</sub> separated by a space. These numbers form the given sequence and it can be described by a polynomial P(n) such that for every x, Z<sub>x</sub> = P(x). Among these polynomials, we can find the polynomial Pmin with the lowest possible degree which is the required polynomial to be used for completing the sequence. </p>
<h3>Output</h3>

<p>For every test case, print Q integer numbers, which are the values completing the sequence according to the polynomial Pmin, separated by a space, i.e. you need to print Pmin(L+1), Pmin(L+2), ... , Pmin(L+Q).<br />
It is guaranteed that the results Pmin(L+x) will be non-negative integers. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
4 4
1 2 3 4
3 4
1 2 4
13 2
1 1 1 1 1 1 1 1 1 1 1 1 2
1 9
7

<b>Output:</b>
5 6 7 8
7 11 16 22
14 92
7 7 7 7 7 7 7 7 7

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ajitesh14">ajitesh14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-10-2010</td>
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