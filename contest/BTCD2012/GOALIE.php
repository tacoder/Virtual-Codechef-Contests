<?php require("../../includes/header.php"); ?><h1>Find the Goalkeeper</h1><div class="content">

<p>
In a school in 'The land of Nowhere', students love to be the goalkeeper while playing soccer. Coach Randy has designed a method to pick a goal keeper among a givenset of students. He asks them to first stand in a line and assigns them numbers. So, the first in line is given 1, the second is given 2 and so on. Now, he asks them to form a circle. Then, he starts eliminating 'alternate' students starting from 2 (remember, its a circle; so this elimination would occur over and over) . This process continues until only one student is left, who then becomes the goalkeeper. He thinks this is a fair method, but can you do the math to beat his idea ? </p>
<h3>Input</h3>
<p>Input consists of several input lines. First line has the number of test cases that follow, represented by 't'. Each of the following 't' lines have the total number of students 'n'. </p>
<p>
1 &lt; t &lt; 1000000<br />
0 &lt; n &lt; 10000000 </p>
<h3>Output</h3>
<p>For each input, output where should you stand to be selected as the goalkeeper.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
1
5
8
12

<b>Output:</b>
1
3
1
9
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rajatkhanduja">rajatkhanduja</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-08-2012</td>
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