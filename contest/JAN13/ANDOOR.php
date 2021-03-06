<?php require("../../includes/header.php"); ?><h1>A New Door</h1><div class="content">

<p>Now Chef is very good in cooking; his dishes are the best in the city, so he wants to make his restaurant prettier. The first, what customer sees, when comes to his restaurant is the door. So he will start with it. He has found a new design last night. Hi will cut out some circles from the door and fill the holes by the glass to make windows of peculiar form.</p>
<p>Formally, we can model the process Chef will perform to create the windows as follows. Let the door be a rectangle at the coordinate plane with corners at the points <b>(0, 0)</b>, <b>(W, 0)</b>, <b>(0, H)</b>, <b>(W, H)</b>. Initially the door is colored white, while the remaining part of the coordinate plane is colored black. At each step Chef colors in black some circle including all its inner points. After Chef will color all required circles, the black part of the door (that is, black regions that lie in the rectangle corresponding to the door) is cut out and replaced by the glass.</p>
<p>The main measure of peculiarity of the door is the perimeter of all the windows considering only those parts of windows borders lying inside the door (see example case 2 for clarity). Chef is very tired after coloring so many circles and asks you to find this number.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains 3 space-separated integers <b>W, H, N</b>, denoting the measurements of the door, and the number of circles. The description of <b>N</b> circles follows in the next <b>N</b> lines. Namely, the <b>i</b>-th line among them contains <b>3</b> space-separated real numbers <b>X</b>, <b>Y</b>, <b>R</b> with exactly two digits after the decimal point, denoting the coordinates of the center and the radius of the circle that Chef will cut out at the <b>i</b>-th step.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the sum of the perimeters of all windows as described above. Your answer will be considered as correct if it has an absolute error less than <b>10<sup>-6</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>1000</b></li>
<li><b>1</b> &le; <b>W</b> &le; <b>1000</b></li>
<li><b>1</b> &le; <b>H</b> &le; <b>1000</b></li>
<li><b>1</b> &le; <b>N</b> &le; <b>1000</b></li>
<li>The sum of all values of <b>N</b> over the input does not exceed <b>5000</b></li>
<li><b>0</b> &lt; <b>R</b> &le; <b>1000</b></li>
<li><b>0</b> &le; <b>X</b>, <b>Y</b> &le; <b>1000</b></li>
<li><b>X</b>, <b>Y</b>, <b>R</b> have exactly two digits after the decimal point</li>
<li>All circles are different, that is, every two circles have either different radii or different centers (or both)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
8 10 8
2.00 2.00 1.00
4.00 2.00 0.50
6.00 2.00 1.00
4.00 5.00 1.50
3.00 6.00 0.50
3.00 7.00 0.75
5.00 7.00 1.00
4.00 8.00 1.00
7 7 3
1.00 1.00 2.00
3.00 3.00 1.50
6.00 5.00 1.50

<b>Output:</b>
33.6404284
17.2058395
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The answer is the length of the bold lines on the following picture:</p>
<p><img src="http://www.codechef.com/download/ANDOOR_Ex2.jpg" /></p>
<p><b>Example case 2.</b> The answer is the length of the bold lines on the following picture:</p>
<p><img src="http://www.codechef.com/download/ANDOOR_Ex1.jpg" /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witalij_hq ">witalij_hq </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-08-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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