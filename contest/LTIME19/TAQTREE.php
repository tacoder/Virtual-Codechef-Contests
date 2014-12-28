<?php require("../../includes/header.php"); ?><h1>Queries On Tree</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/mandarin/TAQTREE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/russian/TAQTREE.pdf">Russian</a>.</h3>
<p>You are given a tree of <b>N</b> nodes numbered from <b>1</b> to <b>N</b>.<br />
The <b>i</b><sup>th</sup> edge connecting node <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b> has a weight of <b>w<sub>i</sub></b>.
</p>
<p>
Your target is to handle the queries of the following two types:</p>
<ul>
<li>
  <b>"1 i c"</b> : Update the weight of <b>i</b><sup>th</sup> edge with the new weight <b>c</b>.<br />
  (1 represents the query type).</li>
<p> </p>
<li>
  <b>"2 u v"</b> : Find the length of the path from node <b>u</b> to <b>v</b>. (2 represents the query type).</li>
</ul>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer <b>N</b>.</li>
<li>Each of the next <b>N - 1</b> lines contains three integers <b>u v w</b>, representing an edge<br />
  between <b>u</b> and <b>v</b> with the weight of <b>w</b>.</li>
<li>The next line contains a single integer <b>Q</b> representing the number of queries</li>
<li>Each of the next <b>Q</b> lines contains three integers representing a query as described above.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each query of type 2, output the answer in a single line.</li>
</ul>
<h3>Constraints</h3>
<p><b>All test:</b></p>
<ul>
<li><b>1</b> ≤ <b>i</b> &lt; <b>N</b></li>
<li><b>1</b> ≤ <b>u, v</b> ≤ <b>N</b>; <b>u</b> ≠ <b>v</b></li>
<li><b>1</b> ≤ <b>w, c</b> ≤ <b>10<sup>4</sup></b></li>
</ul>

<p><b>40 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>3</sup></b></li>
</ul>

<p><b>60 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 2
2 3 4
4 2 3
5 4 1
3
2 5 3
1 3 1
2 5 3

<b>Output:</b>
8
6

</pre><h3>Explanation</h3>
<p>The path from 5 to 3 is 5 -&gt; 4 -&gt; 2 -&gt; 3. Initially this path has the length of 1 + 3 + 4 = 8.<br />
After the weight of the edge connect 4 and 2 was changed to 1, the new length of the path is 1 + 1 + 4 = 6.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-12-2014</td>
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