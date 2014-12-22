<?php require("../../includes/header.php"); ?><h1>Chef and Substrings</h1><div class="content">
<h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/mandarin/GERALD3.pdf">here</a></h3>
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/russian/GERALD3.docx">here</a></h3>
<h3>Problem Statement</h3>
<p>Chef has a string <b>S = S<sub>1</sub>S<sub>2</sub> ... S<sub>N</sub></b>, consisting of <b>N</b> lowercase Latin letters. Also he has <b>M</b> pairs of integers <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b> (<b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>N</b>).For each pair <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>, Chef writes out all distinct substrings of string <b>S</b>, which are started from positions <b>L<sub>i</sub></b>, <b>L<sub>i</sub> + 1</b>, ..., <b>R<sub>i</sub></b>.<br />Your task is to help Chef. That is, for each pair, find out how many substrings that he needs to write.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />The first line of each test case contains non-empty string <b>S</b> and the second line contains positive integer <b>M</b>.<br />
Each of the next <b>M</b> lines contains a pair of integers <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>.
</p>
<h3>Output</h3>
<p>For each pair of each test case print the required number of substrings.</p>
<h3>Constraints</h3>
<ul>
<li>String <b>S</b> contains only lowercase Latin letters.</li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>N</b>.</li>
<li>Sum of all length's of <b>S</b> for test cases is not greater than <b>50000</b>. Sum of all <b>M</b> values for test cases is not greater than <b>50000</b>.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
ababa
4
1 1
1 5
5 5
3 4
a
1
1 1
<b>Output:</b>
5
9
1
5
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gerald">gerald</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece">rustinpiece</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-11-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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