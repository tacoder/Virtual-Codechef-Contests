<?php require("../../includes/header.php"); ?><h1>Assignments at IITK</h1><div class="content">

<p>
The Department of CSE, IITK tried a new experiment by giving <b>M</b> algorithmic assignments to students in groups of size <b>N</b>. Students are allowed to divide an assignment into parts such that each part is solved by a different student. It must be noted that a student may do atmost one assignment at a time. Also, an assignment can be attempted by exactly one student at a time, it may not be the case that two different students be solving different parts of the same assignment at the same time. </p>
<p>Here at IITK every student is believed to have the same potential. The professors estimated the total number of student hours each assignment will require. Now as the student calendar is filled with a lot of interesting activities, this makes it difficult for the students to be always available for an assignment. Most of the times, they are involved in doing many interesting activities e.g., many of them must be participating in IOPC 2013 right now :)</p>
<p>
The Department knows that the students of CSE, IITK are very competent and have knowledge of when an assignment will be put up, how much student hours it requires and  the deadline of the assignments. The Professors must know that the students here are very moody. So, it is possible that a student gets bored of solving an assignment for a long time, leaves it in the middle to pick another assignment without wasting any time. The student may later come back to the earlier assignment or may ask one of his friends (of the group of <b>N</b> students) to solve it.
</p>
<p> Your task is to help the Professors figure out if this experiment of theirs would be a success. In other words, figure out if it is possible for the group of <b>N</b> students to finish the given <b>M</b> assignments by the deadline. </p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases</p>
<p>First line of each test case contains two integers <b>N </b>the number of students  and <b>M</b> the number of assignments given to the group.</p>
<p>The next <b>N</b> lines contain two integers <b>S</b> and <b>E</b> denoting the start and end time at which the student is free to solve his/her assignments.</p>
<p>The next <b>M</b> lines contain three integers <b>A, D and H</b> denoting the start time of the assignment, the deadline of the assignment and the expected student hours needed to complete the assignment respectively.
</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing “YES” (without quotes) if  it is possible to complete all assignments by their deadline and “NO” (without quotes) otherwise.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>120</b></li>
<li><b>1</b> ≤ <b>N,M</b> ≤ <b>50</b></li>
<li><b>0</b> ≤ <b>S,E,A,D,H</b> ≤ <b>10<sup>7</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>

1
2 2
1 5
3 4
1 5 3
2 4 2
<b>Output:</b>
YES
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