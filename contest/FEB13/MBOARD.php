<?php require("../../includes/header.php"); ?><h1>Magic Board</h1><div class="content">

<p>Long long ago, there is a magic board. The magic board has <b>N*N</b> cells: <b>N</b> rows and <b>N</b> columns. Every cell contains one integer, which is <b>0</b> initially. Let the rows and the columns be numbered from <b>1</b> to <b>N</b>.</p>
<p>There are <b>2</b> types of operations can be applied to the magic board:</p>
<ol>
<li><b>RowSet i x</b>: it means that all integers in the cells on <b>row i</b> have been changed to <b>x</b> after this operation.</li>
<li><b>ColSet i x</b>: it means that all integers in the cells on <b>column i</b> have been changed to <b>x</b> after this operation.</li>
</ol>
<p>And your girlfriend sometimes has an interest in the total number of the integers <b>0</b>s on some row or column.</p>
<ol>
<li><b>RowQuery i</b>: it means that you should answer the total number of <b>0</b>s on <b>row i</b>.</li>
<li><b>ColQuery i</b>: it means that you should answer the total number of <b>0</b>s on <b>column i</b>.</li>
</ol>
<h3>Input</h3>
<p>The first line of input contains <b>2</b> space-separated integers <b>N</b> and <b>Q</b>. They indicate the size of the magic board, and the total number of operations and queries from the girlfriend.</p>
<p>Then each of the next <b>Q</b> lines contains an operation or a query by the format mentioned above.</p>
<h3>Output</h3>
<p>For each query, output the answer of the query.</p>
<h3>Constraints</h3>
<p><b>1 ≤ N, Q ≤ 500000 (5 * 10<sup>5</sup>)</b><br /><b>1 ≤ i ≤ N</b><br /><b>x ∈ {0, 1}</b> (That is, <b>x = 0</b> or <b>1</b>)</p>
<h3>Sample</h3>
<pre>
<b>Input:</b>
3 6
RowQuery 1
ColSet 1 1
RowQuery 1
ColQuery 1
RowSet 1 0
ColQuery 1

<b>Output:</b>
3
2
0
1
</pre><h3>Explanation</h3>
<p>
At first, the magic board is</p>
<pre><b>000 &lt;- row 1
000
000
</b></pre><p>So the answer of first query <i>"RowQuery 1"</i> is <b>3</b>.</p>
<p>
After the <i>"ColSet 1 1"</i>, the board becomes</p>
<pre><b>column 1
|
V
100
100
100
</b></pre><p>So the answer of the second query <i>"RowQuery 1"</i> is clearly <b>2</b>, since the cell <b>(1,1)</b> became <b>1</b>. And the answer of the third query <i>"ColQuery 1"</i> is <b>0</b>.</p>
<p>
Finally, apply the operation <i>"RowSet 1 0"</i>, the board has changed to</p>
<pre><b>000
100
100
</b></pre><p>From this board, the answer of the last query <i>"ColQuery 1"</i> should be <b>1</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-10-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.6 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCM guile, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>