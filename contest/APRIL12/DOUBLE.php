<?php require("../../includes/header.php"); ?><h1>Double Strings</h1><div class="content">

<p>The <b>palindrome</b> is a string that can be read the same way from left to right and from right to left. For example, strings "aaaaa", "1221", "bbaabb" are <b>palindromes</b>, however the string "chef" is <b>not a palindrome</b> because if we read it from right to left, we will obtain "fehc" that is not the same as "chef".</p>
<p>We call a string a "<b>double string</b>" if it has an even length and the first half of this string is equal to the second half of this string, for example "abab" is a <b>double string</b> because the first half "ab" is equal to the second half "ab", however the string "abba" is <b>not a double string</b> because the first half "ab" is not equal to the second half "ba". The empty string "" is a <b>double string</b>, and its length is <b>0</b>.</p>
<p>Chef doesn't like palindromes, however he likes "double strings". He often likes to change the order of letters in some palindrome and sometimes to remove some symbols from it. Now he wonders: if a <b>palindrome</b> of length <b>N</b> is given, what is the maximal possible number of characters in a "double string"<br />
that can be obtained by removing and changing the order of symbols in it?</p>
<h3>Input</h3>

<p>Several test cases are given.<br />
The first line of the sample input contains an integer <b>T</b> - the number of test cases.<br />
Then, <b>T</b> lines follow.<br />
Each line consists of a single integer <b>N</b> - the length of a palindrome.</p>
<h3>Output</h3>

<p>For each test case output a single integer - answer to the problem.</p>
<h3>Constraints</h3>

<p>
<ul>
<li>1&lt;=<b>T</b>&lt;=10000</li>
<li>1&lt;=<b>N</b>&lt;=1000000000</li>
</ul>
</p><p></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2
4

<b>Output:</b>
2
4
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-02-2012</td>
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