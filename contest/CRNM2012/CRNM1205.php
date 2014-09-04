<?php require("../../includes/header.php"); ?><h1>City of Romini</h1><div class="content">

<p align="justify">City of Romini is one of the well planned cities of the world. Why? Because road network at Romini is great. The roads in Romini are built in a grid like fashion. Some roads in Romini have stall-walls from which people cannot pass through. One such arrangement of Romini grid road network is given in a figure below <br />
<img src="http://www.csidtu.com/cranium/problem5_1.JPG" /></p>
<p>The above network has 5 east to west roads and 3 north to south roads. “#” represents stall-walls. Stall-walls are only present at the intersection point of any two roads.</p>
<p>Nooji is spending her holiday in City of Romini. She was amazed by the transport system of Romini. They have a very weird rule of charging fare from commuters. For a travelling distance of any units in either a horizontal direction or a vertical direction, without a stall-wall in between source and destination, they charge 1 Rupa. So suppose Nooji wants to travel from <b>S</b> to <b>D2</b> in above grid network system, she will only have to pay 1 Rupa. But if she wants to travel between <b>S</b> and <b>D1</b>, she will be charged 3 Rupa because she cannot commute through stall-wall and so she will have to go south first one unit (and pay 1 Rupa for it), then travel 3 units east (and pay 1 Rupa for it) and then finally travel 1 unit north to reach <b>D1</b> (and pay 1 Rupa for it). So in total she will have to pay 3 Rupa. </p>
<p>She is so confused with this system! Being a travel planner for her, can you plan her travel between given source and destination so that she has to pay minimum?</p>
<h3> Note </h3>
<p> If Nooji cannot reach destination from source, print 0 as answer.</p>
<h3>Input</h3>

<p align="justify">First line contains <b>T</b>, the no. of test cases. Each test case starts with two integers <b>M</b> and <b>N</b> in the first line, the dimensions of grid road network. Next line contains the integer coordinates of source for Nooji. Next line contains integer coordinates of destination for Nooji. Next <b>M</b> lines contain <b>N</b> characters in each line, the description of Grid road network. Note that all coordinates are 0 indexed based.</p>
<h3>Output</h3>

<p>Output <b>T</b> lines each containing the minimum amount Nooji will have to pay for travelling.</p>
<h3>Constraints</h3>

<p>
N&lt;=100 <br />
M&lt;=100<br />
T&lt;=100</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 4
1 1
2 2
....
..#.
.#..
....
3 5
1 2 
0 4
..##.
...#.
.....


<b>Output:</b>
4
3
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhidce2013">abhidce2013</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2012</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>