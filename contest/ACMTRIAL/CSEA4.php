<?php require("../../includes/header.php"); ?><h1>Notebook</h1><div class="content">

<p>--I just bought Leonardo's secret notebook!<br/><br />
Rare object collector Stan Ucker was really agitated<br/><br />
but his friend, special investigator Sarah Kepticwas<br />
unimpressed. <br/><br />
--How do you know it is genuine? <br/><br />
-- Oh, it must be, at that price. And it is written in<br />
the da Vinci code. <br/><br />
Sarah browsed a few of the pages. It was obvious to<br />
her that the code was a substitution cipher, where<br />
each letter of the alphabet had been substituted by<br />
another letter. <br/><br />
--Leonardo would have written the plain-text and<br />
left it to his assistant to encrypt, she said. And he<br />
must have supplied the substitution alphabet to be<br />
used. If we are lucky, we can find it on the back<br />
cover! <br/><br />
She turned up the last page and, lo and behold, there was a single line of all 26 letters of the<br />
alphabet: <br/><br />
QWERTYUIOPASDFGHJKLZXCVBNM<br/><br />
-- This may be Leonardo's instructions meaning that each A in the plain-text was to be<br />
replaced by Q, each B withW, etcetera. Let us see... <br/><br />
To their disappointment, they soon saw that this could not be the substitution that was used<br />
in the book. Suddenly, Stan brightened. <br/><br />
-- Maybe Leonardo really wrote the substitution alphabet on the last page, and by mistake<br/><br />
his assistant coded that line as he had coded the rest of the book. So the line we have here is<br />
the result of applying some permutation TWICE to the ordinary alphabet! <br/><br />
Sarah took out her laptop computer and coded fiercely for a few minutes. Then she turned<br />
to Stan with a sympathetic expression. <br/><br />
-- No, that couldn't be it. I am afraid that you have been duped again, my friend. In all<br />
probability, the book is a fake. <br/><br />
Write a program that takes a permutation of the English alphabet as input and decides if it<br />
may be the result of performing some permutation twice. <br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<h3>Input</h3>
<p>The input begins with a positive number on a line of its own telling the number of test cases<br />
(at most 500). Then for each test case there is one line containing a permutation of the 26<br />
capital letters of the English alphabet.</p>
<h3>Output</h3>
<p>For each test case, output one line containing Yes if the given permutation can result from<br />
applying some permutation twice on the original alphabet string ABC...XYZ, otherwise output<br />
No.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
QWERTYUIOPASDFGHJKLZXCVBNM
ABCDEFGHIJKLMNOPQRSTUVWXYZ

<b>Output:</b>
No
Yes
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cseaiitg">cseaiitg</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-09-2010</td>
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