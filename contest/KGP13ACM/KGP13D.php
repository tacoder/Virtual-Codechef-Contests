<?php require("../../includes/header.php"); ?><h1>Building Township</h1><div class="content">
<p>A real estate company undertakes to build a large township. The work is complex and requires the company to hire different categories of highly skilled laborers at different times for different parts of the work. An analysis of the whole project showed that <b>K </b>different groups of highly skilled laborers are needed for <b>K</b> subparts of the project, each of which takes a certain number of days.  The subparts are numbered from 1 to <b>K</b>.</p>
<p>The whole work is supervised by a consultant of the company and he can supervise only one subpart at a time, so only one group of skilled laborers is actually utilized at one time. However, it is very difficult to find skilled labor just when you need them, so in order to avoid delays due to non-availability of required labor when it is needed, the company decides to hire all skilled laborers at the start of the project itself, paying them from the beginning of the project till their subpart is done, at which time, they are let go. Each such group costs the company a certain amount of money per day from the day they are hired till the day they finish their part.</p>
<p>The situation is compounded by the fact that some of these subparts have to be done in order. However, it is seen that any subpart can be dependent on at most one other subpart and can cause at most one other subpart to be dependent on it.</p>
<p>What is the minimum total amount the company has to pay to the laborers?</p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>N</b>.</p>
<p>For each test case, first line contains the number of subparts <b>K</b>. Second line contains a sequence of <b>K </b>integers indicating the number of days required to finish each subpart. Third line contains a sequence of <b>K</b> integers indicating the hiring cost per day for the labor group needed for each subpart. The fourth line contains an integer <b>D</b> indicating the number of pairs of subparts where one subpart is dependent on the other. This is followed by <b>D</b> lines, each of which contains two integers<b> x</b> and <b>y</b> (in that order), where subpart <b>y</b> depends on subpart <b>x</b> (i.e., <b>y</b> can start only after <b>x</b> has finished).</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the total labor cost paid by the company.</p>
<h3>Constraints</h3>
<p>0 &lt; <b>N</b> &#8804; 3</p>
<p>0 &lt; <b>K</b> &#8804; 200</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
21 27 12 33 5
100 200 50 25 75
3
1 2
3 5
5 4
4
10 10 10 10
40 30 20 10
0

<b>Output:</b>
Case 1: 21125
Case 2: 2000

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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