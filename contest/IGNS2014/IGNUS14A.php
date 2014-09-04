<?php require("../../includes/header.php"); ?><h1>Search For Treasure</h1><div class="content">
<p>You are moving from cities to cities in search of a treasure. There are N cities numbered from 0 to N-1.<br />
Initially you are at city no. 0 and Treasure you are looking for is at city number N-1.<br />
Each city is connected to two cities directly except for city number 0 and city number N-1 wich are connected to only one city directly.<br />
0--&gt;1--&gt;2--&gt;3--&gt;4........--&gt;N-1<br />
As the journey from a city to another city is tiring you can pass at maximum d-1 cities without stopping.<br />
For eg. if you are at city 0 and d is 3 then you can move from 0 to 3 without stopping at city 1 or city 2.<br />
If you stop at any city you have to pay a certain amount of money M[i] to that city which varies from city to city.<br />
Given money required to pay for stopping at each cityy our task is to reach city number N-1 from city number 0 by spending minimum amount of money possible.<br />
Remember You can only start from city 0 if you pay the amount that should be paid to city 0. As you have to reach city N-1, you have to stop there, so you will have to pay the respected amount.
</p>
<p> </p>
<h3>Input :</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>On the first line of every test case is given two space separated integers N and d.The next n lines that follow have positive integers &lt;= 1000, representing the money to be paid at each city. These lines are listed, in order, from start to end city.
</li>
</ul>
<h3>Output :</h3>
<ul>
<li>For each test case, output a single line containing.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>5000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 1
1
1
12 3
1
4
2
6
5
1
1
8
7
3
1
2

<b>Output:</b>
2
10
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cdev">cdev</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-01-2014</td>
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