<?php require("../../includes/header.php"); ?><h1>Forgot Password</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/FORGETPW.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/FORGETPW.pdf">Russian</a>.</h3>
<p>Chef changed the password of his laptop a few days ago, but he can't remember it today. Luckily, he wrote the encrypted password on a piece of paper, along with the rules for decryption.</p>
<p>The encrypted password is a string <b>S</b> consists of ASCII printable characters except space (ASCII 33 - 126, in decimal notation, the same below). Read here for more details: <a title="ASCII printable characters" href="http://en.wikipedia.org/wiki/Printable_characters#ASCII_printable_characters">ASCII printable characters</a>.</p>
<p>Each rule contains a pair of characters <b>c<sub>i</sub></b>, <b>p<sub>i</sub></b>, denoting that every character <b>c<sub>i</sub></b> appears in the encrypted password should be replaced with <b>p<sub>i</sub></b>. Notice that it is not allowed to do multiple replacements on a single position, see <b>example case 1</b> for clarification.</p>
<p>After all the character replacements, the string is guaranteed to be a positive decimal number. The <b>shortest notation</b> of this number is the real password. To get the shortest notation, we should delete all the unnecessary leading and trailing zeros. If the number contains only non-zero fractional part, the integral part should be omitted (the shortest notation of "0.5" is ".5"). If the number contains zero fractional part, the decimal point should be omitted as well (the shortest notation of "5.00" is "5").</p>
<p>Please help Chef to find the real password.</p>

<h3>Input</h3>
<p>The first line of the input contains an interger <b>T</b> denoting the number of test cases.<br />
The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single interger <b>N</b>, denoting the number of rules.</p>
<p>Each of the next <b>N</b> lines contains two space-separated characters <b>c<sub>i</sub></b> and <b>p<sub>i</sub></b>,<br />
denoting a rule.</p>
<p>The next line contains a string <b>S</b>, denoting the encrypted password.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the real password.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li>0 ≤ <b>N</b> ≤ 94</li>
<li>All characters in <b>S</b> and <b>c<sub>i</sub></b> may be any ASCII printable character except space. (ASCII 33 - 126)</li>
<li>All <b>c<sub>i</sub></b> in a single test case are distinct.</li>
<li><b>p<sub>i</sub></b> is a digit ("0" - "9") or a decimal point "." (ASCII 46).</li>
<li>The total length of <b>S</b> in a single input file will not exceed 10<sup>6</sup>.</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
4
2
5 3
3 1
5
0
01800.00
0
0.00100
3
x 0
d 3
# .
0xd21#dd098x

<b>Output:</b>
3
1800
.001
321.33098
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/stzgd">stzgd</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-05-2014</td>
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