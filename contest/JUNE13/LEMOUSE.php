<?php require("../../includes/header.php"); ?><h1>Little Elephant and Mouses</h1><div class="content">

<p>It is well-known that the elephants are afraid of mouses. The Little Elephant from the Zoo of Lviv is not an exception.</p>
<p>The Little Elephant is on a board <b>A</b> of <b>n</b> rows and <b>m</b> columns (0-based numeration). At the beginning he is in cell with coordinates <b>(0; 0)</b> and he wants to go to cell with coordinates <b>(n-1; m-1)</b>. From cell <b>(x; y)</b> Little Elephant can go either to <b>(x+1; y)</b> or <b>(x; y+1)</b>.</p>
<p>Each cell of the board contains either <b>1</b> or <b>0</b>. If <b>A[i][j] = 1</b>, then there is a single mouse in cell <b>(i; j)</b>. Mouse at cell <b>(i; j)</b> scared Little Elephants if and only if during the path there was at least one such cell <b>(x; y)</b> (which belongs to that path) and <b>|i-x| + |j-y| &lt;= 1</b>.</p>
<p>Little Elephant wants to find some correct path from <b>(0; 0)</b> to <b>(n-1; m-1)</b> such that the number of mouses that have scared the Little Elephant is minimal possible. Print that number.</p>
<h3>Input</h3>

<p>First line contains single integer <b>T</b> - the number of test cases. Then <b>T</b> test cases follow. First line of each test case contain pair of integers <b>n</b> and <b>m</b> - the size of the board. Next <b>n</b> lines contain <b>n</b> strings, each of size <b>m</b> and consisted of digits <b>0</b> and <b>1</b>.</p>
<h3>Output</h3>

<p>In <b>T</b> lines print <b>T</b> integer - the answers for the corresponding test.</p>
<h3>Constraints</h3>

<p>
<b>1</b> &lt;= <b>T</b> &lt;= <b>50</b>
</p>
<p>
<b>2</b> &lt;= <b>n, m</b> &lt;= <b>100</b></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 9
001000001
111111010
100100100
7 9
010101110
110110111
010011111
100100000
000010100
011011000
000100101

<b>Output:</b>
9
10

</pre><h3>Explanation</h3>

<p><b>Example case 1: </b><br />
The optimized path is: (0, 0) -&gt; (0, 1) -&gt; (0, 2) -&gt; (0, 3) -&gt; (0, 4) -&gt; (0, 5) -&gt; (0, 6) -&gt; (0, 7) -&gt; (0, 8) -&gt; (1, 8) -&gt; (2, 8). The mouses that scared the Little Elephant are at the following cells: (1, 0), (1, 1), (1, 2), (1, 3), (1, 4), (1, 5), (1, 7), (0, 2), (0, 8).
</p>
<p><b>Example case 2: </b><br />
The optimized path is: (0, 0) -&gt; (1, 0) -&gt; (1, 1) -&gt; (2, 1) -&gt; (2, 2) -&gt; (3, 2) -&gt; (3, 3) -&gt; (4, 3) -&gt; (4, 4) -&gt; (5, 4) -&gt; (5, 5) -&gt; (6, 5) -&gt; (6, 6) -&gt; (6, 7) -&gt; (6, 8). The 10 mouses that scared the Little Elephant are at the following cells: (0, 1), (1, 0), (1, 1), (2, 1), (3, 3), (4, 4), (5, 4), (5, 5), (6, 6), (6, 8).
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2012</td>
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