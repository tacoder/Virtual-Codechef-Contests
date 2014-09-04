<?php require("../../includes/header.php"); ?><h1>Chaos Management</h1><div class="content">

<p>The RUBIX Organizing Committee had planned to start publicizing their festival on the 29<sup>th</sup> of Jan,2011. Due to a last minute mishap they lost the document which contained the information as to which volunteer would visit which college on what day!<br /> <br />
They turned to their God Rubixius to help them out with the planning for the next week. They provide him with the number of volunteers and the maximum number of people each volunteer can attract per day. Being God Rubixius knows how many people will be present at each college each day. Rubixius has cast a spell which puts you in his shoes for this job. You have to help the OC by telling them the maximum number of people they can get each day along with the actual plan.</p>
<h3>Input</h3>

<p>The first line contains an integer T with the number of test cases. Each test case will have 2 integers N and C representing the number of volunteers and the number of colleges respectively. The next line will have N integers each representing the maximum number of students the volunteer can attract each day. Then C lines follow each having 6 integers representing the number of people present at that college from Monday to Saturday respectively.</p>
<h3>Constraints</h3>

<p>1&lt;=T&lt;=10<br />
1&lt;=N,C&lt;=100<br />
Number of students that can be attracted by a volunteer and number of students present in college each day &lt;100000</p>
<h3>Output</h3>

<p>For each case print a line with the maximum number of people the volunteers can get.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
3 3
1 1 1
1 1 1 1 1 1
1 1 1 1 1 1
1 1 1 1 1 1

<b>Output:</b>
18
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/virai">virai</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-02-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>