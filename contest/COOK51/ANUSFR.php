<?php require("../../includes/header.php"); ?><h1>Substring and five rules</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/mandarin/ANUSFR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/russian/ANUSFR.pdf">Russian</a> as well.</h3>
<p>
Given a string <b>S</b>. You need to find a substring which satisfies the following conditions and output its start and end positions in the string <b>S</b>.</p>
<ul>
<li>Has exactly <b>x</b> different characters in it.
</li><li>Length of substring is atleast <b>minLength</b> and atmost <b>maxLength</b>.
</li><li>substring's start position is greater than or equal to <b>L</b>.
</li><li>substring's end position is less than or equal to <b>R</b>.
</li></ul>

<p>
If there are multiple substrings that satisfy above conditions, choose the one that has least start position. If there are still multiple substrings, choose the one that has least end position. See output section for more details
</p>
<h3>Input</h3>
<p>
First line of input contains the string <b>S</b><br />
The second line of the input contains an integer <b>Q</b> denoting the number of queries.<br />
Only line of each query contains 5 space separated integers, <b>x</b>, <b>minLength</b>, <b>maxLength</b>, <b>L</b>, <b>R</b></p>
<h3>Output</h3>
<p>For each query, output one line with 2 space separated integers, start and end positions of substring in S. If there is no valid solution output "-1 -1" instead</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>|S| (Length of S)</b> ≤ <b>10^5</b>
</li><li><b>S contains only lower case english alphabet ('a' - 'z')</b>
</li><li><b>1</b> ≤ <b>Q</b> ≤ <b>10^5</b>
</li><li><b>1</b> ≤ <b>x</b> ≤ <b>26</b>
</li><li><b>1</b> ≤ <b>minLength</b> ≤ <b>maxLength</b> ≤ <b>|S|</b>
</li><li><b>0</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>|S|-1</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input</b>
abcc
3
2 1 3 0 3
2 3 3 0 3
1 2 2 0 2

<b>Output</b>
0 1
1 3
-1 -1
</pre><h3>Explanation</h3>
<p>
<b>Testcase #1</b><br />
We need a substring with 2 different characters, of length 1 or 2 or 3 and in between S[0..3].<br />
S[0..1] = "ab", which has 2 different characters, length 2, and is in between S[0..3]
</p>
<p>
<b>Testcase #2</b><br />
Here we need the length to be 3.<br />
S[1..3] = "bcc", has 2 different characters, length 3, and is in between S[0..3]
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/kostya_by">kostya_by</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-10-2014</td>
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