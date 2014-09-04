<?php require("../../includes/header.php"); ?><h1>Little Elephant and Exams</h1><div class="content">
<p>Little Elephant from the Zoo of Lviv hates exams. Since Little Elephant lives in the Ukraine, he is going to take exams called 'ZNO'. Help him.</p>
<p>Little Elephant from the Zoo of Lviv hates exams. Since Little Elephant lives in Ukraine, he is going to take exams called 'ZNO'. Help him.</p>
<p>There will be <b>n</b> tickets on the table. Each ticket has a number written on it. The <b>i</b>-th ticket can be numbered <b>A<sub>i</sub></b> with probability <b>P<sub>i</sub></b> percent and with probability <b>100-P<sub>i</sub></b> percent it can be numbered <b>B<sub>i</sub></b>. It can not have any other number. A numbering of tickets on the table is correct if and only if all tickets have distinct ticket numbers.</p>
<p>Help Little Elephant find the probability that the numbering will be correct.</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. The first line of each test case contains a single integer <b>n</b> - the number of tickets on the table. <b>n</b> lines will follow. Each of these lines contains three integers: <b>P<sub>i</sub></b>,  <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>Output <b>T</b> lines, each containing a single real number - answer for the corresponding test case. Rounding errors less than <b>10<sup>-6</sup></b> will be ignored.</p>
<h3>Constraints</h3>
<p> </p>
<p>1 &lt;= <b>T</b> &lt;= 10</p>
<p>1 &lt;= <b>n</b> &lt;= 50</p>
<p>1 &lt;= <b>A<sub>i</sub>, B<sub>i</sub></b> &lt;= 16</p>
<p>0 &lt;= <b>P<sub>i</sub></b> &lt;= 100</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
50 1 2
50 2 1
3
100 1 3
47 2 1
74 3 2

<b>Output:</b>
0.500000000
0.347800000

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-04-2012</td>
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