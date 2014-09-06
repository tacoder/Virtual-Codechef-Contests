<?php require("../../includes/header.php"); ?><h1>Tightrope Walker</h1><div class="content">
<p> </p>
<p>A boy is walking a <a href="http://en.wikipedia.org/wiki/Tightrope_walking">tightrope</a> .<br />
While walking, he either bends left or right to balance himself. If the boy bends by more than a certain angle, he falls down.<br />
The boy bends by a fixed angle everytime he decides to bend. (Same magnitude of the angle on the left side as well as right)<br />
Given the series of bends performed by the boy, find out whether he completes walking the tightrope entirely or not.<br />
The bending angle of the boy is <b>A</b>.<br />
The threshold of falling down is <b>F</b>, i.e. if the boy's current angle is greater than or equal to <b>F</b>, he falls down.</p>
<p> </p>
<h3>Input</h3>
<p>The input is described by 3 lines.<br />
First line contains an integer <b>N</b> length of the string containing the series of bends.<br />
Second line has a string <b>S</b> containing <b>L's</b> and <b>R's</b> denoting the sequence in which the boy bent on either side.<br />
Third line contains 2 space-separated real numbers <b>A</b> and <b>F</b>.<br /></p>
<h3>Output</h3>
<p>Print 'YES' (without the quotes) if the boy is able to walk the tightrope entirely, else print 'NO' (without the quotes).</p>
<p> </p>
<h3>Constraints</h3>
<p><b>1</b> ≤ <b>N</b> ≤ <b>10^6</b><br />
<b>1</b> ≤ <b>A</b> ≤ <b>10^9</b><br />
<b>1</b> ≤ <b>F</b> ≤ <b>10^9</b></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input 1:</b>
6
LRLRLR
3.0 4.0

<b>Output 1:</b>
YES

<b>Input 2:</b>
6
LRLRRR
3.0 4.0

<b>Output 2:</b>
NO</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
    </table><a href="http://www.codechef.com/submit/CREDROPE" target="_BLANK"><div id="submitButton">Submit</div></a><?php require("../../includes/footer.php"); ?>