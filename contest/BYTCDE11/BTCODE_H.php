<?php require("../../includes/header.php"); ?><h1>Trie Expectation</h1><div class="content">

<p>What is the expected number of nodes in a trie when 'N' words, each of length 'L' are inserted into it. The words are made up only of 0's and 1's. The words may be repeated and all possible permutations of words are equally likely. Initially the trie consists of only one node (root node).</p>
<h3>Input</h3>
<p>The first line of input contains an integer 't', denoting the number of test cases.<br />
Each of the next 't' lines contain 2 space separated integers 'N' and 'L'.</p>
<h3>Output</h3>
<p>For each test case, output one floating point value denoting the expected number of nodes in the trie. Output the values rounded off to 2 decimal places. Always print 2 digits after the decimal point.</p>
<p>To know more about tries visit <a href="http://en.wikipedia.org/wiki/Trie">here</a>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 3
2 2

<b>Output:</b>
4.00
4.25

<b>Constraints:</b>
t &lt;= 25
1 &lt;= N &lt;= 300
1 &lt;= L &lt;= 300

</pre><p><b>Explanation:</b></p>
<p>Test case 1: There are 8 possible words of length 3. Which ever word is inserted into the trie, we get only 4 nodes.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suh_ash2008">suh_ash2008</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2011</td>
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