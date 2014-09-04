<?php require("../../includes/header.php"); ?><h1>Save Mumbai</h1><div class="content">
<p>
Intelligence Bureau(IB) has found an email conversation between Osama bin Laden and Al-Qaeda People in cryptic language. The email contains some encrypted message and some symbols next to it. IB people were able to decrypt the message containing details of planning for a bomb blast in Mumbai  but were unable to decrypt the symbols. They have come to a conclusion that each symbol represents a digit and the decrypted symbols represents the number of seconds remaining for the bomb blast. They have to decrypt the symbols so that they can plan to vacant the site well before time. <br /></p>
<p>They have no idea what each symbol means. They were not sure what each digit means or what base the Al-Qaeda people were using. For example, if Al-Qaeda people wrote “mn5mo888”, they could have meant “31536000” in base 10 -- exactly 1 year or they could have meant “21325444” in base 6 --  633700 seconds. IB people were sure of 3 things: the number is positive, number never start with zero and Al-Qaeda people were not using unary ( base 1 ).<br />
<br /><br />
Help the IB people to determine the minimum possible number of seconds remaining for the bomb blast.
</p>
<h3>Input</h3>
<p>The first line of input contains a single integer, T. T test cases follow. Each test case is a string on a line by itself. The line will contain only characters in the 'a' to 'z' and '0' to '9' ranges (with no spaces and no punctuation), representing the message. The test cases are independent, and can be in different bases with the symbols meaning different things.
</p>
<h3>Output</h3>
<p>For each test case, output a line with the minimum number of seconds before the bomb blasts.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>the length of each line</b> &lt; <b>61</b></li>
<li><b>The answer will never exceed 10^18</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
11001001
us
zig

<b>Output:</b>
201
2
11
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/harshg0910">harshg0910</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.05 sec</td>
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