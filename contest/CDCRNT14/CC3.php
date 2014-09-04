<?php require("../../includes/header.php"); ?><h1>Rihanna and Her Company</h1><div class="content">
<h3>Problem description.</h3>
<p>Rihanna has a very big Company and obviously CEO is the head of the Company. There are N employees under CEO, need not be immediately under him. Every employee has an index between 1 and <b>N</b>. no two employees has same index. Index of CEO is always 0.</p>
<p>
For every employee there will be only one immediate superior employee and can have any number of employees directly under him. Since CEO is the head of the company there are no superiors upon him.</p>
<p>
Now given an employee, that employee and all the employees under him are considered as a TEAM. Therefore if there are <b>N</b> employees in the company there are N+1 TEAMS (including CEO). Therefore index of a TEAM is the index of the employee leading that TEAM.</p>
<p>
Initially salary of CEO is 1 dollar like Steve Jobs.<br />
 </p>
<h3>Input</h3>
<p>The first line contains integer <b>N</b>, the number of Employees (excluding CEO).</p>
<p>
The next <b>N</b> lines have two integers each. The first integer on the i-th line is the index of the immediate superior and second integer <b>r</b> is the salary of the employee with index i</p>
<p>
The index of the immediate superior of the chef is less than the index of the employee.</p>
<p>
The next line has an integer q</p>
<p>
The next q lines contain one query each. Each query starts with a character which represents the type of query.</p>
<p>
1)	If it is <b>‘u’</b> (without quotes) then it is an update. This is followed by two integers <b>r</b> and <b>s</b>.</p>
<p>
2)	If it is <b>‘q’</b> (without quotes) then it is an query about salary. This is followed by an integer <b>r</b>.<br />
 </p>
<h3>Output</h3>
<p>1) If the query is <b>‘u’</b> (without quotes) then increase the salary of every employee in the TEAM with index <b>r</b> by an amount of <b>s</b>.</p>
<p>
2) if the query is <b>‘q’</b> (without quotes) then print the highest salary of an employee in the TEAM with index <b>r</b>.<br />
 </p>
<h3>Constraints</h3>
<p>1&lt;=N&lt;=100000<br /><br />
1&lt;=s&lt;=10^9<br /><br />
1&lt;=q(queries)&lt;=100000</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
0 10
11
q 0
q 1
u 1 10
q 0
q 1
u 0 100
q 0
q 1
u 1 1000
q 0
q 1
<b>Output:</b>
10
10
20
20
120
120
1120
1120
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ysc_rih">ysc_rih</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>