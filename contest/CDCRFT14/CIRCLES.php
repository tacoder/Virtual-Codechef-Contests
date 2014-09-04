<?php require("../../includes/header.php"); ?><h1>Entangled Circles</h1><div class="content">
<p>
  The description of this problem is extremely simple. You are given <b>2<br />
  non-intersecting circles</b> in 3-dimensional world. Each of the circle is defined<br />
  by <b>3 non - collinear points</b> lying on the circle. All you have to return is<br />
  whether the circles are entangled or not (just like two links of a chain). Two<br />
  circles are entangled if they cannot be separated from each other without<br />
  breaking any of the circles.
  </p>
<h3>Input Format:</h3>
<p>
  The first line contains a single integer, <b>T</b>, the number of test cases. Each of<br />
  the <b>T</b> test cases are defined by <b>2</b> lines. The first line of each test case<br />
  contains <b>9</b> integers representing the <b>3</b> points as <b>(x1, y1, z1), (x2, y2, z2),<br />
  (x3, y3, z3)</b> which define the first circle. Similarly, the second line for<br />
  each test case contains <b>9</b> integers representing the <b>3</b> points which define the<br />
  second circle.
  </p>
<h3>Output Format:</h3>
<p>
  For every query output <b>"YES"</b> without quotes if the circles are entangled and<br />
  <b>"NO"</b> otherwise (quotes for clarity).
  </p>
<h3>Constraints:</h3>
<p><b><br />
  1 &le; T &le; 100<br />
-10000 &le; Each Coordinate in the Input &le; 10000</b>
  </p>
<h3>Sample Input:</h3>
<pre>
1
0 1 0 1 0 0 0 -1 0
0 0 0 1 0 -1 1 0 1</pre><h3>Sample Output:</h3>
<pre>
YES</pre><p></p>
<p><b>Problem Setter: Lalit Kundu</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2014</td>
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