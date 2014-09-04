<?php require("../../includes/header.php"); ?><h1>Decreasing String</h1><div class="content">

<h3> Statement </h3>
<p>
You need to find a string which has exactly K positions in it such that the character at that position comes alphabetically later than the character immediately after it. If there are many such strings, print the one which has the shortest length. If there is still a tie, print the string which comes the lexicographically earliest (would occur earlier in a dictionary).
</p>
<h3>Input</h3>
<p>The first line contains the number of test cases T. Each test case contains an integer K (&le; 100).</p>
<h3>Output</h3>
<p>Output T lines, one for each test case, containing the required string.  Use only lower-case letters a-z.</p>
<h3>Sample Input </h3>
<pre>
2
1
2
</pre><h3>Sample Output</h3>
<pre>
ba
cba
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anshuman_singh">anshuman_singh</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-09-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>