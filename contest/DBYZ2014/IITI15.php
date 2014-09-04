<?php require("../../includes/header.php"); ?><h1>Sherlock and Inversions</h1><div class="content">
<p> </p>
<p>
After a long series of jobless days, Sherlock and Watson frustated by the lack of new cases, decide to turn their minds toward something interesting like solving few logical problems. One of the problems they have to solve now is as follows:<br />
Given an array <b>A</b> of size <b>N</b> and a list of <b>Q</b> number of queries, where each query has two numbers <b>L</b> and <b>R</b>, find for each query the number of inversions in the subarray from <b>L</b>th to <b>R</b>th position (both inclusive) of the array <b>A</b>( array has 1-based index).<br />
For an array <b>A</b> two elements <b>A[i]</b> and <b>A[j]</b> form an inversion if <b>A[i] &gt; A[j]</b> and <b>i &lt; j</b>. Help them to solve this problem.
</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>First line contains a single integer, length <b>N</b> of the array.</li>
<li>Second line has <b>N</b> space separated numbers, where <b>ith</b> element is <b>A[i]</b>.</li>
<li>Third line has a single integer <b>Q</b>.</li>
<li>Next <b>Q</b> lines have <b>2</b> space separated integers <b>L</b> and <b>R</b> of that query.</li>
</ul>

<h3>Output</h3>
<ul>
<li>Output <b>Q</b> lines, <b>i</b>th line having a single integer, the answer to the <b>i</b>th query</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>20000</b></li>
<li><b>0</b> ≤ <b>A[i]</b> ≤ <b>10^9</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>20000</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<p>
7
7 9 3 5 1 6 4
4
1 4
3 5
1 2
1 7
</p>

<b>Output:</b>
<p>
4
2
0
14
</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iiti_adm">iiti_adm</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-01-2014</td>
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