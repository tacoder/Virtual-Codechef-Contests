<?php require("../../includes/header.php"); ?><h1>Problem 5</h1><div class="content">

<p>
Some of the secret doors contain a very interesting word puzzle. The team of archaeologists has</p>
<p>to solve it to open that doors. Because there is no other way to open the doors, the puzzle is</p>
<p>very important for us.</p>
<p>There is a large number of magnetic plates on every door. Every plate has one word</p>
<p>written on it. The plates must be arranged into a sequence in such a way that every</p>
<p>word begins with the same letter as the previous word ends. For example, the word</p>
<p>'annum'can be followed by the word 'motorola'. Your task is to write a computer program </p>
<p>that will read the list of words and determine whether it is possible to arrange all of </p>
<p>the plates in a sequence (according to the given rule) and consequently to open the door.</p>
<h3>Input</h3>
<p>
The input consists of T test cases. The number of them (T, equal to about 500) is</p>
<p>given on the first line of the input file. Each test case begins with a line containing </p>
<p>a single integer number N that indicates the number of plates (1 &lt;= N &lt;= 100000). </p>
<p>Then exactly N lines follow, each containing a single word. Each word contains at least </p>
<p>two and at most 1000 lowercase characters, that means only letters 'a' through 'z' will </p>
<p>appear in the word. The same word may appear several times in the list.</p>
<h3>Output</h3>
<p>
Your program has to determine whether it is possible to arrange all the plates in a </p>
<p>sequence such that the first letter of each word is equal to the last letter of the </p>
<p>previous word. All the plates from the list must be used, each exactly once. The words</p>
<p>mentioned several times must be used that number of times.If there exists such an </p>
<p>ordering of plates, your program should print the sentence "Ordering is possible.". </p>
<p>Otherwise, output the sentence "The door cannot be opened.".</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2
annum
noone

<b>Output:</b>
The door cannot be opened.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vishesh_sigma">vishesh_sigma</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>50 sec</td>
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