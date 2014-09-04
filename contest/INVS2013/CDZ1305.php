<?php require("../../includes/header.php"); ?><h1>Lucky 13</h1><div class="content">

<p>There are N boxes given which are numbered starting from 1 to N.  All the boxes are initially empty.</p>
<p>There are 3 types of operations that can be applied to the boxes:</p>
<p> </p>
<li><b>(I)</b>nsert i x:  Insert x balls in box no i.
</li>
<li><b>(R)</b>emove i x: Remove x balls from box no i, if number of balls in box no i are less than x then remove all balls from box no i.
<p>
<li><b>(Q)</b>uery: Print the box no and no of balls of the box with <b>rank 13</b>.<br />
The boxes are ranked starting from 1 on the basis of number of balls, i.e. box with maximum balls will be ranked 1.
</li>
</p>
<p>
Help Chef to find the Lucky i.e. the box ranked 13th.<br />
Note:<br />
In case two boxes have same number of balls, tie will be broken on the basis of box numbers i.e. if two boxes have maximum number of balls then the box with lower box number will be ranked 1.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input contains 2 space-separated integers N and Q. They indicate the number of boxes, and the total number of operations/queries.<br />
Then each of the next Q lines contains an operation or a query by the format mentioned above.<b>(Take the input of operations/queries in the form of a string only!)</b><br />
.</p>
<h3>Output</h3>
<p>For each query, output the answer of the query in a new line.</p>
<h3>Constraints</h3>
<ul>
<li><b>13</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>1000000</b></li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>501</b></li>
<li><b>1</b> ≤ <b>i</b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>

15 17

I 1 50
I 2 100
I 3 10
I 5 501
I 4 30
I 8 10
R 7 20
I 6 120
I 14 30
R 12 11
I 10 10
I 11 10
I 13 10
Q
I 9 17
I 12 10
Q

<b>Output:</b>
9 0
13 10
</pre><p> </p>
<p>NOTE :<b> Use fast Input Output. </b></p>
</li>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tussharsingh13">tussharsingh13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-03-2013</td>
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