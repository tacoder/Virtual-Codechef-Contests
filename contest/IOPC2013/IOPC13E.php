<?php require("../../includes/header.php"); ?><h1>Cutting Sheets</h1><div class="content">

<p>At IIT Kanpur, students take the course TA201 - Manufacturing Processes as part of the compulsory curriculum. Working on CNC (Computer Numerical Control) machines is part of the course, where jobs like cutting metal sheets and rods with desired dimensions can be done by machines which have been programmed by a computer before. </p>
<p>In one of the lab sessions, students are required to cut a 2-D metal sheet using a LSM Laser Machine. As an experimental setup, a very long metal rectangular sheet is placed on a table with the LSM Machine mounted over the sheet. The metal sheet can be considered as the 2-dimensional Euclidean plane. The length of the sheet is along the x-axis and its breadth is along the y-axis. The apparatus of the machine is such that there is a rod which moves along x-axis (from left to the right) cutting the sheet underneath using two lasers attached to the rod. The rod is aligned along the sheet’s breadth (y-axis) and is moved along the direction perpendicular to its own length (along the length of the sheet, i.e. x-axis). The two laser beams attached to the rod can slide along the rod’s length (y-axis).</p>
<p>
For the experiment, all students are given a sheet with <b>N</b> distinct points marked on it. Each point is of the form (<b>x</b>,<b>y</b>) where the bottom left corner of the sheet is the origin. The rod is restricted to move only from left to right and the two lasers are kept ‘on’ during the rod’s movement, thus leaving a continuous cut on the metal sheet. For the lab task, students have to cut out a closed polygonal shape. The polygon should be such that it has all the given <b>N</b> points on its boundary and all the vertices of the polygon must belong to the same set of the given <b>N</b> points. The lasers used in the LSM machine are peculiar. The amount of energy consumed by the laser while moving between any 2 of the given points is equal to the square of the length of the straight line along the sheet joining the 2 points. Students have to program the LSM machine to move the lasers along the moving rod and cut the sheet in such a way that the total energy consumed by the 2 lasers is the minimum. Your task is to find out the minimum total energy consumed by the 2 lasers combined.</p>
<h3>Input</h3>
<p>The first line of input contains <b>T</b> &lt;= 10, the number of test cases. Each test case begins with the first line containing <b>N</b> (2 &lt;= <b>N</b> &lt;= 1000), the number of points on the sheet given to the students. Each of the next <b>N</b> lines contains the points marked on the sheet as two space separated integers <b>x</b> <b>y</b> with 0 &lt;= <b>x</b>,<b>y</b> &lt;= 10^4.</p>
<h3>Output</h3>
<p>Output description.</p>
<p> For each test case, output a single line containing the minimum total power consumed by the 2 lasers.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
0 0
2 0
4 0
5 9
6 0
2
3 4
4 3

<b>Output:</b>
196
4
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
            <td>3 sec</td>
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