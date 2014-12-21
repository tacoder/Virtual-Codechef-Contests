<?php require("../../includes/header.php"); ?><h1>And Tuples</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/mandarin/ANDTUPLE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/russian/ANDTUPLE.pdf">Russian</a>.</h3>
<p>A pair of non-negative integers (A,B) is called <i>and-pair</i> if <b>A &amp; B = B</b>, i.e., bitwise-and of A and B is equal to B. Similarly, a tuple of K non-negative integers (A<sub>1</sub>,A<sub>2</sub>,A<sub>3</sub> .. A<sub>K</sub>) is called <i>and-tuple</i> if <b>A<sub>i</sub> &amp; A<sub>i+1</sub> = A<sub>i+1</sub></b> for 1≤i≤K-1.</p>
<p>Given two integers <b>N</b> and <b>K</b>, how many <i>and-tuples</i> of size K exist such that the sum of the elements of the tuple is N?</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of testcases, then T lines follow. Each of the following lines contain two space-separated integers K and N.<br />
<h3>Output</h3>
</p><p>For each testcase, print a single line containing the answer. Since the number can be quite large, print the answer modulo <b>1000000009</b>.<br />
<h3>Constraints</h3>
<ul>
<pre><li><b>For 20 points: </b>1 ≤ T ≤ 10000, K = 3, 1 ≤ N ≤ 10<sup>18</sup><br /></li><li><b>For 80 points: </b>1 ≤ T ≤ 10000, 3 ≤ K ≤ 4, 1 ≤ N ≤ 10<sup>18</sup></li></pre></ul>
<h3>Example</h3>
</p><p><b>Input:</b></p>
<pre>2<br />3 2<br />4 2<br /></pre><p><br /><b>Output:</b></p>
<pre>2<br />2<br /></pre><p><br /><b>Explanation:</b>
<ul>
<li>In the first case, the two <i>and-tuples</i> are (2,0,0) and (1,1,0).
</li><li>In the second case they are (2,0,0,0) and (1,1,0,0).</li></ul>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/piyushkumar">piyushkumar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xiaodao">xiaodao</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-10-2014</td>
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