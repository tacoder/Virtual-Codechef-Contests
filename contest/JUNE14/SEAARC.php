<?php require("../../includes/header.php"); ?><h1>Sereja and Arcs</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/SEAARC1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/SEAARC1.pdf">Russian</a>.</h3>
<p>Sereja have <b>N</b> points, with coordinates <b>(1, 0), (2, 0), ..., (N, 0)</b>. Every point has a color, point with coordinate <b>(i, 0)</b> has color <b>A[i]</b>.</p>
<p>Sereja have painted arcs between every pair of points with same color. Formally Sereja painted arc between points <b>(i, 0)</b> and <b>(j, 0)</b> if <b>A[i] = A[j]</b> and <b>i != j</b>, such arc has color <b>A[i]</b>. All the arcs are painted such way that they will reside along the positive quadrant.</p>
<p>Now Sereja wants to know how many pairs of arc with different color intersect?</p>
<h3>Input</h3>
<p> First line contain integer <b>N</b>. Next line contain integers <b>A[1], A[2], ..., A[N]</b>.</p>
<h3>Output</h3>
<p> In single line output answer modulo <b>1000000007 (10^9 + 7)</b>. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>A[i]</b> ≤ <b>100000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 2 1 2

<b>Output:</b>
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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