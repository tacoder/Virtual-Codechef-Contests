<?php require("../../includes/header.php"); ?><h1>Girl Friend and String Gift</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME05/russian/CHGLSTGT.pdf">here</a></h3>
<p>Chef's Girl Friend has given him a unique gift. She has given him a string <strong>S</strong>. Chef being a gentleman wants to return her gift in a unique way. He wants to break the string he has received into some number of substrings so that each substring is a palindrome. However he does not want break the string into too many substrings, otherwise the average size of his strings will become small. What is the minimum number of substrings in which the given string can be broken so that each substring is a palindrome.</p>
<h3>Tips: </h3>
<p>Refer <a href="http://en.wikipedia.org/wiki/Palindrome">http://en.wikipedia.org/wiki/Palindrome</a> for the definition of a "palindrome" </p>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows:</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of alphabets in the given string. The second line contains the given string. </li>
</ul>
<h3>Output</h3>
<p>For each test case output a single integer the answer to the given test case. Print answer for each test case on a separate line. </p>
<h3>Constraints</h3>
<p>All characters in the given string are upper case English alphabets.</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>5000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<p>1 
7
ABCCBDA <br />
<b>Output:</b>
4</p></pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The given string can be broken into <strong>"A" , "BCCB" , "D" , "A"</strong>. It can be verified that you can't break the given string into less than 4 substrings such that each substring in a palindrome.</p>
<h3> Scoring </h3>
<p> <b> Subtask 1: (15 points):</b></p>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>20</b></li>
</ul>
<p> <b> Subtask 2: (25 points):</b></p>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>250</b></li>
</ul>
<p> <b> Subtask 1: (60 points):</b></p>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>5000</b></li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
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