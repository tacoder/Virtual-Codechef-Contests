<?php require("../../includes/header.php"); ?><h1>Not So Even Tree</h1><div class="content">
<p></p>
<p>There is an infinite binary tree which has following structure:</p>
<pre>
                                        3
                         /                              \
                     6	   		                  8
               /          \                        /           \
        11		   13	             15	          17
     /      \            /      \          /       \             /     \
20	   22	    24         26	 28  	    30       32    34
...</pre><p>This tree has a formula to get each node’s value. Base of the formula is even binary tree which is infinite tree made of even numbers with root node 2.<br />
Root node’s level is 1 and level of its child nodes is 2 and so on.<br />
Based on value of node in even tree and its level; above tree is formed</p>
<p></p>
<h3>Input</h3>
<p></p>
<p>First line of input contains a number T, which is total number of test cases.<br />
Following T lines contains a number N.</p>
<p></p>
<h3>Output</h3>
<p></p>
<p>For every test case, output a single line containing either NO, LEFT or RIGHT.<br />
Output NO if the number N is not in the tree.<br />
Output LEFT if the number is in the tree and its left child of its parent node.<br />
Output RIGHT if the number N is in the tree and its right child of its parent node.</p>
<p></p>
<h3>Constraints</h3>
<p></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>4</b> ≤ <b>N</b> ≤ <b>10^7</b></li>
</ul>
<p></p>
<h3>Example</h3>
<pre><b>Input:</b>

3
39
16
70

<b>Output:</b>
RIGHT
NO
LEFT
</pre><p> </p>
<h3>Explanation</h3>
<p></p>
<p><b>For 34, Its in the tree and its right child of 20.</b></p>
<p>16 is not in the tree, hence output is NO.</p>
<p>70 is left child of 37, so output is LEFT.</p>
<p></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aagg">aagg</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-09-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.05 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>