<?php require("../../includes/header.php"); ?><h1>Graph Challenge</h1><div class="content">

<h3> Statement </h3>
<p>
	You are given a modified graph with  N vertices and M edges. Each vertex is a rectangle [ dimension of each vertex may be different ] . Your task is to place these vertices in 2-d space such that : </p>
<ul>
<li> No two vertices overlap [ remember, they are rectangles  ] </li>
<li> All rectangles have their sides parallel to the axis. </li>
<li> Rectangles cannot be rotated. </li>
</ul>
<p></p>
<p> For every edge in the graph, add the manhattan distance between the centres of the vertex for each edge as the cost of a solution ( C ). <br />
Now, there might be multiple ways to achieve this. So, you have to strive to keep C as low as possible. </p>
<h3> Input </h3>
<p> First line contains t ( ≤ 100 ) equal to the number of test cases. For each test case, the first line contains 2 space separated integers ( N and M respectively ). Then M lines follow, each line containing 2 integers x and y ( 0 ≤ x,y &lt; N , x ≠ y ) denoting an edge between vertex x and y. Then follow N lines, where line  number i contains 2 integers a and b denoting the dimension of the ith vertex [ Here, a denotes the length parallel to x-axis and b denotes the length parallel to y-axis ] </p>
<p>( <b> Note </b> : If the same pair x,y appears multiple times, it denotes multiple edges and hence, each pair contributes to the cost ). </p>
<p><b> NOTE : </b> Please note that all solutions will be tested on another set of test data <b> after the contest </b> which will follow the same pattern for test case generation ( as mentioned in 'Test Case Generation' section ).  <b>The final score for a solution will be the score of solution on latter test data. </b> </p>
<h3> Output </h3>
<p>
For each test case, print N lines , each containing 2 floating point numbers X and Y, denoting the co-ordinates of the centre of vertex i. <br /> <br />
<b> Note </b> : -10<sup>9</sup> ≤ X,Y ≤ 10<sup>9</sup> . Solutions not following the mentioned constraints will be adjudged as wrong answer. <br />
<b> Please note that the answers may not be optimal </b></p>
<h3> Scoring </h3>
<p> The Score for a solution  = (C+1). <br />
Your total score is the sum of your score for all the test cases. <br />
You have to keep the score as low as possible. </p>
<h3> Constraints </h3>
<p>
2 ≤ N ≤ 50 <br />
1 ≤ M ≤ 200 [ The edges are randomly generated ] <br />
1 ≤ a,b ≤ 100000  <br />
There can be multiple edges between a pair of vertices.<br />
Additionally for 50% of the cases 2 ≤ N ≤ 20. Also, for about 50% of cases, all vertices are squares [ a = b ] of same size. </p>
<h3> Test Case Generation </h3>
<p>
There are about 100 cases in total. For first 50 cases, the number of vertex ( n ) is chosen as a random number in the interval [3,20]. The number of edges (m) is chosen as a random number in the range [2, n*(n-1)/2]. Then all edges are chosen as random pair of integers. All vertex are given the same dimension with the probability 0.5 else they are given a random dimension in [1,100000] * [1,100000]. <br />
For other 50 cases, n is chosen as a random integer in the interval [3,50]. m is chosen randomly from [2, min( n*(n-1)/2, 200) ]. Rest of the procedure remains the same.  </p>
<h3> Sample Input </h3>
<p></p>
<pre>
1
2 1
0 1
2 2
2 2
</pre><h3> Sample Output </h3>
<p></p>
<pre>
2 2
10 3
</pre><p></p>
<p><b>Score for sample output</b> : 10.0  ( Better answers may be possible ) </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anshuman_singh">anshuman_singh</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>20 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>