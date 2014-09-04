<?php require("../../includes/header.php"); ?><h1>Congruent triangles</h1><div class="content">

<p>After learning about congruent triangles in his recent mathematics lesson, Johnny has become very excited. He has even invented an interesting counting problem involving congruent triangles!
</p>
<p>Recall that two triangles are congruent if their corresponding sides are equal in length and their corresponding angles are equal in size. A lattice triangle is a triangle such that the coordinates of all its vertices are integers. Johnny's problem can now be described as follows:</p>
<p>
You are given an integer M and a lattice triangle ABC all of whose vertices (A, B, and C) are inside rectangle R<sub>M</sub>. R<sub>M</sub> is the rectangle having (0,0) as its bottom-left corner and (M,M) as its top-right corner. In other words, 0 ≤ x<sub>A</sub>, y<sub>A</sub>, x<sub>B</sub>, y<sub>B</sub>, x<sub>C</sub>, y<sub>C</sub> ≤ M. The problem is to count the number of lattice triangles congruent to ABC also having all their vertices inside the rectangle R<sub>M</sub>.</p>
<p>Could you help Johnny write a program to solve this problem?</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 10). Then t test cases follow. Each test case has the following form:</p>
<ul>
<li>The first line contains two numbers M and K (1 ≤ M ≤ 1000, 1 ≤ K ≤ 1000). K is the number of given triangles.</li>
<li>Each line in the next K lines contains 6 integers x<sub>A</sub>, y<sub>A</sub>, x<sub>B</sub>, y<sub>B</sub>, x<sub>C</sub>, y<sub>C</sub> (0 ≤ x<sub>A</sub>, y<sub>A</sub>, x<sub>B</sub>, y<sub>B</sub>, x<sub>C</sub>, y<sub>C</sub> ≤ M) describing a triangle ABC. It is guaranteed that ABC is always a triangle (i.e., non-degenerate).</li>
</ul>
<p>The input for successive test cases is separated by a blank line.</p>
<h3>Output</h3>
<p>For each test case, output a line containing the string "Case #T:" where T should be replaced by the corresponding test case number.</p>
<p>Then, K lines should follow, each line containing the number of triangles having vertices inside the rectangle R<sub>M</sub>, congruent to the corresponding triangle given in the input.</p>
<p>Print a blank line after each test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

2 2
0 0 0 2 2 0
0 0 1 1 2 0

3 2
0 0 0 2 2 0
0 0 1 1 2 0

<b>Output:</b>
Case #1:
4
8

Case #2:
16
24
</pre><h3>Output details</h3>
<p>The 8 triangles congruent to the second triangle (in the first test case) are presented in the following figure:</p>
<p><img src='http://www.codechef.com/download/h3.png' /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-09-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>