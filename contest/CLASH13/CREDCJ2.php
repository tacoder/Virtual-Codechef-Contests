<?php require("../../includes/header.php"); ?><h1>Speed Racer</h1><div class="content">
<p> </p>
<p>A building is shaped like a cone. In order to reach the top, 'Speed Racer' has to ride his moto-cross bike around the entire floor (i.e. around a ring) and then take a lift to the next level. At the centre of the building is another lift that goes directly from the bottom to the top of the building. The height of the building is equal to the radius of the bottom floor.
</p>
<p>
'Speed Racer' has to race against his rival 'Boogeyman' who is taking the direct lift to the top i.e. the central lift, but, for every 2 floors that 'Boogeyman' travels up, he has to travel 1 floor down. When 'Boogeyman' goes downwards by one floor, if he lands on an even numbered floor then 'Speed Racer' can activate his nitrous oxide boost and move twice as fast on whichever floor he is on. Else, if 'Boogeyman' lands on an odd numbered floor whenever he moves downwards, 'Speed Racer' can skip whichever floor he is on, but when he takes the lift to the next floor, the speed of the lift is equal to 50% of the speed of the central lift.
</p>
<p>
Once 'Speed Racer' travels around the entire circumference of each floor and progresses to the<br />
next, the radius decreases by N, where N is the number of floors in the building.
</p>
<p></p><p> 	      <b>THIS IS A TURN BASED MATCH. </b></p>
<p></p>
<p>
i.e. one of the two competitors gets to go first (based on user entry). If 'Boogeyman' goes first, he has to wait for 'Speed Racer' to finish his journey before moving upwards again, once he has reached an even/odd floor on his journey down. Else, if 'Speed Racer' goes first, he has to wait on his floor till the time 'Boogeyman' has reached an odd/even floor on his journey downwards.
</p>
<p><h3>Input</h3>
</p><p>The First line contains the number of test cases, <b>T</b>.<br /></p>
<p>T test cases follow.<br /><br />
For each test case, <br /></p>
<p>The first line contains two space separated values, <b>S</b> and <b>C</b>.<br /><br />
The second line contains two space separated values, <b>H</b> and <b>N</b>. <br /><br />
The third line contains an integer <b>F</b> denoting who takes the first turn.<br /><br />
<br /><br />
<b>The symbols</b> :<br /><br />
<b>S</b> denotes Speed Racer's speed in "km/hr".<br /><br />
<b>C</b> denotes the speed of the central lift in "km/hr".<br /><br />
<b>H</b> denotes the height of the building IN METRES.<br /><br />
<b>N</b> denotes the number of floors in the building.<br /><br />
<b>F</b> denotes who goes first : <br /><br />
<b>F</b> = <b>1</b> implies Boogeyman takes the first turn.<br /><br />
<b>F</b> = <b>2</b> implies Speed Racer takes the first turn.<br /><br />
<br /><br />
Assume that the time 'Speed Racer' takes to move between floors is zero (except the case when Boogeyman lands on an odd numbered floor) and that his speed is constant on every floor. Also, the time taken by Boogeyman to move down one floor is half the time taken by him to move up one floor.
</p>
<h3>Output</h3>
<p>Output: </p>
<p>The first line should contain Speed Racer's time to the top in seconds.<br />
The second line should contain Boogeyman's time to the top in seconds.<br />
The third line should contain the string "Speed Racer FTW" if 'Speed Racer' defeats his rival, OR "Boogeyman shames Speed Racer" if 'Speed Racer' loses.
</p>
<h3>Constraints</h3>
<p><b>H</b> = <b>N^2</b>(where H = height of building and N = number of floors).</p>
<h3>Tips</h3>
<p>Use Google for converting between units if in doubt.
</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
72 7.2
16 4
2
<b>Output:</b>
14.000000
20.000000
Speed Racer FTW
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ashmew2">ashmew2</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>