<?php require("../../includes/header.php"); ?><h1>Super-plane</h1><div class="content">

<p> Dunno was invited by Roly-Poly to his birthday party. But he don't know how to get to Roly-Poly. So Dunno turned for advice to Doono. Doono reminded him that their country of shorties have a network of super-planes airlines, which can move not only in space but also in time. Thanks to a super engine, developed by Doono and constructed by Bendum and Twistum, such aircraft, flying from one city could get to the other even before they departed.
</p>

<p> Dunno rejoiced and rushed into the super-airport. Not thinking through his route, Dunno began to fly at super-planes aimlessly, i.e. boarded the next flight out of that city, where he was. Dunno flies until he reaches the city where Roly-Poly lives not later than the start time of the birthday party, or until it reaches a certain city, where no longer be able to fly away. The closest flight is a flight in the same city, for which the departure time is not less than the arrival time of Dunno in this city, and the difference between these time points is minimal.
</p>

<p> Write a program, that determines whether Dunno ever gets to Roly-Poly given the schedule of the super-plane flights. If he gets the party in time then find also the number of flights he uses.</p>
<h3>Input</h3>

<p> The first line contains a single positive integer <b>T &lt;= 10</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains the number of available flights <b>N (0 &lt;= N &lt;= 10000) </b>. Each of the following <b>N</b> lines contains 4 space-separated integers <b>C<sub>1</sub>, T<sub>1</sub>, C<sub>2</sub>, T<sub>2</sub></b>, where <b>C<sub>1</sub></b> is the departure city, <b>T<sub>1</sub></b> is departure time, <b>C<sub>2</sub></b> is the destination city, <b>T<sub>2</sub></b> is arrival time. It is guaranteed that there are no flights with the same departure city and time. The last line of each test case contains the city where Dunno lives, the time when he came to the super-airport, the city where Roly-Poly lives and the time when the birthday party starts. All city numbers are positive integers not greater than <b>10000</b> and all time points are not greater than <b>100000</b> in absolute value.</p>
<h3>Output</h3>

<p>
For each test case, output a single line containing the word <b>"Yes"</b> followed by space and the number of flights that the Dunno uses if he gets the Roly-Poly birthday party in time and <b>"No"</b> otherwise.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3
1 3 4 3
4 4 3 5
3 10 2 -1
1 2 2 0
1
1 2 3 0
1 2 2 2
2
2 0 2 0
2 1 4 0
2 0 4 0

<b>Output:</b>
Yes 3
No
No
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-06-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>