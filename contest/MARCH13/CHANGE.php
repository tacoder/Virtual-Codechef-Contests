<?php require("../../includes/header.php"); ?><h1>Making Change</h1><div class="content">

<p>Chef recently visited a strange land with strange currency.  One day Chef needed to make change to pay for an item with coins, and wondered how many ways it could be done, assuming an infinite supply of each type of coins.  Two ways are considered different if there is some coin that appears a different number of times in each sum.  The answer may be very large, so Chef only needs to know the remainder when the answer is divided by <b>1000000007</b> (<b>10<sup>9</sup> + 7</b>).</p>
<p>Chef noticed something curious about the currency in question: not only do all coins have different denominations, but no two denominations of coin share any common factor other than 1.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two space-separated integers <b>N</b> and <b>C</b>, denoting the number of different coin types and the desired total coinage, respectively. The second line contains <b>N</b> space-separated integers <b>D<sub>1</sub>, D<sub>2</sub>, ..., D<sub>N</sub></b>, denoting the denominations of the coins.</p>
<h3>Output</h3>
<p>For each test case, output on a separate line the number of ways to make the desired amount of change, modulo <b>1000000007</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>C</b> ≤ <b>10<sup>100</sup></b></li>
<li><b>1</b> ≤ <b>D<sub>i</sub></b> ≤ <b>500</b></li>
<li>All <b>D<sub>i</sub></b> are pairwise distinct and pairwise relatively prime.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 16
3 4 5
2 2000000014
1 2
3 380134
23 5 2

<b>Output:</b>
4
1
314159265
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> There are 4 ways to make a total of 16 using coins with values 3, 4 and 5:</p>
<ul>
<li>16 = 4 + 4 + 4 + 4</li>
<li>16 = 3 + 4 + 4 + 5</li>
<li>16 = 3 + 3 + 5 + 5</li>
<li>16 = 3 + 3 + 3 + 3 + 4</li>
</ul>
<p> </p>
<p><b>Example case 2.</b> There are 1000000008 ways to make the desired change.  The remainder when divided by 1000000007 is 1.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-01-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>