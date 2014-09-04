<?php require("../../includes/header.php"); ?><h1>DeoriaTheGreatMall</h1><div class="content">
<p> Problem Description</p>
<p><b>Deoria</b> is a great city with Big malls. The city is full of intelligent people. The head of them is a boy named <b>KOOL</b>. He is very fond of roaming. He has a girlfriend named <b>KOOLER</b>. One day <b>KOOL</b> and <b>KOOLER </b>decided to visit the biggest mall of city but the mall has very weird entry criteria. A person cannot enter the mall without solving the puzzle. </p>
<p>
The puzzle is as follows:
</p>
<p>
You are given a balanced binary tree of height <b>H</b> and infinite number of stones. </p>
<p>You have to tell the minimum number of stones needed to visit the whole tree.</p>
<p>Move the stones on the tree such that </p>
<ul>
<li> whole tree is traversed.</li>
<li>No nodes of the tree can be visited twice.</li>
<li>Stone can be moved only along the edges between the nodes.</li>
<li><b>Only one stone can be used for one traversing.</b></li>
</ul>

<p>
Help KOOL and KOOLER.
</p>
<h3>Input</h3>
<ul>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. Then, T lines follow. Each line contains an integer H( Height of the tree).</ul>
<h3>Output</h3>
<p>For each test case, output a single integer indicating the minimum number of stones needed  As answer can be very large so output number of stones % 1000000007 .</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000000 (10<sup>9</sup>)</b></li>
<h3>Example</h3>
<pre><b>Sample Input:</b>
1
1
<p></p>
<b>Sample Output:</b>
1
</pre><pre><b>Sample Input:</b>
1
2
<p></p>
<b>Sample Output:</b>
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cdev">cdev</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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