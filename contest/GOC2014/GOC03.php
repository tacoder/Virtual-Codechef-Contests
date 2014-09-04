<?php require("../../includes/header.php"); ?><h1>Boom Ball</h1><div class="content">
<h3>Problem description</h3>
<p>Chef Boogy has a spongy boom ball that is made of 32 pieces of polygon figures: 12 black pentagons and 20 white hexagons. Each pentagon adjoins 5 hexagons and each hexagon adjoins 3 pentagons and 3 hexagons. Boogy drew a polygon (i.e. a closed line without intersections) along the edges of the pieces. The polygon divided the ball into two parts and Boogy painted one of them green. He is curious if given a description of the polygon you are able to compute the number of black, white and green pieces? </p>
<h3>Input</h3>
<p>The input has two test cases.<br />
For each test case, the first line of the input contains one integer n being the number of vertices of the polygon. The second line of the input contains n integers a1, a2,..., an separated by single spaces. Integer ai (equal 1 or 2) is the number of green pieces adjoining the i-th vertex of the polygon. The side of the polygon connecting the n-th and the first vertex always lies between two hexagons.</p>
<h3>Output</h3>
<p>For each test case the first and only line of the output contains three integers b, w and g - the numbers of black, white and green pieces respectively.</p>
<h3>Example</h3>
<pre><b>Input:</b>
21 
1 2 1 2 1 2 1 1 1 2 2 1 1 1 1 2 2 2 1 1 1 

<b>Output:</b>
11 15 6 
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/giriraj">giriraj</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-03-2014</td>
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