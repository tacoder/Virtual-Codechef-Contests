<?php require("../../includes/header.php"); ?><h1>Roman Numerals</h1><div class="content">

<p>Problem text...<br />
Many persons are familiar with the Roman numerals for relatively small<br />
numbers. The symbols i, v, x, l and c represent the decimal values 1, 5, 10, 50 and<br />
100 respectively. To represent other values, these symbols, and multiples where<br />
necessary, are concatenated, with the smaller valued symbols written further to the<br />
right. For example, the number 3 is represented as "iii", and the value 73 is<br />
represented as "lxxiii". The exceptions to this rule occur for numbers having units<br />
values of 4 to 9, and for tens values of 40 or 90. For these cases, the Roman<br />
numerals representations are "iv" (4), "ix" (9), "xl" (40) and "xc" (90). So the<br />
Roman numeral representations for 24,39,44,49 and 94 are xxiv, xxxix, xliv, xlix and<br />
xciv respectively.<br />
The preface of many books have pages numbered with Roman numerals,<br />
starting with "i" for the first page of the preface, and continuing in sequence. Assume<br />
books with pages having 100 or fewer pages of preface. How many i, v, x, l and c<br />
characters are required to number the pages in the preface? For example, in a five<br />
page preface we'll use the Roman numerals i, ii, iii, iv and v, meaning we need 7 i<br />
characters and 2 v characters.</p>
<h3>Input</h3>
<p>Input description...<br />
The input will consists of a sequence of integers in the range 1 to 100,<br />
terminated by a zero. For each integer, excepts the final zero, determine the number<br />
of different types of characters needed to number the prefix pages with Roman<br />
numerals</p>
<h3>Output</h3>
<p>Output description...<br />
For each integer in the input, write one line containing the five counts<br />
in the order i, v, x, l, c.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
20
99
0

<b>Output:</b>
3 0 0 0 0
28 10 14 0 0
140 50 150 50 10
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>10 sec</td>
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