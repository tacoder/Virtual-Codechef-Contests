<?php require("../../includes/header.php"); ?><h1>Palindrome</h1><div class="content">

<p>Do you know that The Chef has a special interest in palindromes? Yes he does! Almost all of the dishes in his restaurant is named by a palindrome strings. The problem is that a name of a dish should not be too long, so The Chef has only limited choices when naming a new dish.</p>
<p>For the given positive integer <b>N</b>, your task is to calculate the number of palindrome strings of length not exceeding <b>N</b>, that contain only lowercase letters of English alphabet (letters from 'a' to 'z', inclusive). Recall that a palindrome is a string that reads the same left to right as right to left (as in "radar").</p>
<p>For example:</p>
<ul>
<li>For <b>N = 1</b>, we have <b>26</b> different palindromes of length not exceeding <b>N</b>:<br /> "a", "b", ..., "z".</li>
<li>For <b>N = 2</b> we have <b>52</b> different palindromes of length not exceeding <b>N</b>:<br /> "a", "b", ..., "z",<br /> "aa", "bb", ..., "zz".
</li>
<li>For <b>N = 3</b> we have <b>728</b> different palindromes of length not exceeding <b>N</b>:<br /> "a", "b", ..., "z",<br /> "aa", "bb", ..., "zz",<br /> "aaa", "aba", ..., "aza",<br /> "bab", "bbb", ..., "bzb",<br /> ...,<br /> "zaz", "zbz", ..., "zzz".
</li>
</ul>
<p>Since the answer can be quite large you should output it modulo <b>1000000007</b> (<b>10<sup>9</sup> + 7</b>). Yes, we know, most of you already hate this modulo, but there is nothing we can do with it :)</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains a single integer <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer for the corresponding test case.</p>
<h3>Constrains</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1
2
3
4
100

<b>Output:</b>
26
52
728
1404
508533804
</pre><h3>Explanation</h3>
<p>The first three examples are explained in the problem statement above.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-01-2013</td>
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