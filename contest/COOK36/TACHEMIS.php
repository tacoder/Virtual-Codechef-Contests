<?php require("../../includes/header.php"); ?><h1>Compressed String</h1><div class="content">
<p>After the first chemistry lesson, Ron realized that the simplest way to<br /> compress a string of Latin characters is<br /> to write it down as a list of pairs of character and integer. This is done by writing each segment of identical characters as the character and the length of the segment.<br /> For example the string s = "AABBBCCCC" can be compressed as [ ('A', 2), ('B', 3), ('C', 4) ].<br /> In compressed notation, two consecutive pairs cannot have same character. For example [('A', 2), ('A', 4)] is invalid and its correct representation is [('A', 6)].</p>
<p>After the first chemistry lesson, Ron realized that the simplest way to compress a string of Latin characters is to write it down as a list of pairs of character and integer. This is done by writing each segment of identical characters as the character and the length of the segment.<br /> For example the string s = "AABBBCCCC" can be compressed as [ ('A', 2), ('B', 3), ('C', 4) ].<br /> In compressed notation, two consecutive pairs cannot have same character. For example [('A', 2), ('A', 4)] is invalid and its correct representation is [('A', 6)]. Ron has written down a string in compressed notation, and he wants to count the number of sub-strings (a segment of consecutive characters) of the original string that are palindromes.</p>
<p>Recall that a palindrome is a non-empty string that reads the same backward as forward. Two sub-strings are considered to be different if they have different lengths or start at different positions in the original string.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. <br /><br /> Each test case gives a string in compressed notation. The first line of each test case contains an integer <b>K</b>, the number of (character, integer) pairs in compressed notation. Each of the next <b>K</b> lines contains a single character, followed by a space, followed by a positive integer, the i<sup>th</sup> line being the i<sup>th</sup> pair in the list.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the corresponding answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10,000(10<sup>4</sup>)</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>100,000(10<sup>5</sup>)</b></li>
<li>Each character is an upper-case Latin character, i.e. 'A' through 'Z'. </li>
<li>The length of the original string does not exceed <b>1,000,000,000(10<sup>9</sup>)</b></li>
<li>The sum of the <b>K</b>s over all test cases will not exceed <b>1,000,000(10<sup>6</sup>)</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
A 2
B 2
3
A 2
B 1
A 2
1
A 11

<b>Output:</b>
6
9
66

</pre>
<h3>Explanation</h3>
<p><b>Example case 1: </b><br /> The original string is AABB so the sub-strings<br /> (represented by positions of the first and the last character) which are palindromes are (1, 1), (1, 2), (2, 2), (3, 3), (3, 4) and (4, 4).</p>
<p><b>Example case 2: </b><br /> The original string is AABAA. The sub-strings that are palindromes are the 4 sub-strings A, the 2 sub-strings AA and the sub-strings B, ABA and AABAA. Together, they make 9 palindromes.</p>
<p><b>Example case 3: </b><br /> The original string is A repeated 11 times, so all the sub-strings are palindromes.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/keshav_57">keshav_57</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-05-2013</td>
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