<?php require("../../includes/header.php"); ?><h1>Maximum Sub-rectangle in Matrix</h1><div class="content">

<p>
You are given a matrix of the size <b>H &times; W</b> with integer elements. So it has <b>H</b> rows and <b>W</b> columns. The rows are numbered by integers in the range <b>[0, H &ndash; 1]</b> while for the columns the range <b>[0, W &ndash; 1]</b> is used. Your task is to find out a sub-rectangle of this matrix with a large sum. The sum of a sub-rectangle is the sum of all its elements. However, sub-rectangle does not need to be contiguous. More formally, you have to find out a subset of rows <b>R</b> and a subset of columns <b>C</b>. Then your sub-rectangle contains all those cells <b>(r, c)</b> where <b>r</b> is in <b>R</b> and <b>c</b> is in <b>C</b>.
</p>
<p>
This is a challenge problem so you don't have to find out the optimal solution. You would get a partial score depending on how large the sum of your chosen rectangle is.
</p>
<h3>Input</h3>
<p>
The first line of the input contains two space separated integers <b>H</b> and <b>W</b>, the height and the width of the matrix respectively. Each of the following <b>H</b> lines contains <b>W</b> space separated integers, the elements of the corresponding row of the matrix.
</p>
<h3>Output</h3>
<p>
Your output should consist of 3 lines. The first line of the output should contain two space separated integers <b>R_SIZE</b> and <b>C_SIZE</b>, the sizes of your row set and the column set respectively. In the next line there should be <b>R_SIZE</b> distinct integers in the range <b>[0, H &ndash; 1]</b> in ascending order, the set of rows you have chosen. In the third line there should be <b>C_SIZE</b> distinct integers in the range <b>[0, W &ndash; 1]</b> in ascending order, the set of columns you have chosen.
</p>
<p>
<b>Your program will get accepted if and only if all of the following conditions are satisfied:</b></p>
<ol>
<li>Both your row set and column set are non-empty, that is, <b>R_SIZE</b> &ge; <b>1</b> and <b>C_SIZE</b> &ge; <b>1</b>.</li>
<li>The second line of your output contains <b>R_SIZE</b> distinct integers in the range <b>[0, H &ndash; 1]</b> in ascending order.</li>
<li>The third line of your output contains <b>C_SIZE</b> distinct integers in the range <b>[0, W &ndash; 1]</b> in ascending order.</li>
<li>The sum of your chosen sub-rectangle is positive. You are guaranteed that such a sub-rectangle always exists.</li>
</ol>

<h3>Scoring</h3>
<p>
Let <b>numerator</b> = Sum of your chosen sub-rectangle<br />
and <b>denominator</b> = Sum of all positive elements of the matrix.
</p>
<p>
Then your score for a single file is equal to <b>numerator / denominator</b>. Your total score is the average of individual scores for each file multiplied by <b>10000</b> for convenience. Your goal is to maximize your total score.
</p>
<h3>Constraints</h3>
<p>
<b>1</b> &le; <b>H</b>, <b>W</b> &le; <b>300</b><br />
Each element of the matrix does not exceed <b>10<sup>9</sup></b> by the absolute value.<br />
There exists a sub-rectangle of the given matrix which has positive sum.<br />
In each official test file <b>H</b>, <b>W</b> &ge; <b>200</b>.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 3
-1 -2 4
2 3 -1
8 9 -1

<b>Output:</b>
1 2
1
1 2
</pre><h3>Explanation</h3>
<p>
In this output the set of one row <b>R = {1}</b> and the set of two columns <b>C = {1, 2}</b> have been chosen. The chosen cells of the matrix are <b>M[1][1] = 3</b>, <b>M[1][2] = -1</b> (recall that the numeration of rows and columns is 0-based). So the sum of the chosen sub-rectangle is <b>3 + (-1) = 2 &gt; 0</b>. The sum of all positive elements of the matrix is <b>4 + 2 + 3 + 8 + 9 = 26</b>. So the score you will get for such output is <b>2 / 26 = 0.0769231</b>. Note that this is not the optimal solution for this matrix.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/yellow_agony">yellow_agony</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-07-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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