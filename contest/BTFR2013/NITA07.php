<?php require("../../includes/header.php"); ?><h1>shortest path</h1><div class="content">

<p> </p>
<p>Bob is a Cat who loves challenges. Once he went to  Agartala there was a net of paths. Tasks of Bob was to enter from one corner and come out from diagonally opposite corner. There were many confusing paths to complete this task, but Bob decided to pass this net  from the shortest path. Now your task is to help Bob by finding the shortest path from top left corner to right bottom corner of net.</p>
<p> </p>
<h3>Input</h3>
<p>
First line contains number of rows(N) in Net, after this line, each of next N lines describe a row of net. There will be no more than 100 columns and no more than 100 rows and shape of net must be rectangular (not necessarily a square).</p>
<p>Each position of the row is one of two characters. A '0' means you may move onto that position. A '1' means that space is occupied by a wall. You are allowed to move in any direction (up, down, left, right, diagonal) provided that the square you move into isn't a '1'. You always start in the upper left hand corner of the net. The exit is always at the lower right hand corner of the net. There will always be at least one path from top left corner to bottom right corner.
</p>
<p> </p>
<h3>Output</h3>
<p>The output is the shortest number of squares you must step in to pass through the net.</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
011100111
001111011
001111010
100000000
010111100

<b>Output:</b>
10
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/upendra1234">upendra1234</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-02-2013</td>
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