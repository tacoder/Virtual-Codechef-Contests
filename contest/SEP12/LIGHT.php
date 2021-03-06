<?php require("../../includes/header.php"); ?><h1>Lights</h1><div class="content">

<p>
There are <strong>N</strong> lights above a road along the X-axis.<br />
The <b>i</b>-th light has <b>X<sub>i</sub></b> as its X-coordinate, and it is hung <b>Y<sub>i</sub></b> above the road.<br />
The <b>i</b>-th light illuminates a triangular area, which is an isosceles triangle and its bottom edge is on the X-axis.<br />
The half of the top angle of the triangle is <b>Z<sub>i</sub></b> degrees. (See the below figure)
</p>
<p>
You have an aircraft which can fly on a fixed height.<br />
Because of some unknown reasons, this aircraft can fly only under the light.<br />
Your task is to find the maximum possible height for your flight from <b>X</b>=<b>L</b> to <b>X</b>=<b>R</b>.
</p>
<p>
The lights do not block the aircraft, e.g. the aircraft can safely fly through a light.
</p>
<p><img src="http://www.codechef.com/download/light.png" width="490" height="194" /></p>
<h3>Input</h3>
<p>
The first line contains three parameters <b>N</b>, <b>L</b> and <b>R</b>.
</p>
<p>
The next <strong>N</strong> lines give the infomation about each light.<br />
The <b>i</b>-th line contains three numbers <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> and <b>Z<sub>i</sub></b>.
</p>
<h3>Output</h3>
<p>
Output the maximum height you can reach.<br />
The value must have an absolute error less than or equal to 0.000001 (10<sup>-6</sup>).<br />
It is guarenteed that you can make the flight with the positive height.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>N</b> ≤ 50000<br />
-1000 ≤ <b>L</b> &lt; <b>R</b> ≤ 1000<br />
-1000 ≤ <b>X<sub>i</sub></b> ≤ 1000<br />
0 &lt; <b>Y<sub>i</sub></b> ≤ 1000<br />
15 ≤ <b>Z<sub>i</sub></b> ≤ 75<br />
<b>N</b> is an integer, but all other input values can be non-integers.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2 3.2 7.3
3.2 4.7 28
7.3 4.2 75

<b>Output:</b>
3.300759642

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-03-2012</td>
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