<?php require("../../includes/header.php"); ?><h1>Play With Strings</h1><div class="content">

<p>Given are two strings(each not more than 100 characters). We need to find relation between them such that <b><u>all</u></b> the characters of the second string must appear in the first string <b><u>sequentially (not necessarily continuously).</u></b> The program should :<br />
<br />
<ul>
<li>Print &ldquo;1&rdquo;: if the characters in the first string appear in the same sequence as that of the second string.
</li><li>Print &ldquo;2&rdquo;: if the characters in the first string appear in the opposite sequence as that of second string.
</li><li>Print &ldquo;3&rdquo;: if the characters in the first string appear in both ie same as well as opposite sequences of the second string.
</li><li>Print &ldquo;0&rdquo;: if the characters in the first string don&rsquo;t appear in sequence of the second string.
</li></ul>
</p><p><br /><br />
The characters in the strings are case-sensitive.</p>
<h3>Input</h3>
<p>The first line should give the number of test cases. For each test case, it takes input two strings.</p>
<h3>Output</h3>
<p>An integer ( 0,1,2 or 3 ) for each of the test cases.</p>
<h3>Example</h3>
<pre>
<b>Input:
5
njack njk
anwesha awesa
wysiwig iwi
abcdef edba
abcdef adb
</b>

<b>Output:
1
1
3
2
0
</b>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ankit_tripathi">ankit_tripathi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2012</td>
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