<?php require("../../includes/header.php"); ?><h1>Best Buggy Ratings</h1><div class="content">

<p align="justify">A rating system for cricket players is built by Mr.Bugs Bunny and as expected, it has lot of bugs. The initial ratings of N players  ( numbered 0 to N-1 ) are given and we refer it as array V<sub>0</sub>. The system is expected to answer simple queries of the form, find the top-2 maximum ratings among players from i to j ( inclusive ). Top-2 maximum means the first two elements of the ratings sorted in non-increasing order.<br />
Due to bugs in the system, an unexpected update occurs after output of each query and this creates a new version of the ratings array V. We refer the Kth version of the ratings arrays as V<sub>K</sub>. Also, for a query, the system queries on some previous version of V. Mr. Bunny gave the exact details of the bugs as follows,</p>
<p>Given Q queries numbered 1 to Q in order and values of A B C D M,</p>
<ul>
<li>For a query number K, the query is made on the array V<sub>t</sub> , where t = ( A * R1 + D ) % K, and R1 is the maximum rating in the query range of the previous query. For the first query, consider R1 = 0.
</li>
<p></p>
<li>For a query number K, let R1 and R2 be the top-2 maximum ratings ( R1 ≥ R2 ). After it outputs this answer, the system changes the rating of a player. Specifically, the rating of player number ( B * R1 + D ) % N is changed to ( C * R2 + D ) % M. This update is on the array V<sub>(K-1)</sub> and a new version V<sub>K</sub> is created.
</li>
</ul>
<p>
</p>
<p align="justify">You can not fix these bugs, but can you guess the output produced by this system. For more clarity, check the pseudo code below.</p>
<pre>
read array V<sub>0</sub>;
R1 = 0, R2 = 0;
for K = 1 to Q
     t = ( A * R1 + D ) % K
     read qi qj
     R1, R2 = top-2 Maximum ratings in range [qi..qj] in the array V<sub>t</sub>
     Output R1 R2
     V<sub>K</sub> = Update array V<sub>(K-1)</sub> by changing V<sub>(K-1)</sub> [ ( B * R1 + D ) % N ] = ( C * R2 + D ) % M
end-for
</pre><p>
<u>Note:</u> Take care of potential overflows in intermediate calculations in the equations mentioned above. The authors algorithm doesn't depend on the values of A B C D M, they are just used to generate some values.<br />
</p>
<h3>Input</h3>

<p align="justify">First line contains 6 integers N M A B C D and the second line contains N integers, the initial ratings of N players in order ( 2 ≤ N, A, B, C, D ≤ 100,000 ;  0 ≤ V<sub>0</sub>[i] , M &lt; 1,000,000,000 ; M ≥ 2 ). Next line contains Q ( number of queries 1 ≤ Q ≤ 100,000 ), followed by Q lines. The Kth line in this has the query number K, and has two integers qi qj ( 0 ≤ qi &lt; qj &lt; N ).</p>
<h3>Output</h3>

<p align="justify">For each query, output the top-2 maximum ratings R1 R2 ( R1 ≥ R2 ) in a new line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6 1000 2 2 2 2
1 2 3 4 5 6
4
0 5
0 3
1 3
2 5

<b>Output:</b>
6 5
4 3
12 4
12 8
</pre><p>
<br />
<b>Explanation:</b></p>
<p>V<sub>0</sub> = { 1, 2, 3, 4, 5, 6 }</p>
<p>1.) t = 0 --&gt; top-2 max of V<sub>0</sub>[0..5] =  6 ,  5<br />
Updating V<sub>0</sub>[2] with 12<br />
V<sub>1</sub> = { 1, 2, 12, 4, 5, 6 }</p>
<p>2.) t = ( A(=2) * R1(=6) + D(=2) ) % 2 = 0 --&gt; top-2 max of V<sub>0</sub>[0..3] =  4 ,  3<br />
R1 = 4, R2 = 3<br />
Updating index = ( B(=2) * R1(=4) + D(=2) ) % N(=6) = 4 with value =  ( C(=2) * R2(=3) + D(=2) ) % M(=1000) = 8<br />
V<sub>2</sub> = { 1, 2, 12, 4, 8, 6 }</p>
<p>3.) t = 1 --&gt; top-2 max of V<sub>1</sub>[1..3] =  12 , 4<br />
Updating V<sub>2</sub>[2] = 10<br />
V<sub>3</sub> = { 1, 2, 10, 4, 8, 6 }</p>
<p>4.) t = 2 --&gt; top-2 max of V<sub>2</sub>[2..5] =  12 , 8<br />
Updating V<sub>3</sub>[2] = 18<br />
V<sub>4</sub> = { 1, 2, 18, 4, 8, 6 }</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/maksflow">maksflow</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-04-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 - 9 sec</td>
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