<?php require("../../includes/header.php"); ?><h1>Alien Pandemia</h1><div class="content">

<p style="text-align:justify;">
The current year is 2210, and the humanity is in great danger. An alien race has discovered us and wants to cleanse this planet from our presence, so they can take all our natural resources to their planet. However, they are physically weak, so their plan consists in infecting one human with the T-virus, which is highly contagious but not deadly. If at any point of time, one person is at a distance not greater than R from a person infected with the T-virus, then he/she will<br />
be infected with the B-virus, which will kill him/her instantly.</p>
<p style="text-align:justify;">
The Terra Disease Control Center (TDCC) has discovered the aliens' plan, and they are determined to stop it. The first step is to create a simulation program that given the position of some static uninfected persons and the trajectory of a person infected with the T-virus, determines how many persons will be killed by the B-virus.</p>
<p style="text-align:justify;">
The trajectory followed by the infected person will be a polyline. A polyline is defined by M points P<sub>i</sub>, and consists of the line segments between P<sub>1</sub> and P<sub>2</sub>, P<sub>2</sub> and P<sub>3</sub>, and so on. It is possible for a polyline to only have one point; in the simulator this will represent a static infected person.</p>
<h3>Input</h3>
<p style="text-align:justify;">
The first line contains an integer T, which species the number of test cases. Then, T test case descriptions will follow.</p>
<p style="text-align:justify;">
Each test case will start with a line with three positive integers, N, M and R, which specify the number of static uninfected persons, the number of points in the polyline that defines the movement of the infected person and the infection radius, respectively. The next N lines will contain two integers X<sub>i</sub> and Y<sub>i</sub>, specifying the position of the uninfected person i. The next M lines will contain two integers Px<sub>j</sub> and Py<sub>j</sub> , specifying the point j that defines the trajectory of the infected person.</p>
<h3>Output</h3>
<p style="text-align:justify;">
For each input case you must print the string "Case #i: ", where i is the test case number, starting from 1, followed by the number of uninfected persons killed by the B-virus.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 1 4
2 2
1 5
-2 3
7 0
3 0
5 3 4
2 2
1 5
-2 3
-4 4
7 0
-3 0
3 0
0 3

<b>Output:</b>
Case #1: 2
Case #2: 4
</pre><h3>Constraints:</h3>
<p style="text-align:justify;">
<ul>
<li>T will be between 1 and 200, inclusive.</li>
<li>N will be between 1 and 100, inclusive.</li>
<li>M will be between 1 and 100, inclusive.</li>
<li>R will be between 1 and 1000, inclusive.</li>
<li>X<sub>i</sub> will be between -1000 and 1000, inclusive, for all i between 1 and N, inclusive.</li>
<li>Y<sub>i</sub> will be between -1000 and 1000, inclusive, for all i between 1 and N, inclusive.</li>
<li>Px<sub>j</sub> will be between -1000 and 1000, inclusive, for all j between 1 and M, inclusive.</li>
<li>Py<sub>j</sub> will be between -1000 and 1000, inclusive, for all j between 1 and M, inclusive.</li>
<li>No pair of points in each test case will be equal.</li>
</ul>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divij">divij</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>