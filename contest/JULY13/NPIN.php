<?php require("../../includes/header.php"); ?><h1>Needles and Pins</h1><div class="content">
<p>Few people know that the Chef is also a modern artist. In his spare time, he makes paintings which do not stink of traditions. They are like whiffs of fresh air, full of experimentation. So, now you know all those err.. beautiful pieces of art in the Chef’s restaurant, are his own works!</p>
<p>Here is how he makes a piece of modern art - First he takes a large thin wooden board. Then he draws a big polygon on it, using crayons. Then in several wild swings, he draws several lines on the board. You may think it is simple, but it is not so. After so many years of experience in slicing potatoes and tomatoes he has become very accurate in marking points on the board. So what is remarkable is, that every corner of the polygon, and every starting and ending point of the line is an integral point, i.e can be represented as &lt;x, y&gt; where x and y both are integers. Another point worth pointing out is that Chef believes in symmetry. This is visible from following fact- "If we divide entire wooden board into 16 square shaped (virtual) regions, the difference in number of lines <i>contained</i> in the region with maximum lines and the region with minimum lines does not exceed 50%". A region is said to <i>contain</i> a line if at least one end point of line is inside it.</p>
<p>It doesn't end here. Then the Chef takes colourful (sewing) needles and nails them on every point on the line traced by crayon, such that the point is integral and it lies either on or inside the polygon. As polygon boundaries are also lines, needles are pinned on them as well. Finally he takes board pins with colourful heads and pins them inside the polygon such that the point is not already occupied by needle and the point is integral. Lo and behold! The painting is ready!</p>
<p>The needles and board pins are rather costly, so the Chef neither wants to buy the needles and pins in excess, nor does he want to run short of them. Now, he needs your help to tell him the exact number of needles and pins that he would require. We can hear the Chef singing “..and still it begins, needles and pins ♪♫...” slowly.</p>
<h3>Input</h3>
<p>First line contains an integer <b>T</b>, the number of test cases. For each test case - first line contains two integers <b>N</b>, number of vertices of polygon and <b>M</b>, number of lines. Then <b>N</b> lines follow, each containing 2 space separated integers <b>X Y</b> denoting the ith vertex. The vertices are given anti-clockwise. Next <b>M</b> lines contains 4 space separated integers <b>X1 Y1 X2 Y2</b> denoting 2 end points of the jth line. No line is longer than 10000 units in length.</p>
<h3>Output</h3>
<p>For each test case - output on a single line the number of needles required and the number of pins required.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 5</b><br /><b>3 ≤ N ≤ 50</b><br /><b>0 ≤ M ≤ 10000</b><br /><b>-500000 ≤ X, Y, X1, Y1, X2, Y2 ≤ 500000</b></p>
<h3>Sample</h3>
<pre>
<b>Input</b>
1
4 4
0 0
6 0
4 2
2 2
1 0 4 0
2 4 2 -1
0 0 -1 -1
0 1 3 1

<b>Output</b>
14 1

</pre><h3>Note</h3>
<p>1) The symmetry constraint - "If we divide entire wooden board into 16 square shaped (virtual) regions .... " is enforced only if number of lines (<b>M</b>) is ≥ 1000.</p>
<p>2) The polygon is convex.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vinayak garg">vinayak garg</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-12-2012</td>
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