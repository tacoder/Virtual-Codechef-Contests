<?php require("../../includes/header.php"); ?><h1>King and his Quest</h1><div class="content">
<h3>Problem description.</h3>
<p>	Once there was a king who wanted to conquer the largest continent on Earth. During his time Earth was thought to be a plane with only integer coordinates. But, he didn't have a map. He knew that  the countries are like points located at <b>(int X, int Y)</b>;  The continents had the following properties:</p>
<li>a continent is a circular region whose center is at <b>(int c1, int c2)</b> and radius is int <b>R</b>; moreover every point (integer coordinate) in a continent is a country.  </li>
<li>  the continents are separated by oceans such that distance between the center of the continents is at least <b>3</b> times the sum of their radii. </li>
<p><br />
Given the set of all countries on the earth,  the king wants you to help him find the radius of the largest continent.<br />
<br />
Note: A continent may contain only a single country.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting the number of test cases.<br />
For each test case, the first line contains an integer <b>N</b> denoting the number of countries and the successive N lines contains <b>X</b> and <b>Y</b> values for each of the <b>N</b> countries.
</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, you have to print a single line containing the radius <b>R</b> of the largest continent.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>-100000</b> ≤ <b>X,Y</b> ≤ <b>100000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>

2
19
-1 1 
0 1 
0 2 
0 0 
1 1 
1 2 
1 3 
1 0 
1 -1 
2 1 
2 2 
2 0 
3 1 
-5 -9 
-11 -8 
-10 -8 
-10 -7
-10 -9 
-9 -8 
4
1 0
-1 0
0 -1
0 1

<b>Output:</b>

2
0
</pre><p> </p>
<h3>Explanation</h3>
<p>The first test case represent 3 continents of radii 0, 1 and 2 and the second test case represent 4 continents each of radius 0. So, the output i.e, the radius of the largest continent is 2 and 0 for first and second test case respectively.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/codemaster_tx">codemaster_tx</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-10-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>