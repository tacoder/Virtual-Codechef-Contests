<?php require("../../includes/header.php"); ?><h1>Maximal crosses</h1><div class="content">

<p>On the matrix A sized n×n, some cells were marked by crosses (X). For each cell (i,j) (with i – the row index, j – the column index), we define B(i,j) as the maximal number of continuous crosses “going across” the cell (i,j) in the same horizontal, vertical or diagonal; B(i,j)=0 if A(i,j) is empty ( '.' ).<br />
[ Empty cells are marked by '.'] .</p>
<p>
Clarification:<br />
Continuous crosses going across cell (i,j) in horizontal direction = x1 + x2 - 1<br />
where x1 = highest possible x such that<br />
          j + x - 1&lt;= n and A(i, j ... j + x - 1) are all 'X'<br />
and x2 = highest possible x such that<br />
          j - x + 1 &gt; 0  and A(i, j - x + 1...j) are all 'X'</p>
<p>Similarily we can extend the definition for vertical and diagonal directions.
</p>
<h3>Task</h3>
<p>Given matrix A as input, calculate matrix B.</p>
<h3>Input</h3>
<p><ul>
<li> The first line contains the integer n. </li>
<li> Then follow n lines , each containing n characters. The j-th character of the i-th line represents the cell (i,j) of the matrix A, with A(i,j)='X' if it contains a cross, or A(i,j)='.' if it is empty. </li>
</ul>
</p>
<h3>Output</h3>
<p>
Output n lines, each contains n integers, the j-th integer of the i-th line shows the value of B(i,j).<br />
<b><em>(Each integer on a same line must be separated by exactly one space character)</em></b>
</p>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>
10
..X....XX.
XX.X..XX.X
.....XX..X
.XXX..X.X.
.....X..XX
....X....X
X.X....XX.
.X...X.X.X
X.X..X....
..XXXXX.XX
</pre><p>
<b>Output:</b></p>
<pre>
0 0 2 0 0 0 0 3 3 0 
2 2 0 2 0 0 3 3 0 2 
0 0 0 0 0 3 3 0 0 2 
0 3 3 3 0 0 3 0 2 0 
0 0 0 0 0 3 0 0 2 2 
0 0 0 0 3 0 0 0 0 3 
4 0 3 0 0 0 0 2 3 0 
0 4 0 0 0 3 0 3 0 2 
3 0 4 0 0 3 0 0 0 0 
0 0 5 5 5 5 5 0 2 2
</pre><h3>Limitations</h3>
<p>0&lt;n≤1 000</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anshuman_singh">anshuman_singh</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-05-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 1.5 sec</td>
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