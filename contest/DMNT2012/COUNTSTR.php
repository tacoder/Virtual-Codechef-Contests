<?php require("../../includes/header.php"); ?><h1>Counting Stars</h1><div class="content">

<p>Galileo's latest project involves determining the density of stars in certain regions of the sky. For this purpose he started looking for datasets online, and discovered a dataset on Newton's blog. Newton had decomposed the night sky into a Voronoi tessellation with the generators arranged in a grid. He has stored the number of stars in a Voronoi cell at a position in a matrix that corresponds to the position of the generator in the grid.</p>
<p>This dataset does not directly help Galileo, because he needs to be able to query the number of stars in a rectangular portion of the sky. Galileo tried to write a program that does this on his own, but it turned out to be too slow. Can you help him?</p>
<h3>Input Format</h3>
<p>The first line contains two integers n and m that denote the height and width of the matrix respectively. This is followed by  n lines each containing m integers each.</p>
<p>The line following this would contain a single integer t, the number of queries to be run. Each query line consists of 4 integers p<sub>x</sub>, p<sub>y</sub>, q<sub>x</sub>, q<sub>y</sub>. The first two integers denote the row and column numbers of the upper left corner of the rectangular region, and the second pair of numbers correspond to the lower right corner.</p>
<h3>Output Format</h3>
<p>For each query output a single line containing the number of stars in that rectangular region.</p>
<h3>Example</h3>
<p>Input:</p>
<pre><code>
3 3
10 10 10
10 10 10
10 10 10
4
1 1 1 1
1 1 3 3
2 1 3 3
3 1 3 3

</code></pre><p>Output:</p>
<pre><code>
10
90
60
30
</code></pre><p></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/singh_sume">singh_sume</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 10 sec</td>
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