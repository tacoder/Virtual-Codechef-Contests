<?php require("../../includes/header.php"); ?><h1>Connecting Dots</h1><div class="content">

<p> </p>
<p>You have 2m dots on X-axis. The dots are colored in m different colors such that there are exactly 2 dots of each color. The dots are placed at the coordinates (1,0), (2,0), ..., (2m, 0).</p>
<p>Your task is to draw a path for each color that joins the two dots of that color. Each path should be composed of vertical or horizontal line segments between grid points. No two paths can intersect or touch each other. No path may cross the y=0 line. Each path can only touch the y=0 line at the position of the two marbles it is connecting, so the first and last line segment of each path must be vertical.</p>
<p>
Given an arrangement of dots, return the minimum height of a solution, or return -1 if no solution exists.</p>
<p>The height is defined as the difference between the highest and lowest Y-coordinates of the paths used.</p>
<p>An example:</p>
<pre>	green 	   green 	  yellow 	   red     yellow     red<br />
One solution would be:
<pre>
                                          __________
                                         |                       |
  green ---- green     yellow     red     yellow     red
			                             |____________|

</pre><p>The minimum height is 2 in this case.</p>
<h3>Input</h3>
<p>The first line of input gives the number of test cases, T, followed by the cases.<br />
The first line of each case contains m, the number of different colors for the marbles.<br />
The next line contains a string of 2m words separated by spaces which correspond to the colors of the<br />
dots, in order from left to right.
</p>
<h3>Output</h3>
<p>For each test case, output the line containing the height of any optimal solution, or -1 if no solution exists.
</p>
<h3>Constraints</h3>
<pre>1 &lt;= T &lt;= 50.
1 &lt;= n &lt;= 20.
 Each color is a string of lower case letters ('a' .. 'z') no longer than 10 characters. 
There will be exactly n different colors and each color will appear exactly twice.
</pre><h3>Example</h3>
<pre><b>Input:</b>
4
3
orange orange red yellow red yellow
3
black blue white black blue white
3
brown green yellow green yellow brown
3
pink pink blue blue yellow yellow


<b>Output:</b>
2
-1
3
1

</pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivendra14">shivendra14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.13 sec</td>
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