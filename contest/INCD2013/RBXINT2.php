<?php require("../../includes/header.php"); ?><h1>Two Snakes In A Grid</h1><div class="content">

<p>Given an rectangular grid of N rows and M columns, each cell can be labeled black (Yin) or white (Yang). Two cells are neighbors if they share a common unit-length edge segment. The grid is valid if all the black cells form a path, and all the white cells form a path. A path is a set S of cells defined as follows:<br />
The cells form a connected piece. From each cell in S, you can reach any other cell in S by moving between neighbors within S. Exactly two cells in S have exactly one neighbor in S each. These are the "ends" of the path. Every other cell in S has exactly two neighbors in S.</p>
<p>Given N and M, compute the number of valid grids. Note that symmetry doesn't matter -- as long as two valid grids differ in one position they are considered different, even if one can be rotated or flipped to the other.<br />
 </p>
<h3>Input</h3>
<p>The first line of the input will be a single integer T, the number of test cases. T lines follow, each of which contains two integers separated by a space: "N M", as defined above.</p>
<h3>Output</h3>
<p>For each test case, output the number of valid grids of the specified size..</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
4 4
4 6
5 5


<b>Output:</b>
24
44
48

</pre><p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/codecheftsec">codecheftsec</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>50 sec</td>
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