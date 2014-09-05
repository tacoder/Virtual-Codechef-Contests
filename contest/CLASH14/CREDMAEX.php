<?php require("../../includes/header.php"); ?><h1>Matrix</h1><div class="content">
<p> </p>
<p>A matrix doubling operation is defined as creating a new square matrix of size <b>2*N</b> with the help of square matrix of size <b>N</b>.<br />
The matrix can be doubled as:</p>
<p><b></b></p>
<pre>M<sub>2N*2N</sub> =
                                      A*M<sub>N*N</sub>     B*M<sub>N*N</sub>  
                                      C*M<sub>N*N</sub>     D*M<sub>N*N</sub> 

</pre><p><br />
Where <b>A, B, C, D</b> are integers and <b>M<sub>i*j</sub></b> is a matrix of size <b>i * j</b>.<br />
Given a matrix of size <b>1x1</b> and two numbers <b>X</b> and <b>Y</b>, find out the element which occurs at the <b>X<sup>th</sup></b> row and <b>Y<sup>th</sup></b> column location after doubling the matrix to a just sufficient size.</p>
<p> </p>
<h3>Input</h3>
<p>First line will contain <b>T</b>, the number of test cases. <br />
Each test case will consists of three lines.<br />
First line will contain the element present in the <b>1</b>x<b>1</b> matrix.<br />
Second line will contain four space separated integers <b>A</b>, <b>B</b>, <b>C</b>, <b>D</b><br />
Third line will contain two space separated integers, <b>X</b> and <b>Y</b>.</p>
<p></p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single integer on a separate line denoting the element at <b>X<sup>th</sup></b> row and <b>Y<sup>th</sup></b> column.</p>
<p> </p>
<h3>Constraints</h3>
<p><b>1</b> ≤ <b>T</b> ≤ <b>100</b><br />
The element in the 1x1 matrix will always be 1<br />
<b>0</b> ≤ <b>A,B,C,D</b> ≤ <b>9</b><br />
<b>1</b> ≤ <b>X,Y</b> ≤ <b>10^6</b></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
1
2 3 4 5
2 7

<b>Output:</b>
36
</pre><p> </p>
<h3>Explanation</h3>
<pre>
The matrix at various doubling steps will be:

1x1 matrix:

1

2x2 matrix:

2 3
4 5

4x4 matrix:

4  6  6  9
8 10 12 15
8 12 10 15
16 20 20 25

8x8 matrix:

 8  12  12  18  12  18  18  27
16  20  24  30  24  30  36  45
16  24  20  30  24  36  30  45
32  40  40  50  48  60  60  75
16  24  24  36  20  30  30  45
32  40  48  60  40  50  60  75
32  48  40  60  40  60  50  75
64  80  80 100  80 100 100 125

Thus the matrix is doubled to a sufficient size and element at the 2nd row and the 7th column is 36
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wittyceaser">wittyceaser</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-08-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1</td>
        </tr>
    </table><a href="http://www.codechef.com/submit/CREDMAEX" target="_BLANK"><div id="submitButton">Submit</div></a><?php require("../../includes/footer.php"); ?>