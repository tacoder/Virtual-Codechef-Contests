<?php require("../../includes/header.php"); ?><h1>Prime Permutation</h1><div class="content">


<p>You are given a string s, consisting of small Latin letters. Let's denote the length of the string as |s|. The characters in the string are numbered starting from 1.
</p>
<p>Your task is to find out if it is possible to rearrange characters in string s so that for any prime number p ≤ |s| and for any integer i ranging from 1 to |s| / p (inclusive) the following condition was fulfilled sp = sp × i. If the answer is positive, find one way to rearrange the characters.
</p>
<p> </p>
<h3>Input</h3>
<p>
The only line contains the initial string s, consisting of small Latin letters (1 ≤ |s| ≤ 1000).</p>
<h3>Output</h3>
<p>
If it is possible to rearrange the characters in the string so that the above-mentioned conditions were fulfilled, then print in the first line "YES" (without the quotes) and print on the second line one of the possible resulting strings. If such permutation is impossible to perform, then print the single string "NO".</p>
<h3>Example:
</h3>
<pre><b>Input:</b>
abc
<b>Output:</b>
YES
abc
</pre><pre><b>Input:</b>
xxxyxxx
<b>Output:</b>
YES
xxxxxxy<p></p>
</pre><pre><b>Input:</b>
abcd
<b>Output:</b>
NO
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.<br />
In the first sample any of the six possible strings will do: "abc", "acb", "bac", "bca", "cab" or "cba".</b> </p>
<p><b>Example case 2.<br />
In the second sample no letter permutation will satisfy the condition at p = 2 (s2 = s4).</b></p>
<p><b>Example case 3.<br />
In the third test any string where character "y" doesn't occupy positions 2, 3, 4, 6 will be valid.</b> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/upendra1234">upendra1234</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-02-2013</td>
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