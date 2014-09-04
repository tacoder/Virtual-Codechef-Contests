<?php require("../../includes/header.php"); ?><h1>GROUPS</h1><div class="content">

<p>
In an Unix like environment, an administrator wants do following task:<br />
There <i>n</i> programs and <i>k</i> users. Each user has permission to execute<br />
certain programs. Now, the administrator wants to divide programs into<br />
minimum number of groups, so that each program belongs to an unique<br />
group, and assign users to these groups, such that only users<br />
belonging to the group have permissions to execute programs in the<br />
group.</p>
<h3>Input</h3>

<p>
First line gives <i>t</i>, the number of test cases (t ≤ 30). Then <i>t</i> test cases follow.<br />
For each test case:<br />
The first line gives 2 integers <i>n</i> and <i>k</i>.  (1 ≤ <i>n</i> ≤ 10<sup>5</sup>  and 1≤ <i>k</i> ≤1000 )<br />
Next <i>k</i> lines follow. Each line contains a set of integers. If an<br />
integer "i" exists in a line "k" then the k<sup>th</sup> user has permission to execute program "i".</p>
<h3>Output</h3>

<p>
For each test case output a single line.<br />
Each line should give the minimum number of<br />
groups possible.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5 5
1 2 4
1 2 4
1 2 4
2 3 5
3 5

<b>Output:</b>
3
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/fctrl">fctrl</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>9 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>