<?php require("../../includes/header.php"); ?><h1>Lucky Days</h1><div class="content">

<p>
Chef Ciel defined a sequence <strong>S</strong> as follows:<br />
<strong>S</strong>[1] = <strong>A</strong><br />
<strong>S</strong>[2] = <strong>B</strong><br />
<strong>S</strong>[<strong>i</strong>] = (<strong>X</strong>*<strong>S</strong>[<strong>i</strong>-1] + <strong>Y</strong>*<strong>S</strong>[<strong>i</strong>-2] + <strong>Z</strong>) mod <strong>P</strong>, for <strong>i</strong> &gt;= 3
</p>
<p>
Ciel considers <strong>C</strong> is a lucky number, and the <strong>i</strong>-th day is a lucky day if and only if <strong>S</strong>[<strong>i</strong>] = <strong>C</strong>.<br />
Ciel's restaurant may have special events in a lucky day.
</p>
<p>
By the way, your work is calculating the numbers of lucky days in intervals.<br />
That is, for each <strong>Q</strong> intervals [<strong>L</strong>[<strong>i</strong>], <strong>R</strong>[<strong>i</strong>]],<br />
you should calculate the number of the integers <strong>k</strong> which satisfy <strong>L</strong>[<strong>i</strong>] &lt;= <strong>k</strong> &lt;= <strong>R</strong>[<strong>i</strong>] and <strong>S</strong>[<strong>k</strong>] = <strong>C</strong>.
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
The first line for each test case has 8 integers <strong>A</strong>, <strong>B</strong>, <strong>X</strong>, <strong>Y</strong>, <strong>Z</strong>, <strong>P</strong>, <strong>C</strong> and <strong>Q</strong>.<br />
The next <strong>Q</strong> lines have 2 integers <strong>L</strong>[<strong>i</strong>] and <strong>R</strong>[<strong>i</strong>].
</p>
<h3>Output</h3>
<p>
For each interval, print the number of lucky days in the interval.
</p>
<h3>Constraints</h3>
<p>
1 &lt;= <strong>T</strong> &lt;= 2<br />
2 &lt;= <strong>P</strong> &lt;= 10007<br />
<strong>P</strong> is a prime.<br />
0 &lt;= <strong>A</strong>, <strong>B</strong>, <strong>X</strong>, <strong>Y</strong>, <strong>Z</strong>, <strong>C</strong> &lt; <strong>P</strong><br />
1 &lt;= <strong>Q</strong> &lt;= 20000 (2*10^4)<br />
1 &lt;= <strong>L</strong>[<strong>i</strong>] &lt;= <strong>R</strong>[<strong>i</strong>] &lt;= 1000000000000000000 (10^18)
</p>
<h3>Sample Input</h3>
<pre>2
1 1 1 1 0 2 0 6
1 1
2 2
3 3
4 4
5 5
6 6
1 2 4 5 3 17 4 3
5 8
5 58
58 5858</pre><h3>Sample Output</h3>
<pre>0
0
1
0
0
1
0
4
362</pre><h3>Output details</h3>
<p>
In the first case:<br />
<strong>S</strong>[1] = <strong>A</strong> = 1<br />
<strong>S</strong>[2] = <strong>B</strong> = 1<br />
<strong>S</strong>[3] = (<strong>S</strong>[2] + <strong>S</strong>[1]) mod 2 = (1 + 1) mod 2 = 0<br />
<strong>S</strong>[4] = (<strong>S</strong>[3] + <strong>S</strong>[2]) mod 2 = (0 + 1) mod 2 = 1<br />
<strong>S</strong>[5] = (<strong>S</strong>[4] + <strong>S</strong>[3]) mod 2 = (1 + 0) mod 2 = 1<br />
<strong>S</strong>[6] = (<strong>S</strong>[5] + <strong>S</strong>[4]) mod 2 = (1 + 1) mod 2 = 0<br />
<strong>S</strong>[7] = (<strong>S</strong>[6] + <strong>S</strong>[5]) mod 2 = (0 + 1) mod 2 = 1
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-10-2011</td>
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