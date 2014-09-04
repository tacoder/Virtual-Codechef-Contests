<?php require("../../includes/header.php"); ?><h1>Utopia strikes back</h1><div class="content">

<p align="justify">The terrorist strike on the kindergarten was universally condemned. The Utopians' patience had worn thin and they decided to wipe out the entire Dystopian terrorist base.</p>
<p align="justify">Utopian military plans to do this with a coordinated strike. They have N military bases distributed all over the world. They also know the locations of the M terrorist camps. They will choose M out of their N military bases as attack bases and each will send a missile to one terrorist camp, all at the same time. By this they hope that they can eliminate Dystopian terrorism completely without giving them a chance to retaliate.</p>
<p align="justify">You are given the locations of the military bases and the terrorist camps. Given that all missiles have the same maximum range, your task is to find out the minimum value of the missile range so that such a coordinated attack is possible. Of course, the minimum distance between any pair of points in this case is the geodesic distance on the spherical planet.</p>
<p><h3>Input</h3>
</p>
<p align="justify">The first line of the input contains T, the number of test cases (T ≤ 10). Following this are the descriptions of the T test cases. The description of each test case starts with a line containing 3 space separated integers N, M and R (1 ≤ M ≤ N ≤ 100; 1 ≤ R ≤ 10000). N and M are the number of military bases and terrorist camps respectively while R is the radius of the spherical planet. Following this are N lines containing the locations of the military bases - the locations are specified using two space separated numbers φ and λ, the latitude and longitude of the location on the planet in degrees. φ ranges from -90 to 90 while λ ranges from -180 to 180. Both numbers have 6 digits after the decimal point. Following these lines are M lines with the locations of the terrorist camps in the same fashion.</p>
<h3>Output</h3>
<p align="justify">For each test case, output the minimum value of the missile range required so that the coordinated attack can be carried out. Format this number in the following fashion : #.######E*## - Here, # stands for a digit and * stands for a sign (+/-). The leading digit has to be non-zero.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
4 2 10
0.000000 0.000000
0.000000 90.000000
0.000000 180.000000
0.000000 -90.000000
90.000000 0.000000
-90.000000 0.000000

<b>Output:</b>
1.570796E+01
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>