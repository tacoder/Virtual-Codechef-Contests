<?php require("../../includes/header.php"); ?><h1>Dividing the Students</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/mandarin/DIVIDE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/russian/DIVIDE.pdf">Russian</a>.</h3>
<p>In the city of "M", there are N girls who attend a certain high school. Historically, all of the students of this school are divided into two groups, not necessarily equal in size, right before they start to study.</p>
<p>Each girl in the city of "M" has an integer ID number <b>A<sub>i</sub></b>, that somehow corresponds to her interests, ideology and beliefs. Each girl is unique, so each ID is unique as well.</p>
<p>Some of the girls have similar interests. For any pair of girls, say the <b>i</b>-th and the <b>j</b>-th one, we call the value of similarity the number <b>min(A<sub>i</sub><sup>A<sub>j</sub></sup> mod (10<sup>9</sup>+7), A<sub>j</sub><sup>A<sub>i</sub></sup> mod (10<sup>9</sup>+7))</b>.</p>
<p>The teachers have decided that they want the students in each group to be as diverse as possible. This way they will be encouraged to become acquainted and make friends faster. For this reason they want to divide the students in such a way that the maximal similarity value of any two girls' IDs in the same group is as small as possible.</p>
<p>Please help them and find the minimal possible maximal similarity value of two girls' IDs within a single group after the optimal division.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case starts with a single integer <b>N</b> - the number of students.</p>
<p>Then, there is a line containing <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> - the IDs of the girls.</p>
<h3>Output</h3>
<p>For each test case output a single line with a single integer - the answer to the problem.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<li>Subtask 1: <b>3</b> ≤ <b>N</b> ≤ <b>10</b>. The time limit is 1 second - 14 points.</li>
<li>Subtask 2: <b>3</b> ≤ <b>N</b> ≤ <b>50</b>. The time limit is 1 second - 23 points.</li>
<li>Subtask 3: <b>T = 2</b>, <b>3</b> ≤ <b>N</b> ≤ <b>1000</b>. The time limit is 5 seconds - 63 points.</li>


<h3>Example</h3>
<pre><b>Input:</b>
1
4
1 2 1024 1025

<b>Output:</b>
1048576
</pre>
<h3>Explanation</h3>
<p>The first and the fourth girl will form the first group; the second and the third will form the second group.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-11-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>