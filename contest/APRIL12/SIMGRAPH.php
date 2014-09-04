<?php require("../../includes/header.php"); ?><h1>Similar Graphs</h1><div class="content">

<p>
Chef recently developed an affinity for undirected graphs.<br />
He likes pairs of graphs that are similar in structure.<br />
However, Chef discovered that when the vertices of a graph are reorganized, it's often the case that the resulting graph,<br />
although still structurally similar to the original, can look completely different.<br />
Chef wants you to help him find similarities in pairs of graphs.
</p>
<p>
Chef only considers pairs of graphs where each graph has the same number of vertices (say N).<br />
Chef then labels each vertex of each graph with an integer between 1 and N (inclusive),<br />
using each integer exactly once per graph.<br />
Chef then defines the similarity of the graphs as 2*COMMON/TOTAL, where COMMON is the number of<br />
edges appearing in both graphs<br />
(that is, the number of unordered pairs {A, B} such that in both graphs there exists an edge between the vertex labelled A<br />
and the vertex labelled B), and TOTAL is the total number of edges in both graphs.
</p>
<p>
Chef's measure of similarity depends on how the vertices are labelled.<br />
Chef wants you to help him find a labelling that maximizes the similarity.<br />
Optimal solutions are not required, but better solutions will earn more points.
</p>
<h3>Input</h3>
<p>
Input will begin with an integer T, the number of test cases.<br />
Each test case will begin with an integer N, the number of vertices in both graphs.<br />
2*N lines follow.  The first N lines describe the first graph, and the next N lines the second graph.<br />
Each graph description consists of N lines of N integers each.<br />
The i-th integer on the j-th line will be 1 if there is an edge between vertices i and j, and 0 otherwise.<br />
The i-th integer on the j-th line will always be equal to the j-th integer on the i-th line,<br />
and the i-th integer on the i-th line will always be 0.
</p>
<h3>Output</h3>
<p>
For each test case, output 2 lines with N integers each.<br />
Each line must contain a permutation of the integers 1 through N, and indicates how Chef should label the corresponding graph.
</p>
<h3>Scoring</h3>
<p>
Your score for each test case is the similarity of the 2 graphs using the labelling you provide.<br />
Your overall score is the average of your scores on the individual test cases.
</p>
<h3>Sample Input</h3>
<pre>2
3
0 1 0
1 0 0
0 0 0
0 0 1
0 0 1
1 1 0
4
0 0 1 0
0 0 0 0
1 0 0 1
0 0 1 0
0 0 1 1
0 0 0 0
1 0 0 0
1 0 0 0
</pre><h3>Sample Output</h3>
<pre>1 2 3
1 2 3
1 4 2 3
2 4 1 3

</pre><p>
This output would score 2*0/3 = 0.0 on the first test case, and 2*2/4 = 1.0 on the second test case, for an overall score of 0.5.<br />
Note that better scores are possible.
</p>
<h3>Test case generation</h3>
<p>
For each official test file, T is 5.<br />
For each test case, N is randomly chosen between 30 and 75.<br />
A real number D is randomly chosen between 0.05 and 0.5.<br />
For each pair of vertices, an edge is added with probability D.<br />
This graph is output as the first graph.<br />
An integer C is randomly chosen between 0 and N*(N-1)/2.<br />
C distinct pairs of vertices are chosen.<br />
For each pair, if an edge currently exists between them, the edge is removed with probability (1-D).<br />
If no edge exists between them, one is added with probability D.<br />
Then, a random permutation is applied to the vertices of the graph, and it is output as the second graph.<br />
You may safely assume there will be no test cases where TOTAL is 0.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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