<?php require("../../includes/header.php"); ?><h1>Olympic Village</h1><div class="content">
<p>It is almost Olympic time, but the organizers fear that the entire Olympic village will not be ready in time given the slow progress of construction. The games are going to have <b>K</b> events (numbered from 1 to <b>K</b>), and <b>M</b> countries (numbered from 1 to <b>M</b>) have already confirmed sending their sportspersons to participate in one or more of these events, with one person participating in exactly one event. Given the urgency of the situation, the organizers hold an emergency meeting to find the minimum number of total beds that they have to plan for counting all the rooms to accommodate all the people.  Given that there will be some moving in and moving out time, it was decided that two people will not be allotted the same bed if the days their events are held overlaps (including if one event starts on the same day the other ends).</p>
<p>The organizers want to get that number and then want to speed up the work on a war-footing to at least get that many beds ready in time. You have to help them calculate this minimum. </p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>N</b>.</p>
<p>For each test case, the first line contains the values of <b>K</b> and <b>M</b>. This is followed by <b>K</b> lines, with the j-th line containing the start and end days of event j (both positive integers, with end day &gt; start day). This is followed by <b>M</b> lines, with the j-th line containing the participation information for country j. The participation information for each country consists of (in this order): an integer <b>D</b> indicating the number of events the country is participating in, followed by <b>D</b> pairs of integers (total 2<b>D</b> integers), with each pair containing the id (from 1 to <b>K</b>) of an event and the number of participants (positive integer) the country is sending for that event.</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the minimum total number of beds needed.</p>
<h3>Constraints</h3>
<p>0 &lt; <b>N</b> ≤ 3</p>
<p>0 &lt; <b>K</b> ≤ 30</p>
<p>0 &lt; <b>M</b> ≤ 100</p>
<p>0 &lt; <b>D</b> ≤ <b>K</b></p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5 3
2 7
1 4
5 8
3 6
9 10
5 1 1 2 1 3 1 4 1 5 1
4 1 1 2 1 3 2 5 2
3 3 1 5 1 4 1
4 2
1 3
3 6
2 3
4 7
4 1 2 2 2 3 1 4 1
4 1 1 2 1 3 2 4 2

<b>Output:</b>
Case 1: 8
Case 2: 9

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