<?php require("../../includes/header.php"); ?><h1>Rendezvous</h1><div class="content">

<p>
There are N cities in Byteland numbered 1 to N with city 1 as the capital. The road network of Byteland has a tree structure. All the roads are bi-directional. Alice and Bob are secret agents working for the Bytelandian Security Agency (BSA). Each secret agent is assigned a random city each month, where he/she must be stationed for the complete month. At the end of each month, they come to the capital to submit their reports to the head of BSA. They always take the shortest path from their city to the capital. If Alice is assigned city A and Bob is assigned city B then they meet at a city C which is common to both their routes to the capital and then travel together from C to the capital.</p>
<p>Alice and Bob wish to spend maximum time together in any trip. So for any pair of assigned cities (A,B) they meet at a city C such that C is the farthest city from the capital and appears in the shortest path from capital to A and capital to B. Since this happens each month they compute this for each pair of assigned cities (A,B) and store it in a matrix M, where M[A][B] = C, the city where they meet.
</p>
<p>The importance of a city C(according to Alice and Bob), Im(C) is defined as the number of times C appears in their matrix M. Alice and Bob are interested in finding the importance of each city. Since this output can be large, output the sum S defined as S = (sum i=1 to N) i*Im(i) modulo 1000000007.
</p>
<h3>Input</h3>
<p>First line of input contains an integer t (t&lt;=25), the number of test cases. Each test case starts with an integer N (1&lt;=N&lt;=10000), the number of cities<br />
The next N-1 lines contain two space separated integers u v (1&lt;=u,v&lt;=N) denoting a road from u to v.</p>
<h3>Output</h3>
<p>For each test case output the required sum S
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5
1 2
1 3
2 4
2 5
3
1 2
1 3
1

<b>Output:</b>
41
12
1

<b>Explanation</b>
For the first test case, the matrix M is:
1 1 1 1 1
1 2 1 2 2
1 1 3 1 1
1 2 1 4 2
1 2 1 2 5

and the corresponding importance array is: 15 7 1 1 1 
so the required sum is 1*15 + 2*7 + 3*1 + 4*1 + 5*1 = 41
<p>For the second test case, the matrix M is:
1 1 1
1 2 1
1 1 3
and so the Importance array is: 7 1 1 
So the required sum is 1*7 + 2*1 + 3*1 = 12
</p>
<p>For the third test case, there is only one city, so the Matrix M just has one entry 1, so S = 1
</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/akhilravidas">akhilravidas</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/keshav_57">keshav_57</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-04-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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