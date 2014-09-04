<?php require("../../includes/header.php"); ?><h1>Little Elephant and Magic</h1><div class="content">

<p>
The Little Elephant from the Zoo of Lviv believes in magic.
</p>
<p>
He has a magic board <b>A</b> that consists of <b>N</b> rows and <b>M</b> columns. Each cell of the board contains an integer from <b>0</b> to <b>9</b> inclusive. The cell at the intersection of the <b>i</b>-th row and the <b>j</b>-th column is denoted as <b>(i; j)</b>, where <b>1</b> &le; <b>i</b> &le; <b>N</b> and <b>1</b> &le; <b>j</b> &le; <b>M</b>. The number in the cell <b>(i; j)</b> is denoted as <b>A[i][j]</b>.
</p>
<p>
The Little Elephant owns the only magic operation which can be described as follows. He chooses some integer <b>P</b> and some row or column, after that for each cell in the chosen row or column he adds number <b>P</b> to the number in this cell and take the result modulo <b>10</b> in order to keep numbers in the range <b>{0, 1, ..., 9}</b>. Our Little Magician wants to perform series of such operations to achieve some board for which certain characteristic called <i>level of the board</i> is maximal possible.
</p>
<p>
So what is the level of the board? Bluntly speaking it is the length of the longest non-increasing subsequence of cells of the board. Formally, the level of the board is the maximal integer <b>K</b> such that there exists such sequence of <b>different</b> cells <b>(i<sub>1</sub>; j<sub>1</sub>), (i<sub>2</sub>; j<sub>2</sub>), ..., (i<sub>K</sub>; j<sub>K</sub>)</b> for which
</p>
<p>
<b>1</b> &le; <b>i<sub>1</sub></b> &le; ... &le; <b>i<sub>K</sub></b> &le; <b>N</b>, <br />
<b>1</b> &le; <b>j<sub>1</sub></b> &le; ... &le; <b>j<sub>K</sub></b> &le; <b>M</b>,
</p>
<p>and</p>
<p>
<b>A[i<sub>1</sub>][j<sub>1</sub>]</b> &ge; <b>A[i<sub>2</sub>][j<sub>2</sub>]</b> &ge; ... &ge; <b>A[i<sub>K</sub>][j<sub>K</sub>]</b>.
</p>
<p>
Though, the magic operation, the Little Elephant owns, is quite powerful, there are some restrictions dictated by the Association of Cursed Magicians (ACM):
</p>

<p><ul>
<li>The number <b>P</b> should be chosen in advance and should be the same for all operations.</li>
<li>For each row the magic operation can be applied at most once.</li>
<li>The same, of course, is true for columns.</li>
</ul>
</p>
<p>
Without these stupid restrictions of this stupid Association our hero could always achieve the maximal possible level <b>M + N &minus; 1</b>. But now he is confused and asks you for help. Find the maximal level of the board <b>A</b> after making arbitrary number of magic operations according to the restrictions of ACM.
</p>
<h3>Input</h3>
<p>
The first line of the input contains a single integer <b>T</b>, the number of test cases. Then <b>T</b> test cases follow. The first line of each test case contains two space separated integers <b>N</b> and <b>M</b>, the sizes of the board. Each of the following <b>N</b> lines contains <b>M</b> one-digit numbers without spaces. The <b>i</b>-th line among them contains the numbers <b>A[i][1]</b>, ..., <b>A[i][M]</b>.
</p>
<h3>Output</h3>
<p>
For each test case output a single line containing a single integer, the maximal possible level of the board that Little Elephant can achieve under the restrictions of ACM.
</p>
<h3>Constraints</h3>
<p>
<b>1</b> &le; <b>T</b> &le; <b>10</b><br />
<b>1</b> &le; <b>N</b> &le; <b>100</b><br />
<b>1</b> &le; <b>M</b> &le; <b>100</b><br />
<b>0</b> &le; <b>A[i][j]</b> &le; <b>9</b>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 2
11
10
3 4
3478
4268
7173

<b>Output:</b>
3
5
</pre><h3>Explanation</h3>
<p>
<b>Case 1.</b> The board already has a sequence of <b>3</b> cells that satisfies all required constraints (without applying any operation). For example, one can choose, the sequence <b>(1; 1), (1; 2), (2; 2)</b>. It is also shown in the figure below (chosen cells are made bold):
</p>
<p><pre>
<b>11</b>
1<b>0</b>
</pre></p>
<p>
Let's formally validate this sequence of cells. Inequality <b>1</b> &le; <b>i<sub>1</sub></b> &le; ... &le; <b>i<sub>K</sub></b> &le; <b>N</b> takes the form <b>1</b> &le; <b>1</b> &le; <b>2</b>. Inequality <b>1</b> &le; <b>j<sub>1</sub></b> &le; ... &le; <b>j<sub>K</sub></b> &le; <b>M</b> takes the form <b>1</b> &le; <b>2</b> &le; <b>2</b>. Finally, inequality <b>A[i<sub>1</sub>][j<sub>1</sub>]</b> &ge; <b>A[i<sub>2</sub>][j<sub>2</sub>]</b> &ge; ... &ge; <b>A[i<sub>K</sub>][j<sub>K</sub>]</b> takes the form <b>1</b> &ge; <b>1</b> &ge; <b>0</b>. So all of them is satisfied, which means that the level of this board is at least <b>3</b>. But clearly, we can't have the required sequence of cells of length more than <b>3</b>. So <b>3</b> is the actual level of this board.
</p>
<p>
<b>Case 2.</b> The desired sequence of length <b>5</b> can be achieved by several values of <b>P</b>. Consider, for example, <b>P = 3</b>. At first let's apply the magic operation to the 1st row. We get the following transformation:
</p>
<p><pre>
3478  &rarr;  <b>6701</b>
4268  &rarr;  4268
7173  &rarr;  7173
</pre></p>
<p>
Now let's transform the 1st column by the magic operation. We get:
</p>
<p><pre>
6701  &rarr;  <b>9</b>701
4268  &rarr;  <b>7</b>268
7173  &rarr;  <b>0</b>173
</pre></p>
<p>
Finally we modify the 2nd column:
</p>
<p><pre>
9701  &rarr;  9<b>0</b>01
7268  &rarr;  7<b>5</b>68
0173  &rarr;  0<b>4</b>73
</pre></p>
<p>
Now we can take the following sequence of 5 cells to satisfy all needed constraints: <b>(1; 1), (2; 1), (2; 2), (3; 2), (3; 4)</b> (see the figure below):
</p>
<p><pre>
<b>9</b>001
<b>75</b>68
0<b>4</b>7<b>3</b>
</pre></p>
<p>
Just to reiterate we note that the inequality <b>A[i<sub>1</sub>][j<sub>1</sub>]</b> &ge; <b>A[i<sub>2</sub>][j<sub>2</sub>]</b> &ge; ... &ge; <b>A[i<sub>K</sub>][j<sub>K</sub>]</b> takes the form <b>9 &ge; 7 &ge; 5 &ge; 4 &ge; 3</b> for this sequence. One can check (for example, by brute force), that sequences of length more than <b>5</b> can't be achieved. So <b>5</b> is the answer.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2012</td>
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