<?php require("../../includes/header.php"); ?><h1>Chef and medium problem</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/russian/CHEFC.pdf">Russian</a>.</h3>
<p>Chef has an array. The size of the array is equal to <b>N</b>.<br />
Chef wants to make <b>M</b> queries. Each query has one of the two types:</p>
<p><ul>
<li><b>1 l r</b> - Calculate some interesting function <b>F</b> for subarray indexed from <b>l</b> to <b>r</b> inclusive.
</li><li><b>2 l r</b> - Modify the given array by removing all elements having indices in range from <b>l</b> to <b>r</b> and then putting these numbers at the beginning of<br />
array. Order of all other elements remains same.
</li></ul>
</p>
<p>For example: you have array [1, 2, 3, 4, 5, 6, 7, 8] and query (2 4 6), the modified array after the operation will look like [4, 5, 6, 1, 2, 3, 7, 8].<br />
All queries that goes after this query have to be executed at new the array. </p>
<p>Now let us define the interesting function <b>F</b> :). <br />
Lets call this array <b>B</b>. Let <b>|B|</b> be the length of array <b>B</b>. Assume that <b>B</b> is having 1 based indexing.<br />
Then the function <b>F</b> can be calculated by following code.</p>
<p>
<code></code></p>
<pre>
X = 1;
for (i = 2; i &lt;= |B|; i++)
    if (B[i] != B[i - 1])
        X++;
X is the output of the function F(B).
</pre><p>
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of the elements in given array.</p>
<p>Next line contains <b>N</b> numbers denoting the elements of given array.</p>
<p>Third line contains a single integer <b>M</b> denoting the number of queries that Chef wants to execute.</p>
<p>Each of the next <b>M</b> lines describes a single query in the format given in the statement.</p>
<h3>Output</h3>
<p>For each query of the first type output a single line containing a single integer - the answer for this query.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 3</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>l</b> ≤ <b>r</b> ≤ <b>N</b></li>
<li>Subtask 1 (15 points): 1 ≤ <b>N</b> ≤ 100, 1 ≤ <b>M</b> ≤ 1000</li>
<li>Subtask 2 (25 points): 1 ≤ <b>N</b>, <b>M</b> ≤ 10<sup>5</sup>, there is no query with type 2</li>
<li>Subtask 3 (60 points): 1 ≤ <b>N</b>, <b>M</b> ≤ 10<sup>5</sup></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
5
1 1 2 1 3
5
1 1 5
1 2 4
2 2 3
1 1 5
2 3 3

<b>Output:</b>
4
3
4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>