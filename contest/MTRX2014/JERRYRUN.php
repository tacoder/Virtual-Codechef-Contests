<?php require("../../includes/header.php"); ?><h1>Run Jerry Run</h1><div class="content">
<p>Tom being angry with Jerry, decided to catch him. Both are standing on x-axis with Tom's current position as (x1,y1) and Jerry is standing at (x2,y2). Jerry understood Tom's intention and prepared himself for the pursuit, he always runs away from tom. Tom knows Jerry is faster than him but this time Tom is determined and chases Jerry.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>Now each test case contains single line having four integral values <b>x1</b>,<b>x2</b>,<b>v1</b>, and <b>v2</b>.Where <b>x1</b> &amp; <b>x2</b> are positions of Tom and Jerry respectively. and <b>v1</b> &amp; <b>v2</b> are the speeds of Tom and Jerry respectively. The speed is defined as unit distance per unit time.</li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>A single line denoting whether it is possible for Tom to catch Jerry if possible then output the coordinates at which Tom catches Jerry in integral time and if not possible then output "not possible".</li>
</ul>
<p> 
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>-2*10^5</b> ≤ <b>x1,x2</b> ≤ <b>2*10^5</b></li>
<li><b>0</b> ≤ <b>v1,v2</b> ≤ <b>2*10^5</b></li>
<li><b>y1</b> = <b>y2</b> = <b>0</b></li>
</ul>
</p><p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
0 2 2 0
0 4 2 2
0 2 2 1

<b>Output:</b>
(2,0)
not possible
(4,0)
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vivekjha92">vivekjha92</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-11-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, JAVA, PYTH, PYTH 3.1.2</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>