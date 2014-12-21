<?php require("../../includes/header.php"); ?><h1>Chef and Bracket-Pairs</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/mandarin/CHEFBR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/russian/CHEFBR.pdf">Russian</a>.</h3>
<p>Chef loves brackets. So much so, that rather than just use plain brackets like (), {}, or [], he has invented his own notation that allows him to use many more types of brackets.</p>
<p>Each type of bracket is designated by an integer. A negative integer <b>-x</b> represents an opening bracket of type <b>x</b>; while a positive integer <b>x</b> represents a closing bracket of type <b>x</b>. Any sequence of such integers is then called a <em>bracket-pair sequence</em>.</p>
<p>A <em>balanced</em> bracket-pair sequence can be defined recursively as follows:</p>
<ul>
<li>The empty sequence is a balanced bracket-pair sequence.</li>
<li>If <b>S</b> is a balanced bracket-pair sequence, then <b>-x S x</b> is a balanced bracket-pair sequence for any positive integer <b>x</b>.
</li><li>If <b>S</b> and <b>T</b> are balanced bracket-pair sequences, then <b>S T</b> is a balanced bracket-pair sequence.</li>
</ul>

<p>For example, "-1 -2 2 -3 -4 4 3 1" is a balanced bracket-pair sequence, but "-1 -2 1 2" is not.</p>
<p>Chef has a bracket-pair sequence (which may or may not be balanced) consisting of <b>N</b> integers. There are 2<sup><b>N</b></sup> ways to form a <a href="http://en.wikipedia.org/wiki/Subsequence">subsequence</a> of his sequence. He wants to know how many of these subsequences are balanced.</p>
<p>Help him to calculate this number, modulo <b>10<sup>9</sup>+7</b>. </p>
<h3>Input</h3>
<p>The first line contains a single integer <b>N</b> denoting the number of brackets in his sequence. </p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the types of brackets. A negative number means an opening bracket; a positive number means a closing bracket.</p>
<h3>Output</h3>
<p>In a single line print the required answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b>
</li><li><b>A<sub>i</sub></b> ≠  0</li>
<li>It is <b>not</b> guaranteed that each opening bracket has a closing bracket of same type and vice-versa. </li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask <b>N</b> ≤ <b>10</b> Points: 10 </li>
<li>Subtask <b>N</b> ≤ <b>20</b> Points: 15 </li>
<li>Subtask <b>N</b> ≤ <b>100</b> Points: 75 </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
11
-1 -2 9 2 -3 -4 3 4 8 8 1 

<b>Output:</b>
12

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2014</td>
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