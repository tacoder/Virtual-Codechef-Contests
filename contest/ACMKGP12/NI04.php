<?php require("../../includes/header.php"); ?><h1>Small Airport</h1><div class="content">

<p style="text-align:justify">A city has a small Airport with only one runway. At any time one aeroplane can land or one aeroplane can take off, but not both at the same time. Aeroplanes arrive at the airport airspace ready to land after every <b>m</b> units of time. The aeroplanes which will land will also take off after waiting <b>n</b> units of time. At any given time, the runway may be idle or a plane may be landing or taking off. At any time instant there may be several aeroplanes waiting either to land or take off. As it is always better to keep an aeroplane waiting on the ground than in the air, so this small airport allows an aeroplane to takeoff only when there are no aeroplanes waiting to land. Assuming that there are <b>p</b> aeroplanes waiting to land and <b>q</b> aeroplanes waiting to take off at time zero, write a program that will give the status of the aeroplanes after <b>k<sup>th</sup></b> unit of time. Units of time are numbered starting from 0. Note that the aeroplanes that are there at the airport at time zero can take off at the earliest opportunity without the stipulated waiting time.</p>
<h3>Input</h3>
<p style="text-align:justify">The input to this program is the number of aeroplanes <b>p</b> (p ≤ 20) waiting to land and number of aeroplanes <b>q</b> (q ≤ 50) waiting to take off at time 0, followed by the other inputs <b>m</b> (m ≤ 100), <b>n</b> (n ≤ 50) and <b>k</b> (k ≤ 100000), respectively. Note that there can be no negative or fractional inputs.</p>
<h3>Input Format</h3>
<p style="text-align:justify">The number of test cases (not more than 500) will be specified in the first line followed by the input for each test case.</p>
<p style="text-align:justify">Each test case contains <b>p</b>, <b>q</b>, <b>m</b>, <b>n</b> and <b>k</b> separated by single spaces.</p>
<h3>Output</h3>
<p style="text-align:justify">The output to this program is the number of aeroplanes already landed, the number of aeroplanes already taken off, the number of aeroplanes still waiting to land and the number of aeroplanes still waiting to take off, after <b>k<sup>th</sup></b> unit of time.</p>
<h3>Output Format</h3>
<p style="text-align:justify">For each test case, print on a single line separated by spaces, the number of aeroplanes already landed, the number of aeroplanes already taken off, the number of aeroplanes still waiting to land and the number of aeroplaces still waiting to take off, respectively, after <b>k<sup>th</sup></b> unit of time.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 3 5 2 15
3 2 3 5 10
4 6 6 2 18

<b>Output:</b>
5 7 0 1
6 5 0 3
7 12 0 1

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iitgfaculties">iitgfaculties</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-11-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>