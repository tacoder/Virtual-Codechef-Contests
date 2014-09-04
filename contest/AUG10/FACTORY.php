<?php require("../../includes/header.php"); ?><h1>Optimizing Production and Sales</h1><div class="content">

<p>
Your boss at the gadget company has recently asked you to help optimize operating costs.<br />
Your company is in charge of both manufacturing and selling  their world-famous gadgets.<br />
Currently, there are a number of factories open in various locations around the world and<br />
each store receives their gadgets from precisely one factory.</p>
<p>
Each factory has an associated operating cost and the cost of supplying a store from a<br />
factory is proportional to the distance between the store and factory. Your job is to close<br />
some factories and assign an open factory to each store. The cost of such an assignment<br />
is the sum of the factory operating costs of the open factories plus the total cost of assigning each<br />
store to a factory. Of course, your objective is to find a cheap solution.</p>
<p>
To reiterate, each store must be supplied by exactly one open factory and each factory<br />
may supply any number of stores. The operating cost of the factory does not depend<br />
on how many stores it is supplying.</p>
<h3>Input</h3>

<p>
The first line contains a single integer T &le; 30 indicating the number of test cases to follow.<br />
The first line of each test case consists of two integers F and S, each between 1 and 100,<br />
where F is the number of<br />
factories and S is the number of stores. The next line contains F non-negative floating point<br />
values where the i'th value is the operating cost of factory i.<br />
The next S lines contain F non-negative floating point values where the i'th value on the j'th<br />
line is the cost of supplying store j with factory i.</p>
<p>
Since the cost of supplying a store by a factory is proportional to the distance between the<br />
store and factory, you may assume that a sort of triangle inequality holds. Say d[j,i] is the<br />
cost of supplying store j from factory i. Then for any two stores j,j' and any two factories i,i'<br />
we have d[j,i] &le; d[j,i'] + d[j',i'] + d[j',i]. To say it plainly, the shortest<br />
distance between store j and factory i is the direct route.</p>
<p>
All floating point values are between 0 and 1000000 and contain at most two points of precision.<br />
Consecutive test cases are separated by a blank line including a blank line immediately preceding<br />
the first case.</p>
<h3>Output</h3>

<p>
For each test case you are to output two lines. The first line consists of F values, each either 0 or 1.<br />
If the i'th value is 1 then factory i is open and if the i'th value is 0 then factory i is closed.<br />
The second line consists of S values, each between 1 and F. Here, the j'th value is the index of<br />
an <b>open</b> factory from which store j is supplied.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

3 3
1 2.5 3
3 1.7 1.5
1 2.1 1.2
2.1 1.4 2

2 3
0 15
4 0
4 0
4 0

<b>Output:</b>
1 0 1
3 1 1
1 0
1 1 1
</pre><h3>Scoring</h3>

<p>
For each test case, let K be the cost of the solution that keeps all factories open and assigns<br />
each client to any nearest factory (i.e. the current cost of manufacturing and supplying gadgets<br />
before your, hopefully cheaper, solution is applied). We will compute the cost of your solution,<br />
say L, and assign a score of L/K to the test case (we guarantee K &gt;= 1 for each test case).<br />
The final score is then the sum of the scores for each test case. The goal is, of course, to minimize<br />
the total score.</p>
<p>
For example, the first test case has of K = (1 + 2.5 + 3) + (1.5 + 1 + 1.4) = 10.4 (the first set of parenthesis<br />
contains the cost of the factories and the second contains the cost of assigning stores to their cheapest factory).<br />
The output solution has L = (1 + 3) + (1.5 + 1 + 2.1) = 8.6. Therefore, the score for the first test<br />
case is 8.6/10.4 = 0.826923. Similarly, the second test case has K = (0 + 15) + (0 + 0 + 0) and the solution<br />
output has L = 0 + (4 + 4 + 4) = 12 so the score is 12/15 = 0.8.</p>
<h3>Test Data</h3>
<p>Some of the test data is hand-crafted to make certain heuristics perform poorly and some of the test data is randomly generated according to different distributions.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/innocentboy">innocentboy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-07-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
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