<?php require("../../includes/header.php"); ?><h1>The Mine Field</h1><div class="content">

<p>It's 2012. The times of peace are over. The Trojan Kingdom has just declared war on Byteland! As part of a massive defense plan against the Trojans, the Bytelandian Ministry of Defense  (BMoD) wants to lay mines on a field near the borderline of the country.</p>
<p>The field has the form of a MxN rectangular grid divided into MxN unit-square cells. It is only possible to plant mines on some cells, and the number of mines on a cell cannot exceed one.</p>
<p>The objective is obviously to lay as many mines as possible. However, the BMoD does not want any two adjacent cells to both have mines, because such a situation would be dangerous: one mine being triggered could lead to a chain of explosions! Two cells are adjacent if they share a common edge.</p>
<p>Johnny, the most renowned computer scientist in Byteland, needs to compute the maximum number of mines that could be planted on the field, and the number of different ways in which these mines could be planted.</p>
<p>Hurry up and help Johnny save his beloved country!</p>
<h3>Input</h3>
<p>The first line contains T (about 15), the number of test cases. Then T test cases follow. Each test case has the following form.</p>
<p>The first line contains two numbers M and N representing the size of the field (1 ≤ M, N ≤ 20).</p>
<p>Each line in the next M lines contains N characters. Each character is either '.' or '*' representing the status of a cell in the field. A character '.' represents an empty cell (i.e. it is possible to lay a mine on that cell), while a character '*' represents a blocked cell (i.e. there are obstacles on that cell which prevent mines from being laid on it).
</p>
<p>Input for successive test case is separated by a blank line.</p>
<h3>Output</h3>
<p>For each test case, print two numbers on a line. The first number is the maximum number of mines that could be planted on the field. The second number is the number of ways to plant the maximum number of mines on the field, modulo 151109.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 3
...
.*.

3 3
...
.*.
...

<b>Output:</b>
3 1
4 2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>