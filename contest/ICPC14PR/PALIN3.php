<?php require("../../includes/header.php"); ?><h1>3-Palindromes</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/PALIN3/mandarin/MINXOR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/PALIN3/russian/MINXOR.pdf">Russian</a> as well.</h3>
<p>
Mike likes strings. He is also interested in algorithms. A few days ago he discovered for himself a very nice problem:
</p>
<p><i><br />
You are given a digit string <b>S</b>. You need to count the number of substrings of <b>S</b>, which are palindromes.<br />
</i></p>
<p>
Do you know how to solve it? Good. Mike will make the problem a little bit more difficult for you.
</p>
<p><i><br />
You are given a digit string <b>S</b>. You need to count the number of substrings of <b>S</b>, which are palindromes without leading zeros and can be divided by 3 without a remainder.<br />
</i></p>
<p>
A string is a palindrome if it reads the same backward as forward. A string is a palindrome without leading zeros if it reads the same backward as forward and doesn't start with symbol '0'. A string is a digit string, if it doesn't contain any symbols except '0', '1', '2', ..., '9'.
</p>
<p>
Please, note that you should consider string "0" as a palindrome without leading zeros.
</p>
<h3>Input</h3>

<p>The first line of the input contains a digit string <b>S</b>.</p>
<h3>Output</h3>
<p>Your output should contain the only integer, denoting the number of substrings of <b>S</b>, which are palindromes without leading zeros and can be divided by 3 without a remainder.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>|S|</b> ≤ 1 000 000</p>
<h3>Example</h3>
<pre><b>Input:</b>
1045003

<b>Output:</b>
4
</pre>
<h3>Explanation</h3>
<p>
In the example you should count <b>S</b>[2..2] = "0", <b>S</b>[5..5] = "0", <b>S</b>[6..6] = "0" and <b>S</b>[7..7] = "3".
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-02-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>