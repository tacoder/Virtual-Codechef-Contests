<?php require("../../includes/header.php"); ?><h1>Maximum number, GCD condition</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/ANUGCD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/ANUGCD.pdf">Russian</a>.</h3>
<h3>Statement</h3>
<p>You will be given an array <b>A</b> of <b>N</b> integers. You need to answer <b>M</b> queries.<br />
Each query is of the form <b>G x y</b>.<br />
For each query, construct the set <b>S</b> from <b>A</b>. <b>A[i]</b> is included in <b>S</b> if <b>x</b> &lt;= <b>i</b> &lt;= <b>y</b> and <b>GCD(G,A[i])</b> &gt; 1.<br /><br />
Let <b>MAX</b> be the maximum number present in <b>S</b>. Output <b>MAX</b> and number of occurances of <b>MAX</b> in <b>S</b>. <br />If no such number exists, output "<b>-1 -1</b>" (without quotes).
</p>
<h3>Input</h3>
<p>The first line of the input contains 2 integers <b>N</b> and <b>M</b>.<br />
Next line has <b>N</b> integers representing the elements of array <b>A</b>.<br />
<b>M</b> lines follow, one per query. Each line has 3 integers <b>G</b>, <b>x</b> and <b>y</b></p>
<h3>Output</h3>
<p>For each query output the required Answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N,M,G,A[i]</b> ≤ <b>100000</b>  (<b>1</b> ≤ <b>i</b> ≤ <b>N</b>)</li>
<li><b>1</b> ≤ <b>x</b> ≤ <b>y</b> ≤ <b>N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
6 5
1 2 3 4 5 4
2 1 5
121 1 6
3 2 6
5 5 5
24 4 6

<b>Output</b>
4 1
-1 -1
3 1
5 1
4 2
</pre><h3>Explanation</h3>
<p><b>Query #1</b><br />
GCD(2,1)=1, GCD(2,2)=2, GCD(2,3)=1, GCD(2,4)=2, GCD(2,5)=1<br /><br />
S = {2,4}<br /><br />
MAX = 4<br /><br />
<b>Query #2</b><br />
S = {}<br /><br />
There is no element in <b>A</b> such that GCD(121, A[i])&gt;1<br /><br />
<b>Query #5</b><br />
GCD(24,4)=4, GCD(24,5)=1, GCD(24,4)=4<br /><br />
S = {4,4}<br /><br />
MAX = 4<br /><br />
Answer is "4 2" as there are 2 occurances of 4 in <b>S</b>
</p>
Author's Note
<p>Time Limit is not strict if correct Algorithm is used.Author's solution passes with 0.6 sec Time Limit (C++ solution, using scanf and printf).
Maximum Input File Size &lt; 3MB.
</p>
--&gt;Author's Note
<p>Time Limit is not strict if correct Algorithm is used.Author's solution passes with 0.6 sec Time Limit (C++ solution, using scanf and printf).
Maximum Input File Size &lt; 3MB.
</p>
--&gt;    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-01-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>