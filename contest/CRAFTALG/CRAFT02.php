<?php require("../../includes/header.php"); ?><h1>Destroy the Enemy</h1><div class="content">

<p>A war is going on between two countries. You are the military head and got information from intelligence about the positions of the enemy troops.  You have the missiles and when they hit the target they create a destruction in a region of radius D. Assume that the y coordinate of all the troops is same and have different x co-ordinates as x1,x2, …xi,…xn. Also assume that all troops are in the range of our missile and the missile can only be targeted to one of the troops.<br />
You need to destruct the enemy force by using minimum number of missiles.</p>
<h3>Input</h3>

<p>The input test file will contain multiple cases. Each test case begins with a single line containing an integer D, the maximum effective range of all missiles (where 0 ≤ D ≤ 100), and an integer n, the number of troops of the enemy (where 1 ≤ n ≤ 100). The next line contains n integers, indicating the positions x1,x2, …xi,…xn of each troop (where 0 ≤ xi ≤ 100). The end-of-input is marked by a test case with D = n = −1.</p>
<h3>Output</h3>

<p>For each test case, print a single integer indicating the minimum number of missiles needed.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
0 3
10 20 20
10 7
70 30 1 7 15 20 50
-1 -1


<b>Output:</b>
2
4

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aman871988">aman871988</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-03-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>30 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, C, C99 strict, CAML, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, GO, HASK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>