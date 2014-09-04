<?php require("../../includes/header.php"); ?><h1>Can you dig it</h1><div class="content">

<p>The Indian archaeologists recently found remains of an ancient architecture. The location where it was found can be modeled as X, Y square grid cells. The archaeologists then determined whether a building existed at a particular cell or not.</p>
<p>After examining all the clues, they concluded that two buildings, with square shaped floor plans, existed at the location from different periods in time. There is also a possibility that their floor plans may overlap as the buildings were from different periods in time.</p>
<p>You need to determine, for each building, the possible location and size (the length of a side of the square of the floor plan).</p>
<h3>Input</h3>
<p>On the first line, there are two integers X (1 ≤ X ≤ 100) and Y (1 ≤ Y ≤ 100),  which specify the size of the location. The next X lines contain strings comprising of '.' (dot) or 'x' (lowercase letter). Here '.' indicates that nothing was found in that cell, while 'x' means that a building was present there. </p>
<h3>Output</h3>
<p>For each of the two buildings, print on a single line the row and the column of its upper left corner and the size of the building. Also please note that the test data will guarantee that a solution always exists, although it may not necessarily be unique.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4 6
xx....
xx.xxx
...xxx
...xxx

<b>Output:</b>
1 1 2
2 4 3

<b>Input:</b>
3 3
xx.
xxx
...

<b>Output:</b>
1 1 2
2 3 1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ajitesh14">ajitesh14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-10-2010</td>
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