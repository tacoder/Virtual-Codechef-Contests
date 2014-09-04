<?php require("../../includes/header.php"); ?><h1>Slow Growing Bacteria</h1><div class="content">

<p>Given an nxn grid of cells, a bacteria colony can colonize these cells.<br />
Their growth after every second is governed by the following rules:</p>
<p> 1) One new bacteria is born in cell (i ,j) if and only if either one of its four neighboring cells or the cell(i,j) itself has a bacteria population more than or equal to the threshold value, k.</p>
<p> 2) Already living bacterias do not die.</p>
<p>
Given, the initial state of the nxn cell grid, you need to accurately estimate the time by when the total bacteria population reaches m.</p>
<h3>Input</h3>
<p>First line contains t, number of test cases.</p>
<p>Each test case starts with n (side length of grid ) , k (growth threshold) and m (final population).</p>
<p>Next n lines contain an nxn grid of integers, where ith row,jth column tells the number of bacteria's present initially at cell(i,j).</p>
<p>
1&lt;  n &lt;= 100 ,<br />
0&lt;  k &lt;= 2^45 ,<br />
0&lt; m &lt;= 2^45, </p>
<p>
There are no more than n cells with initial population equal to or greater than k.
</p>
<h3>Output</h3>
<p>For each test case print the number of seconds required for the total bacteria population to reach m. If m can never be reached print "Not possible" (quotes for clarity).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1

3 5 15

0 0 0
0 3 0
0 0 5


<b>Output:</b>
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mandark">mandark</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>