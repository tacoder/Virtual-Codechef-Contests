<?php require("../../includes/header.php"); ?><h1>Head office building</h1><div class="content">

<p>CodeChef Inc. owns a rectangular piece of land sized w×h.  Its edges are parallel to the axes, with the bottom-left corner at (0,0) and top-right corner at (w,h).  They intend to build a new head office within this land.  The new office will be a square whose center is located at a point with integer coordinates, and whose diagonals are parallel to the axes and have length 2*d.</p>
<p>Unfortunately, there are n barricades on the land, some of which may need to be removed in order for the office to be built.  The (i)th barricade is located at (X<sub>i</sub>, Y<sub>i</sub>) and will cost C<sub>i</sub> to remove.  The office may only be built once all points it covers (including the boundaries) are free of barricades.
</p>
<h3>Request</h3>
<p>Help them find the minimum total cost of barricade removal.</p>
<h3>Input</h3>
<ul>
<li>The first line contains the integers w,h,d,n, respectively.</li>
<li>Within following n lines, the i-th line contains the integers X<sub>i</sub>,Y<sub>i</sub>,C<sub>i</sub> respectively.</li>
</ul>
<p></p>
<h3>Output</h3>
<p>Output on a single line an integer which is the minimum cost found.</p>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>
4 3 1 4
1 3 5
3 3 4
2 2 1
2 1 2
</pre><p>
<b>Output:</b></p>
<pre>
2
</pre><h3>Limitations</h3>
<p><ul>
<li>2≤w,h≤1 000</li>
<li>0≤n≤200 000</li>
<li>2≤2d≤min(w,h)</li>
<li>0&lt;C<sub>i</sub>≤10 000</li>
<li>All the listed barricades are inside or on the boundaries of the CodeChef’s land.</li>
<li>There is at most one barricade at each point.</li>
</ul>
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-05-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>