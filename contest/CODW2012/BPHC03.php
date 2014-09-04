<?php require("../../includes/header.php"); ?><h1>Rat Maze</h1><div class="content">

<p>Story: You have to find a path through which the rat move from the starting position (0,0) to the final position where cheese is (n,n). List the total no of possible paths which the rat can take to reach the cheese.</p>
<h3>Input</h3>
<p>A file whose first line contains the size of the square maze<br />
The next n lines contain n binary values separated by space. 0 denotes an open cell while 1 denotes a blocked cell.<br />
You have to find paths which contain only cells which are open, and finally print the total no of such unique paths. Retracing the 1 or more cells back and forth is not considered a new path. The set of all cells covered in a single path should be unique from other paths</p>
<h3>Output</h3>
<p>The output should be the total no of paths possible on the first line</p>
<h3>Example</h3>
<pre>
<b>Input: 
7
0 0 1 0 0 1 0
1 0 1 1 0 0 0
0 0 0 0 1 0 1
1 0 1 0 0 0 0 
1 0 1 1 0 1 0
1 0 0 0 0 1 0
1 1 1 1 0 0 0
</b>


<b>Output:
4
</b>

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/raghupotluri">raghupotluri</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>