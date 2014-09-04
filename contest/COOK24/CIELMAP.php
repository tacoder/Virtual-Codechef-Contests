<?php require("../../includes/header.php"); ?><h1>Ciel and Map</h1><div class="content">

<p>
Tomya is a girl. She loves Chef Ciel very much.
</p>
<p>
Tomya writes a tetragon (see the below <b>Notes 1</b> for details) in her map.<br />
The map has <b>N</b> points, whose coordinate are (<b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b>), denoting Ciel's restaurants.<br />
Each vertex of the tetragon written by Tomya is one of the Ciel's restaurants.
</p>
<p>
Tomya doesn't show her tetragon in the map, but she says that she draws a long segment.<br />
To guess her tetragon, please tell the maximum length of a segment which can be one of the sides in her tetragon. (See <b>Notes 2</b> for the definition of length)
</p>
<p>
<b>Notes 1</b>:<br />
A tetragon means a polygon with 4 sides.<br />
A tetragon must be simple, that is, the boundary of the tetragon does not cross itself.<br />
A tetragon does not have to be convex.
</p>
<p><img src="http://www.codechef.com/download/CIELMAP2.png" width="300" height="301" /></p>
<p>
<b>Notes 2</b>:<br />
The length of a segment is defined as the Euclidean distance between the endpoints.<br />
That is, the length of the segment (<b>x</b><sub>1</sub>, <b>y</b><sub>1</sub>) - (<b>x</b><sub>2</sub>, <b>y</b><sub>2</sub>) is the square root of (<b>x</b><sub>1</sub> - <b>x</b><sub>2</sub>)<sup>2</sup> + (<b>y</b><sub>1</sub> - <b>y</b><sub>2</sub>)<sup>2</sup>.
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
The first line of each test case contains an integers <b>N</b>.<br />
Then next <b>N</b> lines follow.<br />
The <b>i</b>-th line contains 2 integers denoting <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b>.
</p>
<h3>Output</h3>
<p>
For each test case, print the maximum length of a segment which can be one of sides in her tetragon.<br />
This value must have an absolute error no more than 0.000001 (10<sup>-6</sup>).
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 1250<br />
4 ≤ <b>N</b> ≤ 1000<br />
1 ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ 5000<br />
The sum of <b>N</b> in one test file does not exceed 5000.<br />
No three points (<b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b>), (<b>X<sub>j</sub></b>, <b>Y<sub>j</sub></b>), (<b>X<sub>k</sub></b>, <b>Y<sub>k</sub></b>) lie in the same line (1 ≤ <b>i</b> &lt; <b>j</b> &lt; <b>k</b> ≤ <b>N</b>)
</p>
<h3>Sample Input</h3>
<pre>1
6
3 1
5 2
3 3
6 3
6 6
5 6</pre><h3>Sample Output</h3>
<pre>5.8309518948</pre><h3>Explanations</h3>
<p>
The below figure denotes one of the valid tetragons for the sample input.<br />
The red segment is the longest segment which can be one of the sides in her tetragon.
</p>
<p><img src="http://www.codechef.com/download/CIELMAP.png" width="296" height="300" /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-07-2012</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CAML, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, GO, HASK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>