<?php require("../../includes/header.php"); ?><h1>Rubiks cube</h1><div class="content">

<p align="justify">The Rubik's cube is perhaps the world's most popular intellectual toy. More than just the joy of solving, there is a lot of mathematics to it too.</p>
<p align="justify">Consider a solved Rubik's cube. The six faces of the cube are named FRONT, BACK, UP, DOWN, LEFT and RIGHT respectively. An elementary move of the Rubik's cube is rotating a face by 90 degrees clockwise, 90 degrees anticlockwise or 180 degrees about an axis from the centre of the face to the centre of the cube. Any valid state of the Rubik's cube can be reached by applying these elementary operations one after the other.</p>
<p align="justify">An elementary move is denoted in the following fashion. If a given face is rotated by 90 degrees clockwise about the axis passing from the centre of the face to the centre of the cube, the move is denoted by the first letter of the name of the face. If the rotation is anticlockwise by 90 degrees, the letter is followed by an apostrophe ('). If the rotation is by 180 degrees, the letter is followed by a 2.</p>
<p align="justify">For example, a 90 degree clockwise rotation of the right face is denoted by <b>R</b>, a 90 degree anticlockwise rotation of the back face by <b>B'</b> and a 180 degree rotation of the top face by <b>U2</b>. The elementary moves are explained with the help of animations in the "Face turns" section of <a href="http://www.nascarjon.us/notation.html">this page</a>. The elementary moves can be combined to get a compound move of the cube. For example, <b>URF2</b> denotes rotating the top face by 90 degrees clockwise, then the right face by 90 degrees clockwise followed by the front face by 180 degrees.</p>
<p align="justify">In this problem you will be given a string describing a sequence of elementary moves on a solved Rubik's cube. Your task is to find out the number of times the sequence should be applied repeatedly to the cube to get back the original cube.</p>
<h3>Input</h3>
<p align="justify">The first line of input gives T, the number of test cases (1≤T≤1000). Following this are T lines, each containing a string denoting a sequence of moves on the Rubik's cube. The string will contain only the characters U, D, L, R, F, B, ' and 2, and will be at most 1000 characters long. It is assured to be a valid sequence of elementary moves.</p>
<h3>Output</h3>
<p align="justify">For each test case, output the minimum number of times (≥1) the move sequence must be applied to a solved Rubik's cube to get back the solved cube again.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
R
RR2
RU
R2R'R'

<b>Output:</b>
4
4
105
1
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-01-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>