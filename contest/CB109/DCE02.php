<?php require("../../includes/header.php"); ?><h1>Courier</h1><div class="content">

<p>The ship Titanic is very huge. It is often required by the staff to take things from 1 place to other.</p>
<p>Given the cost of possible paths through different levels, return the minimum cost of the path taken from the top level to the bottom level. ( It is not necessary that all the sectors are connected. There may be more than one direct path from one sector to another. There will always be a path from topmost level to lowest level. )</p>
<h3>Input</h3>

<p>The first line contains two space separated integers n, k. Where n is the number of sectors on the topmost level, and k is the number of levels in the ship.<br />
From the next line onwards, three space separated integers are given. First integer is the starting sector from 1st level, 2nd integer is the destination in the 2nd level, and 3rd integer is the cost of path. (The sources and destinitions are 1-based)<br />
The integer -1 signifies the end of paths for the given pair of levels.<br />
The next lines contain the paths for next pair of levels till a -1is encountered, and so on.<br />
(So the total number of -1 encountered are k-1)</p>
<h3>Output</h3>

<p>A single line containing the minimum cost to travel from topmost level to lowest level.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 2
1 1 1
2 2 2
1 3 3
3 1 6
5 4 9
-1


<b>Output:</b>
1


<b>Explanation:</b>
There are just two levels. The shortest path is from sector 1 on level 1 to sector 1 on level 2.
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/uploader0">uploader0</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>