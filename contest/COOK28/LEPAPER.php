<?php require("../../includes/header.php"); ?><h1>Little Elephant and Sheet</h1><div class="content">

<p>
The Little Elephant from the Zoo of Lviv wants to paint the sheet of paper. The sheet has the size <b>1</b> &times; <b>Z</b> and consists of <b>Z</b> consecutive cells numbered from <b>1</b> to <b>Z</b> inclusive (we use letter <b>Z</b> because <b>N</b> will denote another value below and the words <b>"size"</b> and <b>"zoo"</b> both contain letter <b>'Z'</b> :))
</p>
<p>
There are also <b>C</b> available colors numbered from <b>1</b> to <b>C</b> inclusive. Current color of the <b>i</b>-th cell is <b>Col[i]</b> (<b>1</b> &le; <b>Col[i]</b> &le; <b>C</b>).
</p>
<p>
The Little Elephant can repaint some cells of the sheet. In a single move he chooses arbitrary pair of integers <b>L</b> and <b>R</b> such that <b>1</b> &le; <b>L</b> &le; <b>R</b> &le; <b>Z</b> and some color <b>Ci</b> from <b>1</b> to <b>C</b> inclusive, after that he repaints all the cells on the segment <b>[L, R]</b> to the color <b>Ci</b>, that is, he assigns <b>Col[j] = Ci</b> for <b>j</b> from <b>L</b> to <b>R</b> inclusive. <b>IMPORTANT: it is allowed to repaint each cell at most once during the whole sequence of moves.</b>
</p>
<p>
Help the Little Elephant to find the total number of different sheets he can get in no more than <b>K</b> moves. Since the answer can be large, print it modulo <b>1000000007 (10<sup>9</sup> + 7)</b>.
</p>
<p>
Two sheets are considered different if there exists at least one index <b>i</b> from <b>1</b> to <b>Z</b> inclusive, such that that <b>A[i]</b> is not equal to <b>B[i]</b>, where <b>A[i]</b> is the color of the <b>i</b>-th cell of the first sheet and <b>B[i]</b> is the color of the <b>i</b>-th cell of the second sheet.
</p>
<p>
Little Elephant, in fact, has some enormous sheet of paper, possibly having billions of cells. But it has very specific structure. Namely, it consists of several blocks of consecutive cells, where all cells in each particular block have the same color (possibly different for different blocks), and the number of these blocks is relatively small. Consider the following example. Let our sheet of paper be <b>{1, 1, 1, 2, 4, 4, 4, 1, 1}</b> (numbers represent colors of the cells). Then it consists of <b>4</b> blocks, where the first block has <b>3</b> cells of color <b>1</b>, the second block has <b>1</b> cell of color <b>2</b>, the third block has <b>3</b> cells of color <b>4</b> and the last fourth block has <b>2</b> cells of color <b>1</b>. It seems natural for consecutive blocks to be of different color but we allow opposite situation in the input too. So please DO NOT assume that two consecutive blocks in the input are always of different color.
</p>
<h3>Input</h3>
<p>
The first line of the input contains a single integer <b>T</b>, the number of test cases. Then <b>T</b> test cases follow. The first line of each test case contains three space separated integers <b>N, C</b> and <b>K</b>. Here <b>N</b> is the number of blocks in the sheet, <b>C</b> is the number of available colors and <b>K</b> is the upper bound on the number of moves Little Elephant can make. Each of following <b>N</b> lines contains two space separated integers <b>S[i]</b> and <b>M[i]</b>, where <b>S[i]</b> is the color of the <b>i</b>-th block and <b>M[i]</b> is the number of cells in the <b>i</b>-th block. So the above value <b>Z</b> equals to <b>M[1] + M[2] + ... + M[N]</b>.
</p>
<h3>Output</h3>
<p>
For each test case output a single line containing the number of different sheets the Little Elephant can get using at most <b>K</b> moves. As was mentioned above you should output this number modulo <b>10<sup>9</sup> + 7</b>.
</p>
<h3>Constraints</h3>
<p>
<b>1</b> &le; <b>T</b> &le; <b>7</b> <br />
<b>1</b> &le; <b>N</b> &le; <b>7</b> <br />
<b>1</b> &le; <b>C</b> &le; <b>10<sup>9</sup></b> <br />
<b>1</b> &le; <b>K</b> &le; <b>7</b> <br />
<b>1</b> &le; <b>S[i]</b> &le; <b>C</b> <br />
<b>1</b> &le; <b>M[i]</b> &le; <b>10<sup>9</sup></b>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 47 1
1 1
2 2 1
1 1
2 1
2 3 2
1 2
2 2

<b>Output:</b>
47
3
57
</pre><h3>Explanation</h3>
<p>
<b>Case 1.</b> Here the sheet consists of one cell of color <b>1</b>. We have <b>47</b> available colors. Using one move we can color this cell in any of available colors. So we can get <b>47</b> different sheets.
</p>
<p>
<b>Case 2.</b> Here the sheet of paper is <b>{1, 2}</b> (numbers represent colors of the cells). We have <b>2</b> available colors. So there exist <b>4</b> different sheets of <b>2</b> cells. Using at most one move we can achieve every such sheet except <b>{2, 1}</b>. Indeed,
</p>
<p><ul>
<li>Sheet <b>{1, 1}</b> is achieved by repainting the second cell at color <b>1</b>.</li>
<li>Sheet <b>{1, 2}</b> is achieved using no repainting.</li>
<li>Sheet <b>{2, 2}</b> is achieved by repainting the first cell at color <b>2</b>.</li>
</ul>
</p>
<p>
To get <b>{2, 1}</b> we need at least two moves. So the answer is <b>3</b>.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-07-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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