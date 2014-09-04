<?php require("../../includes/header.php"); ?><h1>Pascular Triangle</h1><div class="content">
<p><span>A  <strong>Pascular triangle</strong> is a triangular array of the integer coefficients. The rows of Pascular triangle are enumerated starting with row <strong><em>n</em> = 1</strong> at the top. The entries in each row are numbered from the left beginning with <strong><em>k</em> = 1</strong> and are usually staggered relative to the numbers in the adjacent rows.</span><span> </span></p>
<p><span> A simple construction of the <strong>Pascular</strong> triangle proceeds in the following manner. On row <strong>1</strong>, write only the number <strong>1</strong>. Then, to construct the elements of following rows, add the number above and to the left with the number above and to the right to find the new value. If either the number to the right or left is not present, substitute a <strong>1</strong> in its place.</span></p>
<p><span>                                                                 1</span></p>
<p><span>                                                               2   2</span></p>
<p><span>                                                            3   4   3</span></p>
<p><span>                                                         4   7   7    4</span></p>
<p><span>                                                     5   11  14   11  5</span></p>
<p><span> </span><span>                                       The first five rows of Pascular triangle</span><span> </span></p>
<p><span>Mathematically, if <strong>f(n,k)</strong> = <strong>k</strong> th number in the <strong>n</strong>th row where, <strong>1 &lt;= k &lt;= n; </strong>Then the construction is given by the recurrence:</span><span> </span></p>
<p><span>            <strong>f(n,1) = f(n,n) = n</strong>, and <strong>f(n,k) = f(n-1,k) + f(n-1,k-1) for 1 &lt; k &lt; n</strong></span><span> </span></p>
<p><span>Given <strong>n</strong> and <strong>k,</strong> your task is to compute <strong>f(n,k) MOD 1000000007 </strong>.</span></p>
<p> </p>
<h3>Input</h3>
<p><span>The first line contains single integer </span><strong>T</strong><span> - the number of test cases. Each of the next T lines contains two integers </span><strong>N</strong><span> and </span><strong>K</strong><span> separated by a single space.</span><strong> </strong></p>
<h3>Output</h3>
<p>For the given <b>n</b> and <b>k</b> output the required value of <b>f(n,k) MOD 1000000007</b></p>
<h3>Constraints</h3>
<ul>
<li><strong>1</strong> ≤ <strong>T</strong> ≤ <strong>10000</strong></li>
<li><strong>1</strong><span> ≤ </span><strong>N</strong><span> ≤ </span><strong>10<sup>9</sup></strong></li>
<li><strong>1</strong><span> ≤ </span><strong>K</strong><span> ≤ </span><strong>16</strong></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><strong>Input:</strong></pre><pre>3
7 2
9 3
183445 12</pre><p> </p>
<pre><strong>Output:</strong></pre><pre>22
92
318672485</pre><p> </p>
<h3></h3>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Debanjan">Debanjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-06-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>