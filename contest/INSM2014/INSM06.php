<?php require("../../includes/header.php"); ?><h1>Matrix Problem</h1><div class="content">

<p>
Ronak’s  class teacher gives him an NxN matrix.</p>
<p> Then, she gives him M numbers. Every number is an angle, the angle by which he has to rotate the matrix in clockwise direction.  (The angles are multiples of 90.)</p>
<p> Help him with the task.
</p>
<h3>Input</h3>
<p>First line consists of two numbers N and M.</p>
<p> The following N lines contain  N numbers each (representing the matrix). </p>
<p> The next M lines contain one number each, representing the angle by which the matrix is to be rotated.</p>
<h3>Output</h3>
<p>For M problems, generate M appropriately rotated matrices, each seperated by a new line.  </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N,M</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
1 2 3 4
4 5 6 7
6 8 4 3
8 1 4 7
90
180

<b>Output:</b>
8 6 4 1
1 8 5 2
4 4 6 3
7 3 7 4

7 4 1 8
3 4 8 6
7 6 5 4
4 3 2 1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/prongs7">prongs7</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>