<?php require("../../includes/header.php"); ?><h1>Snooker</h1><div class="content">
<p>
A room had <b>K</b> snooker tables of various sizes. Every snooker table is a rectangle of size <b>M x N</b>, and the table does not contain any pockets.<br /><br />
The edges of each table are described as <b>L (left),  R (right),  U (up) and D (down)</b>.<br /> The <i>left</i> and <i>right</i> edges are of length <b>M</b>, and the <i>up</i> and <i>down</i> edges are of length <b>N</b>.<br /><br />
Origin of each rectangle is the intersection of <b>L</b> and <b>D</b>.<br /></p>
<p>A player enters the room and plays a move on every table.<br /></p>
<p>The following actions are performed in a move:</p>
<ul>
<li> Player places the ball at Origin.</li>
<li> Player strikes the ball at angle 45<sup>o</sup> with D.</li>
</ul>
<p><br /><br />
Every edge has certain number of points associated with it.<br /><br />
Whenever the ball collides with an edge, the player gets the points associated with that edge.<br /><br />
The total points obtained by the player for a table is the sum of points he gets for each collision.<br /></p>
<p>Considering that the ball traverses length <b>X</b>, calculate the number of points obtained by the player on each table.<br /><br />
<br /><br />
<b>Note</b>:<br /></p>
<ul>
<li> The table is frictionless.</li>
<li> The ball does not lose any energy after collision with the table.</li>
<li> The ball abruptly stops after it travels length X.</li>
<li> If the ball strikes the intersection of two edges (i.e., a corner), the player gets points associated with both edges and the ball rebounds along the same line along which it reached the corner.</li>
<li> The ball follows the laws of reflection.</li>
<li> Assume the ball to be a point object</li>
<li> Assume <b>sqrt(2)</b> to be <b>1.41</b></li>
</ul>
<p><br />
</p>
<h3>Input</h3>
<p>The first line consists of an integer <b>K</b><br /><br />
The second line consists of an integer <b>X</b><br /><br />
<b>2*K</b> lines follow<br /><br />
Each table is described by 2 lines:<br /><br />
First line contains 2 space seperated integers <b>M</b> and <b>N</b>.<br /><br />
Second line consists of 4 space-separated integers <b>L R U D</b>, where each integer describes the points associated with the respective edges: left, right, up and down.<br /><br />
<br /><br />
<b><br />
K<br /><br />
X<br /><br />
M<sub>i</sub> N<sub>i</sub><br /><br />
L<sub>i</sub> R<sub>i</sub> U<sub>i</sub> D<sub>i</sub><br /><br />
</b></p>
<p> </p>
<h3>Output</h3>
<p>Output <b>K</b> lines, each containing an integer where the <b>i<sup>th</sup></b> line represents the number of points obtained by the player for the <b>i<sup>th</sup></b> table</p>
<p> </p>
<h3>Constraints</h3>
<p><b>1</b>&lt;=<b>K</b>&lt;=<b>10^5</b><br /><br />
<b>1</b>&lt;=<b>X</b>&lt;=<b>sqrt(2)*10^4</b><br /><br />
<b>1</b>&lt;=<b>M,N</b>&lt;=<b>1000</b><br /><br />
<b>1</b>&lt;=<b>L,R,U,D</b>&lt;=<b>10^4</b><br /></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
8.46
2 3
1 1 1 1
3 4
1 2 3 4

<b>Output:</b>
5
9

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wittyceaser">wittyceaser</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-05-2014</td>
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
            <td>ASM, C, C99 strict, CAML, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, HASK, JAVA, PAS fpc, PAS gpc, PERL, PERL6, PYTH, PYTH 3.1.2, SCALA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>