<?php require("../../includes/header.php"); ?><h1>Recover Polynomials</h1><div class="content">

<p>Venkatesh is an expert in mathematics, and loves playing around with polynomials during his free time. His favourite mathematical equation is pretty obviously: f(x) = a<sub>n</sub>*x<sup>n</sup> + a<sub>n-1</sub>*x<sup>n-1</sup> + ..... + a<sub>1</sub>*x + a<sub>0</sub>. His friend Suhash loves posing challenges to Venkatesh. Once they were discussing a particular problem at Snacky, which goes as follows:</p>
<p>Suhash would choose an integer 'n' as the degree of the polynomial and give Venkatesh the value of the polynomial at 'n+1' equally spaced points, i.e</p>
<p>he gives Venkatesh integers 'n', 'x<sub>0</sub>', 'd' and g<sub>0</sub>, g<sub>1</sub>, g<sub>2</sub>, ..., g<sub>n</sub> such that:</p>
<p>f(x<sub>0</sub>) = g<sub>0</sub>, f(x<sub>0</sub>+d) = g<sub>1</sub>, f(x<sub>0</sub>+2*d) = g<sub>2</sub>, ......f(x<sub>0</sub>+n*d) = g<sub>n</sub>. Now, Venkatesh is required to find the polynomial. Since he hates floating point values, he decides to find the polynomial in coefficient form, modulo a prime number. Can you help Venkatesh find the polynomial?</p>
<h3>Input</h3>
<p>The first line of input contains an integer 't', denoting the number of test cases.</p>
<p><br/>For each test case, the first line contains 3 space separated integers 'n', 'x<sub>0</sub>', 'd'. The next line contains 'n+1' space separated integers g<sub>0</sub>, g<sub>1</sub>, g<sub>2</sub>, .....g<sub>n</sub>.</br/></p>
<h3>Output</h3>
<p>For each test case output 'n+1' integers, denoting the coefficients of the polynomial a<sub>0</sub>, a<sub>1</sub>, a<sub>2</sub>,...... a<sub>n</sub>. All the coefficients that are printed should be non-negative and should be less than 1000000007.</p>
<p>You are required to find coefficients of the polynomial a<sub>0</sub>, a<sub>1</sub>, a<sub>2</sub>,...... a<sub>n</sub>, which satisfy the equations:</p>
<p>f(x<sub>0</sub>)%1000000007 = g<sub>0</sub>, f(x<sub>0</sub>+d)%1000000007 = g<sub>1</sub>, ....... f(x<sub>0</sub>+n*d)%1000000007 = g<sub>n</sub>. It is guarenteed that there is a unique solution for every test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
3 1 1
10 26 58 112

<b>Output:</b>
4 3 2 1

<b>Constraints:</b>
t &lt;= 25
1 &lt;= n &lt;= 1000
0 &lt;= x<sub>0</sub> &lt;= 100000
0 &lt; d  &lt;= 10000
0 &lt;= g<sub>i</sub> &lt;= 10^9

</pre><p><b>Explanation:</b></p>
<p>Test case 1: It can be seen that the polynomial f(x) = x<sup>3</sup> + 2*x<sup>2</sup> + 3*x + 4 satisfies the above input.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suh_ash2008">suh_ash2008</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>15 sec</td>
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