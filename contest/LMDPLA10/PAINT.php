<?php require("../../includes/header.php"); ?><h1>Painting</h1><div class="content">

<p>
Leonardo da Vinci is preparing the background for his new painting. Since this is the computer age, he is using an electronic paper which is initially white. Paper is a MxN rectangular gird having MxN square cells. With paint(i,j) operation, his computer fills the cell(i,j) of the paper with black color. However, at any point in time, he may want to know the size of biggest <b>black segment</b>. <b>Black Segment</b> is defined as the group of cells in which any two <b>vertical or horizontal</b> neighboring cells are black. He asks for your help to complete the above task.</p>
<h3>Input</h3>

<p>
The first line contains two integers, M and N. Next line contains an integer Q,  where Q is total number of queries. The following Q lines each have a query Q<sub>i</sub> containing an integer B. B is either 0 or 1. If B is 1, two integers i and j follow which corresponds to the operation paint(i,j) (1-based index). </p>
<h3>Output</h3>

<p>
For every query with B=0, output the size of biggest black segment. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 3
9
1
2 1
0
1
1 3
0
1
3 3
1
2 3
0
1
2 2
0

<b>Output:</b>
1
1
3
5

<br />

<img border="0" src="http://db.tt/T31uorb" />



Figure from Example.


<b>Constraints:</b>
<ul>
<li> 1   &lt;=   M,N   &lt;=   1000.</li>
<li> 1   &lt;=   Q   &lt;=   10<sup>6</sup>.</li>
<li> B will be either 0 or 1.</li>
<li> 1   &lt;=   i   &lt;=   M </li>
<li> 1   &lt;=   j   &lt;=   N </li>
</ul></pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divij">divij</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2010</td>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>