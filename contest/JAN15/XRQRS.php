<?php require_once("../../includes/header.php"); ?><h1>Xor Queries</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/XRQRS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/XRQRS.pdf">Russian</a>.</h3>
<p>
Given an initially empty integer array (1-indexed) and some queries:</p>
<ul>
<li><b>Type 0</b>: Add the integer number <b>x</b> at the end of the array. </li>
<li><b>Type 1</b>: On the interval <b>L..R</b> find a number <b>y</b>, to maximize (<b>x <a href="http://en.wikipedia.org/wiki/Bitwise_operation#XOR">xor</a> y</b>).</li>
<li><b>Type 2</b>: Delete last <b>k</b> numbers in the array</li>
<li><b>Type 3</b>: On the interval <b>L..R</b>, count the number of integers less than or equal to <b>x</b>.</li>
<li><b>Type 4</b>: On the interval <b>L..R</b>, find the <b>k<sub>th</sub></b> smallest integer (<b>k<sub>th</sub></b> order statistic).</li>
</ul>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer <b>M</b> denoting number of queries. </li>
<li>The following <b>M</b> lines contain queries, form of queries is as follows.</li>
<li>Query type 0 has the form <b>"0 x"</b>. </li>
<li>Query type 1 has the form <b>"1 L R x"</b>. </li>
<li>Query type 2 has the form <b>"2 k"</b>. </li>
<li>Query type 3 has the form <b>"3 L R x"</b>. </li>
<li>Query type 4 has the form <b>"4 L R k"</b>. </li>
</ul>
<p>Note that, there will be no invalid query in the input.</p>
<h3>Output</h3>
<p>For each Query of type 1, 3 and 4 output the result in a single line.</p>
<h3>Constraints</h3>
<ul></ul>
<li>Let <b>N</b> denote numbers of elements in before executing the query.</li>
<li><b>1 ≤ M ≤ 5 * 10<sup>5</sup></b></li>
<li><b>1 ≤ x ≤ 5 * 10<sup>5<sup></sup></sup></b></li>
<li><b>1 ≤ L ≤ R ≤ N</b></li>
<li> For query type 2, <b>1 ≤ k ≤ N	</b> and for query type 4, <b>k ≤ R-L+1</b> </li>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (40 points): <b>1 ≤ M ≤ 5 * 10<sup>4</sup></b> </li>
<li>Subtask #2: (60 points): <b>1 ≤ M ≤ 5 * 10<sup>5</sup></b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
10
0 8
4 1 1 1
0 2
1 2 2 7
1 2 2 7
0 1
3 2 2 2
1 1 2 3
3 1 3 5
0 6

<b>Output:</b>
8
2
2
1
8
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gomelfk">gomelfk</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-12-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYPY, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM chicken, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>