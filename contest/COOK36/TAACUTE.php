<?php require("../../includes/header.php"); ?><h1>Counting The Acute Triangles</h1><div class="content">
<p>A triangle is <b>acute</b> if all its internal angles are acute (&lt; 90<sup>o</sup>). You are given a set of <b>N</b> points on a 2D plane. Calculate the number of acute triangles that can be formed using points from the set as vertices.</p>
<p>Two triangles are different if the set of three vertices of one triangle is not equal to the set of three vertices of the other triangle.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b>, the number of points in the set. Each of the next <b>N</b> lines contains two space separated integers which are the x and y coordinates of points in the set.</p>
<h3>Output</h3>
<p>Output a single line containing the number of acute triangles.</p>
<h3>Constraints</h3>
<ul>
<li> <b>3</b> ≤ <b>N</b> ≤ <b>2000</b></li>
<li> The <b>x</b>, <b>y</b> coordinate of each point satisfies <b>0</b> ≤ <b>x</b>, <b>y</b> ≤ <b>10,000</b> </li>
<li> All points are distinct. </li>
</ul>
<h3>Example</h3>
<pre><b>Input1:</b>
3
0 0
2 2
0 3
<b>Output1:</b>
1

<b>Input2:</b>
3
0 0
2 2
0 5
<b>Output2:</b>
0

<b>Input3:</b>
4
1 1
3 2
1 3
3 4
<b>Output3:</b>
2
</pre>
<h3>Explanation</h3>
<p><b>Example case 3. </b>Two acute triangles are {(1, 1), (3, 2), (1, 3)} and {(3, 2), (1, 3), (3, 4)}</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/keshav_57">keshav_57</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-07-2013</td>
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