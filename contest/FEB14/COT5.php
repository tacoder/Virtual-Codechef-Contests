<?php require("../../includes/header.php"); ?><h1>Count on a Treap</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/FEB14/mandarin/COT5.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/FEB14/russian/COT5.pdf" target="_blank">Russian</a>.</h3>
<p>In computer science, a treap is a binary search tree according to the keys and meanwhile a heap according to the weights. Follow the link for more details: <a title="http://en.wikipedia.org/wiki/Treap" href="http://en.wikipedia.org/wiki/Treap">http://en.wikipedia.org/wiki/Treap</a></p>
<p>Your task is to maintain a <b>max-treap</b> supporting the following operations:</p>
<ul>
<li>0 <b>k w</b>: Insert a new node, whose key and weight are <b>k</b> and <b>w</b>.</li>
<li>1 <b>k</b>: Delete a node in the treap with key <b>k</b>.</li>
<li>2 <b>ku</b> <b>kv</b>: Return the distance between node <b>u</b> whose key is <b>ku</b> and node <b>v</b> whose key is <b>kv</b>.</li>
</ul>
<p><br /><br /> No two nodes share the same key or the same weight in the tree, and we guarantee the node is indeed in the treap before a delete operation takes place.</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains an integer <b>N</b>, the number of operations.<br /> Each of the next <b>N</b> lines contains two or three integers "<b>0 k w</b>" "<b>1 k</b>" or "<b>2 ku kv</b>” . These integers describe the current operation.</p>
<p> </p>
<h3>Output</h3>
<p>For each distance query, print the distance between <b>u</b> and <b>v</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N ≤ 200000</b></li>
<li><b>0 &lt; k, w, ku, kv  &lt; 2<sup>32</sup></b></li>
</ul>
<h3>Example</h3>
<pre><strong>Input:</strong>
12
0 4 17535
0 10 38964
0 2 21626
0 1 61321
2 1 10
2 10 4 
1 10
1 1
0 8 42634
2 8 4
2 8 2
2 4 2

<strong>Output:</strong>
1
2
2
1
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xiaodao">xiaodao</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-12-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>