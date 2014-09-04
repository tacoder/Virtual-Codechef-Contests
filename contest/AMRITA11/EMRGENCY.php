<?php require("../../includes/header.php"); ?><h1>Emergency</h1><div class="content">

<p>There are N cities in the country and some of them are connected by bidirectional roads. To handle<br />
any emergency situation, they need a emergency cell to be set up at some cities such that, in case of any<br />
emergency in a city, the fire engine, the ambulance etc., can reach that city. Setting up a emergency<br />
cell is expensive and as occurrence of a emergency situation is very rare, its just enough to have each city<br />
connected ( possibly through other cities, by a path ) to a city which has an emergency cell.</p>
<p>Given the cost to setup emergency cell in each of the cities and the map of the country,<br />
find the minimum amount of money government needs to spend. In other words, the Government needs to select<br />
a set of cities S to set up emergency cells such that, every city in the country is connected to at least one<br />
city in S.</p>
<h3>Input</h3>
<p>
The first line contains the number of test cases T. T cases follow. Each test case starts with a line<br />
containing N M, N is the number of cities numbered 1 to N and M is the number of bidirectional roads.<br />
Next line contains N integers, the ith integer is the cost of setting up emergency cell in the ith city.<br />
Each of the next M lines contains, x y , meaning x and y are directly connected by a bidirectional road.<br />
There can be multiple roads between a pair of cities and some roads may even connect a city with itself.</p>
<h3>Output</h3>
<p>Output T lines, one for each case containing the required answer.</p>
<h3>Constraints</h3>
<p>
1 &lt;= T &lt;= 5<br />
1 &lt;= N &lt;= 100000<br />
0 &lt;= M &lt;= 100000<br />
0 &lt;= cost_i &lt;= 10000<br />
0 &lt;= x,y &lt; N</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
4 3
2 4 1 5
1 2
2 3
4 4

<b>Output:</b>
6
</pre><p>
<b>Explanation:</b><br />
Minimum cost is 6, by selecting city 3 and city 4</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-12-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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