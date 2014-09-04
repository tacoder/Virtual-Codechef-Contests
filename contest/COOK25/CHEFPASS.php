<?php require("../../includes/header.php"); ?><h1>Codechef Password Recovery</h1><div class="content">

<p style="text-align:justify">
Chef recently decided a very curious encryption algorithm for CodeChef passwords. He took an N-letter password and found all the possible<br />
2-letter substrings, considering the characters of a password was written in a circle. Thus, for AbcD, he would deduce the following<br />
substrings: Ab, bc, cD, DA.
</p>
<p style="text-align:justify">
Then, some of the substrings were reversed. For example, the set of substrings above could be converted to Ab, cb, Dc, DA. All<br />
the substrings were then stored in a database. Whenever the need be, the substrings were recovered, and a password was generated. Of course<br />
sometimes, more than one such password could be generated, but Chef thinks this is perfectly fine!
</p>
<p style="text-align:justify">
Unfortunately, a programming error by the new CodeChef minion, led to corruption of this database and mixed all the strings together.<br />
Chef now wants to retrieve the passwords, a few at a time. He gives you a set of substrings A from some of the passwords - these you<br />
should always consider, and another set of substrings B from which you can use some. Can you tell him if it is possible to select all the substrings<br />
from A and some (0 or more) substrings from B and construct 1 or more passwords? Each selected string can be used only once, for at max 1<br />
password. See explanation of Sample Input for clarification.
</p>
<p style="text-align:justify">
<h3>Input</h3>
</p>
<p>The first Line contains a single number T, the number of test cases.
</p>
<p style="text-align:justify">
Each test case contains 2 lines.<br />
The first line of the test case contains the number N (= |A|), followed by the N substrings Chef gives in A. The next line contains<br />
M (= |B|), followed by M substrings. Two substrings are input with a single space character between them.
</p>
<p style="text-align:justify">
<h3>Output</h3>
</p>
<p>Print T lines, one for each test case. Output either "YES" if it is possible to select all strings from A and some strings from B<br />
such that the overall set of strings represent the substrings for 1 or more passwords. Output "NO" otherwise.
</p>
<p style="text-align:justify">
<h3>Constraints</h3>
<pre>1 ≤ T ≤ 100
1 ≤ N ≤ 1000
1 ≤ M ≤ 1000
All characters would be upper case or lower case English letters. Passwords are case sensitive.
</pre></p>
<p style="text-align:justify">
<h3>Sample Input</h3>
<pre>2
4 aB aB Ca Bc
6 aB Ca ca ab ba bc
4 aB aB Ca Bc
3 Ba aC bc
</pre></p>
<p style="text-align:justify">
<h3>Sample Output</h3>
<pre>YES
NO
</pre></p>
<p style="text-align:justify">
<h3>Explanation</h3>
</p>
<p>In the first Sample Input, you can construct "aBaC" from (<strong>aB</strong> <strong>aB</strong> <strong>Ca</strong> Ca) and<br />
"aBc" from (<strong>Bc</strong> aB ca). Strings selected from A are shown in bold. Remember that substrings can be reversed. Note<br />
that although there are repeated strings, each string is used in at most one of the passwords.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gamabunta">gamabunta</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-08-2012</td>
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