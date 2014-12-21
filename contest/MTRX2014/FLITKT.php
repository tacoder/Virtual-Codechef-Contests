<?php require("../../includes/header.php"); ?><h1>Flight Tickets</h1><div class="content">
<p>One day, Megan bought a one-way ticket from somewhere to somewhere with some flight transfers.<br /><br />
For example: SFO-&gt;DFW DFW-&gt;JFK JFK-&gt;MIA MIA-&gt;ORD.<br /><br />
Obviously, transfer flights to a city twice, or more doesn't make sense. So Megan will not do that. Unfortunately, after she received the tickets, she messed up with the tickets and forgot the order of the tickets. Help Megan rearrange the tickets to arrange them in the correct order.</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line contains the number of test cases <b>T</b>, after which T cases follow.</li>
<li>Each test case starts with an integer <b>N</b>. There are N flight tickets that follow.</li>
<li>Each of the next 2 lines contains the source and the destination of a flight ticket.</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>For each test case, output one line containing "itinerary", where itinerary is sorted list of flight tickets which represents the actual itinerary. Each flight segment in the itinerary should be printed as a pair of source-destination codes.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
SFO
DFW
4
MIA
ORD
DFW
JFK
SFO
DFW
JFK
MIA

<b>Output:</b>
SFO-DFW
SFO-DFW DFW-JFK JFK-MIA MIA-ORD
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vivekjha92">vivekjha92</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-11-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, JAVA, PYTH, PYTH 3.1.2</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>