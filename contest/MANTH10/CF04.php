<?php require("../../includes/header.php"); ?><h1>GCRD</h1><div class="content">

<p>Greatest Common Right Divisor for two square matrices A and B is a matrix 'D' which satisfies following 3 conditions:</p>
<ol>
<li>A = P * D </li>
<li>B = Q * D</li>
<li>D = X * A + Y * B</li>
</ol>
<p>where P, Q, X and Y are some matrices.<br />
The task is to output the matrices D, X and Y for the given square matrices A and B.</p>
<h3>Input</h3>
<p>Input file will contain multiple input cases each denoting a combination of matrices A and B. First line of the input file consists of an integer t (&lt;=100) denoting the no. of test cases. </p>
<p>Each input case will consist of:</p>
<ol>
<li>First line of the test will contain a single integer N(&lt;=15) denoting the size of matrices A and B.</li>
<li>Next N lines will contain the corresponding row elements of Matrix A each separated by a blankspace.</li>
<li>Further N lines will contain the corresponding row elements of Matrix B each separated by a blankspace.</li>
</ol>
<p> Each of the elements in the matrices A and B can only be 1 or 2.</p>
<h3>Output</h3>
<p>For each input case, output the following:</p>
<ol>
<li> First N lines contain corresponding row elements of Matrix D each separated by a blankspace.</li>
<li>Further N lines contain corresponding row elements of Matrix X each separated by a blankspace.</li>
<li>Last N lines contain corresponding row elements of Matrix Y each separated by a blankspace.</li>
</ol>

<p>Print a new line after each output.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2
1 2
1 1
1 2
2 1
3
1 2 1
1 1 1
1 2 1
2 1 1
2 2 2
2 1 2

<b>Output:</b>
1 2                                                                                                             
0 -1                                                                                                            
1 0                                                                                                             
-1 1                                                                                                            
0 0
0 0

1 2 1
0 -1 0
0 0 -1
1 0 0
-1 1 0
1 -3 0
0 0 0
0 0 0
1 0 0

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/manthan">manthan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-03-2010</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>