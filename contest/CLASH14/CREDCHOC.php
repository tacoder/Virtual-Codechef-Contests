<?php require("../../includes/header.php"); ?><h1>Chocolate Multiplier</h1><div class="content">
<p> </p>
<p>A mall has <b>N</b> chocolate multiplier machine numbered as <b>1</b>, <b>2</b>, <b>3</b>, . . . <b>N</b> . Each machine has a multiplier number associated with it. <b>A<sub>i</sub></b> is the multiplier for the <b>i<sup>th</sup></b> machine. If one chocolate is put into machine <b>i</b>, then it produces <b>A<sub>i</sub></b> chocolates. Now, Rob has <b>X</b> chocolates but his friend wants exactly <b>Y</b> chocolates on his birthday. Help Rob to guess if he can obtain exactly <b>Y</b> chocolates from <b>X</b> chocolates using the multiplier machines.</p>
<p> </p>
<h3>Input</h3>
<p>First line contains a single integer <b>N</b>, the number of multiplier machines. <br />
Next line contains two space separated integers <b>X</b> and <b>Y</b>.<br />
Next line contains <b>N</b> spaced integers, <b>A<sub>1</sub>A<sub>2</sub> . . A<sub>N</sub></b></p>
<p> </p>
<h3>Output</h3>
<p>Print "POSSIBLE" if Rob can obtain exactly Y chocolates from X chocolates using the multiplier machines.<br /> Otherwise print "IMPOSSIBLE"</p>
<p> </p>
<h3>Constraints</h3>
<p><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b><br />
<b>1</b> ≤ <b>Ai</b> ≤ <b>10^9</b><br /><br />
<b><b>0</b> &lt; <b>X</b> &lt; <b>Y</b> ≤ <b>10^9</b><br /><br />
<b>1</b> ≤ <b>Y - X</b> ≤ <b>10^4</b></b></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
3 6
5 6 7 8

<b>Output:</b>
IMPOSSIBLE
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
    </table><a href="http://www.codechef.com/submit/CREDCHOC" target="_BLANK"><div id="submitButton">Submit</div></a><?php require("../../includes/footer.php"); ?>