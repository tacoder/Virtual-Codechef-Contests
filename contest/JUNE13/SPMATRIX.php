<?php require("../../includes/header.php"); ?><h1>Count Special Matrices</h1><div class="content">

<p>
Let <b>N ≥ 3</b> be a fixed positive integer.<br/> Further, let <b>A[1..N][1..N]</b> be <b>N × N</b> integer matrix.<br/> The <b>y</b>-th element in the <b>x</b>-th row will be denoted as <b>A[x][y]</b>.<br/> This matrix is called <b><i>special</i></b> if it satisfies the following conditions:</br/></br/></br/></p>
<ul>
<li><b>A[x][x] = 0</b> for <b>1 ≤ x ≤ N</b>.</li>
<li><b>A[x][y] = A[y][x] > 0</b> for <b>1 ≤ x &lt; y ≤ N</b>.</li>
<li><b>A[x][y] ≤ max(A[x][z], A[z][y])</b> for <b>1 ≤ x, y, z ≤ N</b>.</li>
<li><b>A[x][y] ∈ {1, 2, ..., N − 2}</b> for <b>1 ≤ x &lt; y ≤ N</b>.</li>
<li>For each <b>k ∈ {1, 2, ..., N − 2}</b> there exist <b>x, y ∈ {1, 2, ..., N}</b> such that <b>A[x][y] = k</b>.</li>
</ul>
<p>
For example,</p>
<pre><code>0 1 1
1 0 1
1 1 0
</code></pre>
<p>
is the only special matrix of order <b>3</b>.
</p>
<p>
The following matrices of order 3 are not special:</p>
<pre><code>1 1 1    0 1 0    0 1 2
1 0 1    1 0 1    1 0 1
1 1 0    1 1 0    2 1 0
</code></pre>
<p>
The first one violates the first condition, the second one - the second condition, the third one - the third condition (as well as the fourth condition).
</p>
<p>
It can be verified that there are <b>13</b> special matrices of order <b>4</b> in all.<br/> The full list of special matrices of order <b>4</b> looks as follows:</br/></p>
<pre><code>0 1 2 2    0 2 1 2    0 2 2 2    0 1 1 2    0 2 2 1    0 2 2 1    0 2 2 2
1 0 2 2    2 0 2 2    2 0 1 2    1 0 1 2    2 0 2 2    2 0 1 2    2 0 2 1
2 2 0 2    1 2 0 2    2 1 0 2    1 1 0 2    2 2 0 2    2 1 0 2    2 2 0 2
2 2 2 0    2 2 2 0    2 2 2 0    2 2 2 0    1 2 2 0    1 2 2 0    2 1 2 0

0 2 1 2    0 1 2 1    0 2 2 2    0 1 2 2    0 2 1 1    0 2 2 2
2 0 2 1    1 0 2 1    2 0 2 2    1 0 2 2    2 0 2 2    2 0 1 1
1 2 0 2    2 2 0 2    2 2 0 1    2 2 0 1    1 2 0 1    2 1 0 1
2 1 2 0    1 1 2 0    2 2 1 0    2 2 1 0    1 2 1 0    2 1 1 0
</code></pre>
<p>Your task is simple. For the given <b>N</b> count overall number of special matrices of order <b>N</b>.<br/> Since the answer could be extremely large output it modulo <b>10<sup>9</sup> + 7 = 1000000007</b>.</br/></p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases.<br/> The description of <b>T</b> test cases follows.<br/> The only line of each test case contains a single integer <b>N</b>.</br/></br/></p>
<h3>Output</h3>
<p>For each test case output the overall number of special matrices of order <b>N</b> modulo <b>1000000007</b> on the separate line.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>10000000</b> (<b>10<sup>7</sup></b>)</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3
4
10

<b>Output:</b>
1
13
719666144
</pre><h3>Explanation</h3>
<p>
Example cases 1 and 2 are explained above.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-04-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.666 sec</td>
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