<?php require("../../includes/header.php"); ?><h1>Sudoku Solver</h1><div class="content">

<p>
Quoting <a href="http://en.wikipedia.org/wiki/Sudoku"> Wikipedia </a> :<br />
"Sudoku is a logic-based, combinatorial number-placement puzzle. The objective is to fill a 9×9 grid so that each column, each row, and each of the nine 3×3 boxes (also called blocks or regions) contains the digits from 1 to 9 only one time each. The puzzle setter provides a partially completed grid."</p>
<p>The rules for an N<sup>2</sup> X N<sup>2</sup> sudoku are as follows :</p>
<ul type="1">
<li>The board is consists of N<sup>2</sup> rows and N<sup>2</sup> columns.</li>
<li>Numbers between 1 and N<sup>2</sup>(inclusive) are to be filled in each row such that :</li>
<ul type="1">
<li>All numbers in each row are distinct.</li>
<li>All numbers in each column are distinct.</li>
<li>All numbers in the sub-matrix having rows from (i*N + 1) to(i + 1)*N, and columns from (j*N + 1) to (j + 1)*N both inclusive, should be distinct. 0 &lt;= i,j &lt;= N-1. Rows and columns are 1 indexed. Each such sub-matrix is called a "box" or "region".</li>
</ul>
</ul>
<p>For this problem, you are required to solve a general N<sup>2</sup>X N<sup>2</sup> sudoku puzzle. Given a partially filled sudoku board, you have to fill it in as "perfect" a manner as possible.</p>
<h3>
Input :<br />
</h3>

<p>
The first line contains N,K.<br />
The following K lines contain 3 numbers: x, y and d. 1 &lt;= x,y,d &lt;= N^2.<br />
This means that a number d is present on the board at position (x,y)<br />
2 &lt;= N &lt;= 30<br />
0 &lt;= K &lt;= N<sup>4</sup><br />
At most 50% of the board will be covered at the start.<br />
All positions (x,y) in the input will be unique.</p>
<h3>
Output :</h3>

<p>
The output consists of N<sup>2</sup> rows having N<sup>2</sup> numbers each. Each number should be between 1 and N<sup>2</sup> (inclusive) and separated by a space. If the initial grid has a number d at position (x,y), then even the output should have the number d at position (x,y).</p>
<h3>
Scoring :</h3>

<p><ul>
<li>
For each row and every number K in the range 1 to N<sup>2</sup> that is missing from the row, incurs a penalty of 1.</li>
<li>For each column and every number K in the range 1 to N<sup>2</sup> that is missing from the column, incurs a penalty of 1.</li>
<li>Similary, for each box and every number K in the range 1 to N<sup>2</sup> that is missing from the box, incurs a penalty of 1.</li>
</ul>
</p><p>A box (as explained above) is a N X N square and the grid can be divided into N<sup>2</sup> such non-overlapping boxes.</p>
<h3>
Example :</h3>

<p><h3>
Input:</h3>
<pre>
2 4
1 2 1
2 4 4
3 3 1
4 1 3
</pre><h3>
Output:</h3>
<pre>
2 1 3 4
1 2 4 4
3 4 1 2
3 2 4 1
</pre><h3>
Penalty:</h3>
</p><p> (0 + 1 + 0 + 0) + (1 + 1 + 1 + 1) + (2 + 2 + 1 + 1) = 11</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-08-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>