<?php require("../../includes/header.php"); ?><h1>The Problem Set</h1><div class="content">
<p>As we all know that team LaZyProblemSetters is gearing up for ICPC 2015 and have finally reached in front of a computer together to solve a problem set. Since they have already wasted too much time procrastinating, they have decided to manage the problem set with more caution. They are now ordering the problems according to their difficulty levels instead of solving all the easy problems as they used to do earlier.
</p>
<p>
For this practice round, everybody has pitched in a few problems of their choice. So in the end, they have a set of <b>N</b> problems ordered as P<sub>1</sub>, ..., P<sub>N</sub>, where P<sub>i</sub> denotes the i<sup>th</sup> problem. For each problem that was brought in by any team member, he assigned an integer D<sub>i</sub> which according to him is the difficulty level of that problem.
</p>
<p>
The difficulty level assigned to a problem is exactly the number of time units one expects to solve that particular problem. However, as we all know, that assigning difficulty to a problem is really subjective and the assigned difficulty level of the problem may change when all the three team members look at that problem. Since, they are busy solving the problem, they have asked you to help in giving them the information they need about the problem set.
</p>
<p>Following is the list of all of their requirements, for which they need your help:<br />
<br /></p>
<ol>
<li> Update the difficulty level of a problem.</li>
<li> Tell them the difficulty level of the most difficult problem in the problem set.</li>
<li> The total time it would take them to solve a set of problems.</li>
<li> Whether a list of consecutive problems are in some order of difficulty.
<ul>
<li>P<sub>x</sub> to P<sub>y</sub> are in increasing order of difficulty if D<sub>x</sub>≤ D<sub>x+1</sub>≤ ... ≤ D<sub>y</sub></li>
<li>P<sub>x</sub> to P<sub>y</sub> are in decreasing order of difficulty if D<sub>x</sub>≥ D<sub>x+1</sub>≥ ... ≥ D<sub>y</sub></li>
</ul>
</li>
</ol>

<p>To make it easier, faster and accurate, they have decided to communicate with you as follows:<br />
<br /></p>
<ol>
<li> <b>U x d</b><br />
The difficulty level of the problem P<sub>x</sub> has been updated to <b>d</b>. Hence D<sub>x</sub> = d.
</li>
<li><b>M x y</b><br />
What is the difficulty level of the most difficult problem in range P<sub>x</sub>, ..., P<sub>y</sub>.
</li>
<li><b>S x y</b><br />
How much total time it would take them to solve all the problems in range P<sub>x</sub>, ..., P<sub>y</sub>.
</li>
<li><b>I x y</b><br />
Whether the problems in range P<sub>x</sub>, ..., P<sub>y</sub> are in increasing order of difficulty. Print 1 if they are, 0 otherwise.</li>
<li><b>D x y</b><br />
Whether the problems in range P<sub>x</sub>, ..., P<sub>y</sub> are in decreasing order of difficulty. Print 1 if they are, 0 otherwise.</li>
</ol>

<h3>Input</h3>
<p>First line will have two space separated integers <b>N</b> and <b>M</b> denoting the number of problems and the number of operations that you are asked to perform for the LaZyProblemSetters.<br />
Next line will have <b>N</b> space separated integers where the i<sup>th</sup> integer denotes D<sub>i</sub>.<br />
Next <b>M</b> lines will each represent one of the five operations mentioned above in the form <b>U x d</b> or <b>O x y</b> where <b>O</b> is from the set <b>{M,S,I,D}</b>.
</p>
<h3>Output</h3>
<p>Print one line with the answer corresponding to each operation of the form <b>O x y</b> where <b>O</b> is from the set <b>{M,S,I,D}</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b> 1 </b> ≤ <b> x </b> ≤ <b> y</b> ≤ <b> N </b> ≤ <b> 10<sup>5</sup></b> </li>
<li><b> 1 </b> ≤ <b> M </b> ≤ <b> 5*10<sup>5</sup> </b></li>
<li><b> 1 </b> ≤ <b> D<sub>i</sub>, d</b> ≤ <b> 10<sup>9</sup> </b></li>
<li><b> O is a character from {M,S,I,D} </b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 7
1 2 4 5 10
S 1 5
S 1 4
M 1 5
I 2 4
U 2 11
M 1 5
D 3 4

<b>Output:</b>
22
12
10
1
11
0
</pre><p>
<b>Note: Large I/O, be careful with certain languages</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-10-2014</td>
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
            <td>C, CPP 4.8.1, CPP11, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>