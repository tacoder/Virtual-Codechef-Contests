<?php require("../../includes/header.php"); ?><h1>Best Rectangle</h1><div class="content">

<p>You are Given a 2-dimensional array of positive and negative integers, find the sub-rectangle with the largest sum. The sum of a rectangle is the sum of all the elements in that rectangle. The sub-rectangle with the largest sum is referred to as the Best sub-rectangle. A sub-rectangle is any contiguous sub-array of size 1*1 or greater located within the whole array. As an example, the maximal sub-rectangle of the array: </p>
<pre>
                            0  -2  -7  0
		 9   2  -6  2 
		-4   1  -4  1
		-1   8   0 -2
</pre><p>is</p>
<pre>
                            9  2
		-4  1 
		-1  8	

</pre><p>which is in the lower-left-hand corner, and has the sum of 15.</p>
<h3>Input</h3>
<p>The input consists of several test cases. The input begins with a single positive integer N on a line by itself indicating the size of the square two dimensional array. This is followed by Integer values for the square. These integers make up the array in row-major order (i.e., all numbers on the first row, left-to-right, then all numbers on the second row, left-to-right, etc.). N may be as large as 100. The numbers in the array will be in the range [-127, 127]. Terminate the input with N=0.</p>
<h3>Output</h3>
<p>The output is the sum of the maximal sub-rectangle.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
0 -2 -7  0 
9  2 -6  2
-4  1 -4  1 
-1  8  0 -2
0
<b>Output:</b>
15
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rscrbv">rscrbv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>