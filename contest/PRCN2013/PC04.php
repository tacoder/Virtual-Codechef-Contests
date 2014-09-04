<?php require("../../includes/header.php"); ?><h1>Quadrilateral</h1><div class="content">
<p>You are provided with coordinates of four points as input and your task is to determine whether they form a Quadrilateral, Parallelogram, Square, Rhombus, Rectangle or None of These.<br />
It is safe to assume that the four points entered are in the order of A, B, C, D and you have to determine which quadrilateral (or none) is formed by ABCD. </p>
<h3>Input</h3>
<p>The first line of the input is the number of test cases T.<br /><br />
Every test case consists of four lines, each line containing two numbers X and Y separated by a space which refer to the (x,y) coordinates of a point. The first line contains the coordinates of point A, second of point B, third of point C and fourth of point D.
</p>
<h3>Output</h3>
<p>For each test case, the output shall be a single word answer (in capital letters) stating whether the coordinates of each test case forms a “RECTANGLE”, “SQUARE”, “RHOMBUS”, “QUADRILATERAL”, “PARALLELOGRAM” or “NONE” (without quotes; quotes only for clarity) . </p>
<p><b>Note:</b><br />
<br />We know that a square is also a rectangle which is also a parallelogram which in turn is also a quadrilateral, however if the input satisfies all the properties of a specific type of a quadrilateral, the answer shall be that specific type of a quadrilateral ONLY and not any other type or simply ‘QUADRILATERAL’. </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 100 </b></li>
<li><b>-10000</b> ≤ X,Y ≤ <b>10000</b>, where (X,Y) denote the coordinates of point A, B, C or D.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
0 0
1 0
1 1
0 1
1 1
7 5
1 9
-5 5

<b>Output:</b>
SQUARE
RHOMBUS
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/procon_13">procon_13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-08-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>