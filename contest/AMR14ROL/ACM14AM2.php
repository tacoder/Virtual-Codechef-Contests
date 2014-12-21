<?php require("../../includes/header.php"); ?><h1>Ground Stations</h1><div class="content">
<p>ISRO has shot to global fame after Mangalyaan. They have decided to build hi-tech ground stations throughout the country which can be used either as a control station or as a launch station (but not as both simultaneously). A control station is one which has all controls to the rocket. A launch station is the site from where a rocket is launched. For a successful launch, ISRO has identified that they need 2 control stations and that these 2 control stations should be equidistant from the launch station.</p>
<p>Initially there is only one ground station having index <b>0</b>, where the headquarters of ISRO is located. Over a period of time, they plan to build more and more ground stations.</p>

<p>They can perform two kinds of operations (for given <b>V</b>): </p>
<ul>
<li>
<p>
<b><u>Type 0</u></b>: Build a new ground station and construct a one-way road from the ground station having index <b>V</b> to the newly built ground station. In other words, if the index of the newly built ground station is <b>W</b>, then a one way road <b>V</b>-&gt;<b>W</b> having length = 1 is constructed. The index of the new ground station will be the smallest positive integer which is not the index of any existing ground station. (Of course, this also helps them to keep track of the number of ground stations they have built so far.)
</p>
</li>
<li>
<p><b><u>Type 1</u></b>: Given a ground station with index <b>V</b>, count how many unordered pairs (<b>P</b>, <b>Q</b>) of ground stations exist such that the ground stations <b>P</b> and <b>Q</b> are both reachable from <b>V</b> (paths from <b>V</b> to <b>P</b> and <b>V</b> to <b>Q</b> exist),  and there exists a ground station <b>R</b> (need not be reachable from <b>V</b>), such that distance(<b>P</b>, <b>R</b>) = distance(<b>Q</b>, <b>R</b>), <b>R</b> ≠ <b>P</b>, <b>R</b> ≠ <b>Q</b> and <b>P</b> ≠ <b>Q</b>. Of course, ISRO wants to know this information beforehand since such pairs (<b>P</b>, <b>Q</b>) are possible candidates for control stations, and <b>R</b> is a possible candidate for the launch station.
</p>
</li>
</ul>

<p>
<b>Adding more explanation</b></p>
<p>"Given a ground station with index V, count how many unordered pairs (P, Q) of ground stations exist such that the ground stations P and Q are both reachable from V (paths from V to P and V to Q exist), and there exists a ground station R (need not be reachable from V), such that distance(P,R) = distance(Q, R), R ≠ P, R ≠ Q and P ≠ Q."<br />
<br />
As this says, there need not be path from R-&gt;P or P-&gt;R. How ever please use the following as definition of distance.<br />
<br />
Distance(X, Y) = Number of roads in the unique path from X to Y, if the given road network were bi-directional.<br />
<br />
Please note that, V-&gt;P and V-&gt;Q should still exist in directed road network.
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>M</b> denoting the number of operations.</p>
<p>Each of the next <b>M</b> lines contain 2 integers -  <b>type</b> and <b>V</b>.</p>
<p>if <b>type</b> = 0, then perform type 0 operation (for given <b>V</b>).</p>
<p>if <b>type</b> = 1, then perform type 1 operation (for given <b>V</b>).</p>

<h3>Output</h3>
<p>For each test case, for each query of <b>type</b> 1, you must print the answer to the query on a separate line. </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>type</b> ≤ <b>1</b></li>
<li>For both type of operations 0 &amp; 1, the given ground station <b>V</b> would have already been built.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
4
1 0
0 0
0 1
1 0
6
0 0
0 1
1 0
0 1
0 2
1 1

<b>Output:</b>
0
1
1
2
</pre>
<h3>Explanation</h3>
<p><b><u>Example case 1:</u></b></p>
<p>First operation is of <b>type</b> 1. There is only 1 ground station (with index 0), so number of pairs are 0.</p>
<p>Second operation is of <b>type</b> 0. A new ground station with index 1 is built, and a road from <b>0-&gt;1</b> (having length 1) is added.</p>
<p>Third operation is of <b>type</b> 0 again. A new ground station with index 2 is built, and a road from <b>1-&gt;2</b> (having length 1) is added.</p>
<p>Fourth operation is of <b>type</b> 1. There are 3 ground stations now. (0, 2) is the only valid pair as there exists ground station 1 with distance(2, 1) = distance(0, 1) = 1, and both the stations 0 &amp; 2 are reachable from 0. </p>
<p><b><u>Example case 2:</u></b></p>
<p>There are 2 operations of <b>type</b> 1. For the first one, (0, 2) is the only valid pair, and for the second one, there are 2 valid pairs pairs - (2, 3) and (1, 4).</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-10-2014</td>
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
            <td>C, CPP 4.8.1, CPP11, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>