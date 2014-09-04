<?php require("../../includes/header.php"); ?><h1>Road Map</h1><div class="content">
<p> You are provided with the following road map : </p>
<p><img src="https://dl.dropboxusercontent.com/u/71801626/proconmap.png" alt="Road Map" /></p>
<p>Every intersection of a path has a red light on it i.e: points marked A, B, C, D, E, F, G, H, I, J, K, etc. have a red light. The red light stoppage time and the time that the car takes to travel each section of the road will be provided as input. Assuming that there is only one car on the entire map and the car has to stop at EVERY RED LIGHT (for the amount of time specified) you need to find the shortest time the car will take to reach from source to destination. The time for which the car stops at the first red light has to be included in the final answer. The time for which the car stops at the last red light is NOT supposed to be included in the final answer. For example, if the source is A and the destination is B, the final answer will include the amount of time the car stops at A but not at B.
</p>
<p><br /></p>
<h3>Input</h3>
<p>First line of the input contains number of test cases T.<br /><br />
First fifteen lines of each test case consists of one integer each denoting the time for which the car has to stop at each red light in alphabetical order (i.e. 1st number would denote the stoppage-time at A, 2nd at B and so on). It will be followed by twenty-six lines, each containing two alphabets and one integer. The integer denotes the time taken by the car to cover the distance between the stretch of the road specified by the two alphabets. This is followed by two lines each containing a single alphabet which specifies the source (S) and destination (D) of the car.<br />
<br /></p>
<h3>Output</h3>
<p>The MINIMUM amount of time taken for the car to travel from the source to destination.<br />
<br /></p>
<h3>Constraints</h3>
<p>1 ≤ T ≤ 50, where T is the number of Test Cases<br /><br />
0 ≤ S ≤ 1000, where S denotes the red light stoppage time at any intersection (A, B, C, etc.)<br /><br />
1 ≤ R ≤ 1,000, where R is the time taken by the car to cover the distance between a stretch of road (like from A to H)<br />
<br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
1
5
10
10
5
10
5
10
5
10
5
10
5
10
5
10
A C 100
C D 100
D E 10
E F 100
F B 115
B L 10
L M 120
M N 10
N I 10
I H 10
H A 10
A G 100
C G 150
D G 100
O G 120
K G 120
J G 110
I G 130
H G 120
M J 10
L K 100
F O 100
I J 115
J K 100
K O 170
O D 130
A
J

<b>Output:</b>
85
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/procon_13">procon_13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-08-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>