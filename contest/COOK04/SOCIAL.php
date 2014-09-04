<?php require("../../includes/header.php"); ?><h1>Dinner Party Socializing</h1><div class="content">

<p>The chef is having a dinner party.<br />
He has N chairs and has invited N guests.<br />
The chef knows that if the guests are left to their own devices,<br />
they tend to sit in the same chairs and socialize with the same people all night.<br />
To prevent this, the chef has developed a plan to help people socialize.<br />
He will assign each chair a follow-up chair.<br />
At predetermined intervals during the party, the chef will ring a bell, instructing all guests<br />
to move from their current chair to its follow-up chair.</p>
<p>The chef will assign follow-up chairs randomly, with the restriction that no chair will<br />
be its own follow-up chair, and no two chairs will have the same follow-up chair.  That is, the chef randomly chooses one arrangement out of all assignments satisfying the two conditions.<br />
The chef wonders, after a certain number of ringings of the bell,<br />
what the expected number of guests who will be back in their original chairs<br />
will be.</p>
<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.<br />
Each test case consists of a single line with 2 integers N and R,<br />
the number of chairs and number of ringings, respectively.</p>
<h3>Output</h3>
<p>For each test case, output on a single line the expected number<br />
of guests who will be back in their original seats after exactly R<br />
ringings, rounded to 5 decimal places.</p>
<h3>Sample Input</h3>
<pre>4
2 1
2 2
4 2
5 3
</pre><h3>Sample Output</h3>
<pre>0.00000
2.00000
1.33333
1.36364
</pre><h3>Constraints</h3>
<p>T≤300<br />
2≤N≤50<br />
1≤R≤1000000</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>10-11-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>