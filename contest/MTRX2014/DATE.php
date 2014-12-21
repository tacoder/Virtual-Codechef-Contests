<?php require("../../includes/header.php"); ?><h1>Date</h1><div class="content">
<p> </p>
<p>These days a lot of new coders are emerging at RJIT. One of the  many programmers in RJIT thought of making a program to find the weekday for any given date. He successfully builds it but there is one problem, his program prints the day of yesterday's date. Now he wonders whether he can find the next date given him the output date.</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>Then <b>T</b> lines follow, each containing the present date in following format <b>dd/mm/yyyy.</b></li>
</ul>
<h3>Output</h3>
<ul>
<li>You need to output a single line for each test case printing the next date in following format <b>dd/mm/yyyy</b> or <b>d/m/yyyy</b> according to the case if it exists or else print <b>"Invalid Date"</b>(without quotes).</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>dd</b> ≤ <b>35</b></li>
<li><b>1</b> ≤ <b>mm</b> ≤ <b>15</b></li>
<li><b>1000</b> ≤ <b>yyyy</b> ≤ <b>3000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
16/09/2014
17/09/2014
5/02/2004

<b>Output:</b>
17/9/2014
18/9/2014
6/2/2004
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