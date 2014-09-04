<?php require("../../includes/header.php"); ?><h1>Matrix</h1><div class="content">
<p>You are given a matrix <b>A</b> that consists of <b>N</b> rows and <b>M</b> columns. Every number in the matrix is either zero or one. Calculate the number of such triples (<b>i</b>, <b>j</b>, <b>h</b>) where for all the pairs (<b>x</b>, <b>y</b>), where both <b>x</b> and <b>y</b> belong to [<b>1</b>; <b>h</b>] if <b>y &gt;= x</b>, <b>A[i+x-1][j+y-1]</b> equals to one. Of course, the square (<b>i</b>, <b>j</b>, <b>i+h-1</b>, <b>j+h-1</b>) should be inside of this matrix. In other words, we're asking you to calculate the amount of square submatrices of a given matrix which have ones on and above their main diagonal.</p>
<h3>Input</h3>
<p>The first line of the input consists of two integers - <b>N</b> and <b>M</b>.<br /><br />
The following <b>N</b> lines describe the matrix. Each line consists of <b>M</b> characters that are either zero or one.</p>
<h3>Output</h3>
<p>Output should consist of a single integer - the answer to the problem.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2 3
011
111

<b>Output:</b>
6
</pre><h3>Scoring</h3>
<p>Subtask 1 (9 points): 1 &lt;= <b>N,M</b> &lt;= 2000, All the numbers in the matrix are equal to one.<br /><br />
Subtask 2 (12 points): 1 &lt;= <b>N,M</b> &lt;= 10. <br /><br />
Subtask 3 (34 points): 1 &lt;= <b>N,M</b> &lt;= 30. <br /><br />
Subtask 4 (17 points): 1 &lt;= <b>N,M</b> &lt;= 150. <br /><br />
Subtask 5 (28 points): 1 &lt;= <b>N,M</b> &lt;= 2000. <br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-07-2013</td>
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