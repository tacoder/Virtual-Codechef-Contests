<?php require("../../includes/header.php"); ?><h1>Lecture Series</h1><div class="content">
<h3>Problem Description</h3>
<p>Housed in the Main Building of IISc, Faculty Hall is a very prestigious building. The building, one of the prominent landmarks of Bangalore, was designed in 1912 – 13 and is opposite the historic statue of J N Tata. It is one of the locations for Pravega 2014 to be held from 31st January 2014 and 2nd February 2014.</p>
<p>One of the key features of Pravega is the lecture series. Pranav Mundada has received the start time and end time for the various talks by Nobel Laureates. Pranav wants to have all the talks in the Faculty Hall. However, some talks overlap and all cannot be held in the Faculty Hall. So Pranav wants to occupy the Faculty Hall for as long a duration as possible so that the other auditoriums are occupied for a minimum duration.  You need to help Pranav find the total duration for which the Faculty Building will be occupied.</p>
<p>PS: Pranav, trying to help you, had stored the start times and end times in microseconds. You too can help him by giving the answer in microseconds itself.</p>
<h3>Input format</h3>
<p>The first line of the input gives you the number of test cases T.</p>
<p>In each test case, the first line contains the number of lectures N. The following N lines contain two numbers t<sub>i1</sub> and t<sub>i2</sub> separated by a space. The ith line reads the start time and end time of the ith lecture. If a lecture starts at time t<sub>1</sub> and ends at time t<sub>2</sub> and is being held in Faculty Hall, then another lecture held there must either start at or after time (t<sub>2</sub> + 1) or end at or before time (t<sub>1</sub> – 1).</p>
<h3>Output Format</h3>
<p>The output should contain T integers on T different lines, the duration for which the Faculty Hall will be occupied in the corresponding test case.</p>
<h3>Sample Input</h3>
<div>
2<br /><br />
7<br /><br />
8 10<br /><br />
0 10<br /><br />
1 1<br /><br />
4 8<br /><br />
4 5<br /><br />
1 10<br /><br />
0 3<br /><br />
7<br /><br />
30764 820680<br /><br />
456065 734674<br /><br />
603052 632489<br /><br />
863160 915957<br /><br />
293048 463736<br /><br />
473326 592262<br /><br />
140264 201404
</div>
<p><br /></p>
<h3>Sample Output</h3>
<div>
11<br /><br />
842715
</div>
<p><br /></p>
<h3>Input constraints</h3>
<p>1 ≤ T ≤ 200<br /><br />
1 ≤ N ≤ 30,000<br /><br />
1 ≤ t<sub>i1</sub> &lt; t<sub>i2</sub> ≤ 10<sup>12</sup></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pravega_opc">pravega_opc</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-11-2013</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>