<?php require("../../includes/header.php"); ?><h1>Awesomeness of Strings</h1><div class="content">
<p> </p>
<p>
Awesomeness of a string is defined by a pair of a character C and an integer F,  satisfying the following conditions :</p>
<ul>
<li> C must belong to the  given string S and there must be a substring subS of S having length equal to F such that all the characters in subS are equal to c.
	</li>
<li> F should be as large as possible.
	</li>
</ul>

<p>
	Your aim is to maximize the value of F. If there are more than one c whose maximum F value is same than you need to chose the character c<br />
	with minimum ascii value.
</p>
<p>
	For example let’s take S = abbbaaabad. subS is written in bold.</p>
<ol>
<li>
Take c = ‘a’ :<br />
Maximum possible F value is 3 (abbb<b>aaa</b>bad).
</li>
<li>
Take c = ‘b’:<br />
Maximum possible F value is 3 (a<b>bbb</b>aaabad).
</li>
<li>
Take c = ‘d’:<br />
Maximum possible F value is 1 (abbbaaaba<b>d</b>).
</li>
</ol>

<p>
So that awesomeness of  abbbaaabad is defined by c = ‘a’ and F = 3. First priority is to maximize the value of F (we prefered 3 over 1).<br />
If there are more than one c whose maximum F value is same then we prefer the c with minimum ascii value (we prefered ‘a’ over ‘b’).
</p>
<p>
You will be given a string and you need to find its awesomeness.
</p>
<h3>Input</h3>
<p>
Only line of the input will contain a string S.
</p>
<h3>Output</h3>
<p>
Output two lines. First line should contain value of c, whereas second line should contain value of F.
</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ length of string S ≤  10^5</li>
<li> S contains only lowercase alphabets of English Language (i.e. from 'a' to 'z').
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
abbbaaabad

<b>Output:</b>
a
3
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Example taken from problem statement</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2014</td>
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