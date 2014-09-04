<?php require("../../includes/header.php"); ?><h1>Race</h1><div class="content">

<p>Pacific Club is organizing a boat race. Participants from all around the world has arrived to participate in this event. All participating team must have exactly 3 members to be eligible to take part in the race. Only a single shaft is provided to each team. The strength of participants differ to a great extent. Some participants can drive the boat at more speed than other using the shaft. Let say for a team T, one of the member M1 has ability to drive at speed C1, M2 can drive at speed C2, M3 can drive at speed C3. Distance traveled in unit time by team T is C1 when M1 has the shaft. M1 get exhausted after unit time and passes the shaft to one of the other team member and atleast C1 time units rest is required by him before he can take the shaft again. Hence a team member gets exhausted in one unit time and needs a rest of x unit time after his turn ( x is the speed capacity of that member ). Assuming that team members are intelligent, they schedule their turns such that they finish their race in least possible time, based on the capacities of team members.</p>
<h3>Input</h3>
<p>1st line contains number of test cases.</p>
<p>1st line of each test case contains two integers, seperated by spaces, N D , where N=Number of teams, D= Distance to be covered.</p>
<p>1st line of each test case is followed by N lines, where ith line consist of three integers denoting the speed capacities of each team member of team i.</p>
<h3>Output</h3>
<p>Output minimum amount of time taken by the teams that finished first (precision up to 2 decimal points) and list of all the team numbers of the team that finished first ( in increasing order ).</p>
<h3>Constraints</h3>
<p>1&lt;=N&lt;=1000</p>
<p>1&lt;=D&lt;=50000</p>
<p> Speed capacity of each member will be within 1 to 20.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2 31
5 4 4
1 2 5

<b>Output:</b>
11.25 1

<p> Explanation : Team 1's one of the optimum order would be : 4 4 5 X X 4 4 X 5 X 4 4  
</p></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>5 sec</td>
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