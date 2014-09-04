<?php require("../../includes/header.php"); ?><h1>Longest Common Pattern</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/FEB14/mandarin/LCPESY.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/FEB14/russian/LCPESY.pdf" target="_blank">Russian</a>.</h3>
<p>As we all know, Chef is cooking string for long days, his new discovery on string is the <i>longest common pattern length</i>. The <i>longest common pattern length</i> between two strings is the maximum number of characters that both strings have in common. Characters are case sensitive, that is, lower case and upper case characters are considered as different. Note that characters can repeat in a string and a character might have one or more occurrence in common between two strings. For example, if Chef has two strings <b>A = "Codechef"</b> and <b>B = "elfedcc"</b>, then the <i>longest common pattern length</i> of <b>A</b> and <b>B</b> is <b>5</b> (common characters are <b>c</b>, <b>d</b>, <b>e</b>, <b>e</b>, <b>f</b>).</p>
<p>Chef wants to test you with the problem described above. He will give you two strings of Latin alphabets and digits, return him the <i>longest common pattern length</i>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. Then the description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a string <b>A</b>. The next line contains another character string <b>B</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a single integer, the <i>longest common pattern length</i> between <b>A</b> and <b>B</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>1 ≤ |A|, |B| ≤ 10000 (10<sup>4</sup>)</b>, where <b>|S|</b> denotes the length of the string <b>S</b></li>
<li>Both of <b>A</b> and <b>B</b> can contain only alphabet characters (both lower and upper case) and digits</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
abcd
xyz
abcd
bcda
aabc
acaa
Codechef
elfedcc

<b>Output:</b>
0
4
3
5
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> There is no common character.</p>
<p><b>Example case 2.</b> All the characters are same.</p>
<p><b>Example case 3.</b> Three characters (<b>a</b>, <b>a</b> and <b>c</b>) are same.</p>
<p><b>Example case 4.</b> This sample is mentioned by the statement.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shiplu">shiplu</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-12-2013</td>
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