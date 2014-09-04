<?php require("../../includes/header.php"); ?><h1>Selling Tickets</h1><div class="content">

<p>Chef has prepared a large number of unique dishes for a fancy dinner.<br />
Patrons from all over the world are interested in purchasing tickets for the dinner.<br />
Each interested patron has specified 2 dishes that they are interested in eating for dinner.<br />
As long as a patron is served at least one of their 2 preferred dishes, they will be happy.<br />
Chef wants to sell as many tickets as possible while being able to guarantee that all patrons are happy.<br />
Unfortunately, Chef has no control over who buys the tickets, only how many will be sold.<br />
How many tickets can Chef sell?</p>
<h3>Input</h3>
<p>
Input will begin with an integer T, the number of test cases.<br />
Each test case begins with 2 integers N and M,<br />
the number of dishes and number of patrons, respectively.<br />
M lines follow, each containing 2 distinct integers between 1 and N, inclusive.<br />
The numbers on the i-th line represent the preferred dishes of the i-th patron.<br />
Each test case is followed by a blank line.
</p>
<h3>Output</h3>
<p>For each test case, output a single integer indicating the maximum number of tickets<br />
Chef can sell while still being able to guarantee that every patron will be happy no matter which patrons buy tickets.</p>
<h3>Sample Input</h3>
<pre>3
6 4
1 2
1 2
3 4
5 6

6 5
1 2
1 2
1 2
3 4
5 6

4 5
1 2
1 3
1 4
2 3
3 4
</pre><h3>Sample Output</h3>
<pre>
4
2
4

</pre><p>
In the second example, Chef cannot sell 3 tickets because it's possible that 3 patrons will arrive all preferring dishes 1 or 2.
</p>
<h3>Constraints</h3>
<ul>
<li>T ≤ 15</li>
<li>2 ≤ N ≤ 200</li>
<li>0 ≤ M ≤ 500</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
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