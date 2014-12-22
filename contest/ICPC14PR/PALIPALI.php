<?php require("../../includes/header.php"); ?><h1>Palindrome Palindrome</h1><div class="content">

<p>
A string is called beautiful if it has the form <b>AA<sup>r</sup>AA<sup>r</sup></b> where <b>A</b> is some non-empty string and <b>A<sup>r</sup></b> is the reversed <b>A</b>.<br />
You are given a string <b>S</b> composed only of lowercase letters of the English alphabet. Find the number of its beautiful substrings. Equal substrings in different positions are considered different. For example, the string <b>aaaaa</b> has <b>2</b> different substrings because we have beautiful substring <b>aaaa</b> in two different positions.</p>
<h3>Input</h3>

<p> The first line contains a single integer <b>T &lt;= 10</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a non-empty string composed only of lowercase letters of the English alphabet. The length of the string is not greater than <b>100000</b>.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the number of beautiful substrings of the corresponding string.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
aaaa
aaaaa
abbaabba
abbaabb
abaaba
xxyyxxxxyyxx

<b>Output:</b>
1
2
1
0
0
2
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-03-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>