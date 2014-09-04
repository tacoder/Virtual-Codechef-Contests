<?php require("../../includes/header.php"); ?><h1>UFO Landing</h1><div class="content">

<p>Egypt's largest city, Heliozen is famous for its UFO landing pad. Every now and then people see some UFO landing at the landing pad.Each UFO is circular in shape and lands on 4 pedestals, each of which touches the ground on a point. The pedestals are located at the corner of a square at the base of the UFO. Whenever any UFO touches the ground they leave some radioactive material on the ground at their landing points. The scientists at Heliozen return after a long break and analyze the concentrations of radioactivity at all points and take a note of the points which show traces of radioactive concentrations highlighting the landing of UFO at those points. The scientists may by mistake spot some erroneous points as well.Given a set of integer points where scientists observed radioactivity, help the scientists find the maximum number of UFOs that landed at the landing pad given that no two UFOs land exactly at all four same pedestal points and that no two UFO land at the same time.</p>
<h3>Input</h3>
<p>The first line of input is an integer N, denoting the number of radioactive points spotted by the scientists. This is followed by N lines of input describing the points. Each of these lines consist of two integers X and Y, the x and y co-ordinate of the point.</p>
<h3>Output</h3>
<p>A single integer, denoting the maximum number of UFOs that landed on the landing pad(given that no two UFOs have all four landing points same)</p>
<h3>Constraints</h3>
<p>The maximum number of radioactive points spotted by scientist is less than 2000 and less than 500 in 30% of the cases.<br />
<br />The co-ordinates of the N points can be arbitrary integers(will fit in an int).</p>
<pre>
<b>Input:</b>
11
6 3
0 3
2 3
6 5
0 5
2 5
4 1
2 7
3 4
6 7
7 5

<b>Output:</b>
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rahulsingal14">rahulsingal14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>