<?php require("../../includes/header.php"); ?><h1>A puzzle game</h1><div class="content">

<p>Johnny has some difficulty memorizing the small prime numbers. So, his computer science teacher has asked him to play with the following puzzle game frequently.</p>
<p>The puzzle is a 3x3 board consisting of numbers from 1 to 9. The objective of the puzzle is to swap the tiles until the following final state is reached:</p>
<pre>
1 2 3
4 5 6
7 8 9
</pre><p>At each step, Johnny may swap two adjacent tiles <b>if their sum is a prime number.</b> Two tiles are considered adjacent if they have a common edge.</p>
<p>Help Johnny to find the shortest number of steps needed to reach the goal state.
<h3>Input</h3>
</p><p>The first line contains t, the number of test cases (about 50). Then t test cases follow. Each test case consists of a 3x3 table describing a puzzle which Johnny would like to solve.</p>
<p>The input data for successive test cases is separated by a blank line.</p>
<h3>Output</h3>
<p>For each test case print a single line containing the shortest number of steps needed to solve the corresponding puzzle. If there is no way to reach the final state, print the number -1.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

7 3 2 
4 1 5 
6 8 9 

9 8 5 
2 4 1 
3 7 6  

<b>Output:</b>
6
-1
</pre><h3>Output details</h3>
<p>The possible 6 steps in the first test case are described in the following figure:</p>
<p><img src='/images/problems/h1.png' /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-09-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>