<?php require("../../includes/header.php"); ?><h1>Helping Lira</h1><div class="content">
<h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/HELPLIRA.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>Lira is a little girl form Bytenicut, a small and cozy village located in the country of Byteland.</p>
<p> As the village is located on a somewhat hidden and isolated area, little Lira is a bit lonely and she needs to invent new games that she can play for herself.</p>
<p> However, Lira is also very clever, so, she already invented a new game. </p>
<p>She has many stones with her, which she will display on groups of three stones on the ground on a triangle like shape and then, she will select two triangles, one with the smallest area and one with the largest area as the most beautiful ones.</p>
<p>While it's easy for Lira to "estimate" the areas of the triangles by their relative sizes, it's harder for her to actually calculate these areas.</p>
<p>But, it turns out, that Lira is also friends with YOU, an exceptional Mathematics student, and she knew that you would know exactly how to do such verification.</p>
<p>Lira also numbered the triangles from 1 to <b>N</b>, and now she wants to know the indices of the triangles with the smallest and largest area respectively.</p>
<p>It is now up to you, to help Lira and calculate the areas of the triangles and output their numbers.</p>
<h3>Input</h3>
<p>The first line of the input file contains an integer, <b>N</b>, denoting the number of triangles on the given input file.</p>
<p>Then <b>N</b> lines follow, each line containing <b>six</b> space-separated integers, denoting the coordinates x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub>, x<sub>3</sub>, y<sub>3</sub> </p>
<ul>
<h3>Output</h3>
<p>You should output two space separated integers, the indexes of the triangles with the smallest and largest area, respectively.</p>
<p>If there are multiple triangles with the same area, then the last index should be printed.</p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>-1000</b> ≤ <b> x<sub>i</sub>, y<sub>i</sub> </b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
0 0 0 100 100 0
1 1 1 5 5 1

<b>Output:</b>
2 1
</pre><p> </p>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuruma">kuruma</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-02-2013</td>
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