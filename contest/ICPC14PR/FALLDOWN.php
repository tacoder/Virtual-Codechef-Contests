<?php require("../../includes/header.php"); ?><h1>Remys last tour</h1><div class="content">

<p align="justify">
Do you know what  b'ak'tun means ? Its an enormous cycle in the Mayan calendar, roughly around 400 solar years. The 13th b'ak'tun is going to end this December and our chef Remy is worried about it. What can a chef do if the world is going to end soon ? Enough of making recipes, time to visit the restaurants around the world. He prepares a list of restaurants along with their ratings. This is given as a 2D array A having R rows and C columns. A[i][j] has the rating of the jth restaurant in the ith row. Rows are numbered 1 to R from top to bottom and columns are numbered 1 to C from left to right.
</p>
<p align="justify">
Remy can start his journey from any restaurant in the top row ( row# 1 ) and end at any restaurant in the bottom row ( row# R ). He is afraid that the world may end from top to bottom, and so he will never go up from a restaurant. He can only move left, right or down ( i.e., to cell (i,j-1) or (i,j+1) or (i+1,j) ) in each step. Along the path he takes, he sums up the ratings of all the restaurants visited. Of course, each visited restaurant's rating should be added <i>exactly once</i>, even if he visits it again along the path. Find the maximum possible sum of ratings.<br />
( Read the Input section for details on reading / generating A )</p>
<h3>Input</h3>

<p align="justify">
First line contains T, number of test cases. T cases follow. In each test case, first line contains R C I, number of rows, number of columns and the method<br />
of taking input, respectively.</p>
<p align="justify">
If I == 1, R lines follow, each containing C integers, representing the grid A</p>
<p align="justify">
If I == 2, next line contains 4 integers X P Q M. Generate the grid A using the following method.</p>
<pre>
Initialize, cur = X
for i : 0 to R-1
     for j : 0 to C-1
     {
         cur = ( cur * P + Q ) % M;
         A[i][j] = X - cur
     }

( * is used for multiplication and % is the modulo operator. )
<i>The writer's solution does not depend on the factors X, P, Q, M used for input generation.
They are used just to decrease the size of input files ( Max 8MB ).</i>

</pre><h3>Output</h3>

<p align="justify">
For each test case, output the maximum possible sum of ratings along a path that starts in the top row and ends in the bottom row.</p>
<h3>Constraints</h3>

<p align="justify">
1 ≤ T ≤ 5<br />
1 ≤ R, C ≤ 2012<br />
-500 ≤ A[i][j] ≤ 500<br />
1 ≤ P, Q ≤ 1,000,000<br />
1 &lt; X &lt; M ≤ 500 </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 5 1
1 1 -5 3 1
-1 1 1 -1 3
2 -3 2 -1 1
3 4 2
10 13 13 29

<b>Output:</b>
10
3
</pre><p></p>
<p><b>Explanation:</b><br />
The path with maximum sum of ratings in Case 1 is shown in bold </p>
<table border="0">
<tr>
<td> 1</td>
<td> 1</td>
<td>-5</td>
<td><b>3</b></td>
<td><b>1</b></td>
</tr>
<tr>
<td>-1</td>
<td><b> 1</b></td>
<td><b> 1</b></td>
<td><b>-1</b></td>
<td><b> 3</b></td>
</tr>
<tr>
<td> 2</td>
<td>-3</td>
<td><b> 2</b></td>
<td>-1</td>
<td> 1</td>
</tr>
</table>
<p>
<i><b>Warning : </b>"Large input / output. Be careful with certain languages. Eg: Prefer using scanf/printf to cin/cout for C++"</i></p>
<p><i><b>Note : </b>There are multiple test sets, and the judge shows the sum of the time taken over all test sets of your submission, if Accepted.</i></p>
    </div><table border="0">
<tr>
<td> 1</td>
<td> 1</td>
<td>-5</td>
<td><b>3</b></td>
<td><b>1</b></td>
</tr>
<tr>
<td>-1</td>
<td><b> 1</b></td>
<td><b> 1</b></td>
<td><b>-1</b></td>
<td><b> 3</b></td>
</tr>
<tr>
<td> 2</td>
<td>-3</td>
<td><b> 2</b></td>
<td>-1</td>
<td> 1</td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro  ">masked_zorro  </a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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