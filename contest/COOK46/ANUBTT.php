<?php require("../../includes/header.php"); ?><h1>Build the Tree</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/mandarin/ANUBTT.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/russian/ANUBTT.pdf">Russian</a> as well.</h3>
<h3>Problem description.</h3>
<p>Given a rooted tree with <b>N</b> nodes. Nodes of the tree are numbered from <b>1</b> to <b>N</b>. Node <b>1</b> is the root. You need to add <b>M</b> nodes to it in the given order. All the nodes have values. Cost for adding a node <b>A</b> with value <b>va</b> to another node <b>B</b> with value <b>vb</b> is <b>va*vb</b>. There is an additional cost of <b>y</b> (so total cost of <b>va*vb+y</b>) if <b>B</b> has atleast <b>x</b> child nodes. After node <b>A</b> has been added to another node <b>B</b> it becomes a child of <b>B</b>.</p>
<p>After adding a node <b>A</b> to the tree, nodes next in list can be added to <b>A</b> also. You need to calculate the total minimal cost to add all <b>M</b> nodes in given order.</p>
<h3>Input</h3>
<p>The first line of input contains <b>N</b>. The second line of input contains <b>N</b> integers representing the values of nodes in order from node <b>1</b> to node <b>N</b>. <b>N-1</b> lines follow, each line defines an edge. Each line has 2 integers, which says that those 2 nodes are connected.</p>
<p>Next line of input contains an integer <b>Q</b>, denoting the number of queries you need to answer. Each query consists of 2 lines. The first line of each query has 3 integers, <b>M x y</b>. The second line of each query has <b>M</b> integers representing the values of the nodes to be added in order.</p>
<p>Note that in each query, <b>M</b> nodes are added to the initial tree, and hence changes made in previous query should <b>not</b> be considered in later queries</p>
<h3>Output</h3>
<p>For each query, output a single line containing the minimal total cost to add all the nodes in given order.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>x</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>y</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>Values of all nodes in input</b> ≤ <b>1000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 2 3
1 2
2 3
2
2 2 10
10 10
3 2 10
1 2 2

<b>Output:</b>
40
6
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Query 1.</b><br /><br />
Optimal solution is to add the first node from the query to node 1 of the tree and the second node from the query to node 2 of the tree. Cost is 10*2 + 10*2.<br /><br />
<b>Query 2.</b><br /><br />
Optimal solution is to add the first node from the query to node 1 of the tree for a cost 2. Then add next two nodes from the query to newly added node.<br /><br />
Total cost is 2 + 2 + 2 = 6.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-04-2014</td>
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