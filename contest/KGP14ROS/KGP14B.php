<?php require("../../includes/header.php"); ?><h1>Sequence Containment</h1><div class="content">
<p>A DNA sequence can be represented by a string of letters T, A, C, and G representing four different amino acids. DNA sequences are often matched to infer structural or functional similarities between living beings. Given two DNA sequences X and Y, the sequence Y is said to be contained in X if Y can be obtained from X by deleting 0 or more letters (not necessarily consecutive) in X. </p>
<p>Given two DNA sequences X and Y, what can be the minimum length of a third sequence Z such that both X and Y are contained in Z?</p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>N</b> (0 &lt; <b>N</b> &le; 3). For each test case, the first line contains two integers <b>P</b> and <b>Q</b> (0 &lt; <b>P</b>, <b>Q</b> &le; 1000) denoting the number of letters in the two sequences X and Y respectively. The second line contains the sequence X and the third line contains the sequence Y.</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the minimum length of sequence Z.</p>
<h3>Sample Input</h3>
<pre>
2
7 6
TAGCTAG
ATCATG
10 9
GGATGCTACA
TCTACCGTA
</pre><h3>Sample Output</h3>
<pre>
Case 1: 9
Case 2: 13
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-12-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>