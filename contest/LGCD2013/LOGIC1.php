<?php require("../../includes/header.php"); ?><h1>Buildings</h1><div class="content">
<p>There is a <b>N</b>-story building and you are given two identical eggs. The eggs (and the building) have an interesting property that if you throw the egg from a floor number less than <b>X</b>, it will not break. And it will always break if the floor number is greater than or equal to <b>X</b>. Assuming that you can reuse the eggs which didn't break, you need to find <b>X</b> in a minimal number of throws. What is the worst case upper bound on the number of throws you must make to determine this <b>X</b>? </p>
<h3>Input</h3>
<p>An integer <b>T</b>, denoting the number of test cases (1&lt;= <b>T</b> &lt;= 100000). </p>
<p>Each test case contains one integer <b>N</b>, the number of floors in the building.</p>
<h3>Output</h3>
<p>For each test case, print the minimum number of moves required to determine <b>X</b> on a new line.</p>
<h3>Constraints</h3>
<p>2 &lt;= <b>N</b> &lt;= 10^9</p>
<p>1 &lt;= <b>T</b> &lt;= 100000</p>
<p>1 &lt;= <b>X</b> &lt;= <b>N</b></p>
<h3>Example</h3>
<p><b>Sample Input</b><br />2<br />2<br />4<br /><br /><b>Sample Output</b><br />2<br />3<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/adurysk">adurysk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2013</td>
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