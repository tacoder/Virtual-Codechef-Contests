<?php require("../../includes/header.php"); ?><h1>Tour Planning</h1><div class="content">
<p>Professor PariBrajika wishes to plan a tour from Kharagpur to Himalpur using Pushpak Travels. There are K tourist locations serviced by Pushpak Travels, numbered from 1 to <b>K</b>, including Kharagpur (numbered 1) and Himalpur (numbered <b>K</b>).</p>
<p>It is only possible to travel directly from some locations to some other locations. For any pair of locations for which direct travel is possible, the travel from the originating city can start only at some specific time intervals of the day and the travel time depends on the starting time interval from the originating city because of different reasons such as vehicle type availability, traffic, and other environmental conditions. We will refer to each such 5-tuple &lt;<i>u,v,s,f,t</i>&gt; where <i>u</i> is the originating location, <i>v</i> is the destination location, <i>s</i> and <i>f</i> are the start and finish of a time interval within which travel can start at <i>u</i>, and <i>t</i> is the travel time in hours from <i>u</i> to <i>v</i> when starting within the closed interval <i>[s,f]</i>, as a route. The elements <i>s</i> and <i>f</i> are specified as hours of the day, in 24-hour format (i.e. 0 to 23). For a particular origin-destination pair, you can assume that all intervals specified are non-overlapping. You can also assume that the routes are such that even with the above constraints, it is possible to reach Himalpur from Kharagpur passing through 0 or more of the other locations.</p>
<p>Professor PariBrajika cannot travel continuously without rest. The number of hours she can travel continuously without rest is equal to the "energy credit" she has. She can earn an energy credit of 1 hour for every hour of rest she takes (rest can be taken in integer multiples of hours only). However, she can rest only at any of the tourist locations. She spends an energy credit of 1 hour for every hour she travels. She may decide to rest any time irrespective of the energy credit she has (for example if no route is available for the current time or if a future route will enable her to reach Himalpur earlier through some other path). In that case, she has unspent energy credit left and can accumulate further energy credit. Energy credits can be accumulated cumulatively during the journey, subject to a maximum of 6 hours worth of travel time. Therefore, she cannot travel for more than 6 hours continuously in any case after the last recharge.</p>
<p>If Professor Paribrajika can leave Kharagpur anytime after midnight (t ≥ 0), find the earliest time, expressed as the total number of hours elapsed since t=0 (midnight), at which Professor PariBrajika can reach Himalpur. Assume that at the start of the journey she is fully rested and is good to go for 6 hours (i.e., has energy credits of 6 hours).</p>
<h3>Input</h3>
<p>The first line contains the number of test cases, <b>N</b> (0 &lt; <b>N</b> ≤ 3).</p>
<p>For each test case, the first line contains the number of locations <b>K</b> (0 &lt; <b>K</b> ≤ 500), and the total number of routes <b>M</b> (0 &lt; <b>M</b> ≤ 10000). This is followed by <b>M</b> lines, with each line containing the information of a single route, specified by five integers <i>u, v, s, f, t</i> (in this order with one or more space between two successive integers). The integers correspond to the 5-tuple <u t> as described earlier (1 ≤ <i>u, v</i> ≤ <b>K</b>, 0 ≤ <i>s, f ≤ 23, s &lt; f, t &gt; 0</i>).</u></p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the earliest time in hours from the time <b>t=0</b> to reach Himalpur.</p>
<h3>Sample Input</h3>
<pre>
2 
3 3 
1 2 0 2 3 
2 3 3 6 6 
2 3 7 12 6 
5 10 
1 2 0 2 5 
1 2 3 23 6 
2 3 0 4 3 
2 3 5 8 1 
2 3 9 23 2 
3 4 0 10 5 
3 4 11 14 6 
3 4 15 23 5 
4 5 0 2 2 
4 5 3 23 6
</pre><h3>Sample Output</h3>
<pre>
Case 1: 12
Case 2: 26
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
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>