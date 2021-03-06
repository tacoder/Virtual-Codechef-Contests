<?php require("../../includes/header.php"); ?><h1>Earthquake</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/EQUAKE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/EQUAKE.pdf">Russian</a>.</h3>
<p>Earthquake in Bytetown! Situation is getting out of control!</p>
<p>All buildings in Bytetown stand on straight line. The buildings are numbered <b>0, 1, ..., N−1</b> from left to right.
</p><p>Every hour one shake occurs. Each shake has <b>3</b> parameters: the leftmost building that was damaged during this shake, the corresponding rightmost building, and the force of the shake. Each time all the buildings in the disaster area are damaged equally. Let's consider this process in details.</p>
<p>At any moment every building has the number that indicates its height (may have leading zeroes). This number corresponds to some string consisting of digits. When some shake affects to the building its string circularly rotates to the left by the value of the force of the shake and its height corresponds to the value of new string. Pay attention that after rotation string may have leading zeroes. For instance: a building with height <b>950</b> got in disaster area with force <b>2</b>, Then its string become <b>095</b>, so height in reality is <b>95</b>. If it was one more shake with force <b>1</b>, then its height would become <b>950</b> again.</p>
<p>Major of Bytetown got some ideas how to protect residents, so sometimes he needs such kind of stats: find height of the highest building on some interval. You are given information about all the heights before the very first shake and then you get queries of two types: </p>
<ul>
<li><i>Type 0</i>, described by <b>0 L<sub>i</sub> R<sub>i</sub> F<sub>i</sub></b>: Shake occurred on interval <b>[L<sub>i</sub>, R<sub>i</sub>]</b> with force <b>F<sub>i</sub></b>.</li>
<li><i>Type 1</i>, described by <b>1 L<sub>i</sub> R<sub>i</sub></b>: The major wants to know the biggest height on interval <b>[L<sub>i</sub>, R<sub>i</sub>]</b>.</li>
</ul>
<p>Here, of course, the interval <b>[L, R]</b> contains all the building <b>k</b> such that <b>L ≤ k ≤ R</b>.</p>
<p>You want to get a promotion and promised to complete this task. Now it's time to do it!</p>
<h3>Input</h3>
<p>Each test file contains only one test case.</p>
<p> The first line of input contains an integer <b>N</b> denoting the number of buildings in Bytetown. The second line contains <b>N</b> space-separated integers <b>A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>N−1</sub></b> denoting the initial height of the buildings. The third line contains an integer <b>M</b> denoting the number of queries. Each of next <b>M</b> lines starts with <b>0</b> or <b>1</b>, where <b>0</b> denotes a query <i>Type 0</i> and <b>1</b> denotes a <i>Type 1</i> query. If it's a <i>Type 0</i> query then <b>3</b> integers follows <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>, <b>F<sub>i</sub></b>, denoting number of the leftmost building, number of the rightmost building and force of this shake. If  it's a <i>Type 1</i> query then <b>2</b> integers follows <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>, denoting numbers of the leftmost building and the rightmost building of necessary segment.</p>
<h3>Output</h3>
<p>For each <i>Type 1</i> query, output an integer denoting the answer for the query without leading zeroes.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N ≤ 800000 = 8 × 10<sup>5</sup></b></li>
<li><b>1 ≤ M ≤ 200000 = 2 × 10<sup>5</sup></b></li>
<li><b>0 ≤ A<sub>i</sub> &lt; 10000 = 10<sup>4</sup></b></li>
<li><b>0 ≤ L<sub>i</sub> ≤ R<sub>i</sub> &lt; N</b></li>
<li><b>0 ≤  F<sub>i</sub> ≤ 60</b></li>
<li><b>A<sub>i</sub></b> does not have leading zeroes</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
17 3140 832
8
1 0 2
0 0 2 1
1 1 2
1 0 0
0 0 2 2
1 0 2
0 1 1 1
1 0 2
<b>Output:</b>
3140
1403
71
832
3140
</pre><h3>Explanation</h3>
<p>The initial array: <b>[17, 3140, 832]</b>.</p>
<p>The first query is a <i>Type 1</i> query with numbers of buildings <b>0</b> and <b>2</b>, so the answer is the maximum of the array: <b>3140</b>.</p>
<p>The second query is a <i>Type 0</i> query with numbers of buildings <b>0</b> and <b>2</b>, and force <b>1</b>, so the array turns to: <b>[71, 1403, 328]</b>.</p>
<p>The third query is a <i>Type 1</i> query again with numbers of buildings <b>1</b> and <b>2</b>, so the answer is the maximum of <b>1403</b> and <b>328</b>: <b>1403</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pavel1996">pavel1996</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-06-2014</td>
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