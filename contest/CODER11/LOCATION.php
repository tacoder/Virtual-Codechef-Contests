<?php require("../../includes/header.php"); ?><h1>Location</h1><div class="content">

<p>The state of Otahar is an agricultural nation. It consists of F farms connected by R roads. Farms in Otahar are famous for UFO sightings. Every day there are U cases of UFO sightings which are reported. When an UFO lands in a farm it leaves crop circles. After an UFO sighting is reported people flock to that particular farm to see the crop circles.</p>
<p>This sudden interest of people in a farm makes it very difficult for the government of Otahar to manage the traffic. One solution being tried out by the government is allowing only unidirectional traffic on roads in Otahar.</p>
<p>But this creates another problem. Management of essential services like Fire Fighting, Police, Hospitals etc. The Government of Otahar wants to deploy essential services at strategic locations in the nation, so as to have maximum reach.</p>
<p>To find the maximum reach, the policy makers have identified vital farms. A vital farm is one from where people can visit atleast one farm with an UFO sighting reported. Further the policy makers have identified strategic locations as those farms from which roads lead only to vital farms. </p>
<p>As a member of the policy making team of the government of Otahar your job is to find out the strategic locations in Otahar, given description of any day's map of Otahar.</p>
<h3>Input Format:</h3>

<p>The first line of input will contain three space separated integers, F U R<br />
The next R lines will contain two space separated integers each, x y which denote a road starting from farm #x and ending at farm #y.<br />
Consider the first U farms to have reported UFO sightings today.</p>
<h3>Output Format:</h3>

<p>A single line containing all strategic locations in Otahar arranged in increasing order.</p>
<h3>Constraints:</h3>
<p>1&lt;=F&lt;=100000<br />
<br />1&lt;=U&lt;=F<br />
<br />1&lt;=R&lt;=1000000</p>
<h3>Sample Input:</h3>
<p>4 1 4<br />
<br />1 1<br />
<br />2 1<br />
<br />3 1<br />
<br />3 4</p>
<p>
<h3>Sample Output:</h3>
</p><p>1 2</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rahulsingal14">rahulsingal14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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