<?php require("../../includes/header.php"); ?><h1>Carvans</h1><div class="content">

<p style="text-align:justify">Most problems on CodeChef highlight chef's love for food and cooking but little is known about his love for racing sports. He is an avid Formula 1 fan. He went to watch this year's Indian Grand Prix at New Delhi. He noticed that one segment of the circuit was a long straight road. It was impossible for a car to overtake other cars on this segment. Therefore, a car had to lower down its speed if there was a slower car in front of it. While watching the race, Chef started to wonder how many cars were moving at their maximum speed.</p>
<p style="text-align:justify">Formally, you're given the maximum speed of N cars in the order they entered the long straight segment of the circuit. Each car prefers to move at its maximum speed. If that's not possible because of the front car being slow, it might have to lower its speed. It still moves at the fastest possible speed while avoiding any collisions. For the purpose of this problem, you can assume that the straight segment is infinitely long.</p>
<p style="text-align:justify">Count the number of cars which were moving at their maximum speed on the straight segment.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains a single integer T denoting the number of test cases to follow. Description of each test case contains 2 lines. The first of these lines contain a single integer N, the number of cars. The second line contains N space separated integers, denoting the maximum speed of the cars in the order they entered the long straight segment.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output a single line containing the number of cars which were moving at their maximum speed on the segment.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1
10
3
8 3 6
5
4 5 1 2 3

<b>Output:</b>
1
2
2
</pre><h3>Constraints</h3>
<p>
1 ≤ T ≤ 100<br />
1 ≤ N ≤ 10,000<br />
All speeds are distinct positive integers that fit in a 32 bit signed integer.<br />
Each input file will not be larger than 4 MB (4,000,000,000 bytes) in size.
</p>
<p style="text-align:justify"><b>WARNING!</b> The input files are very large. Use faster I/O.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/yellow_agony">yellow_agony</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-09-2012</td>
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