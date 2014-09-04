<?php require("../../includes/header.php"); ?><h1>Oscars as a Tree</h1><div class="content">
<p> </p>
<p>
All Oscar awards are numbered from <b>1</b> to <b>N</b> and arranged in a tree rooted at <b>1</b>.Each <b>nth</b> Oscar has some integral value <b>v</b>. We can perform <b>k</b> queries on the given tree of following type.</p>
<p>a)<b>1 n u</b> change the value of <b>nth </b>Oscar to <b>u</b> where <b>u</b> is an integer.</p>
<p>b)<b>2 n c</b> print the product of the sub-tree of <b> nth </b> oscar and take it’s modulo with <b>c</b>.</p>

<p> </p>
<h3>Input</h3>
<p>First line contains <b>N</b> (number of nodes)  and <b>k</b>(number of queries)</p>
<p>Next line contains <b>N</b> numbers,each <b>ith </b> number denoting the value of node(v) in the tree</p>
<p>Next <b>N-1</b> lines describe the connections of the tree i.e in each line, <b>a b</b> represents that node <b>a</b> and node <b>b</b> are connected.</p>
<p>Next <b>k</b> lines contain the above given queries.</p>
<h3>Output</h3>
<p>Output description.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>u,v</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>c</b> ≤ <b>1000000009</b></li>
<li><b>1</b> ≤ <b>k</b> ≤ <b>100000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3 3
1 2 3
1 2
1 3
2 1 10
1 2 7
2 1 10

<b>Output:</b>
6
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/purvi2">purvi2</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-03-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CS2, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>