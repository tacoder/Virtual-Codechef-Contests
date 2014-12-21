<?php require("../../includes/header.php"); ?><h1>Chef and medium problem 2</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/russian/CHEFD.pdf">Russian</a>.</h3>

<p>Chef has an array containing <b>N</b> integers. You have to make <b>M</b> queries. Each query has one of the two types:</p>
<p><ul>
<li><b>1 l r p</b> - Select all the numbers having indices between <b>l</b> and <b>r</b> (inclusive) that are divisible by <b>p</b> and divide them by <b>p</b>,<br />
  where <b>p</b> is in set {2, 3, 5}.</li>
<li><b>2 l d</b> - Modify the <b>l</b>-th number in the array to <b>d</b>.</li>
</ul>
</p>
<p>
Please help Chef in finding out the array after all the <b>M</b> queries.
</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>N</b> denoting the number of integers in given array. </p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given array.</p>
<p>Next line contains a single integer <b>M</b> denoting the number of queries.</p>
<p>Each of the following <b>M</b> lines describes a single query in the format given in the statement.</p>
<h3>Output</h3>
<p> Output a single line containing <b>N</b> integers denoting the array after all the <b>M</b> queries.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>M</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>l</b> ≤ <b>r</b> ≤ <b>N</b></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>In each query of first type, <b>p</b> is in set {2, 3, 5} </li>
<li>Subtask 1 (20 points): 1 ≤ <b>N</b> ≤ 100</li>
<li>Subtask 2 (35 points): 1 ≤ <b>N</b> ≤ 10<sup>5</sup>, there is no query of second type</li>
<li>Subtask 3 (45 points): 1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 2 3
5
1 2 2 2
1 2 2 2
2 2 3
1 2 3 3
2 1 5

<b>Output:</b>
5 1 1
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
            <td>1 sec</td>
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