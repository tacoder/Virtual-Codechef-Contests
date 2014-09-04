<?php require("../../includes/header.php"); ?><h1>Hotel Bytelandia</h1><div class="content">

<p>A holiday weekend is coming up,<br />
and Hotel Bytelandia needs to find out if it has enough rooms to accommodate all potential guests.<br />
A number of guests have made reservations.<br />
Each reservation consists of an arrival time, and a departure time.<br />
The hotel management has hired you to calculate the maximum number of guests that will be at the hotel simultaneously.<br />
Note that if one guest arrives at the same time another leaves, they are never considered to be at the hotel simultaneously<br />
(see the second example).
</p>
<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.<br />
Each test case begins with an integer N, the number of guests.<br />
Two lines follow, each with exactly N positive integers.<br />
The i-th integer of the first line is the arrival time of the i-th guest,<br />
and the i-th integer of the second line is the departure time of the i-th guest<br />
(which will be strictly greater than the arrival time).
</p>
<h3>Output</h3>
<p>For each test case, print the maximum number of guests that are simultaneously at the hotel.</p>
<h3>Sample Input</h3>
<pre>3
3
1 2 3
4 5 6
5
1 2 3 4 5
2 3 4 5 6
7
13 6 5 8 2 10 12
19 18 6 9 9 11 15
</pre><h3>Sample Output</h3>
<pre>3
1
3
</pre><h3>Constraints</h3>
<ul>
<li>T≤100</li>
<li>N≤100</li>
<li>All arrival/departure times will be between 1 and 1000, inclusive</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-09-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>