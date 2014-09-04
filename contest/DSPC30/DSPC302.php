<?php require("../../includes/header.php"); ?><h1>DOUBLE NEAR PALINDROME</h1><div class="content">

<p class="MsoNormal" align="center"><b><u><span lang="EN-US">Double Near Palindromes</span></u></b></p>
<p class="MsoNormal"><span lang="EN-US">C-3PO is an expert in<br />
pretty much every language. His <span class="GramE">conversation with R2-D2 are</span><br />
always fun to observe un that R2-D2 speaks in Droid, C-3PO speak in English,<br />
and they understand each other perfectly! Anyway, humans and droids both enjoy<br />
playing word games.</span></p>
<p> A palindrome is a word or sequence of one or more letters<br />
that reads the same forwards and backwards. A near palindrome is a word or<br />
sequence that can be changed to or kept a palindrome by changing exactly one<br />
letter to a different letter. For example, BAT is a near palindrome, since<br />
changing the T to a B would make the word a palindrome: BAB. PEEP is not a near<br />
palindrome: although PEEP is palindrome, changing any letter would remove its<br />
palindrome status.</p>
<p>A double near palindrome is a word or sequence that consists<br />
of two near palindromes concatenated together. For example, BATMAN is a double<br />
near palindrome, since BAT and MAN are both near palindromes. Given a list of<br />
words, you are to determine which words are double near palindromes and which<br />
are not.</p>
<p class="MsoNormal"><b><span lang="EN-US">Input</span></b></p>
<p class="MsoNormal"><span lang="EN-US">The input consists of one<br />
or more words. All words (except the last) will be inclusively between 1 and 25<br />
letters long and will consist of entirely of capital letters. The last word<br />
will be *END* and is not be processed; it simply indicates the end of the<br />
input. There may be any number of spaces and characters before, after, and<br />
between words.</span></p>
<p class="MsoNormal"><b><span lang="EN-US">Output</span></b></p>
<p class="MsoNormal"><span lang="EN-US">The output cases are to<br />
appear in the same order in which they appear in the input. For each input<br />
case, you are to print either w is a double near palindrome. <span class="GramE">or</span><br />
w is not a double near palindrome. whichever is appropriate, where w is the<br />
input word. Exactly one should follow each output case (meaning there should be<br />
no blank lines in the output).</span></p>
<p class="MsoNormal"><span lang="EN-US"> </span></p>
<p class="MsoNormal"><b><u><span lang="EN-US">Sample Input:</span></u></b></p>
<p class="MsoNormal"><span lang="EN-US">BATMAN<br /> CONSTANTINOPLE <br />*END*</span></p>
<p class="MsoNormal"><span lang="EN-US"> </span></p>
<p class="MsoNormal"><b><u><span lang="EN-US">Sample Output:</span></u></b></p>
<p class="MsoNormal"><span lang="EN-US">BATMAN is a double near palindrome.<br /> CONSTANTINOPLE is not a double near palindrome.</span></p>
<p class="MsoNormal"><span lang="EN-US"> </span></p>
<p class="MsoNormal"><span lang="EN-US">Time <span class="GramE">limit<span><br />
</span>:</span><span>   </span>1s</span></p>
<p class="MsoNormal"><span lang="EN-US">Source limit:<span>       </span>50000B</span></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ganesha">ganesha</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-03-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>