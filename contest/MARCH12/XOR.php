<?php require("../../includes/header.php"); ?><h1>Xor it</h1><div class="content">

<p>Chef has given you a sequence <b>A[1], A[2], ..., A[N]</b> composed of <b>N</b> nonnegative integer numbers. Then, for each pair (<b>i</b>; <b>j</b>) such that <b>1 &lt;= i &lt; j &lt;= N</b>, we have written a number that equals to <b>A[i] xor A[j]</b> (xor is exclusive or, "xor" in Pascal, "^" in C++). Thus, we have obtained <b>N*(N-1)/2</b> numbers. Your task is to find <b>K</b> minimal numbers among them.</p>
<h3>Input</h3>

<p>The first line of the input contains two space separated integers <b>N</b> and <b>K</b>. Each of the next <b>N</b> lines contains one integer, <b>i</b><sup>th</sup> line contains number <b>A[i]</b>.</p>
<h3>Output</h3>

<p>In the only line of output print space separated sequence of  <b>K</b> numbers, the answer to the problem. Numbers should be in non-decreasing order.</p>
<h3>Constraints</h3>

<p> 2 ≤ <b>N</b> ≤ 100000
</p>
<p> 1 ≤ <b>K</b> ≤ <b>min{250000, N*(N-1)/2}</b>
</p>
<p> 0 ≤ <b>A[i]</b> &lt; 2<sup>31</sup></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4 5
1
1
3
4

<b>Output:</b>
0 2 2 5 5
</pre><h3>Explanation</h3>
<p>In the sample input we have <b>4</b> numbers: <b>1, 1, 3, 4</b>. Therefore, there are <b>(4*3)/2 = 6</b> pairwise XOR's. These XOR's are:<br />
<b>1</b> xor <b>1</b> = <b>0</b> (<b>A[1]</b> xor <b>A[2]</b>)<br />
<b>1</b> xor <b>3</b> = <b>2</b> (<b>A[1]</b> xor <b>A[3]</b>)<br />
<b>1</b> xor <b>4</b> = <b>5</b> (<b>A[1]</b> xor <b>A[4]</b>)<br />
<b>1</b> xor <b>3</b> = <b>2</b> (<b>A[2]</b> xor <b>A[3]</b>)<br />
<b>1</b> xor <b>4</b> = <b>5</b> (<b>A[2]</b> xor <b>A[4]</b>)<br />
<b>3</b> xor <b>4</b> = <b>7</b> (<b>A[3]</b> xor <b>A[4]</b>)<br />
If we sort these numbers we will obtain: <b>0, 2, 2, 5, 5, 7</b>. The first <b>5</b> minimal numbers are: <b>0, 2, 2, 5, 5</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-02-2012</td>
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