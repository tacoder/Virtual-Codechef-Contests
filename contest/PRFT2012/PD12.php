<?php require("../../includes/header.php"); ?><h1>How many Islands</h1><div class="content">

<p>You are given a simple map of an archipelago. Can you determine how many islands it shows?</p>
<p>The map consists of grid squares with characters, where '#' indicates land and '.' indicates water. Two land squares belong to the same island if they are neighbouring grid squares, which means their x coordinates and y coordinates differ by at most 1.</p>
<h3>Input</h3>

<p>The first line of the input contains a number T ≤ 20 which indicates the number of test cases to follow.</p>
<p>Each test case starts with a line containing two numbers n and m (1 ≤ n,m ≤ 200), the number of rows and the number of columns of the grid, respectively. The following n lines contain m characters each and describe the map to be processed. You may assume that the map contains only characters '#' and '.', and that the border of the map consists only of water (character '.').</p>
<h3>Output</h3>

<p>For each test case print in a line the number of islands shown on the corresponding map in the input.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

2
1 1
.
6 4
....
..#.
.#..
....
.##.
....

<b>Output:</b>

0
2


</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mani_yadav">mani_yadav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-02-2012</td>
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