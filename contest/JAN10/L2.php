<?php require("../../includes/header.php"); ?><h1>Wildcard Matching</h1><div class="content">

<p>Johnny is the author of the famous open source software ByteDict (Bytelandian electronic dictionary).</p>
<p>Being a fan of the word game Scrabble, Johnny would like to make ByteDict useful for Scrabble training. Therefore, he has decided to implement the "Wildcard Matching" feature.</p>
<p>Wildcard matching allows ByteDict's users to search for words matching a given wildcard pattern. A wildcard pattern may include the characters '*' or '?' in addition to the characters of the alphabet. A '*' matches any sequence of characters (including the empty sequence) and a '?' matches any single character.</p>
<p>To be more precise, a wildcard pattern is matched with a word if we can replace each '?' with an alphabet character and each '*' with a sequence of alphabet characters so that after replacement, the pattern becomes identical to the word.</p>
<p>Now, as usual, please help Johnny implement the feature!</p>
<h3>Input</h3>
<p>The first line contains a number t (about 2) which is the number of test cases. Then t test cases follow. Each test case has the following form.</p>
<p>The first line contains two integers N and Q (1 ≤ N ≤ 55000, 1 ≤ Q ≤ 300) which are the number of words in the dictionary and the number of wildcard queries.</p>
<p>Each line in the next N lines contains a word from the dictionary. The alphabet consists of lower and uppercase characters as well as digits.</p>
<p>Each line in the next Q lines contains a wildcard pattern.</p>
<p>The length of each word does not exceed 25 and the length of each wildcard pattern does not exceed 5.</p>
<p>Each test case is separated by a blank line.</p>
<h3>Output</h3>
<p>For each wildcard query print a line containing the query itself and the number of words in the dictionary that match the query.</p>
<p>Print a blank line after each test case's output.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 7
abc
abc
cba
a??
??a
*?a
***
**a

7 4
spoj
codechef
uva
tju
onlinejudge
Acmicpc
Worldcup2010
*a*
sp?*
*c*
uvc

<b>Output:</b>
abc 1
cba 0
a?? 1
??a 0
*?a 0
*** 1
**a 0

*a* 1
sp?* 1
*c* 3
uvc 0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-12-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>