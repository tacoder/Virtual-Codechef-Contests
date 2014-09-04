<?php require("../../includes/header.php"); ?><h1>The Great Escape</h1><div class="content">

<p>While drinking water from the lake, Smurfette becomes aware of Azrael’s presence. She needs to return to her mushroom hut at the position <b>N</b>. Her starting position is 1. <br />
Luckily, she has her pogo stick with her The pogo stick has <b>m</b> magical jump gears which have a jump multiplier associated with it (<b>a<sub>1</sub>, a<sub>2</sub>, a<sub>3</sub>, ... a<sub>m-1</sub>, a<sub>m</sub></b>) which enables Smurfette to jump from position (say <b>x</b>) to <b>x*a<sub>i</sub></b> , for any value of <b>a<sub>i</sub></b> ( 0 &lt; <b>i </b>≤ <b>m</b>).</p>
<p>Smurfette would like to reach home in least number of steps or jumps. There may be multiple routes possible by the jumping scheme, well in that case, she would like to take smaller jumps first. See example for clarity. </p>
<p>Find out the <b>minimum possible number of jumps</b> needed for Smurfette to reach home. What would be the <b>lexicographically-smallest path</b> for the minimum number of jumps? </p>
<h3>Input</h3>
<p>There are about 100 test cases. Each test case has the following format:</p>
<p>• One line with two space-separated integers <b>n</b> and <b>m</b>, (1 &lt; <b>n</b> ≤ 10<sup>10</sup> and 0 &lt; <b>m</b> ≤ 10) : position of Smurfette’s hut and number of magical gears, respectively.</p>
<p>• One line with m space-separated integers <b>a<sub>1</sub>….a<sub>m</sub></b> satisfying 0 &lt; <b>a<sub>i</sub></b> ≤ 20: the values jump multipliers of magical gears <b>I</b> (1 ≤<b> i</b> ≤ <b>m</b>)</p>
<p>Read test cases upto end of file.</p>
<h3>Output</h3>
<p>For each test case output 2 lines:</p>
<p>• The first line contains <b>j</b>, the minimum number of jumps required to reach home.</p>
<p>• The second line contains<b> j+1</b> space-separated integers denoting the stops (including starting and final position). If there are more than one path possible having the minimum number of steps, print the lexicographically smallest one as Smurfette takes shorter jumps first.</p>
<p>If no path exists fulfilling the jumping criteria, print a single line containing <b>-1</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
12 2
2 3
10 3
2 3 5
13 6
2 4 6 8 10 12

<b>Output:</b>
3
1 2 4 12
2
1 2 10
-1
</pre><h3>Explanation</h3>
<p>12 2<br />
2 3</p>
<p>Clearly minimum no. of jumps are3<b>.</b><br />
But there is more than one path with 3 jumps.<br />
a) 1 2 4 12<br />
b) 1 2 6 12<br />
c) 1 3 6 12</p>
<p>Since the lexicographically smallest path has to be printed:<br />
a) 1 2 4 12 <br />
is the answer.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kumarvimal">kumarvimal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-11-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>