<?php require("../../includes/header.php"); ?><h1>Dyslexic Gollum</h1><div class="content">

<p><html> <body></body></html></p>
<h1 style="font-family: Arial;"><small>ACM International Collegiate     Programming Contest, Asia-Amritapuri Site, 2012</small></h1>
<h2>Dyslexic Gollum<br /> </h2>
<p> <i>'Light, light of Sun and Moon, he still feared and hated, and he always will, I think; but he was cunning.     He found he could hide from daylight and moonshine, and make his way swiftly and softly by dead of night with his pale cold eyes, and catch small     frightened or unwary things. He grew stronger and bolder with new food and new air.     He found his way into Mirkwood, as one would expect.'</i> - Gandalf, describing Gollum after he ventured forth from Moria.</p>
<p> Gollum has spent half a millennium in the long darkness of Moria, where his eyes grew used to the dark, and without caring for reading or writing, he became dyslexic. Indeed, as much as he hates the Moon and the Sun, he also hates strings with long palindromes in them.</p>
<p> Gollum has a tolerance level of <b>K</b>, which means that he can read a word so long as it does not contain any palindromic substring of length <b>K</b> or more. Given the values <b>N</b> and <b>K</b>, return how many BINARY strings of length <b>N</b> can Gollum tolerate reading.</p>
<p></p>
<h3>Input (STDIN):</h3>

<p> The first line contains <b>T</b>, the number of test cases.<br /> Each test case consists of one line containing 2 integers, <b>N</b> and <b>K</b>.</p>
<h3>Output (STDOUT):</h3>

<p> For each test case, output the answer modulo 1,000,000,007.</p>
<h3>Constraints:</h3>

<p><b> 1 &lt;= T &lt;= 100<br /> 1 &lt;= N &lt;= 400<br /> 1 &lt;= K &lt;= 10</b></p>
<p></p>
<h3>Sample Input:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 3<br /> 2 2<br /> 3 3<br /> 3 4<br /> </span></p>
<h3>Sample Output:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 2<br /> 4<br /> 8<br /> </span></p>
<h3>Notes/Explanation of Sample Input:</h3>

<p> For the first test case, 01 and 10 are the valid binary strings, while 00 and 11 are invalid.<br /> For the second test case, 001, 011, 100, 110 are the valid binary strings.<br /> For the third test case, all possible binary strings of length 3 are valid.</p>
<p>  </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>