<?php require("../../includes/header.php"); ?><h1>Crazy Girl</h1><div class="content">
<p>A string X is a multiple of string Y if X consists of one or more copies of Y concatenated together. For e.g. 'abab' and 'ab' are multiples of 'ab'. Crazy Girl is interested in some specific properties of strings and needs to find multiples of a smaller string in a bigger string, but it is getting too cumbersome to do for large texts. Given two strings B and A, she wants to find all the substrings of string A which are multiples of string B and cannot be extended further to the left or right and are of maximal length. Help her by writing a program to automate the task. Output the location of the multiples of string B in the form of pairs (a, b) where a denotes the starting position of the multiple in string A (1 - based) and b denotes the number of times string B is repeated in the multiple.</p>
<h3>Input</h3>
<p>The first line contains the string A and the second line contains the string B.</p>
<h3>Output</h3>
<p>Output the required pairs (a, b) in decreasing order of a and output -1 if string B is not a substring of string A.</p>
<h3>Constraints</h3>
<p>1 &lt;= |A| &lt;= 10^6</p>
<p>1 &lt;= |B| &lt;= |A|</p>
<p> The strings A and B consist only of lowercase letters 'a' - 'z'</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
aabaabaaaba</pre><pre>aaba
<strong>Output:</strong>
4 2</pre><pre>1 1</pre><pre><strong>Explanation:</strong></pre><p>The pairs (8, 1) and (4, 1) are not reported because they can be extended further to the left and right respectively to form a multiple with two copies of string B.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/apoorv_j">apoorv_j</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-02-2014</td>
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