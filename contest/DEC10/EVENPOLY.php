<?php require("../../includes/header.php"); ?><h1>Even Coefficients</h1><div class="content">

<p>
In this problem, you are given a polynomial P over multiple variables with integer coefficients and your task is simply to determine if all of the coefficients are even or not.</p>
<p>
Unfortunately, you will not be given an explicit description of the polynomial. Rather, you will be given a square matrix whose entries are polynomials and the polynomial P is the determinant of this matrix.</p>
<p>
Here, we are defining the determinant of a matrix by the usual cofactor expansion formula. That is, say the matrix M is of size d x d and denote the polynomial located at row i, column j by M<sub>i,j</sub> for any i,j between 1 and d. For a permutation X on the set {1,2,...,d}, let sgn(X) be (-1)<sup>inv(X)</sup> where inv(X) is the number of pairs 1 ≤ i &lt; j ≤ d with X(i) &gt; X(j) (<i>i.e.</i> the number of inversions of X). Then the determinant of M is the sum, over all permutations X, of the products sgn(X)M<sub>1,X(1)</sub>M<sub>2,X(2)</sub>...M<sub>d,X(d)</sub>.</p>
<h3>Input</h3>

<p>
The first line consists of a value k ≤ 30 indicating the number of test cases. Each test case begins with a single line containing an integer d, 1 ≤ d ≤ 40 indicating the order of the matrix. Then, d lines follow where each contains d strings describing the polynomials. The j'th string on the i'th line describes entry M<sub>i,j</sub> of the polynomial matrix. The d strings on a single line are separated by a single space.</p>
<p>
Each polynomial is given by a string of length between 1 and 100. A monomial is either the string '0', or the string '1', or a string of lowercase characters 'a','b', ..., 'z'. A polynomial is then a sequence of monomials separated by '+' with no spaces.  The monomials '0' or '1' are simply the respective constant polynomials and a monomial consisting of a string of lowercase letters is simply the product of variables a, b, ..., z where the power of a letter, say L, is exactly the number of times it appears in the string. For example, "1+aba" is the string representing the polynomial 1+a<sup>2</sup>b and "0+xy+yx" represents the polynomial 2xy.</p>
<h3>Output</h3>

<p>
The output for each test case consists of a single line containing the message "All Even" or "Some Odd" to indicate if all coefficients of the polynomial represented by the determinant of the matrix are even or if there is at least one odd coefficient, respectively.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2
x+1 0
0 x
3
x y z
y z x
xx+xy xy+xz xx+xz
1
a+a

<b>Output:</b>
Some Odd
All Even
All Even
</pre><h3>Explanation of Sample Data</h3>
<p>The determinant in the first test case is simply x<sup>2</sup>+x which has two odd coefficients. A tedious calculation shows that the determinant in the second test case is actually 0. The last test case has determinant 2a, so all coefficients are even.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-11-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>