<?php require("../../includes/header.php"); ?><h1>Combinatorial Numbers</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME05/russian/CNR_1.pdf">here</a></h3>
<p>Chef has a special affection for sets of binary strings of equal length which have same numbers of <b>1's</b>. Given three integers <b>n</b>, <b>k</b> and <b>m</b>, your task is to find the the lexicographically  <b>m<sup>th</sup></b> smallest string among strings  which have length n and have <b>k</b> <b>1's</b>. If no such string exists output <b>-1</b>. </p>
<h3>Tips: </h3>
<p> To see what lexicographic order means . See <a href="http://en.wikipedia.org/wiki/Lexicographical_order">http://en.wikipedia.org/wiki/Lexicographical_order</a></p>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows:</li>
<li>The first and only line of each test case contains three space separated integers <b>N</b> , <b> K </b> and <b> M </b>
</li></ul>
<h3>Output</h3>
<p>For each test case output the answer on a separate line .</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>350</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 2 2

<b>Output:</b>
101
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The set of strings in lexicographic order is "011", "101", and "110" </p>
<h3> Scoring </h3>
<p><b>Subtask 1 (41 point):</b>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>20</b></li>
</ul>
</p><p><b>Subtask 2 (59 points):</b>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>350</b></li>
</ul>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vineetpaliwal">vineetpaliwal</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-10-2013</td>
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