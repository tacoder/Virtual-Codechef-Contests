<?php require("../../includes/header.php"); ?><h1>Anagram</h1><div class="content">

<p>Problem text...<br />
An anagram is a word or phrase formed by rearranging the letters of another word or<br />
phrase. For example, “carthorse” is an anagram of “orchestra”. Blanks within a<br />
phrase are ignored in forming anagrams. Thus, “orchestra” and “horse cart” are also<br />
anagrams.<br />
Write a program that read a list of phrases and prints all pairs of anagrams occurring<br />
in the list.</p>
<h3>Input</h3>

<p>Input description...<br />
The Input file will contain a single integer at the first line of the input, indicate the<br />
number of test case you need to test followed by a blank line. Each test case will<br />
consist of from 1 to 100 lines. A completely empty or blank line signals the end of a<br />
test case. Each line constitutes one phrase.</p>
<h3>Output</h3>

<p>Output description...<br />
Some number of lines (including possibly 0 if there are no anagrams in the list), each<br />
line containing two anagrammatic phrases separated by ‘=’.<br />
Each anagram pair should be printed exactly once, and the order of the two phrases<br />
within a printed pair must be lexicographic, as well as the first phrases and the<br />
second ones in case some first are equal.<br />
Two consecutive outputs for two consecutive inputs is separated by a single blank<br />
line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
carthorse
horse
horse cart
i do not know u
ok i now donut
orchestra

<b>Output:</b>
carthorse = horse cart
carthorse = orchestra
horse cart = orchestra
i do not know you = ok i now donut
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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