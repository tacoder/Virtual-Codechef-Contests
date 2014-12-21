<?php require("../../includes/header.php"); ?><h1>Mangalyaan-2</h1><div class="content">
<p>After the huge success of Mangalyaan this year, the ISRO (Indian Space Research Organization) is planning to launch a manned mission to Mars named Mangalyaan-2, in 2015. They obviously would want to select the best astronauts for this space mission. ISRO's research team has examined <b>N</b> available astronauts and computed a fitness score for each of them. It has been decided that astronauts with fitness score greater than or equal to a threshold score <b>P</b>, are eligible for the mission. </p>
<p>Can you report the number of eligible astronauts?</p>

<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting the number of test cases.</p>
<p>Then for each test case, the first line contains two space separated integers <b>N</b> and <b>P</b> denoting number of astronauts and the threshold score respectively.</p>
<p>The second line of each test case contains N space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the fitness scores of the astronauts.</p>
<p><b><u>Note</u></b>: All fitness scores are distinct and are given in descending order.</p>

<h3>Output</h3>
<p>For each test case, output the number of astronauts eligible for the mission on a separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>100</b></li>
<li><b>1</b> &le; <b>N</b> &le; <b>100</b></li>
<li><b>1</b> &le; <b>P</b> &le; <b>1000</b></li>
<li><b>1</b> &le; <b>A<sub>i</sub></b> &le; <b>1000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
3 10
7 3 1
3 5
7 3 1
3 1
7 3 1

<b>Output:</b>
0
1
3
</pre>
<h3>Explanation</h3>
<p>In the first case, no astronauts are selected as none of them have fitness score greater than or equal to 10.</p>
<p>In the second case, the astronaut with score 7 is selected.</p>
<p>In the third case, all astronauts are selected.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-10-2014</td>
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
            <td>C, CPP 4.8.1, CPP11, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>