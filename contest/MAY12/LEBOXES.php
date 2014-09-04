<?php require("../../includes/header.php"); ?><h1>Little Elephant and Boxes</h1><div class="content">

<p>Little Elephant from Zoo of Lviv has <b>n</b> boxes. He don't know what is in the boxes, but he thinks that <b>i-th</b> box (0-based numeration) contains <b>V<sub>i</sub></b> dollars. The probability that <b>i-th</b> box will contain money is <b>P<sub>i</sub></b> percents. Instead of money <b>i-th</b> box may contain a single diamond (with the probability <b>100-P<sub>i</sub></b> percents).</p>
<p>There are <b>m</b> things to buy, numbered from <b>0</b> to <b>m-1</b>, <b>j-th</b> thing costs exactly <b>C<sub>j</sub></b> dollars plus <b>D<sub>j</sub></b> diamonds. Little Elephant is very smart and if he has some number of dollars and diamonds he will always buy the maximal possible number of things he can afford. Note that there is just one copy of all <b>m</b> things.</p>
<p>Help Little Elephant to find the expected number of things he will buy.</p>
<h3>Input</h3>

<p>First line of the input contains single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. First line of each test case contains pair of integers <b>n</b> and <b>m</b>. Next <b>n</b> lines of each test case contain pairs of integers <b>V<sub>i</sub></b> and <b>P<sub>i</sub></b>, one pair per line. Next <b>m</b> lines of each test case contain pairs of integers <b>C<sub>j</sub></b> and <b>D<sub>j</sub></b>, one pair per line.</p>
<h3>Output</h3>

<p>In <b>T</b> lines print <b>T</b> real numbers - the answers for the corresponding test cases. Round each number to <b>4</b> digits after decimal point.</p>
<h3>Constraints</h3>

<p>
1 &lt;= <b>T</b> &lt;= 5
</p>
<p>
2 &lt;= <b>n</b> &lt;= 30
</p>
<p>
1 &lt;= <b>m</b> &lt;= 30
</p>
<p>
1 &lt;= <b>V<sub>i</sub></b>, <b>C<sub>j</sub></b> &lt;= 10^7
</p>
<p>
0 &lt;= <b>D<sub>j</sub></b> &lt;= 30
</p>
<p>
0 &lt;= <b>P<sub>i</sub></b> &lt;= 100</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 2
2 50
2 100
2 0
2 0
2 2
2 100
2 50
0 2
0 1

<b>Output:</b>
1.5000
0.5000

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-04-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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