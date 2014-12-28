<?php require("../../includes/header.php"); ?><h1>Interview Scheduling</h1><div class="content">
<p>Professor Calculus wishes to hire graduate engineers for a few open positions in his funded projects. He has called <b>K</b> candidates for interview (numbered from 1 to <b>K</b>), and based on the profile of the candidates, has decided on an estimated time duration of interview for each candidate. A single interview board is going to conduct all the interviews. Assume that the interview board starts the interviews at time <i>t</i> = 0.</p>
<p>Since candidates from outside the town may want to go back on the same day, Professor Calculus has asked each candidate for the departure time of the train that they wish to take to go back after the interview. Many candidates have indicated such times, while others who are local candidates or non-local candidates who do not wish to go back the same day have not.</p>
<p>In order to cause any inconvenience to as few of the candidates as possible, Professor Calculus attempts to order the interviews such that the number of candidates who wish to go back the same day after the interview but will miss their trains is minimized. Assume that to catch a train, the interview of each candidate has to end at least 30 minutes before the departure time of the train the candidate wishes to take. You can also assume that all departure times specified are more than 30 minutes after the start of the first interview at t = 0.</p>
<p>Can you help the Professor Calculus prepare a schedule of the interviews so that the number of candidates who miss their trains is minimized?</p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>N</b> (0 &lt; <b>N</b> &le; 3).</p>
<p>For each test case, the first line contains the number of candidates <b>K</b> (0 &lt; <b>K</b> &le; 100). The second line contains a sequence of <b>K</b> positive integers indicating the estimated interview duration in minutes of the <b>K</b> candidates. The third line contains a sequence of <b>K</b> positive integers indicating the time, in number of minutes from <i>t</i> = 0, of the departure time of a train that a candidate has to catch. If a candidate has not given any such time, the corresponding integer is set to -1.</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the minimum number of candidates who will miss their trains.</p>
<h3>Sample Input</h3>
<pre>
2 
5 
10 15 20 15 25 
60 70 50 90 80 
4 
15 25 20 30 
-1 75 70 70
</pre><h3>Sample Output</h3>
<pre>
Case 1: 2
Case 2: 1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>