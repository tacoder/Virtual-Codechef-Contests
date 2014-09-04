<?php require("../../includes/header.php"); ?><h1>Chain of Words</h1><div class="content">

<p> </p>
<p>Chef has invented a brand new dish in his restaurant. He decided to name it in an interesting way. Chef is a big fan of “Chain of Words”. Chain of words is a chain which is made up of words arranged in such a way that the last letter of each word is equal to first letter of the word connected to it. For example,<br /> abc->cbd->def is a valid word chain of length 3. Now chef wants to use this method to name his new dish. He will choose some or all of the words present in his dictionary to form a chain in such a way that maximum words are used from his dictionary. If there are multiple chains possible with same length then choose the one which comes alphabetically first. Now each word of this word chain is concatenated so as to form a single word. Above described chain can be written as, abccbddef. This is the name of recipe. Chef wants to know the length of the name of recipe thus formed. </p>
<p> </p>
<h3>Input</h3>
<p>First line of input contains a number T&lt;=100, number of test cases. Each test case consists of two lines, first line contains a number N&lt;=60, the number of words in his dictionary. Next line contains N space separated words of length &lt;= 30.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case print the length of the name of recipe thus formed.</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
4
abc def cbd ghi<br />
<b>Output:</b>
9<br />
</pre><p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gauravjasraj">gauravjasraj</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-04-2013</td>
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