<?php require("../../includes/header.php"); ?><h1>Place the mines!</h1><div class="content">

<p><strong>The following a tie breaker problem.  The best answer will receive one point.  All other successful answers will be scored on a curve and receive a fraction of a point based on how close they come to the best answer.</strong></p>
<p>You are given a large square area with an edge length of 2<sup><var>n</var></sup>, subdivided into unit squares (fields). Some mines have already been planted on certain fields, and we would like to plant as few more mines as possible, so as to destroy all of the fields of the area (assuming all the mines explode simultaneously). For each mine, the fields it destroys are given as follows. For any <var> k </var>,  0 &lt;= <var> k </var> &lt;= <var>n</var>, we can partition the considered area into 2<sup><var>n</var></sup> rectangles of size 2<sup><var>k</var></sup> x 2<sup><var>n-k</var></sup>. The mine is assumed to destroy a square if and only if the mine and the square belong to the same rectangle in the considered partition, for some value of <var>k</var>.</p>
<p>For example, if <var>n</var>=3, the mine "*" placed on the square at position (1,1) will destroy all the fields which are not marked with dots below:</p>
<pre><tt>
.#......
.#......
.#......
.#......
##......
##......
#*######
####....
</tt></pre><h3>Input</h3>
<p>The first line will contain integer 8&lt;=<var>n</var>&lt;=16, (where 2<sup><var>n</var></sup> is the size of the area). The second line will contain 0&lt;=m&lt;2<sup><var>n</var></sup>, the number of already planted mines.<br />
The next <var>m</var> lines will contain the 0-based x and y coordinates of the existing mines.</p>
<h3>Output</h3>
<p>The first line should contain <var>t</var> - the number of mines to be added.<br />
The next <var>t</var> lines should contain the coordinates of the added mines.</p>
<h3>Scoring</h3>
<p>For each test case, you will receive (2<sup><var>n</var></sup>-<var>m</var>)/<var>t</var>-1 points, provided you destroy all the fields of the area.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1
3 3

<b>Output:</b>
2
0 1
2 2
</pre><p>
You will receive (4-1)/2 - 1 = 0.5 pts for such a mine placement.  </p>
<p><b>Note:</b><br />
There will be some tests with no initially placed mines, and some tests with initial placements covering most of the area pretty well. Good luck!</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-12-2008</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>