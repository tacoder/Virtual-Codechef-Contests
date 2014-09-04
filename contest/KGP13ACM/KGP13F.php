<?php require("../../includes/header.php"); ?><h1>Ant Colony</h1><div class="content">
<p>In an ants' colony spread over a flat surface, the ants can reside at integral coordinates as close as unit distance apart from each other (but no closer). The colony has the shape of a quadrilateral<b> ABCD </b>where one ant must reside at each of <b>A</b>, <b>B</b>, <b>C</b>, and <b>D</b>, and all other ants can be on any integral coordinate on its perimeter and its interior. Given the integral positions of <b>A</b>, <b>B</b>, <b>C</b>, and <b>D</b>, print the maximum number of ants that can reside in the colony (including the ants that can reside on the four corners and the perimeter).</p>
<h3>Input</h3>
<p>The first line contains the number of test cases, <b>N</b>.</p>
<p>For each test case, a single line contains the <b>x</b> and <b>y</b> coordinates of the four corners of the quadrilateral in clockwise order starting with the left-most, bottom-most point.</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the maximum number of ants.</p>
<h3>Constraints</h3>
<p>0 &lt; <b>N</b> &#8804; 3</p>
<p><b>|x|, |y|</b> &#8804; 10,000</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 1 3 4 5 3 6 1
1 3 5 6 6 3 3 1

<b>Output:</b>
Case 1: 14
Case 2: 16

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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