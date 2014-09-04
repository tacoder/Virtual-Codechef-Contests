<?php require("../../includes/header.php"); ?><h1>Future Wars</h1><div class="content">

<p>In a distant future, the world has reduced down to very few cities, all hostile to each other. So much so, that each city built its own roads to other cities, if needed and <b>these roads were one way roads.</b> </p>
<p>No one dares to walk on someone else's and even though teleportation is possible, the dangers involved are too great for anyone to risk their lives.</p>
<p>With time, however, certain cities became allies and certain blocks were formed. Within each block, trade was possible between any two cities by road but teleportation was used to reduce the travelling time to zero.</p>
<p>Bilbo wants to reach a city 'D' (destination) and he's at city 'S' in the shortest time possible. However, Bilbo has a map that's a few years old and represents the travelling time between two cities before the blocks described above were formed.</p>
<p>Your job is to find what the actual minimum possible time to travel from a city S to a city D for Bilbo.</p>
<h3>Input</h3>
<p>The first line of input will consist of two integers n and q. n represents the number of cities in the old map and q is the number of queries.
</p>
<p>The next few lines of the input consist of 3 integers, i, j, k, which represents a one way road from city i to city j with travelling time of k. The roads information ends with an input of -1   -1   -1.</p>
<p>The next q lines contain 2 integers s   d. s represents the source city and d represents the destination city.</p>
<h3>Output</h3>
<p>For each query you have to output a single line containing an integer denoting the minimum time possible between the two cities.</p>
<p>If no path is possible between the two cities, output “Unreachable” (quotes only for clarity).</p>
<h3>Constraints</h3>
<p>2 &lt;= n &lt;= 50</p>
<p>0 &lt;= i, j &lt; n</p>
<p>1 &lt;= k &lt;= 100000</p>
<p>1 &lt;= q &lt;= 100000</p>
<p>0 &lt;= s, d &lt; n</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6 5
0 1 2
1 2 10
0 3 9
4 5 2
4 1 15
2 4 20
3 4 8
-1 -1 -1
0 1
0 5
3 4
0 3
4 5
<b>Output:</b>
2
4
8
9
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/troika_bytes13">troika_bytes13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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