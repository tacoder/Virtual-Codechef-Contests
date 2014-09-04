<?php require("../../includes/header.php"); ?><h1>The Triwizard Tournament</h1><div class="content">

<p>The Triwizard Tournament was established roughly seven hundred years ago as a friendly competition amond the wizarding schools viz., the Hogwarts School of Witchcraft and Wizardry, the Beauxbatons Academy of Magic and the Durmstrang Institute. Held every five years, the competition would be hosted by each school in turn, the judges for the Tournament comprising the headmasters and headmistresses of the schools. </p>
<p> The last Triwizard Tournament ended with many sad memories. To honour the memory of  all those who were lost in the last tournament, it has been decided that Hogwarts will be hosting the Triwizard Tournament again this year.</p>
<p>Professor Dumbledore wants to introduce a new event this time. This event was suggested to him by Hermione Granger. In this event, a dear friend of each of the champions would be left blindfolded in some cell of the Dungeons, beneath the Hogwarts Castle. This friend has to start from the cell where he/she was left and come out of the Dungeons while walking through other cells and corridors he/she finds on his/her way. If he/she is unable to come out, then he/she would be consumed by the snakes hiding in the dungeons.  </p>
<p>Description of dungeons: Dungeons can be viewed as a graph in which the cells of the dungeons are the nodes and the corridors between the cells are the edges of the graph. The time needed to cross a path is the weight of the edges of the graph.</p>
<p>To add to the difficulty of the task, no magic is allowed inside the Dungeons. Thus, the friend of any champion would need to rely on his/her instincts and luck. It turns out that when you are in a cell of the Dungeons, the best strategy for escape is to randomly choose an edge to one the neighbouring cells. This way, you can increase your chances of escaping the Dungeons. You are asked to report the expected time one would take to escape the Dungeons starting from the initial cell where he/she was left. Assume that the friend uses the escape strategy as described above.</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b>, the number of test cases.<br />
The first line of each test case contains four space separated integers <b>N M S E</b> where</p>
<ul>
<li><b>N</b>: Number of cells in the dungeons</li>
<li><b>M</b>: Number of edges between the pairs of cells</li>
<li><b>S</b>: The Starting Cell</li>
<li><b>E</b>: The Destination Cell</li>
</ul>
<p>This is followed by <b>M</b> lines each containing three space separated integers <b>X Y W</b> which denotes that <b>W</b> is the time required to cross the corridor from cell <b>X</b> to cell <b>Y</b> and also from cell <b>Y</b> to cell <b>X</b>.</p>
<h3>Output</h3>
<p>A single line for each test case which contains a single floating point number <b>K</b>, the expected time to come out of the dungeon. <b>K</b> must be rounded upto 6 places after the decimal.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>25</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>200</b></li>
<li><b>0</b> ≤ <b>S,D,X,Y</b> ≤ <b>N-1</b></li>
<li><b>1</b> ≤ <b>W</b> ≤ <b>100</b></li>
</ul>
<p>Assume that it is always possible to escape the Dungeons, i.e. you can always reach <b>D</b> from <b>S</b>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 1 0 1
0 1 42
3 3 0 2
0 1 1
0 2 2
1 2 3

<b>Output:</b>
42.000000
3.333333
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>