<?php require("../../includes/header.php"); ?><h1>Chef and Apple Trees</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/mandarin/CAPPLE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/russian/CAPPLE.pdf">Russian</a>.</h3>
<p>Chef loves to prepare delicious dishes. This time, Chef has decided to prepare a special dish for you, and needs to gather several apples to do so.</p>
<p>Chef has <b>N</b> apple trees in his home garden. Each tree has a certain (non-zero) number of apples on it. In order to create his dish, Chef wants to pluck every apple from every tree.</p>
<p>Chef has an unusual method of collecting apples. In a single minute, he can perform the following task:</p>
<ul>
<li>Pick any subset of trees such that every tree in the subset has the same number of apples.</li>
<li>From each tree in the subset, pluck any number of apples, as long as the number of apples left on the tree equals the number of apples on a tree not in the subset.</li>
</ul>

<p>If all trees have the same number of apples left, Chef can pluck all of the apples remaining in a single minute.</p>
<p>Chef does not want to keep you waiting, so wants to achieve this task in the minimum possible time. Can you tell him what the minimum time required is?</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. This will be followed by <b>T</b> test cases. The first line of each test case contains a single integer <b>N</b> denoting the number of apple trees in Chef's garden. The next line of each test case contains <b>N</b> space separated integers denoting the number of apples on each tree.</p>
<h3>Output</h3>
<p>For each of the <b>T</b> test cases, output a single line - the minimum time to pluck all apples from all trees.</p>
<h3>Constraints</h3>
<ul>
<li>1 &lt;= <b>T</b> &lt;= 10</li>
<li>1 &lt;= <b>N</b> &lt;= 10<sup>5</sup></li>
<li>1 &lt;= Number of apples on a tree &lt;= 10<sup>5</sup></li>
</ul>
<h3>Scoring</h3>
<ul>
<li>Subtask 1 : 1 &lt;= <b>T</b> &lt;= 10 , 1 &lt;= <b>N</b> &lt;=  10<sup>3</sup>: <b> (27 pts) </b> </li>
<li>Subtask 2 : 1 &lt;= <b>T</b> &lt;= 10 , 1 &lt;= <b>N</b> &lt;=  10<sup>4</sup>: <b> (25 pts) </b> </li>
<li>Subtask 3 : 1 &lt;= <b>T</b> &lt;= 10 , 1 &lt;= <b>N</b> &lt;=  10<sup>5</sup>: <b> (48 pts) </b> </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input</b>
2
3
3 3 3
4
1 2 3 3

<b>Output</b>
1
3
</pre><h3>Explanation</h3>
<p>For test 1, Chef can select all the trees and can pluck all the apples in 1 minute.</p>
<p>For test 2, there are many ways Chef can pluck all of the apples in 3 minutes. Here is one example: </p>
<ul>
<li>First minute: Select the third and fourth trees. Pluck 1 apple from the third tree, and 2 apples from the fourth tree.</li>
<li>Second minute: Select the second and third tree. Pluck 1 apple from each tree.</li>
<li>Third minute: Select all of the trees and pluck the last apple from each tree.</li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ma5termind">ma5termind</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2014</td>
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