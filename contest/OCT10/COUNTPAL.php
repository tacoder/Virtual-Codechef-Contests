<?php require("../../includes/header.php"); ?><h1>Count palindromes</h1><div class="content">

<p>Each palindrome can be always created from the other palindromes, if a single character is also a palindrome. For example, the string "bobseesanna" can be created by some ways:<br />
* bobseesanna = bob + sees + anna<br />
* bobseesanna = bob + s + ee + s + anna<br />
* bobseesanna = b + o + b + sees + a + n + n + a<br />
...<br />
We want to take the value of function CountPal(s) which is the number of different ways to use the palindromes to create the string s by the above method.</p>
<h3>Input</h3>
<p>The string s</p>
<h3>Output</h3>
<p>The value of function CountPal(s), taking the modulo of 1 000 000 007 (10<sup>9</sup>+7)</p>
<h3>Limitations</h3>
<p>0 &lt; |s| &lt;= 1000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
bobseesanna

<b>Output:</b>
18
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anshuman_singh">anshuman_singh</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-08-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.25 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>