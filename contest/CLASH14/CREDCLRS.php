<?php require("../../includes/header.php"); ?><h1>Colors</h1><div class="content">
<p> </p>
<p>Credenz'14 design team is doing their best to paint the main poster. However they are stuck in a problem. There are <b>N</b> colors in total numbered as <b>1, 2, 3 . . N</b> . The main poster needs <b>A<sub>i</sub></b> color quantity of the <b>i<sup>th</sup></b> color.<br />
The design team has a set of <b>N</b> colors, <b>i<sup>th</sup></b> color being of quantity <b>B<sub>i</sub></b>.<br /><br />
There are some colors which can be obtained from a combination of some other colors. Also those colors can be broken into the same combination of colors. The Design team wants to know if the colors needed for the main poster can be fulfilled by the set of colors it has.<br /><br />
If the design team has colors more than or equal to that needed for the main poster, the poster can be made.<br /><br />
Also, one color can be formed by a maximum of one combination of some colors.</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains an integer <b>N</b>, the total number of colors.<br /><br />
<b>N</b> lines follow, <b>i<sup>th</sup></b> line containing an integer <b>x</b>, the number of colors from which the <b>i<sup>th</sup></b> color can be obtained or can be broken into, followed by the list of <b>x</b> numbers from which the <b>i<sup>th</sup></b> color can be obtained or can be broken into.<br /><br />
Next line contains <b>N</b> spaced integers, <b>A<sub>1</sub> A<sub>2</sub> ... A<sub>N</sub></b><br /><br />
Next line contains <b>N</b> spaced integers, <b>B<sub>1</sub> B<sub>2</sub> ... B<sub>N</sub></b></p>
<p> </p>
<h3>Output</h3>
<p>print "POSSIBLE" if the poster can be painted otherwise print "IMPOSSIBLE"</p>
<p> </p>
<h3>Constraints</h3>
<p><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b><br /><br />
<b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10^9</b><br /><br />
<b>0</b> ≤ <b>B<sub>i</sub></b> ≤ <b>10^9</b><br /><br />
<b>0</b> ≤ <b>x</b> &lt; <b>N</b></p>
<p><b>Sum of all x ≤ 2*N</b></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
0
1 1
0
0
0
2 0 1 1 1
1 1 1 1 1

<b>Output:</b>
POSSIBLE
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wittyceaser">wittyceaser</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-08-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1</td>
        </tr>
    </table><a href="http://www.codechef.com/submit/CREDCLRS" target="_BLANK"><div id="submitButton">Submit</div></a><?php require("../../includes/footer.php"); ?>