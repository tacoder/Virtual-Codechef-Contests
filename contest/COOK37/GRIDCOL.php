<?php require("../../includes/header.php"); ?><h1>Chef and The Colored Grid</h1><div class="content">
<p>The Chef wants to color a <b>3xN</b> grid and he has <b>N</b> different types of colors to do that. Each cell of the grid has to be colored with exactly one color. A coloring of the grid is<br />
considered <i>beautiful</i> if no two cells of the same row or same column have the same color.<br />
<br />
The cells of first two rows are already colored and they don’t violate the <i>beautiful</i> condition (one color doesn’t appear more than once on the same row or on the same column).<br />
<br />
Find how many different ways he can color the <b>3rd</b> row such that the resulting grid is <i>beautiful</i>. Two ways of coloring are considered different if there is at least one cell which is colored with different color.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. </p>
<ul>
<li>The first line of each test<br />
case contains an integer <b>N</b>. </li>
<li>The next line contains <b>N</b> integers <b>A<sub>1</sub>,  A<sub>2</sub>, ..., A<sub>N</sub></b>, where <b>A<sub>i</sub></b>(<b>1</b> ≤ <b>i</b> ≤ <b>N</b>) is the color of the cell at column <b>i</b> of <b>1st</b> row. </li>
<li>The next line contains <b>N</b> integers <b>B<sub>1</sub>,  B<sub>2</sub>, ..., B<sub>N</sub></b>, where <b>B<sub>i</sub></b>(<b>1</b> ≤ <b>i</b> ≤ <b>N</b>) is the color of the cell at column <b>i</b> of <b>2nd</b> row. </li>
</ul>

<h3>Output</h3>
<p>For each test case, output the number of ways to color the <b>3rd</b> row such that the resulting grid is <i>beautiful</i>. Output the result modulo <b>1000000007</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>A<sub>1</sub>,  A<sub>2</sub>, ..., A<sub>N</sub></b> is a permutation of the numbers <b>1, 2, ..., N</b>.</li>
<li><b>B<sub>1</sub>,  B<sub>2</sub>, ..., B<sub>N</sub></b> is a permutation of the numbers <b>1, 2, ..., N</b>.</li>
<li><b>A<sub>i</sub></b> ≠ <b>B<sub>i</sub></b> ( <b>1</b> ≤ <b>i</b> ≤ <b>N</b>)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4
2 1 4 3
4 2 3 1
4
2 4 1 3
1 3 2 4

<b>Output:</b>
2
4
</pre><h3>Explanation</h3>
<p>For the 1st case the valid ways to color the <b>3rd</b> row are: {1,3,2,4} and {3,4,1,2}.<br />
For the 2nd case the valid ways are: {3,1,4,2} , {3,2,4,1} , {4,1,3,2} and {4,2,3,1}.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rustinpiece">rustinpiece</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-08-2013</td>
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