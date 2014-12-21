<?php require("../../includes/header.php"); ?><h1>Chef and Red Black Tree</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/RBTREE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/RBTREE.pdf">Russian</a>.</h3>
<p>Chef likes trees a lot. Today he has an infinte full binary tree (each node has exactly two childs) with special properties.<br />
Chef's tree has the following special properties :</p>
<ul>
<li>Each node of the tree is either colored <b>red</b> or <b>black</b>.</li>
<li>Root of the tree is <b>black</b> intially.</li>
<li>Both childs of a <b>red</b> colored node are <b>black</b> and both childs of a <b>black</b> colored node are <b>red</b>.</li>
</ul>
<p>
The root of the tree is labelled as 1. For a node labelled <b>v</b>, it's left child is labelled as <b>2*v</b> and it's right child is labelled as <b>2*v+1</b>.
</p>
<p>
Chef wants to fulfill <b>Q</b> queries on this tree. Each query belongs to any of the following three types:
</p>
<ul>
<li><b>Qi</b> 	   Change color of all <b>red</b> colored nodes to <b>black</b> and all <b>black</b> colored nodes to <b>red</b>.</li>
<li><b>Qb x y</b>  Count the number of <b>black</b> colored nodes on the path from node <b>x</b> to node <b>y</b> (both inclusive).</li>
<li><b>Qr x y</b>  Count the number of <b>red</b> colored nodes on the path from node <b>x</b> to node <b>y</b> (both inclusive).</li>
</ul>
<p>Help chef accomplishing this task.<br />
<br /><br />
<b>Input</b><br /><br />
First line of the input contains an integer <b>Q</b> denoting the number of queries. Next <b>Q</b> lines of the input contain <b>Q</b> queries (one per line). Each query belongs to one of the three types mentioned above.<br />
<br /><br />
<b>Output</b><br /><br />
For each query of type <b>Qb</b> or <b>Qr</b>, print the required answer.<br />
<br /><br />
<b>Constraints</b><br /></p>
<ul>
<b>
<li>1&lt;=Q&lt;=10<sup>5</sup></li>
<p></p></b><br />
<b>
<li>1&lt;=x,y&lt;=10<sup>9</sup></li>
<p></p></b>
</ul>
<p><br /><br />
<b>Sample Input</b><br /><br />
5<br />
Qb 4 5<br />
Qr 4 5<br />
Qi<br />
Qb 4 5<br />
Qr 4 5<br />
<br /><br />
<b>Sample Output</b><br /><br />
2<br />
1<br />
1<br />
2<br />
<br /><br />
<b>Explanation</b><br /><br />
With the initial configuration of the tree, Path from node 4 to node 5 is 4-&gt;2-&gt;5 and color of nodes on the path is B-&gt;R-&gt;B.  </p>
<ul>
<li>Number of black nodes are 2.</li>
<li>Number of red nodes are 1. </li>
</ul>
<p>After Query Qi, New configuration of the path from node 4 to node 5 is R-&gt;B-&gt;R.</p>
<ul>
<li>Number of black nodes are 1.</li>
<li>Number of red nodes are 2. </li>
</ul>
<p><br /><br />
<b>Scoring</b></p>
<ul>
<li> Subtask #1: <b>1&lt;=Q&lt;=100  1&lt;=x,y&lt;=1000</b>   	         	                        <b>: 27 pts</b></li>
<li> Subtask #2: <b>1&lt;=Q&lt;=10<sup>3</sup>  1&lt;=x,y&lt;=10<sup>5</sup>       :  <b>25 pts</b></b></li>
<p></p>
<li> Subtask #3: <b>1&lt;=Q&lt;=10<sup>5</sup>  1&lt;=x,y&lt;=10<sup>9</sup>       :  <b>48 pts</b></b></li>
<p>
</p></ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ma5termind">ma5termind</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>