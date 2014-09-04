<?php require("../../includes/header.php"); ?><h1>Traffic Jam</h1><div class="content">

<p>Traffic Jam is becoming a major problem in the city of 'Faka' these days. Every day, you need to go to work from home through a one-way road that can be modeled as a series of straight line segments (aka piece-wise linear) of positive length. To be more explicit, suppose there are one way straight line paths named P, Q and R in your way. P starts at your home &amp; ends at the starting point of Q. Q starts from the ending point of P &amp; ends at starting point of R. Similarly, R starts at ending point of Q &amp; ends at your destination. Two non-adjacent line segments in a road will never intersect with each other. </p>
<p>Now, you start from home for work and immediately get irritated by the heavy and annoying traffic jam. So you wish you could fly to your destination in order to avoid spending the whole day on road. Your new vehicle Aerocar comes as the solution to you. With this car, you can leave the road &amp; start to fly from any point (The aerocar has a vertical take-off &amp; landing similar to that of a helicopter) and land back to the road any time. Now, though you would have liked to fly all the way and thus avoiding the traffic, you need to resist the temptation due to the fact that flying requires more fuel than driving. You need 1 unit of fuel to travel every unit distance along the path while F units per unit distance while flying. Now you need to write a program that, given the description of the road, can calculate the minimum possible fuel amount needed to complete your journey. </p>
<h3>Input </h3>
<p>Each test case starts with a couple of integers &quot;cmmi-10x-x-109&quot;&gt;N(1 &#8804; &quot;cmmi-10x-x-109&quot;&gt;N &#8804; 25) &amp; F(2 &#8804; F &#8804; 5). N is the number of line segments in the road. F is the amount of fuel required for every unit distance traveled while flying. Next (N + 1) lines each has two integers, &quot;cmmi-10x-x-109&quot;&gt;x(&#8722;1000 &#8804; x &#8804; 1000) &amp; &quot;cmmi-10x-x-109&quot;&gt;y(&#8722;1000 &#8804; y &#8804; 1000). </p>
<p>Assuming the road is placed on a planar 2d grid, the integers in the i &quot;cmsy-10x-x-109&quot;&gt;&prime;th line denotes the x and y co-ordinates of the starting point of the i &quot;cmsy-10x-x-109&quot;&gt;&prime;th line segment while the the end point co-ordinates by the i &quot;cmsy-10x-x-109&quot;&gt;&prime;th line segment are given at the ( &quot;cmmi-10x-x-109&quot;&gt;i + 1)&prime;th line. The last test case will be followed by a case with N = F = 0 indicating the end of input. This case should not be processed. </p>
<h3>Output </h3>
<p>For each test case except the last one, print one line of the form &ldquo;Case X : &quot;cmmi-10x-x-109&quot;&gt;Y &rdquo;, where X is the serial number of output &amp; Y is the minimal possible units of fuel required. Print 3 digits after decimal point for &quot;cmmi-10x-x-109&quot;&gt;Y . The output will be tested by a special judge program and outputs with precision error smaller than 10 <sup>&quot;cmsy-8&quot;&gt;&#8722;3</sup> shall be considered as correct.</p>
<h3>Sample input and output</h3>
<p>
stdin<br />
2 "cmtt-10x-x-109"&gt;5<br />
0 "cmtt-10x-x-109"&gt;0<br />
5 "cmtt-10x-x-109"&gt;0<br />
10 "cmtt-10x-x-109"&gt;0<br />
2 "cmtt-10x-x-109"&gt;2<br />
0 "cmtt-10x-x-109"&gt;0<br />
2 "cmtt-10x-x-109"&gt;2<br />
2 "cmtt-10x-x-109"&gt;-2<br />
3 "cmtt-10x-x-109"&gt;5<br />
0 "cmtt-10x-x-109"&gt;0<br />
1 "cmtt-10x-x-109"&gt;1<br />
-7 "cmtt-10x-x-109"&gt;0<br />
1 "cmtt-10x-x-109"&gt;10<br />
0 "cmtt-10x-x-109"&gt;0
</p>
<p>
stdout<br />
Case "cmtt-10x-x-109"&gt;1: 10.000<br />
Case "cmtt-10x-x-109"&gt;2: 5.464<br />
Case "cmtt-10x-x-109"&gt;3: 22.283
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-10-2010</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>