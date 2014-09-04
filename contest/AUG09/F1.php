<?php require("../../includes/header.php"); ?><h1>Golf course</h1><div class="content">

<p>A company wants to invest into building a golf course. They could choose the land to build the course from a rectangle area of size MxN. The rectangle area is divided into MxN cells. They measured the elevation of each cell and recorded it into an integer number.</p>
<p>The company decided that the golf course should be a KxK square (K &#8804; min(M,N)). Thus, there are (M-K+1)(N-K+1) possible KxK squares that can be used to build the golf course. For each such square, the company wants to know the highest elevation of a cell inside the square. They also need to know how many cells that have such highest elevations.</p>
<p>Write a program that help the company do the above task.</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 10). Then t test cases follow. Each test case has the following form:</p>
<ul>
<li>The first line contains three integers M, N, K (1 &#8804; M, N &#8804; 500, 1 &#8804; K &#8804; min(M,N) ).</li>
<li>There are M lines follow. Each line contains N nonnegative integers not exceeding 10000. Each integer represents the elevation of a cell.</li>
</ul>
<p>There is a blank line after each test case.</p>
<h3>Output</h3>
<p>For each test case, in the first line print "Case d:" where d is the number of the test case. Then print M-K+1 lines and in each line print N-K+1 entries. Successive entries should be separated by spaces. The entry in the i<sup>th</sup> line and the j<sup>th</sup> column has the following form:</p>
<ul>
<li>The first number is the highest elevation of a cell in the KxK square whose top left corner is (i,j).</li>
<li>If there is more than one cell in the square that has the highest elevation, print <em>(c)</em>, where c is the number of cells inside the square that have the highest elevation.</li>
</ul>
<p>Print a blank line after each test case.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
2
3 3 2
5 5 5
5 5 5
5 5 5

3 3 2
4 2 1
3 5 7
2 8 8

<strong>Output:</strong>
Case 1:
5(4) 5(4) 
5(4) 5(4) 

Case 2:
5 7 
8 8(2) 

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-07-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>