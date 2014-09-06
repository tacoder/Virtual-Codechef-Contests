<?php require("../../includes/header.php"); ?><h1>Non-Carry Sum</h1><div class="content">
<p> </p>
<p>Non-Carry sum of two integers is defined as the sum which is obtained when the numbers are added in a fashion in which the carry obtained while previous sum calculation is dropped. For example the Non-Carry sum of 5625 and 8924 is 3549.</p>
<pre>
					5625
				+	8924
			     	       _____
				   	3549
</pre><p>as the carry obtained by adding 6 and 9 at the hundreds place is ignored, so is the carry obtained at thousands place is ignored.</p>
<p>Given an array of <b>N</b> integers, <b>A<sub>1</sub>, A<sub>2</sub> ... A<sub>N</sub></b>. Find out the Non-Carry sum of two numbers <b>A<sub>i</sub></b> and <b>A<sub>j</sub></b> such that the Non-Carry sum is maximum and <b>i</b> is not equal to <b>j</b>.</p>
<p> </p>
<h3>Input</h3>
<p>First line contains a single integer <b>N</b>, the number of elements in the array<br /><br />
Next line contains <b>N</b> spaced integers, the elements in the array.</p>
<p> </p>
<h3>Output</h3>
<p>Output a single integer which contains the maximum non-carry sum thus obtained</p>
<p> </p>
<h3>Constraints</h3>
<p><b>2</b> ≤ <b>N</b> ≤ <b>10^5</b><br /><br />
<b>1</b> ≤ <b>elements of array</b> &lt; <b>10^9</b><br /><br />
<b>Time limit: 2s</b></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
34 56 83 19 38

<b>Output:</b>
92
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
            <td>1 - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1</td>
        </tr>
    </table><a href="http://www.codechef.com/submit/CREDNCSM" target="_BLANK"><div id="submitButton">Submit</div></a><?php require("../../includes/footer.php"); ?>