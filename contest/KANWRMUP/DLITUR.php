<?php require("../../includes/header.php"); ?><h1>Delhi Tour</h1><div class="content">

<p>Delhi tour operators offer attractive tour options with low cost tickets. Tickets are </p>
<p>made available to interested tourists for visits to tourist spots in the city, following </p>
<p>certain routes, under certain conditions. </p>
<p>The conditions are illustrated through some examples. A ticket to visit Spot-1, then </p>
<p>Spot-2 and then Spot-3, does not allow a tourist to use only the portion of the ticket for </p>
<p>visiting Spot-2 first and then Spot-3. A tourist must always start at the first spot </p>
<p>mentioned on the ticket. In addition, tourists are not allowed to utilize the ticket to </p>
<p>visit Spot-1 and Spot-2 in order, have a break to visit other spots using different </p>
<p>tickets and on return to Spot-2 continue visit from Spot-2 to Spot-3 using the same </p>
<p>ticket. Suppose three types of tickets are available: </p>
<p>Ticket #1: Spot-1 to Spot-3 to Spot-4 at a cost of Rs225<br />
Ticket #2: Spot-1 to Spot-2 at a cost of Rs200<br />
Ticket #3: Spot-2 to Spot-3 at a cost of Rs50<br />
For a tourist having a plan to visit Spot-1 and then Spot-3 there are two options of </p>
<p>tickets: </p>
<p>Have Ticket #1 for Rs225 and use it only for the first leg of the ticket.<br />
Have Ticket #2 for Rs200 and Ticket #3 for Rs50. </p>
<p>Obviously, for the specified plan, the first option has the minimum cost of tickets.<br />
Given a set of ticket options, and one or more visit plans, you must determine, for each </p>
<p>visit plan, the minimum cost of tickets.</p>
<h3>Input</h3>
<p>Input consists of multiple test cases.<br />
Each case begins with a line containing T, the number of ticket options, followed by T </p>
<p>options, one to a line. Each option consists of a positive integer specifying the cost of </p>
<p>the ticket, the number of tourist spots in the ticket's route, and then that many spots. </p>
<p>Each spot in a case has an arbitrary, but unique, integer identification number.<br />
The next line contains P, the number of plans for which the minimum cost of tickets is to </p>
<p>be found. P lines follow, giving the route for each plan. Each line consists of the number </p>
<p>of spots in the plan (including the starting spot) followed by that many spot </p>
<p>identification numbers, given in the order they are to be visited.<br />
There will be no more than 20 ticket options or 20 visit plans in a test case. Each ticket </p>
<p>option and visit plan lists from 2 to 10 spots. No ticket cost exceeds Rs5000. Adjacent </p>
<p>spots in a route or plan will be distinct. Options and plans are numbered sequentially in </p>
<p>each set, starting with 1.<br />
The last case is followed by a line containing a zero. </p>
<h3>Output</h3>
<p>For each visit plan, output one line containing the case number, the plan number, the </p>
<p>minimum cost of the plan, and the numbers of the ticket options used for the plan, in the </p>
<p>order they will be used. Follow the output format shown below. The output will always be </p>
<p>unique. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 
225 3 1 3 4 
200 2 1 2 
50 2 2 3 
1 
2 1 3 
3 
100 2 2 4 
100 3 1 4 3 
200 3 1 2 3 
2 
3 1 4 3 
3 1 2 4 
0


<b>Output:</b>
1 1 225 1
2 1 100 2
2 2 300 3 1

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2011</td>
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