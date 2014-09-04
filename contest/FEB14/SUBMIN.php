<?php require("../../includes/header.php"); ?><h1>Little Elephant and Subarrays</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/FEB14/mandarin/SUBMIN.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/FEB14/russian/SUBMIN.pdf" target="_blank">Russian</a>.</h3>
<p>Little Elephant is playing a game with arrays. He is given an array <b>A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>N−1</sub></b> of <b>N</b> integers. And then <b>Q</b> queries are given, each containing an integer <b>K</b>. He has to tell how many subarrays satisfy the condition: the function <b><i>foo</i></b> returns <b>K</b> when it is applied to the subarray.<br /> In this problem, a subarray is defined as a sequence of continuous elements <b>A<sub>i</sub>, A<sub>i+1</sub>, ..., A<sub>j</sub> </b> where <b>0 ≤ i ≤ j ≤ N−1</b>. The function <b><i>foo</i></b>, when applied to an array, returns the minimum of all the elements in the array.<br /> For example, <b><i>foo</i></b> returns <b>5</b> when it is applied to the array <b>[7, 5, 10, 7, 5, 8]</b>. Please note that the subarrays <b>A<sub>i</sub>, A<sub>i+1</sub>, ..., A<sub>j</sub></b> and <b>A<sub>k</sub>, A<sub>k+1</sub>, ..., A<sub>l</sub></b> are different if and only if <b>i ≠ k</b> or <b>j ≠ l</b> in this problem.</p>
<h3>Input</h3>
<p>The first line of input contains <b>N</b>, denoting the size of the array. The next line contains <b>N</b> space separated integers <b>A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>N−1</sub></b>, denoting the array. Then the next line contains <b>Q</b>, denoting the number of queries. Each query consists of one integer per line, denoting <b>K</b>.</p>
<h3>Output</h3>
<p>For each query, print the required number of subarrays.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N ≤ 50</b></li>
<li><b>1 ≤ A<sub>i</sub> ≤ 1000000 (10<sup>6</sup>)</b></li>
<li><b>1 ≤ Q ≤ 10</b></li>
<li><b>1 ≤ K ≤ 1000000 (10<sup>6</sup>)</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
4 1 2 3 4
4
3
4
6
1

<b>Output:</b>
2
2
0
8
</pre>
<h3>Explanation</h3>
<p><b>Query 1.</b> Only the two subarrays <b>[3, 4]</b> and <b>[3]</b> satisfy.</p>
<p><b>Query 2.</b> Again only the two subarrays <b>[4]</b> and <b>[4]</b> satisfy. Please note that these subarrays (<b>A<sub>0</sub></b> and <b>A<sub>4</sub></b>) are considered different.</p>
<p><b>Query 3.</b> No subarray satisfies.</p>
<p><b>Query 4.</b> The eight subarrays <b>[4, 1]</b>, <b>[4, 1, 2]</b>, <b>[4, 1, 2, 3]</b>, <b>[4, 1, 2, 3, 4]</b>, <b>[1]</b>, <b>[1, 2]</b>, <b>[1, 2, 3]</b> and <b>[1, 2, 3, 4]</b> satisfy.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-01-2014</td>
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