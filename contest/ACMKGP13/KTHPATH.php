<?php require("../../includes/header.php"); ?><h1>The K-th Path</h1><div class="content">
<p><b>WARNING: The Input files may be as large as 8 MB. Use faster I/O methods.</b></p>
<p>There is a tree, consisting of N nodes. A path is a sequence of one or more nodes of this tree, where every two adjacent nodes are connected by an edge and no node is visited twice. Generally, there are N<sup>2</sup> paths. Note that we are counting paths from each node onto itself as well. One path is smaller than another if the sequence of nodes of the first path is lexicographically smaller than the sequence of nodes of the second path (by usual rules).</p>
<p><b>WARNING: The Input files may be as large as 8 MB. Use faster I/O methods.</b></p>
<p>There is a tree, consisting of N nodes. A path is a sequence of one or more nodes of this tree, where every two adjacent nodes are connected by an edge and no node is visited twice. Generally, there are N<sup>2</sup> paths. Note that we are counting paths from each node onto itself as well. One path is smaller than another if the sequence of nodes of the first path is lexicographically smaller than the sequence of nodes of the second path (by usual rules).</p>
<p>Thus (1,3,2) will be smaller than (1,3,4,5). And (2,4) will be smaller than (3).</p>
<p>Every day, Lucy writes out a path on a sheet of paper. On the first day, she writes the lexicographically smallest path. On the second day, she writes the lexicographically second smallest path, and so on. Generally, on the K<sup>th</sup> day, Lucy writes out the lexicographically K<sup>th</sup> smallest path.</p>
<p>Nana likes to read Lucy's notes about the paths in the tree. She is curious about the path that will be written on the Q<sup>th</sup> day. Could you please help her?</p>
<h3>Input</h3>
<p>The first line of input consists of a single integer T, the number of the test cases. Then, there are T test cases, given in the following form: the first line of the test case consists of an integer N, the number of nodes and an integer Q, the number from the statement. Then, N-1 lines follow. Each such line will consist of two integers X and Y with the meaning that there's an edge, connecting nodes X and Y in the tree. You may assume that you are always given a valid tree.</p>
<h3>Output</h3>
<p>For every test case, output the lexicographically Q<sup>th</sup> smallest path in the given tree on a single line, without leading or trailing spaces. There should be exactly one space between successive nodes in the path. Output the answer to the t<sup>th</sup> test case should be given on the t<sup>th</sup> line.</p>
<h3>Constraints</h3>
<pre>1 ≤ N ≤ 100000
1 ≤ Q ≤ N<sup>2</sup>
1 ≤ Sum of N over all the test cases in the single file ≤ 1000000

</pre>
<h3>Sample Input</h3>
<pre>3
6 21
1 2
2 3
2 4
2 5
2 6
7 35
1 2
1 3
3 4
4 5
4 6
4 7
6 16
1 2
1 3
1 4
2 5
1 6

</pre>
<h3>Sample Output</h3>
<pre>4 2 1
5 4 7
3 1 2 5

</pre>
<h3>Explanation</h3>
<p>In the first test case, there are 36 paths in total. The lexicographically smallest first 21 paths are</p>
<pre>01: 1
02: 1 2
03: 1 2 3
04: 1 2 4
05: 1 2 5
06: 1 2 6
07: 2
08: 2 1
09: 2 3
10: 2 4
11: 2 5
12: 2 6
13: 3
14: 3 2
15: 3 2 1
16: 3 2 4
17: 3 2 5
18: 3 2 6
19: 4
20: 4 2
21: 4 2 1

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-10-2013</td>
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
            <td>C, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>