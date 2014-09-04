<?php require("../../includes/header.php"); ?><h1>Are you an arbitrageur</h1><div class="content">

<p>
The use of computers in the finance industry has been marked with controversy lately as programmed trading -- designed to take advantage of extremely small fluctuations in prices -- has been outlawed at many Wall Street firms. The ethics of computer programming is a fledgling field with many thorny issues.</p>
<p>
Arbitrage is the trading of one currency for another with the hopes of taking advantage of small differences in conversion rates among several currencies in order to achieve a profit. For example, if $1.00 in U.S. currency buys 0.7 British pounds currency, &pound;1 in British currency buys 9.5 French francs, and 1 French franc buys 0.16 in U.S. dollars, then an arbitrage trader can start with $1.00 and earn 1 X 0.7 X 9.5 X 0.16 = 1.064 dollars thus earning a profit of 6.4 percent.</p>
<p>
You will write a program that determines whether a sequence of currency exchanges can yield a profit as described above.</p>
<p>To result in successful arbitrage, a sequence of exchanges must begin and end with the same currency, but any starting currency may be considered.</p>
<h3>Input</h3>
<p>
The input file consists of one or more conversion tables. You must solve the arbitrage problem for each of the tables in the input file.</p>
<p>Each table is preceded by an integer n on a line by itself giving the dimensions of the table. The maximum dimension is 20; the minimum dimension is 2.</p>
<p>The table then follows in row major order but with the diagonal elements of the table missing (these are assumed to have value 1.0). Thus the first row of the table represents the conversion rates between country 1 and n-1 other countries, i.e., the amount of currency of country i ( 2&lt;=i&lt;=n ) that can be purchased with one unit of the currency of country 1.</p>
<p>Thus each table consists of n+1 lines in the input file: 1 line containing n and n lines representing the conversion table.</p>
<h3>Output</h3>
<p>
For each table in the input file you must determine whether a sequence of exchanges exists that result in a profit of more than 1 percent (0.01). If a sequence exists you must print the sequence of exchanges that results in a profit. If there is more than one sequence that results in a profit of more than 1 percent you must print a sequence of minimal length, i.e., one of the sequences that uses the fewest exchanges of currencies to yield a profit.</p>
<p>Because the IRS (United States Internal Revenue Service) notices lengthy transaction sequences, all profiting sequences must consist of n or fewer transactions where n is the dimension of the table giving conversion rates. The sequence 1 2 1 represents two conversions.</p>
<p>If a profiting sequence exists you must print the sequence of exchanges that results in a profit. The sequence is printed as a sequence of integers with the integer i representing the   line of the conversion table (country i). The first integer in the sequence is the country from which the profiting sequence starts. This integer also ends the sequence.</p>
<p>If no profiting sequence of n or fewer transactions exists, then the line<br />
&ldquo;No arbitrage sequence exists&rdquo;<br />
should be printed.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
Input 1
3
1.2 .89
.88 5.1
1.1 0.15
Input 2
4
3.1    0.0023    0.35
0.21   0.00353   8.13 
200    180.559   10.339
2.11   0.089     0.06111
Input 3
2
2.0
0.45


<b>Output:</b>
Output1 
1 2 1
Output 2
1 2 4 1
Output 3
no arbitrage sequence exists

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sakshigopal7">sakshigopal7</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-02-2012</td>
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