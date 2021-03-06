<?php require("../../includes/header.php"); ?><h1>Quadratic Equations</h1><div class="content">

<h3>A tutorial for this problem is now available on our blog. Click <a href="http://blog.codechef.com/2009/08/27/tutorial-for-problem-quadratic-equations/">here</a> to read it. </h3>
<p>Knowing Johnny's mathematical talent, our teacher has prepared a new interesting problem for him, hoping he will enjoy solving it. The problem description is given below.</p>
<p>"There is a rectangular room of length l and width w (l and w are integers). The length and width of the room  fulfill the relation l=Aw+B, where A and B are given integer constants. The room is divided into square cells of unit dimensions. You have observed that, after adding an integer C to the number of cells in the room, the number of cells becomes divisible by the prime number P. Find all the possible values of the width of the room."</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 10000). Then t test cases follow. Each test case is given in one line containing 4 integers A, B, C and P (2 ≤ P &lt; 10<sup>6</sup>, 0 &lt; A &lt; P, 0 ≤ B,C &lt; P).</p>
<p>P is always a prime number.</p>
<h3>Output</h3>
<p>For each test case, write the result in one line. The first number K is the number of solutions. Then K numbers X<sub>1</sub>, X<sub>2</sub>, ...,X<sub>K</sub> follow (0 ≤ X<sub>i</sub> &lt; P) in increasing order, which are the solutions to the corresponding problems.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
2
1 1 0 2
1 2 2 3

<strong>Output:</strong>
2 0 1
0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-06-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>