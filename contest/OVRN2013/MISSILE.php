<?php require("../../includes/header.php"); ?><h1>Missile</h1><div class="content">

<p><b>Problem Background</b></p>
<p>26 September 1983 : Soviet Union Early Warning Satellite Systems have just detected that the United States has launched a Nuclear Intercontinental Ballistic Missile towards them. Stanislav Petrov, a lieutenant colonel in the Soviet Air Defense Forces stationed at the Serpukhov-15 bunker near Moscow, erroneously concluding (thus diverging from real history) that World War 3 has started, triggers emergency protocols for a retaliatory strike in accordance with the strategy of mutually assured destruction.</p>

<p><b>Problem Statement</b></p>
<p>Given the coordinates of the Soviet Missile Silo, and those of the target (typically in the NATO territory) both of which are on the surface of the Earth, your task is to determine the total distance that the missile will need to cover before reaching the target. The missile follows a trajectory along the circumference of a circle, reaching its maximum height (above the Earth's surface) when the missile has covered exactly half the distance from the source to the target.</p>

<p><b>Input/Output Specifications</b></p>
<p>Each line of input will contain 1 test case, consisting of 5 integers: x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub> &amp; z. (x<sub>i</sub>,y<sub>i</sub>) are the coordinates (latitude and longitude in degrees) of the source (i=1) &amp; target (i=2). z is the maximum height (in kilometers, 0&lt;=h&lt;2000) above the Earth's Surface that the missile can reach. Keep reading input till EOF.</p>
<p>Corresponding to each test case, output 1 line, containing the total distance that the missile will cover on its trajectory from the source to the target. The output value should be in kilometers and contain only 3 digits beyond the decimal point.</p>
<p>Note : Radius of the Earth = 6,371 km</p>

<p><b>Sample Input</b></p>
<p><code style="background:#eee; display:block; padding:4px;"><br />
0 0 90 0 0</code></p>
<p>90 0 0 90 100</p>
<p></p>
<p></p>
<p><b>Sample Output</b></p>
<p><code style="background:#eee; display:block; padding:4px;"><br />
10007.543</code></p>
<p>10113.592</p>
<p></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/transcendence">transcendence</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2013</td>
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
            <td>C, CPP 4.3.2, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>