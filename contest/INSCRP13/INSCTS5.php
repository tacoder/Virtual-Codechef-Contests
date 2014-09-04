<?php require("../../includes/header.php"); ?><h1>Little Evan and mouse</h1><div class="content">
<p> </p>
<p>Little Evan has a pet mouse which likes to run around a lot. One day he places the mouse on a large two dimensional grid of size n*m. The mouse is placed in the row r and column c of the grid. He finds the mouse moves in an interesting pattern. The mouse moves spirally outwards in clockwise direction from its starting position(r,c) and stops when it cannot move any further and remains in that cell infinitely. It first moves North, then east and so on. The mouse takes exactly one second to move from a given cell to its adjacent cell. Now Evan wants to know at time t, what will be the position of the mouse?<br />
<br /><br /><br />
Note: The mouse never visits a cell it has already visited.<br />
<br /><br /></p>
<p>      |   1     2     3      4       5<br /><br />
---------------------------------<br /><br />
1 |              9      10    11   12<br /><br />
2 |             8      1       2      13<br /><br />
3 |             7     0       3      14<br /><br />
4 |             6      5      4       15<br /><br />
<br /><br />
Consider the above 4*5 grid. The mouse start at the cell (3,3). The value at the position (i,j) shows the time at which the mouse will reach the cell. At time 15 the mouse reaches the cell (4,5) after which it cannot move any further and hence remains in this position for infinite time.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains T, the number of testcases. Each of the next T lines contain 5 space separated integers n,m,r,c,t.</p>
<h3>Output</h3>
<p>For each testcase output one line which contains two space separated integers (i,j), the position the mouse will be at time t.</p>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li>1&lt;=T&lt;=100</li>
<li>1&lt;=n,m,&lt;=100000</li>
<li>1&lt;=r&lt;=n</li>
<li>1&lt;=c&lt;=m</li>
<li>0&lt;=t&lt;=10^9</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
4 5 3 3 1
4 5 3 3 14
4 5 3 3 20
1 1 1 1 1

<b>Output:</b>
2 3
3 5
4 5
1 1
</pre><p> </p>
<h3>Explanation</h3>
<p>Consider the above grid for understanding testcases 1,2 and 3.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tavan_edla">tavan_edla</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-10-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>