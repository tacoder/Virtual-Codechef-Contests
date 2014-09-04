<?php require("../../includes/header.php"); ?><h1>A journey in 3D</h1><div class="content">

<p>Master Yoda is teaching a young Padawan learner, an IIT Kanpur student, the knowledge and powers of a Jedi. During his training, one of the tasks he has to accomplish is to fly a starship across a 3D maze created by Master Yoda for his training. The maze is filled with virtual droids of the Empire’s Army at certain cells. The student has to fly the starship across the maze such that at no time the starship is in the same cell with any of the droids, otherwise he will fail the test and will be kicked out of the Jedi Training Camp.</p>
<p><b>Description of the maze: </b> <br />
The Maze is a 3-D grid of size <b>(N+2) x C x D</b>. It is a vertical stack of <b>D</b> layers where each layer is a 2-D grid containing <b>N+2</b> rows and <b>C</b> columns. The first (index <b>0</b>) and the last (index <b>N+1</b>) rows of each layer are filled with ‘O’ (open positions in the Maze), except that one cell in the first row of some layer will be marked ‘S’, the starting position of the student and his starship, and one cell in the last row of some layer will be marked with ‘D’, his destination. Every other cell in this grid will either contain an enemy droid marked with ‘X’ or an empty space marked with ‘O’.
</p>
<p>The starship has an intelligent <b>R2D2</b> robot installed which guides the student in flying the starship and deciding his path. The configuration of the grid is stored in the memory of <b>R2D2</b>. It is well known that Master Yoda is a very strict teacher when it comes to Jedi training. He has already computed the minimum number of moves it will take the student  to fly from the starting point and reach the destination already feeded in R2D2. </p>
<p>Master Yoda realised that if the drones in the maze are kept static, it is too easy for R2D2 to plan a path. Thus, Yoda decides to use his Jedi powers to set the Maze in motion, moving certain rows and columns of all the layers, to add some difficulty to the task. But he won’t move the first and the last rows of any layer (which keeps ‘S’ and ‘D’ positions static), since that will be too much for a young Padawan learner, only the masters practice in such a grid.
</p>
<p>
As soon as the Young Padawan Learner (IITK student) starts the flight, Yoda sets the maze in motion. In each layer, the rows with indices <b>0</b> and <b>N+1</b> remain stationary.<br />
For the first layer (the bottom-most layer which is index <b>0</b>), the row with index <b>1</b> is moved towards the right <b>1</b> cell at a time (i.e. one cell to the right in each move). The row with index <b>2</b> moves to the left, row with index <b>3</b> to the right and so on. For the rest of the layers, each row (except rows with indices <b>0</b> and <b>N+1</b>) move in the direction opposite to that of the row just below. All the rows move one cell at a time (i.e. one cell in each move). The row motion is modular i.e. whatever position (‘X’ or ‘O’) leaves the corner of the maze on any side, comes back in the same row, the same layer on the other side.
</p>
<p><b>Description of the motion for the starship: </b><br />
At all times, the starship must remain in the 3-D Maze of dimensions <b>(N+2) x C x D</b>.<br />
In each move, the starship may stay in its current cell or may move to the cell just adjacent to it, i.e. the starship may move one cell either to its right, or to its left in the same row, or one cell up or down in its column, or one cell up to the layer stacked above it or one cell down to the layer underneath keeping the row and columns indices the same. The motion of the starship isn’t modular unlike that of the rows. Although, the starship can’t share a cell with any droid at all times, it may jump over an approaching droid in the same row. It means if a droid is in the neighbouring cell of the starship, in the next move, both of them can exchange their positions without the student failing.
</p>
<ul></ul>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>M</b> denoting the maximum number of moves allowed. </p>
<p>The next line contains three space separated integers <b>N</b> <b>C</b> and <b>D</b> denoting the dimensions of the Maze. </p>
<p>The next <b>N+2</b> lines contain <b>C</b> characters denoting the layer <b>0</b> of the Maze </p>
<p>The next <b>N+2</b> lines contain <b>C</b> characters denoting the layer <b>1</b> of the Maze </p>
<p>.<br/><br />
The next <b>N+2</b> lines contain <b>C</b> characters denoting the layer <b>D-1</b> of the Maze <br /></br/></p>
<h3>Output</h3>
<p>Output an integer denoting the minimum number of moves needed to reach the destination. If it is not possible to reach the destination in less than equal to <b>M</b> moves then output -1</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>M</b> ≤ <b>4000 </b> </li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b> </li>
<li><b>1</b> ≤ <b>C</b> ≤  <b>100 </b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>10 </b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
20
2 3 1
OOS
OOO
XXO
OOD
<b>Output:</b>
5
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2013</td>
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