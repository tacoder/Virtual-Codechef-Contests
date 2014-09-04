<?php require("../../includes/header.php"); ?><h1>PERIMETER SPLITZ</h1><div class="content">
<p> </p>
<p>Problem description.</p>
<p> </p>
<p>Given four ordered pairs,with each ordered pair lies in one of the quadrant in the XY plane.By joining all the ordered pairs a quadrilateral is formed.Output the percentage of perimeter contributed by each quadrant in the XY plane to the formed quadrilateral.</p>
<h3>Input</h3>
<ul>
<li>
Each input to the given problem consists of four lines.Following four lines of the input contains two integers Xi,Yi separated by spaces representing the ordered pair in ith quadrant.
</li>
</ul>
<h3>Output</h3>
<ul>
<li>
Output contains 4 lines,each ith line represents the percentage of perimeter contributed by ith quadrant in the XY plane to the formed quadrilateral in separate lines(round it off to three decimal points if any of percentages to the given case is a fraction having decimal points greater than 3 digits) as the specified in the example.
</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>i</b> ≤ <b>4</b></li>
<li><b>-100</b> ≤ <b>Xi,Yi</b> ≤ <b>100</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>First line represents first quadrant values, second line represents second quadrant values and so on...</b>
<pre><b>Input:</b>
3 3
-3 3
-3 -3
3 -3
<br />
<b>Output:</b>
25
25
25
25</pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/dineshreddy36">dineshreddy36</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-03-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>