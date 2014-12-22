<?php require("../../includes/header.php"); ?><h1>Level Of Difference</h1><div class="content">

<p>
How to measure the difference between two strings? This is a midnight question of biological scientists. The number of pairs of different characters in the same position may be a good indicator. However, it will not work well in the case when two strings have different lengths. The longest common subsequence will also fail when strings are too long.
</p>
<p>
Recently, Professor of Math L.P.C. has invented the special method to deal with this problem. His invention has been known as a simple but creative solution: the difference is based on the number of substrings (a non-empty group of consecutive characters) of one string that are not substrings of the other string.
</p>
<p>
Let's learn about his invention. Call the first string as <b>A</b> and the second string as <b>B</b>. Let <b>S</b> be the set of all different substrings of <b>A</b>, and <b>T</b> be the set of all different substrings of <b>B</b>. We then define another set <b>P</b> which consists of all the strings that belongs to <b>S</b> or <b>T</b>, but not both. According to the Professor L.P.C. method, the size of <b>P</b> is a good indicator to measure the difference between <b>A</b> and <b>B</b>.
</p>
<p>
For example, let <b>A = aacd</b> and <b>B = cdaa</b>. We can see that:<br/> <b>S = {a, aa, aac, aacd, ac, acd, c, cd, d}</b>,<br/> <b>T = {c, cd, cda, cdaa, d, da, daa, a, aa}</b>,<br/> <b>P = {aac, aacd, ac, acd, cda, cdaa, da, daa}</b>.<br/> Size of <b>P</b> is <b>8</b> and we can say the level of difference between <b>A</b> and <b>B</b> is <b>8</b>.<br />
</br/></br/></br/></br/></p>
<p>
Your task is to find this indicator.
</p>
<h3>Input</h3>
<p>
The first line of the input contains the string <b>A</b>. The second line contains the string <b>B</b>.
</p>
<h3>Output</h3>
<p>
Output a single line containing the level of difference between strings <b>A</b> and <b>B</b> according to definition above.
</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> &le; <b>|A|</b> &le; <b>100000</b>, where <b>|A|</b> denotes the length of the string <b>A</b></li>
<li><b>1</b> &le; <b>|B|</b> &le; <b>100000</b></li>
<li>Both <b>A</b> and <b>B</b> consist only of lowercase English letters (from 'a' to 'z')</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
aacd
cdaa

<b>Output:</b>
8
</pre><h3>Explanation</h3>
<p>
Example is explained in the problem statement above.
</p>
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
            <td>27-01-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>