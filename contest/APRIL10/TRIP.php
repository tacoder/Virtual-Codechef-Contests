<?php require("../../includes/header.php"); ?><h1>Trip</h1><div class="content">

<p>
You are starting out on a long (really long) trip. On the way, there are N gas stations, the locations of which are given as a_1,a_2,...,a_N. Initially you are located at the gas station at a_1, and your destination is at location a_N. Your car can only store enough fuel to travel atmost M units without refilling. You can stop at any station and refill the car by any amount. Now you wish to plan your trip such that the number of intermediate stops needed to reach the destination is minimum, and also how many ways are there to plan your trip accordingly.</p>
<h3>
Input :<br />
</h3>
<p>The first line two space seperated integers N and M. N lines follow, and the ith line has the value a_i (0 &lt;= a_i &lt;= 1000000000). The input will be such that a solution will always exist.</p>
<h3>
Output :<br />
</h3>
<p>Output two space seperated integers : The least number of stops, and the number of ways to plan the trip which uses the least number of stops. Output this value modulo 1000000007.</p>
<h3>
Sample Input :</h3>
<pre>
6 3
0
1
3
4
7
10
</pre><h3>
Sample Output :</h3>
<pre>
3 2
</pre><h3>
Constraints :</h3>
<pre>
2 &lt;= N &lt;= 1000000
1 &lt;= M &lt;= 1000
a_1 &lt; a_2 &lt; .. &lt; a_N

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/syco">syco</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>