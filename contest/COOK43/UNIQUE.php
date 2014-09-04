<?php require("../../includes/header.php"); ?><h1>Chef and Uniqueness</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/COOK43/mandarin/UNIQUE.pdf" target="_blank">Mandarin Chinese</a> and <a href="/download/translated/COOK43/russian/UNIQUE.pdf" target="_blank">Russian</a> as well.</h3>
<p>Today chef has decided to cook a string <b>S</b> of length <b>N</b>. But he will not just cook the whole string, but a unique substring of the given string <b>S</b>. A substring is unique if it occurs in the string <b>S</b> only once.  Chef also does not like all the indices of a string. He wants a special index <b>i</b> to be in the unique substring. But the length of the unique substring should be minimized.</p>
<p>Chef wants your help to find an unique substring of minimum possible length which contains the index <b>i</b>. If there are several such substrings, chef will take the lexicographically smallest one. But chef has not told you the value of <b>i</b> yet. So you have to find the answer for all <b>i</b> (<b>1</b> to <b>N</b>).</p>
<h3>Input</h3>
<p>Input contains a single line containing the string <b>S</b> of length <b>N</b> and it consists of lower case letters only.</p>
<h3>Output</h3>
<p>Print <b>N</b> lines, where <b>i</b>-th line will contain two space separated integers <b>P<sub>i</sub></b> and <b>L<sub>i</sub></b>. <b>P<sub>i</sub></b> is the starting position (<b>1</b>-indexed) and <b>L<sub>i</sub></b> is the length of the shortest unique substring which contains the index <b>i</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>S</b> contains only lower case letters.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
abcab

<b>Output:</b>
1 3
2 2
3 1
3 2
3 3

</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> <br /><br /> i = 1, shortest unique substring is "abc"<br /><br /> i = 2, shortest unique substring is "bc"<br /><br /> i = 3, shortest unique substring is "c"<br /><br /> i = 4, shortest unique substring is "ca"<br /><br /> i = 5, shortest unique substring is "cab"</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shiplu">shiplu</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece‎">rustinpiece‎</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-01-2014</td>
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