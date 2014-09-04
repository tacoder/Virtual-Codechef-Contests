<?php require("../../includes/header.php"); ?><h1>Rectangular Queries</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/RECTQUER.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/RECTQUER.pdf">Russian</a>.</h3>
<p>This time Chef does not want to bother you with long story, so the problem description will be as short as possible. You are given a square matrix <b>A</b>, which has <b>N</b> rows and <b>N</b> columns. Chef wants you to answer following queries: given a rectangular submatrix with upper-left corner in (<b>X<sub>1</sub></b>,  <b>Y<sub>1</sub></b>) and lower-right corner in  (<b>X<sub>2</sub></b>, <b>Y<sub>2</sub></b>), and you are to count number of disctinct elements in this submarix, i.e count number of such distinct <b>A<sub>i, j</sub></b> that (<b>X<sub>1</sub></b> <b> ≤ i ≤ </b> <b>X<sub>2</sub></b>) and (<b>Y<sub>1</sub></b> <b> ≤ j ≤ </b> <b>Y<sub>2</sub></b>). [You may assume that <b>i</b> is looping through the rows and <b>j</b> through columns]
</p>
<h3>Input</h3>
<p>The first line of the input file will contain single integer <b>N</b>. Then <b>N</b> lines with <b>N</b> numbers in each follow - description of the matrix. The rows are indexed from top to bottom that is top row has index 1, and columns are indexed from left to right that is left column has index 1. There is a single integer <b>Q</b> that follows on the next line right after the matrix description - number of Chef's queries. Then <b>Q</b> queries follow. Each query is described by four integers - <b>X<sub>1</sub>, Y<sub>1</sub>, X<sub>2</sub></b>, and <b>Y<sub>2</sub></b>.</p>
<h3>Output</h3>
<p>Output <b>Q</b> integers, each in a separate line - answers for the queries. </p>
<h3>Constraints</h3>
<p><ul>
<li>1≤<b>N</b>≤300</li>
<li>1≤<b>Q</b>≤10<sup>5</sup></li>
<li>1≤<b>A<sub>i, j</sub></b>≤10</li>
<li>1≤<b>X<sub>1</sub></b>≤<b>X<sub>2</sub></b>≤<b>N</b></li>
<li>1≤<b>Y<sub>1</sub></b>≤<b>Y<sub>2</sub></b>≤<b>N</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 2 3
3 2 1
5 6 3
3
1 1 2 3
2 2 2 2
1 1 3 3 

<b>Output:</b>
3
1
5
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-11-2013</td>
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