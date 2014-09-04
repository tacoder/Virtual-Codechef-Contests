<?php require("../../includes/header.php"); ?><h1>Reporting Cogni</h1><div class="content">

<p>
Due to the large number of events being held at Cognizance this year, all major media houses have sent teams of reporters to cover the event. The reporters don't feel like walking too much, so they gather at the central registration area and decide that only a limited subset of them would go out to the site of the events and bring back information. Being new to the campus, each reporter that goes out to gather information will come back to the registration area using the same route he used to reach an event area. Being smart, the reporters decide upon the following policies:
</p>
<ul>
<li>
All information-gathering reporters leave the registration area simultaneously.
</li>
<li>
Reporters will be sent out in a way which ensures that no two reporters cross paths during the course of their coverage of events. This means that reporters may not walk side by side or in opposite directions on the same road between two events, thus preventing wastage of effort.
</li>
<li>
Each reporter will cover an event taking place in the vicinity of his location if and only if there is no other reporter who can cover that event using less effort.
</li>
<li>
Once a reporter returns to the registration area, he will not leave it again.
</li>
</ul>
<p><br/></br/></p>
<p>Having no knowledge of the campus, they turn to you for help. To help them, you need to provide the following information:<br />
<br/><br/></br/></br/></p>
<ul>
<li>
The minimum number of reporters that need to be sent out so that the effort expended in total by all reporters is minimized, yet all events are visited.
</li>
<li>
The amount of the effort expended by the reporters as a whole while covering the events. Assume that reporters who do not leave the central registration area expend zero effort.
</li>
</ul>
<p>You are supplied with the following details:</p>
<ul>
<li>
The roads that link various event locations.
</li>
<li>
A sequential labeling of the event locations (with location 1 corresponding to the central registration area)
</li>
<li>
The effort expended in moving from an event location i to its nearby event locations.
</li>
</ul>
<p><br/><br/><br />
Note: The registration area is also an event location. Assume that the number of reporters in the group is sufficient to ensure that each event can be covered individually.<br />
<br/><br/></br/></br/></br/></br/></p>
<p><b>Input Format:</b></p>
<p>
Line 1: N - The number of event locations. 1 &lt;= N &lt;= 100. Event Locations are labeled 1, 2, 3... etc. In sequence.<br/><br/></br/></br/></p>
<p>Line 2: L K <br/><br />
	Where L = the event location sequence number<br/><br />
		and K = the number of roads connecting to this event location 1&lt;=15&lt;=K<br />
<br/><br/><br />
Line 3 to K+3: D E<br/><br />
	Where D = the nearby event location sequence number <br/><br />
		and E = the effort expended in moving along this road. 1 &lt;= E &lt;= 1000<br />
<br/><br/><br />
Lines 2 and 3 to K+3 are repeated N times - once for each event location
</br/></br/></br/></br/></br/></br/></br/></br/></p>
<p><br/><br />
<b>Output Format:</b><br />
<br/><br />
Line 1: M<br/><br/><br />
Line 2: X<br/><br/><br />
Where M = minimum number of reporters to be sent out so as to minimize the total effort<br/><br />
and X = the minimum effort that will be expended<br />
<br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<p><br/><br />
<b>Sample Input:</b></br/></p>
<pre>
5
1 2
2 344
5 707
2 3
1 344
3 482
5 652
3 1
2 482
4 1
5 281
5 3
1 707
2 652
4 281
</pre><p>
<br/><br />
<b>Sample Output:</b></br/></p>
<pre>
1
3518
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 - 12 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>