<?php require("../../includes/header.php"); ?><h1>The Hungry Bear</h1><div class="content">

<p>Little Bear had just come back from school. He was very hungry that time and wanted at least K units of honey to satisfy his hunger. He immediately went to a rectangular field of size N x M to collect some honey. He wanted to collect honey only<br />
in a special sub-rectangle which has size S x T where S&lt;=A and T&lt;=B, for some fixed A and B. He has Q queries, each query contains A, B. For each query, he wanted to know how many special sub-rectangles contain at least K units of honey. </p>
<h3>Input</h3>

<p>The first line of the input contains integers N, M  and K(1&lt;=N, M&lt;=300, 1&lt;=K&lt;=N*M).<br />
The next N lines contain M characters (either 'H' or '.'). 'H' means there is honey in that cell, while '.' means there is no honey in that cell.<br />
The next line contains an integer Q (1&lt;=Q&lt;=100 000).<br />
The next Q lines contain integers A and B (1&lt;=A&lt;=N , 1&lt;=B&lt;=M).</p>
<h3>Output</h3>

<p>The output contains Q lines, each line contains the number of special sub-rectangles which satisfy the requirement. (The amount of honey is at least K inside the special sub-rectangle)</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
<code>
5 5 4
H.H..
..H..
H...H
HHHH.
HH..H
2
1 1
2 3
</code>
<b>Output:</b>

0
4

</pre><p>
<b>Explanation for 2nd query</b></p>
<pre>
<code>
#: means the chosen cell
The possibilities are:
1. Size 2 x 3
H.H..
..H..
###.H
###H.
HH..H

2. Size 2 x 3
H.H..
..H..
H...H
###H.
###.H

3. Size 2 x 3
H.H..
..H..
H...H
H###.
H###H

4. Size 2 x 2
H.H..
..H..
H...H
##HH.
##..H
</code>
</pre><p>Note that in 2nd query, the possible special sub-rectangles are of size 1x1, 1x2, 1x3, 2x1, 2x2, 2x3. Also note that 2x3 is different from 3x2</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-10-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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