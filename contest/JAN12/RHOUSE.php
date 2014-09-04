<?php require("../../includes/header.php"); ?><h1>Houses and Restaurants</h1><div class="content">

<p>There is a city where people are fond of visiting restaurants. In fact, any building in this town is either a house or a restaurant. There are N buildings in the city and they are conveniently numerated by integer numbers from 1 to N. To move from some building to others there are M two-way roads. Each road connects two buildings. It is possible that there are several roads that connect the same pair of buildings, but there won't be a road that connects a building to itself. Chef wants to make the ways to his restaurants more interesting. To do that he is going to decorate some roads. Each road has its own integer cost of decorating. Some costs may be negative. If the cost is negative Chef will get some reward for decorating this road. Now Chef doesn't have much money so he wants to decorate roads in such a way that from each house, at least one restaurant is reachable using only decorated roads. The total cost of decorated roads should be minimal. So, your task is to help him to calculate the minimal cost of any satisfactory subset. It might be negative if Chef's rewards for decorating some roads are greater than his spent money.</p>
<h3>Input</h3>

<p>There first line of input contains an integer T - the number of test cases.<br />
Then T test cases follow.<br />
For each test case there will be integers N and M - the number of buildings and the number of roads.<br />
Then a string of N letter follows. I-th symbol of this string is "R" if the corresponding building is a restaurant and "H" if it is a house.<br />
Then there are M lines. Each line consists of three integers - X<sub>i</sub> Y<sub>i</sub> Z<sub>i</sub>. They describe a road that connects buildings X<sub>i</sub> and Y<sub>i</sub> with the cost of decorating equal to Z<sub>i</sub>.</p>
<h3>Output</h3>

<p>For each test case output the minimal cost of any satisfactory subset of roads.</p>
<h3>Constraints</h3>
<p>2&lt;=N&lt;=100000<br />
1&lt;=M&lt;=400000<br />
-20000&lt;=Z<sub>i</sub>&lt;=20000<br />
Sum over all N in a single input file will not exceed 200000.<br />
Sum over all M in a single input file will not exceed 400000.<br />
It is guaranteed that you can reach every building from any other building.<br />
There is at least one resturant in the city.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

3
3 5
HHR
1 2 3
1 2 5
1 3 10
3 2 -1
3 1 7
2 2
RR
1 2 1
2 1 2
3 3
HRR
1 2 1
1 3 2
2 3 3

<b>Output:</b>
2
0
1
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-11-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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