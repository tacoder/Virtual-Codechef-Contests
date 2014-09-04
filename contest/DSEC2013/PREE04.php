<?php require("../../includes/header.php"); ?><h1>Coding Skills</h1><div class="content">
<h3>Problem Statement</h3>
<p>
You are a student of NIT Jalandhar and have a team of coders with you. There are students(coders) of k levels in your team. Each level has a particular <b>coding skill value</b>. Now you are given G number of experts to increase the level of your students. You can choose one student and use an expert to train student and increase its level by 1. An expert can only be used once and for one student only. You can train the same student continuosly by using experts. But students of level N can't be trained because they hae maximum skills.Students upto (N-1) levels can be expertised. A student can maximally be trained upto Nth level. You are given number of students in each level and coding skill value of each level. Coding skill of your team is sum of skill value of all students. Find out the maximum possible coding skill of your team after using G experts.
</p>
<h3>Input</h3>
<p>
First line contain number of test cases.<br /><br />
First line of each test case contains number of levels(N).<br /><br />
Next line contains N space separated values denoting number of students in each level.<br /><br />
Next line contains N space separated values denoting skill value of each level.<br /><br />
And last line of each test case contains value of G, number of test case.
</p>
<h3>Output</h3>
<p>A single integer denoting total coding skill of your team for each test case.</p>
<h3>Constraints</h3>
<pre>
1 &lt;= N &lt;= 50
0 &lt;= Pi &lt;= 10^6
0 &lt;= Si &lt;= 10^6
</pre><h3>Exemple</h3>
<h4>Input</h4>
<pre>
1
5
1 2 3 4 5
1 2 3 4 5
5
<h4>output</h4>

60
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ratish1992">ratish1992</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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