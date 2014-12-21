<?php require("../../includes/header.php"); ?><h1>ICPC Pre-Prelims Practice Round</h1><div class="content">
<p>
Like all other teams, the LaZyProblemSetters (consisting of V, J and S) are also participating in ICPC with high hopes for qualifying for the world finals. They would like to go to the world finals to represent their country and bring back a medal. However, first they have to clear the prelims contest. For that, they have decided to have a practice round before the prelims. They are going to have the practice round from time <b>S</b> to <b>E</b>. However, the team members are not so sure whether they would be able to participate in the practice contest for the whole duration as they already have some previous reservations. To solve that, they have created a list of all the things everyone is supposed to do or reservations they have to fulfil.
</p>
<p>The list they prepared has a total of <b>N</b> tasks. They have also noted down the time in which each task needs to be done, i.e. the start time and the end time. During that time, at least one of the team members is busy doing that task and would be unavailable for the ICPC pre-prelims practice contest.
</p>
<p>
You are given the time slot LaZyProblemSetters have decided to practice together and the list of tasks with their start and end time that they prepared. Print whether they all would be able to practice together for the full duration of the contest. For this problem, you can assume that if V, J or S ends a task at time T1, he can give his undivided attention to the contest starting from T1 itself and if the contest ends at time T2, they can get back to their reserved tasks at T2 itself.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, the number of test cases in a file.<br />
Then <b>T</b> test cases follow each of which has the following structure:<br />
The first line of each test case contains two space separated integers <b>S</b> and <b>E</b>.<br />
The second line of each test case contains <b>N</b>. Then <b>N</b> lines follow each of which contains two space separated integers, <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b>, the start and the end time of the i<sup>th</sup> task.</p>
<h3>Output</h3>
<p>For each test case, print "YES" (without quotes) if the team members can practice together for the full duration of the pre-prelims contest, print "NO" (without quotes) otherwise in a new line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>S</b> &lt; <b>E </b> ≤ <b> 10<sup>18</sup></b></li>
<li><b>1</b> ≤ <b>x<sub>i</sub></b> &lt; <b>y<sub>i</sub></b> ≤ <b> 10<sup>18</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
10 20
3
1 10
21 50
30 33

<b>Output:</b>
YES
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-09-2014</td>
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