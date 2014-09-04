<?php require("../../includes/header.php"); ?><h1>I DONT SEE IT STRAIGHT</h1><div class="content">

<p>On the planet curvy everything is curved. Even light travel in a curve there. They imported a rectangular grid and some very delicious square donuts from nearby planet straighty. The size of grid is m x n and area of a donut is one unit square.</p>
<p>Donuts are placed such that :<br />
For every value of x from 0 to m, a series is created which determines the position of y coordinate on which donut is placed : </p>
<p>Yn = Yn-1 + n</p>
<p>where , </p>
<p>Yn    = y coordinate of current donut.</p>
<p>Yn-1 = y-coordinate of previous donut.</p>
<p> n     = number of donut for current series.</p>
<p>Y1 is equal to the x coordinate for that particular series.</p>
<p>for eg x=1 donuts are placed at<br />
 Y=1, Y=3, Y=6, Y=10 , …..</p>
<p>For x=2 donuts are placed at:<br />
 Y=2, Y=4, Y=7….</p>
<p>Equation of curve of line of sight at position (0,0) is given by:<br />
Y=(x-a)^2</p>
<p>On the day of competition contestant are asked to stand at a position (0,b). Now you have to determine how many donuts does that contestant can see.</p>
<p>Note that since area of donut is 1 unit square, if a donut is placed at (h,k) then is visible from<br />
(x,y) such that : ( ( h - 0.5 ) &lt; x&lt; = ( h + 0.5 ) ) and ( ( k - 0.5 ) &lt;   y &lt; = ( k + 0.5 ) ) </p>
<h3>Input</h3>
<p>The first line of the input contains an integer T denoting the number of test cases, each test case contains size of grid (MxN) i.e value of M &amp; N followed by values of a &amp; b.</p>
<h3>Output</h3>
<p>For each test case, output a single line with number of donuts visible to person.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b>a</b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b>b</b> ≤ <b>1000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
10 10 1 2
25 50 2 5
<b>Output:</b>
5
14

<p> </p>
<h3>Explanation</h3>
<p><b>Case 1 :</b> for grid 10x10 and person standing at (0,2) , donuts visible to him are at coordinates</p><p> (1,1) , (2,2) , (3,3), (3,5) , (4,9) </p>
<p><b>Case 2 :</b> for grid 25x50 and person standing at (0,5) , donuts visible to him are at coordinates</p><p>(1,1) , (1,3), (3,3), (4,4), (4,6), (5,7), (5,10), </p><p>(6,15), (6,20), (7,21), (7,27), (8,35), (8,43), (9,44)</p></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/paramjeet">paramjeet</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-03-2013</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, JS, LUA, PAS fpc, PAS gpc, PERL, PERL6, PHP, PYTH, PYTH 3.1.2, RUBY, SCM qobi</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>