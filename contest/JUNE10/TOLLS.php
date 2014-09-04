<?php require("../../includes/header.php"); ?><h1>Pricing Tollbooths</h1><div class="content">

<p>
Your company has recently built its own highway from which they hope to generate some revenue. The highway has no branches or intersections, it is a simple line segment. Your company also has access to simple data from some potential customers that describe their start and endpoint locations and their budget.</p>
<p>
Tollbooths are also located on various locations on the highway.  The total toll a customer pays is the sum of all tolls on the tollbooths that lie between their start and end locations. If a customer cannot afford the total toll they must pay, then they simply don't make the trip and end up paying nothing.</p>
<p>
No customer wants to start or end their destination at the precise location of a tollbooth so we can represent the problem as follows. We have a graph that is a simple path with N nodes. Each node represents a potential start or end location of a customer and there is a single tollbooth located on the middle of each edge.  So the total toll a customer pays is the sum of the tolls on the edges they cross to reach their endpoint.</p>
<p>
Your task is to set the tolls on each of the tollbooths to generate some revenue for your company.</p>
<h3>Input:</h3>
<p>The first line contains an integer T (about 40) indicating the number of test cases.</p>

<p>
Each test case begins with two positive integers N and M (both at most 100) where N is the number of nodes in the graph and M is the number of potential customers. M lines follow where the i'th line contains the information of the i'th client.</p>
<p>
Each such line consists of three integers S, E, B where 1 &lt;= S,E &lt;= N are, respectively, the start and end locations<br />
of the customer and 1 &lt;= B &lt;= 1,000,000 is the customer's budget.</p>
<p>
A blank line separates test cases (as well as the first line containing T and the first test case).</p>
<h3>Output:</h3>
<p>For each test case, you are to output a single line consisting of N-1 integers, each of which is between 0 and 1,000,000. The i'th integer (1 &lt;= i &lt;= N-1) denotes the toll placed on the edge connecting nodes i and i+1.</p>
<h3>Scoring:</h3>
<p>From the output, we will calculate the total revenue obtained from all customers who can afford the total toll on their route according to the prices you set.  The score for each test case is then calculated as R/T where R is the revenue obtained and T is the total budget of all customers. The score for the entire set of test cases is just the sum of the scores of each individual test case.</p>
<h3>Example:<br />
Input:</h3>
<pre>
2

3 3
1 2 10
2 3 10
1 3 10

4 3
1 2 10
2 3 10
1 4 15
</pre><h3>Output:</h3>
<pre>
5 5
10 10 0
</pre>
<p>
In the first test case, the first two customers only pay a total toll of 5 and the last customer pays 10 so the total revenue is 20.  The score for this case is 20/30.</p>
<p>
In the second case, the first two clients pay their full budget but the last client cannot afford the desired route.  The total revenue is then 20 and the score for this case is 20/35.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-04-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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