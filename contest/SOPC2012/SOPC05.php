<?php require("../../includes/header.php"); ?><h1>Codeland Revisited</h1><div class="content">

<p>
Codeland (shortly CL) is a linear, street-like country. By linear, we mean all the cities of the country are placed on a single straight line - the axis. Thus every city's position can be defined by a single coordinate, xi, the distance from the left borderline of the country. You can treat all cities as single points.<br />
Unfortunately, the dictator of telecommunication of CL (Mr. A. Telcom) is not an intelligent man. He doesn't know anything about the modern telecom technologies, except for peer-to-peer connections. What's more, his thoughts on peer-to-peer connections is extremely faulty: he believes that, if Pi people are living in city I, there must be at least Pi cables from city i to every other city of CL - this way he can guarantee no congestion will ever occur!<br />
Expectedly, Mr. Telcom is not good in math and computing. He hires an engineer (i.e. you) to find out how much cable they need to implement this telecommunication system, given the coordinates of the cities and their respective population.
</p>
<h3>Input</h3>
<p>
A number T is given in the first line and then comes T blocks, each representing a scenario.<br />
Each scenario consists of three lines. In the first line a number N is given, which is the number of the cities. Then in the second line, coordinates of these N cities come. Finally in the third line, population of the cities comes in the same order.
</p>
<h3>Output</h3>
<p>
For each scenario of the input, write the amount of cable needed in a single line modulo 1,000,000,007.
</p>
<h3>Constraints</h3>
<p>
1 &lt;= T &lt;= 20<br />
<br/><br />
1 &lt;= N &lt;= 200,000<br />
<br/><br />
Pi &lt;= 10,000<br />
<br/><br />
Border to border length of the country &lt;= 1,000,000,000
</br/></br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 
1 3 6 
10 20 30 
5 
5 55 555 55555 555555 
3333 333 333 33 35

<b>Output:</b>
280 
463055586

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/coding_freak">coding_freak</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 10 sec</td>
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