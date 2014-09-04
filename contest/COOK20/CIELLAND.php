<?php require("../../includes/header.php"); ?><h1>Ciel and a new island</h1><div class="content">

<p>
Chef Ciel develops a new island with her restaurants.<br />
In the island, Ciel intends to built <strong>N</strong> restaurants, and the coordinate of the <strong>i</strong>-th restaurant will be (<strong>x<sub>i</sub></strong>, <strong>y<sub>i</sub></strong>).<br />
In addition, Ciel is going to create <strong>K</strong> roads, whose location is not decided yet.<br />
Each road must be a infinitely long straight line.
</p>
<p>
Let <strong>d<sub>i</sub></strong> be the distance between the <strong>i</strong>-th restaurant and the nearest road from the <strong>i</strong>-th restaurant.<br />
Ciel would like to create <strong>K</strong> roads which minimize max(<strong>d</strong><sub>1</sub>, <strong>d</strong><sub>2</sub>, ..., <strong>d<sub>N</sub></strong>).<br />
Your task is to calculate the minimal value of max(<strong>d</strong><sub>1</sub>, <strong>d</strong><sub>2</sub>, ..., <strong>d<sub>N</sub></strong>).
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases in the input file.<br />
Then <strong>T</strong> test cases follow.<br />
The next line contains 2 integers <strong>N</strong> and <strong>K</strong>.<br />
Then next <strong>N</strong> lines contain 2 integers <strong>x<sub>i</sub></strong> and <strong>y<sub>i</sub></strong>.
</p>
<h3>Output</h3>
<p>
For each test case, print the minimal value of max(<strong>d</strong><sub>1</sub>, <strong>d</strong><sub>2</sub>, ..., <strong>d<sub>N</sub></strong>).<br />
Your answer must have an absolute error no more than 0.000001 (10<sup>-6</sup>).
</p>
<h3>Constraints</h3>
<p>
1 ≤ <strong>K</strong> ≤ <strong>N</strong> ≤ 13<br />
-100 ≤ <strong>x<sub>i</sub></strong>, <strong>y<sub>i</sub></strong> ≤ 100<br />
If <strong>i</strong> ≠ <strong>j</strong>, then (<strong>x<sub>i</sub></strong>, <strong>y<sub>i</sub></strong>) ≠ (<strong>x<sub>j</sub></strong>, <strong>y<sub>j</sub></strong>)<br />
The sum of <strong>N</strong> in one input file does not exceed 30.
</p>
<h3>Sample Input</h3>
<pre>2
8 1
20 1
20 -1
-20 1
-20 -1
1 20
1 -20
-1 20
-1 -20
8 2
20 1
20 -1
-20 1
-20 -1
1 20
1 -20
-1 20
-1 -20</pre><h3>Sample Output</h3>
<pre>14.849242404868
0.707106781137</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-03-2012</td>
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