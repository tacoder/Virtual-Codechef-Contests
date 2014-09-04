<?php require("../../includes/header.php"); ?><h1>Jurassic Park</h1><div class="content">

<p style="text-align:justify">A Jurassic Park consists of a dinosaur museum and a park for safari riding. There are many passengers and <b>n</b> single-passenger cars. Passengers wander around the museum for a while and then line up at the park gate to take a ride in a safari car. Note that each passenger is allowed for one ride only. When a car is available, it loads the one passenger it can hold and rides the park for a specific amount of time say <b>p</b>. If all the <b>n</b> cars are out riding passengers around, then a passenger who wants a ride waits; if a car is ready to load but there are no waiting passengers, then the car waits. After every <b>r</b> units of time one passenger from the museum gets ready to take the safari car ride. Assume that the Jurassic Park is open for <b>k</b> units of time. Write a program to find the status of the passengers and safari cars after <b>k</b> units of time.</p>
<h3>Input</h3>
<p style="text-align:justify">The input to this program is the total number of safari cars available in the park n <b>(0 ≤ n ≤ 50)</b>. The number of passengers wandering in the museum m <b>(0 ≤ m ≤ 5000)</b> and the number of passengers q <b>(0 ≤ q ≤ 100)</b> in the park gate ready to take a ride in the park at time zero. The other inputs are the values of p <b>(1 ≤ p ≤ 100)</b>, r <b>(1 ≤ r ≤ 100)</b> and k <b>(r ≤ k ≤ 100000)</b>. Note that there can be no negative or fractional inputs.</p>
<h3>Input Format</h3>
<p style="text-align:justify">First line contains an integer N <b>(1 ≤ N ≤ 100)</b> indicating number of test cases. Each of the following N lines contains input data, separated by single space, for different test cases in the given order:</p>
<p><b>No. of Safari Cars</b>, <b>No. passengers in Museum at time zero</b>, <b>No. of passengers at park gate ready for ride at time zero</b>, <b>p</b>, <b>r</b>, <b>k</b></p>
<h3>Output</h3>
<p style="text-align:justify">The output of this program is the number of cars waiting at the park gate, the number of passengers who have completed taking one ride in the park, the number of passengers still waiting at the park gate to take a ride and the number of passengers still wandering in the museum, respectively, after k units of time.</p>
<h3>Output Format</h3>
<p style="text-align:justify">Output for each test case will be on separate lines. Each line will contain:</p>
<p><b>No. of cars waiting at the park gate</b>, <b>No. of passengers completed the park ride</b>, <b>No. of passengers wandering in the museum</b>, <b>No. of passengers still waiting to take a ride</b>, respectively.<br />
The output parameters should be in the above order with one space gap. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3 20 5 3 1 10
2 30 3 3 4 14
4 15 6 5 2 18

<b>Output:</b>
0 9 10 3
1 5 27 0
1 12 6 0

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