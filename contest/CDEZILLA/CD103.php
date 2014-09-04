<?php require("../../includes/header.php"); ?><h1>Magic is in the air</h1><div class="content">

<p>There's a new magician in dino-town. He can make X or more consecutive coloured playing cubes magically disappear with his wand. He has a large number of coloured playing cubes and he wishes to find the smallest number of cubes he should insert into the sequence so that he can make all of them vanish, keeping in mind that he can insert the cubes anywhere in the sequence, at the beginning, in between or at the end.</p>
<h3>Input</h3>
<p>The first input line contains two integers Z (1 &lt;= Z &lt;= 100), the total number of cubes in the sequence and X (2 &lt;= X &lt;= 5), the minimum number of same coloured consecutive cubes he can make magically disappear. The second line contains Z integers between 1 and 100 (inclusive), representing the colours of the cubes in the sequence, separated by a space.</p>
<h3>Output</h3>
<p>The minimum number of cubes that need to be inserted should be outputted on a single line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 7
9 9 9 

<b>Output:</b>
4

<b>Input:</b>
5 4
1 1 2 1 1

<b>Output:</b>
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ajitesh14">ajitesh14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-04-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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