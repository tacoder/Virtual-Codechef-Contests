<?php require("../../includes/header.php"); ?><h1>Recover the Manuscripts</h1><div class="content">

<p>The inhabitants of the Holumba Island use a language which uses palindromes. Every word in the language is a palindrome. The Holumbians have a kept a dictionary of all their words in a secret system to prevent the enemy islands from stealing it. But, the enemy island hackers have hacked into the secret system and have messed up the dictionary. You have to convert all the wrong words written by the enemy hackers into the original words of the Holumbians.
</p>

<h3>Input</h3>
<p>Take a word from the user(str).</p>

<h3>Output</h3>
<p><ul>
<li>The largest palindrome word within the given user entered word. If no palindrome word is found then output – ‘None’. </li>
<li>In case of two equal length palindromes in the same word, accept the one which comes earlier in the word.</li>
</ul>
</p>
<h3>Constraints</h3>
<p>Program input should be case sensitive. </p>
<h3>Example</h3>
<ul>
<li>Input<br />kara<br />Output<br />ara</li>
<li>Input<br />abacdc<br />Output<br />aba</li>
<li>Input<br />abaccdcc<br />Output<br />ccdcc</li>
</ul>
<h3>Explanation</h3>
<p>For input<br /><br />
abaccdcc<br /><br />
The palindromes in it are – aba,cdc,ccdcc.<br /><br />
But the largest palindrome is ccdcc.<br /><br />
Output is <br /><br />
ccdcc<br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aranta">aranta</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-02-2014</td>
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