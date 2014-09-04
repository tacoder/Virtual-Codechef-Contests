<?php require("../../includes/header.php"); ?><h1>Travel Plan</h1><div class="content">

<p>XYZ is an International Airline Company. It has flights between different cities across the globe but does not have a direct flight for all the pairs of cities. Flights are such that, all the cities with an airport are reachable by other city either by a direct flight or through other cities. Total number of flights is of the order of number of airports. </p>
<p>For the past few years, their statistics are given below:</p>
<ul>
<li>2005 - 487 flights covering 319 different airports.</li>
<li>2007 - 782 flights covering 549 different airports.</li>
<li>2009 - 1197 flights covering 886 different airports.</li>
</ul>
<p>They are planning to start a new flight between cities x and y, whose cost would be C units for the passengers. They need to calculate the percentage decrease in the total minimum cost for all pair of cities. So, let say total minimum cost to travel between all pairs of cities is initially C1 and after the new flight introduction becomes C2. You need to calculate (C1-C2)X100/C1.
</p>
<h3>Input</h3>
<p>First line would give t (number of test cases).<br /><br />
Each test case starts with line containing n(number of cities) and f(number of flights) seperated by space.<br /><br />
All the cities are numbered as 0,1,2,...,n-1.<br /><br />
Next f lines will give, index of two cities(i and j) and the cost of flight(C).<br /><br />
Each case ends with a line containing x and y with its cost separated by space.<br /><br />
t&lt;=10<br /><br />
n&lt;=1000, f&lt;=2000<br /><br />
C&lt;=30000 units (is always an integer)</p>
<h3>Output</h3>
<p>For each test case output the percentage decrease rounded off to two decimal places on a separate line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 2
0 1 3500
1 2 4000
0 2 2700
5 7
0 1 5500
2 3 8100
4 0 4300
1 2 2300
0 3 6000
4 2 3100
3 4 3700
1 3 2800
<b>Output:</b>
32.00
14.93
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/manthan">manthan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-03-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>