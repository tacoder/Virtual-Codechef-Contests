<?php require("../../includes/header.php"); ?><h1>FreeKart Map</h1><div class="content">
<p> </p>
<p>FreeKart Company is connected to n cities numbered from 1 to n. Currently the Headquarter of company is situated at index hq1. Each pair of connected cities are connected both ways. The connection is such that there is exactly one connection from the Headquarter to each city. The map of the connected cities is kept in the following way: for each city i, different from the Headquarter, there is kept number ci — index of the last city on the way from the Headquarter to i.<br />
<br /><br />
The company decided to move the Headquarter from city hq1 to city hq2. So, after this change the old representation of the map as described above became incorrect. Please, help the company to find out a new map in the way described above.</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains the number of test cases(0 &lt; T &lt;= 10 ). The next line contains three space-separated integers n, hq1, hq2 (2 ≤ n ≤ 2*10^4, 1 ≤ hq1 ≠ hq2 ≤ n) — number of connected cities, index of the old Headquarter and index of the new Headquarter, respectively.<br />
<br /><br />
The following line contains n - 1 space-separated integers — the old representation of the map. For each city, other than hq1, there is given integer ci — index of the last city on the way from the Headquarter to city i. All the cities are described in order of increasing indexes.
</p>
<p> </p>
<h3>Output</h3>
<p>Output n - 1 numbers — new representation of the map in the same format.
</p>
<h3>Example</h3>
<pre>
Input
1
3 2 3
2 2

Output
2 3 

Input
1
6 2 4
6 1 2 4 2

Output
6 4 1 4 2
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/harshg0910">harshg0910</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.1 sec</td>
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