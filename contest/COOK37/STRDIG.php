<?php require("../../includes/header.php"); ?><h1>Chef and The String of Digits</h1><div class="content">
<p>The Chef has written all the numbers from <b>1</b> to <b>10<sup>9</sup></b> consecutively on a board. Let <b>P</b> be the long string<br /> obtained by concatenating the numbers written on the board consecutively. Given below are the first few digits of the long string <b>P</b>.</p>
<p><code>123456789101112131415161718192<b>02122</b>232425262728293031323334353637383940....</code></p>
<p>The Chef has written all the numbers from <b>1</b> to <b>10<sup>9</sup></b> consecutively on a board. Let <b>P</b> be the long string<br /> obtained by concatenating the numbers written on the board consecutively. Given below are the first few digits of the long string <b>P</b>.</p>
<p><code>123456789101112131415161718192<b>02122</b>232425262728293031323334353637383940....</code></p>
<p>Given another string <b>Q</b>, he is wondering whether <b>Q</b> is a substring of the string <b>P</b>.<br /> For example, <b>Q</b>="02122" is a substring of <b>P</b>, and has been marked in bold above.<br /> <br /><br /></p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains <b>T</b> denoting the number of test cases. Each of the following <b>T</b> lines contain a string <b>Q</b>.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, print "<b>YES</b>" if the given string is contained in the string <b>P</b>, otherwise print "<b>NO</b>".</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li> <b>1</b> ≤ length of <b>Q</b> ≤ <b>100000 (10<sup>5</sup>)</b> </li>
<li><b>Q</b> consists of only digits(0-9)</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
23456789101
3216546546546546545
02122
<br />
<b>Output:</b>
YES
NO
YES
<br /></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rustinpiece">rustinpiece</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-08-2013</td>
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