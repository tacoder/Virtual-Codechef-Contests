<?php require("../../includes/header.php"); ?><h1>Flying Dutchman</h1><div class="content">
<p>The Flying Dutchman is a giant ship and the dock has many types of tasks which have to be done to keep the ship functional. Every crew member have their own taste in the kind of tasks that they find interesting. Davy Jones has published a list of tasks that he currently has and needs to be finished. Every crew member gives his preference as a list of tasks that he/she is interested to work on. Davy jones has <b>N</b> tasks to finish and <b>N</b> crew members working for him. All the <b>N</b> tasks are estimated to take exactly the same amount of time, so Jones has planned to assign one task to each crew member and every task is assigned to exactly one crew member.</p>
<p>Jones is also a very understanding captain, so he wants to assign tasks to his team respecting everyone's preferences. You are the "Crew Chief" working for Jones, and are required to help him in doing the task assignment. Here are the questions that Jones wants you to answer:</p>
<p>
1) Check if it is possible to assign all the tasks to his crew, respecting their preferences.<br /><br />
2) Count the number of <b>(c, t)</b> pairs, such that there is a way to assign all the tasks when crew member <b>'c'</b> is assigned task <b>'t'</b>.</p>
<h3>Input</h3>
<p>
The first line contains the number of test cases <b>T</b>. The next lines give the description of the <b>T</b> test cases.<br /><br />
The first line of the each test case contains the number of tasks (same as number of crew members) <b>N</b>.<br /><br />
The second line of the test case contains preferences of 1st crew member,<br /><br />
3rd line of the test case contains preferences of 2nd crew member<br /><br />
.. and so on.. <br /><br />
<b>n+1<sup>th</sup></b> line of the test cases contains preferences of <b>n<sup>th</sup></b> crew member.<br />
<br />The preference of an engineer is specified as follows: number of tasks that the crew member is interested in <b>'k'</b>, followed by <b>'k'</b> integers representing the unique id of the tasks that the crew member prefers.</p>
<h3>Output</h3>
<p>You need to output <b>T</b> lines, with one line of output for each test case. The output of each test case should be of the form <b>"X Y"</b>, where,<br /><b>X</b> is <b>1</b> if it is possible to assign all the tasks, and <b>0</b> otherwise.<br /><br />
<b>Y</b> is the number of <b>(c, t)</b> pairs such that there is a way to assign all the tasks such that crew member <b>'c'</b> is assigned task <b>'t'</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;=<b>T</b> &lt;= <b>50</b></li>
<li><b>2</b> &lt;= <b>N</b> &lt;= <b>100</b></li>
<li><b>1</b> &lt;= <b>k</b> &lt;= <b>100</b></li>
<li><b>1</b> &lt;= <b>task_id</b> &lt;= <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input</b>
2
4
2 1 2
2 2 3
2 2 3
2 3 4
4
2 1 2
3 2 3 4
1 3
1 3
</pre><pre><b>Output</b>
1 6
0 0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divanshu">divanshu</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2013</td>
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