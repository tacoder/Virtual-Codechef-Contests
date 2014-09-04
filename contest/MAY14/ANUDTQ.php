<?php require("../../includes/header.php"); ?><h1>Dynamic Trees and Queries</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/ANUDTQ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/ANUDTQ.pdf">Russian</a>.</h3>
<p>Given a directed tree with <b>N</b> nodes. You need to process <b>M</b> queries.<br />
Each node has a <b>key</b> and a <b>value</b>, a node is referenced by its key. <b>N</b> nodes have <b>keys</b> from <b>0</b> to <b>N-1</b>.<br />
Root always has the <b>key</b> equal to <b>0</b>. Queries can be of the following 4 types:<br /><br />
1. Given a <b>key</b> of a node present in the tree, append a child node to it. The new node gets the smallest never-used positive integer as its key. The <b>value</b> of the new node will be given in the input.<br /><br />
2. Given a <b>key</b> of a node(call it <b>A</b>) present in the tree. Add <b>value</b> to the value of all the nodes present in the subtree rooted at <b>A</b>.<br /><br />
3. Given a <b>key</b> of a node(call it <b>A</b>) present in the tree. Remove the subtree rooted at <b>A</b> from the tree.<br /><br />
4. Given a <b>key</b> of a node(call it <b>A</b>) present in the tree. Output the sum of values of all the nodes in subtree rooted at <b>A</b>.</p>
<p><b>Input is encoded:</b><br /><br />
<b>Keys</b> in <b>M</b> Queries of the input are encoded in the following way:<br /><br />
Let <b>SPECIAL</b> = 0 initially. Whenever a query of the type 4 occurs, <b>SPECIAL</b> is updated to the result of that query.<br />
All the <b>keys</b> given in queries are encoded, in order to decode them you need to add SPECIAL to it.<br /><br />
That is, you are given <b>encoded_key</b> as input, to get <b>key</b> use the formula <b>key</b> = <b>SPECIAL</b> + <b>encoded_key</b>.</p>
<h3>Input</h3>
<p>First line of input has <b>N</b>, the number of nodes.<br /><br />
Second line has <b>N</b> integers, the values of given <b>N</b> nodes respectively.<br /><br />
Then, <b>N-1</b> lines follow, each has two integers <b>u</b>, <b>v</b>. which specifies an edge from <b>u</b> to <b>v</b>.<br /><br />
Next line contains a single integer <b>M</b>, the number of queries.<br /><br />
Each query consists of 2 lines, First line has the the type of query, second line is as follows:<br /><br />
For queries 1 and 2, there are two integers, first one represents the <b>key</b> of a node in tree, second one represents the <b>value</b>.<br /><br />
For queries 3 and 4, there is a single integer, which represents the <b>key</b> of a node in tree.
</p>
<h3>Output</h3>
<p>For each query of type 4, output the required answer.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 10^5</li>
<li>1 ≤ <b>M</b> ≤ 10^5</li>
<li>0 ≤ <b>u</b> &lt; N</li>
<li>0 ≤ <b>v</b> &lt; N, <b>u</b> is not equal to <b>v</b></li>
<li>All the <b>keys</b> in the input are valid</li>
<li>If the type of the query is 3, the the <b>key</b> is nonzero.</li>
<li><b>All the rest numbers in the input are in the range [-1000, 1000]</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
10 20
0 1
4
4
0
1
-30 5
2
-30 1
4
-30
<br />
<b>Output:</b>
30
38
</pre><h3>Explanation</h3>
<p><b>Query #1</b><br /><br />
<b>type</b> = 4 <b>encoded_key</b> = 0<br /><br />
Initially <b>SPECIAL</b> = 0<br /><br />
<b>key</b> = <b>encoded_key + SPECIAL</b> = 0<br /><br />
value at 0 + value at 1 = 10 + 20 = 30 is the answer<br /><br />
<b>Now SPECIAL is updated to 30</b><br /><br />
<b>Query #2</b><br /><br />
<b>type</b> = 1 <b>encoded_key</b> = -30 <b>value</b> = 5 <br /><br />
<b>SPECIAL</b> = 30 <br /><br />
<b>key</b> = <b>encoded_key</b> + <b>SPECIAL</b> = -30 + 30 = 0<br /><br />
So we add a child node(with the <b>key</b> = 2) to the node with the <b>key</b> 0, the child node gets the <b>value</b> of 5<br />
<br /><br />
<b>EDITS MADE:</b><br /><br />
Firstly, sorry for the mistake.<br /><br />
<b>Old :</b> Let <b>SPECIAL</b> = 0 initially. Whenever a query of the type 4 occurs, <b>SPECIAL</b> is increased by the result of that query.<br /><br />
<b>New :</b> Let <b>SPECIAL</b> = 0 initially. Whenever a query of the type 4 occurs, <b>SPECIAL</b> is updated to the result of that query.<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-02-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>