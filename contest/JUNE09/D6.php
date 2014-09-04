<?php require("../../includes/header.php"); ?><h1>Count the squares</h1><div class="content">

<p>Everyone knows what a square looks like. Mathematically, a square is a regular quadrilateral. This means that it has four equal sides and four equal angles (90 degree angles).</p>
<p>One beautiful day, Johnny eagerly examined the interesting properties of squares. He did not forget you, his best friend and a talented programmer and thus made a problem about squares to challenge your programming ability. The problem is: given a set of N points in the plane, how many squares are there such that all their corners belong to this set?</p>
<p>Now let's show Johnny your skill!</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 10). Then t test cases follow.</p>
<p>Each test case has the following form:</p>
<ul>
<li>The first line contains an integer N, the number of points in the given set (4 ≤ N ≤ 500).</li>
<li>Then N lines follow, each line contains two integers X, Y describing coordinates of a point (-50 ≤ X, Y ≤ 50).</li>
</ul>
<h3>Output</h3>
<p>For each test case, print in a single line the number of squares that have vertices belong to the given set.</p>
<h3>Example</h3>
<pre><strong>Input:</strong><br />1<br />7<br />0 0<br />0 1<br />1 0<br />1 1<br />1 2<br />2 1<br />2 2<br /><br /><strong>Output:</strong><br />3<br /><br /><strong>Output details:</strong><br />The three squares are: <br />(0 0), (0 1), (1 1), (1 0)<br />(1 1), (1 2), (2 2), (2 1)<br />(0 1), (1 0), (2 1), (1 2)<br /></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-05-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>