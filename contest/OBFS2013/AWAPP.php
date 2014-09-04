<?php require("../../includes/header.php"); ?><h1>AndWinComp</h1><div class="content">

<p>One day a teacher give some task to students to build applications for mobile phones. Some students want to build the apps for android and others for windows phone. So the teacher decided to split them into teams, the teams must have an equal number of students.</p>
<p>We know that this group of students has archenemies.Each student has at most two archenemies. Besides, if student A is an archenemy to student B, then student B is an archenemy to student A.</p>
<p>The students want to split so as no two archenemies were in one team. If splitting in the required manner is impossible, some students will have to sit idle in the class.</p>
<p>Determine the minimum number of students you will have to make them sit idle in order to form the two teams in the described manner and begin the competition at last.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer T, the number of test cases.T test cases follow. The first line of each test case contains two space integers n and m — the number of students and the number of pairs of archenemies correspondingly.</p>
<p>Next m lines describe enmity between students. Each enmity is described as two numbers ai and bi (1 ≤ ai, bi ≤ n, ai ≠ bi) — the indexes of the students who are enemies to each other. Each enmity occurs in the list exactly once. It is guaranteed that each student has no more than two archenemies.</p>
<p>You can consider the students indexed in some manner with distinct integers from 1 to n.</p>
<h3>Output</h3>
<p>
For each test case, in new line, print a single integer — the minimum number of students you will have to send to the bench in order to start the game.</p>
<h3>Constraints</h3>
<h5>1&lt;=T&lt;=1000<br />
<br/>2&lt;=n&lt;=100<br />
<br/>1&lt;=m&lt;=100<br />
</br/></br/></h5>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5 4
1 2
5 3
2 4
1 4

<b>Output:</b>
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/prog_iitmandi">prog_iitmandi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-10-2012</td>
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
            <td>C, CPP11, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>