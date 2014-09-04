<?php require("../../includes/header.php"); ?><h1>Chef and The Right Triangles</h1><div class="content">
<p>The Chef is given a list of <b>N triangles</b>. Each triangle is identfied by the coordinates of its three corners in the 2-D cartesian plane. His job is to figure out <b>how many<br /> of the given triangles are right triangles</b>. A right triangle is a triangle in which one angle is a 90 degree angle. The vertices<br /> of the triangles have integer coordinates and all the triangles given are valid( three points aren't colinear ).</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of triangles. Each of the following <b>N</b><br /> lines contain six space separated integers <b>x1 y1 x2 y2 x3 y3</b> where <b>(x1, y1)</b>,<br /> <b>(x2, y2)</b> and <b>(x3, y3)</b> are the vertices of a triangle.</p>
<p> </p>
<h3>Output</h3>
<p>Output one integer, the number of right triangles among the given triangles.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000  (10<sup>5</sup>)</b></li>
<li> <b>0</b> ≤ <b>x1, y1, x2, y2, x3, y3</b> ≤ <b>20</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
0 5 19 5 0 0
17 19 12 16 19 0
5 14 6 13 8 7
0 4 0 14 3 14
0 2 0 14 9 2

<b>Output:</b>
3
</pre>
<p> </p>
<h3>Explanation</h3>
<p>The first triangle and the last two triangles of the example are right triangles.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rustinpiece">rustinpiece</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-08-2013</td>
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