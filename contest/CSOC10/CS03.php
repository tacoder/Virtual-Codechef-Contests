<?php require("../../includes/header.php"); ?><h1>Reflections</h1><div class="content">

<p>Problem text...<br />
Suppose we have a convex polygon of n vertices. One of the edges has a light<br />
emitting point which emits a ray of light in a known direction. The edges of the<br />
polygon are made of mirrors. As a result, when a ray of light falls upon an edge, it is<br />
reflected to another direction according to the laws of reflection. So after a certain<br />
number of reflections we can evaluate the point hit by ray. Our challenge here is to<br />
evaluate that point. By the way, if the ray falls upon a vertex of the polygon, it is lost<br />
forever.</p>
<h3>Input</h3>

<p>Input description...<br />
The input session begins with two numbers 3&lt;=v&lt;=10, 0&lt;=n&lt;=1000, denoting the<br />
number of vertices in the polygon and the number of reflections to simulate. After<br />
that a line will follow containing (x,y), the position of the light emitting point, which<br />
will always lie upon an edge (and will never coincide with any vertex) and<br />
0&lt;=t&lt;360, the angle in degree between x-axis and the ray, measured in anticlockwise<br />
direction, which is always valid. Next there be v lines each of which will<br />
contain a vertex of the polygon ordered to the anti-clockwise direction. All points will<br />
be represented in x,y coordinate system with two digits after the decimal point. A<br />
pair of zeros declares the end of the input session.</p>
<h3>Output</h3>

<p>Output description...<br />
For every data-set, output the final point the array hits after n reflections with two<br />
digits after the decimal point. Remember, the point should lie upon an edge of the<br />
polygon. If the ray is lost forever within n reflections, output “lost forever…”. Output<br />
for every data-set should start in a new line. Be extra cautious about precision<br />
errors. Because if there is a vertex 4.00 and our ray passes through 4.001, we will<br />
count it as “lost forever…”, as we are concerned with only two digits after the<br />
decimal point.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4 4
2.00 0.00 0.00
0.00 0.00
4.00 0.00
4.00 4.00
0.00 4.00
4 0
2.00 0.00 45.00
0.00 0.00
4.00 0.00
4.00 4.00
0.00 4.00
0 0

<b>Output:</b>
Lost forever…
4.00 2.00
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td> - 2 sec</td>
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