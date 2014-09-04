<?php require("../../includes/header.php"); ?><h1>Burnout</h1><div class="content">
<h2>Problem Statement </h2>
<p>Burnout, a popular gaming arena in Manipal, has come up with new charging schemes for all the students that game there. Since there are different types of gamers, they are always seeking for packages that are best suited for them. To have an edge over their newly arising competitors, Burnout provides various packages. Two of the most popular packages are:</p>
<ul>
<li> <b>Respawn</b></li>
<li><b>Frag</b></li>
</ul>
<p>Respawn charges every 30 minutes at a rate of Rs.10. That means if you play for 29 minutes or less, you will be charged with Rs.10. If you play for 30 to 59 minutes, you will be charged with Rs.20 and so on.<br />
Frag charges every 60 minutes at a rate of Rs.15. That means if you play for 59 minutes or less, you will be charged with Rs.15. Similarly, if you play for 60 minutes to 119 minutes, you will be charged with Rs.30 and so on.<br />
Given a list of durations that students have played for, can you determine the package that is cheaper?
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input is an integer T, denoting the total number of test cases. Each case starts with a line containing an integer N. followed by a list of N durations (In minutes) in next line. Each duration is an integer in the range [1, 2000] which will be separated by a single space character.</p>
<h3>Output</h3>
<p>For each case, output the case number first. Then output the name of the cheaper package followed by the corresponding cost in Rupees. If both package gives the same total cost, then output both the names (Respawn preceding Frag) followed by the cost. Look at the output and sample input for details.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>20</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3
40 40 40
2
61 10
2
60 65


<b>Output:</b>
Case 1: Frag 45
Case 2: Respawn 40
Case 3: Respawn Frag 60
</pre><p>
<br />
<br />
<b>Note : The reference for this problem has been taken from : UVa online Judge </b>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/himanshuk123">himanshuk123</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-10-2013</td>
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