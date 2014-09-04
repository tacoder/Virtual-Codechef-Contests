<?php require("../../includes/header.php"); ?><h1>Particles</h1><div class="content">

<p>
A scientist was performing an experiment with two particles, particle A and particle B. the two particles follow all the properties of light(ie. the particle travel in straight line). He placed the source of particle A at location (x1,y1) and B at (x2,y2). But he found out that area in which both particles can meet in his room is very large and it becomes difficult to observe such large region. So he introduced some obstacles like circular pillar and walls which absorbs particles falling on it and thus some region do not recieve particle A, while some did not recive particle B, but there were some regions which could recieve both A and B. Thus area under observation is reduced by significant amount.</p>
<p>Find the area of the region which scientist needs to observe (i.e. area which can recieve both A and B). Assume that the room is a sqaure of size 100x100(0&lt;=x,y&lt;=100).</p>
<h3>Input</h3>
<p>1st line Number of test cases</p>
<p>1st line of each test case gives values of x1,y1 (position of source of A)</p>
<p>2nd line gives values of x2,y2(position of source of B)</p>
<p>3rd line contains number of pillars in the region (N)</p>
<p>3rd line is followed by N lines which give 3 numbers x y r. (x,y)-location of pillar and r- radius of the pillar.</p>
<h3>Output</h3>
<p>Area of region common to both particle A and B.</p>
<p> (answer upto only 2 decimal places required).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
78 38
1 95
1
35 38 14

<b>Output:</b>
6846.87
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/illume">illume</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2011</td>
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