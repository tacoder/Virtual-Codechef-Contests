<?php require("../../includes/header.php"); ?><h1>Sherlock and Subtrees</h1><div class="content">
<p> </p>
<p>
Sherlock and Moriarity are again back in game. This time Moriarity transformed himself as an impersonator and made his own <b>K</b> number of clones, each of them hidden at <b>K</b> different locations in the City. Sherlock observed that City, having <b>N</b> number of locations, has the structure of a tree with <b>N</b> number of nodes and each node represents a distinct location in the city. Now Sherlock is interested in finding the total number of subtrees which contain all the <b>K</b> locations where Moriarity's clones are hidden. Help him find the answer. Since the answer can be very large, print the answer modulo <b>10^9 + 7</b>.
</p>
<p><b>Note</b> : In this problem, the tree is unrooted, so a subtree simply means a connected subset of nodes.</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains the number of test cases <b>T</b>. <b>T</b> test cases follow:</li>
<li>For each test case, first line contains <b>N</b>, the total number of locations.</li>
<li>Next <b>N-1</b> lines contains two numbers <b>u</b> and <b>v</b>, signifying there is a path between <b>u</b> and <b>v</b>.</li>
<li>Next line contains <b>K</b>, followed by distinct <b>K</b> number of locations where Moriarity's clones are hidden. </li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output in a single line the total number of subtrees which contain all the <b>K</b> locations where Moriarity's clones are hidden.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<p>
1
4
1 2
2 3
3 4
2 2 4
</p>

<b>Output:</b>
<p>
2
</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iiti_adm">iiti_adm</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-01-2014</td>
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