<?php require("../../includes/header.php"); ?><h1>Lights Off, Revisited!</h1><div class="content">

<p>Johnny is, by now, a little bored of the original Lights Off game, and he has proposed his own variant. This time, the task which awaits him is much, much harder...</p>
<p>Imagine we have a large square board, containing an n x n grid (matrix) of lightbulbs. Initially, some of them are on, and the rest are off. We can perform some special operations on the whole matrix, and we would like to switch off as many lightbulbs as possible. At each step, the only operation we can perform is defined as follows: we choose one particular lightbulb, one direction (North, East, West, or South), and starting from this lightbulb and going in the specified direction, till the end of matrix, one by one, we toggle the states of the lightbulbs - from on to off, or from off to on.</p>
<h3>Input</h3>
<p>First, 1≤n≤1000, the size of the board. Then n rows of n numbers follow, representing the initial state of the lightbulbs, where the j-th number in the i-th row represents the state of the lightbulb at coordinates (i,j): 0 if it is off, 1 if it is on. All coordinates are 0-based, i.e., the bulb in the top left hand corner has coordinates (0,0).</p>
<h3>Output</h3>
<p>First, you should output k, the number of operations you perform. The following k rows should describe a sequence of operations to be performed on the board, in the order in which they should be applied. Each operation is described by three space separated numbers i,j,c, where 0≤i,j&lt;n are 0-based coordinates of the lightbulb at the starting point (i stands for the row number, j stands for the column number), and c is one character from the set {N,E,W,S}, N meaning moving to smaller row coordinates, S to larger row coordinates, W to smaller column coordinates, and E to larger column coordinates.</p>
<h3>Scoring</h3>
<p>For each lightbulb than remains on after all the operations, you will receive one penalty point. For each operation performed you will receive one penalty point.</p>
<p>The total score is averaged over 9 data sets.</p>
<h3>Example</h3>
<pre><strong>Input:</strong><br />3<br />1 1 1<br />1 1 1<br />1 1 1<br /><br /><strong>Output:</strong><br />2<br />0 0 E<br />0 0 S<br /><strong><br />Score:</strong><br />7<br /></pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-06-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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