<?php require("../../includes/header.php"); ?><h1>Course Selection</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/mandarin/RIN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/russian/RIN.pdf">Russian</a>.</h3>
<p>Rin is attending a university.</p>
<p>She has <b>M</b> semesters to finish her program, and that program has <b>N</b> required courses. Each course must be taken in exactly one of the semesters.</p>
<p>Some courses have prerequisites: for each <b>i</b> from 1 to <b>K</b>, she must take course <b>A[i]</b> before course <b>B[i]</b>.</p>
<p>The same course may be taught by different professors in different semesters, and how well she does will depend on which professor teaches her. Additionally, some courses may not be taught every semester.</p>
<p>We are given an array <b>X</b> representing this information. For each course <b>i</b> and each semester <b>j</b>, <b>X[i][j]</b> = -1 if course <b>i</b> is not taught in semester <b>j</b>. Otherwise, <b>X[i][j]</b> will be an integer between 0 and 100: the expected score Rin will get if she takes course <b>i</b> in semester <b>j</b>.</p>
<p>Rin may take any number of courses per semester, including none, as long as they are taught that semester and she has already taken any required prerequisite courses.</p>
<p>Help Rin to find the maximal average score she can get over her whole program.</p>
<h3>Input</h3>
<p>The first line contain 3 integers: <b>N</b>, <b>M</b> and <b>K</b>.</p>
<p>This is followed by <b>N</b> lines, each containing <b>M</b> integers. The <b>j</b><sup>th</sup> integer on the <b>i</b><sup>th</sup> line represents the value of <b>X[i][j]</b>.</p>
<p>This is followed by <b>K</b> lines, each containing two integers: <b>A[i]</b> and <b>B[i]</b>.</p>
<h3>Output</h3>
<p>Output one real number: the maximal average score, rounded to 2 digits after the decimal point.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>M</b>, <b>N</b> ≤ 100</li>
<li>0 ≤ <b>K</b> ≤ 100</li>
<li>-1 ≤ <b>X[i][j]</b> ≤ 100</li>
<li>1 ≤ <b>A[i]</b>, <b>B[i]</b> ≤ <b>N</b></li>
<li>For each <b>i</b>, <b>A[i]</b> ≠ <b>B[i]</b>.</li>
<li>For different <b>i</b> and <b>j</b>, (<b>A[i]</b>, <b>B[i]</b>) ≠ (<b>A[j]</b>, <b>B[j]</b>).</li>
<li>We guarantee there exists a way to take these <b>N</b> courses in <b>M</b> semesters.</li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask 1</b>: (20 Points) A course can have at most 1 pre request course.
</p>
<p>
<b>Subtask 2</b>: (80 Points) Refer to constraints above
</p>
<h3>Example</h3>
<pre><b>Input 1:</b>
3 2 2
70 100
100 80
100 90
1 2
1 3

<b>Output 1:</b>
80.00

<b>Input 2:</b>
4 5 4
20 -1 100 -1 -1
100 30 -1 -1 -1
100 -1 30 20 40
100 30 40 50 20
1 2
1 3
2 4
3 4

<b>Output 2:</b>
32.50
</pre><h3>Explanation</h3>
<p><b>Example case 1</b></p>
<p>The only way she can finish these 3 courses is: take course 1 in the first semester, then take courses 2 and 3 in the second semester. The average score is (70 + 80 + 90) / 3 = 80.00.</p>
<p><b>Example case 2</b></p>
<p>The optimal solution is: take course 1 in semester 1, course 2 in semester 2, course 3 in semester 3 and course 4 in semester 4.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cgy4ever">cgy4ever</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-10-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>