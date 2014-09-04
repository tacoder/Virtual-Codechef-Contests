<?php require("../../includes/header.php"); ?><h1>Help Timo</h1><div class="content">
<p> Your friend little Timo went to Bosonian school. The teacher gave her a homework to do. But, Timo is not that much intelligent for solving the homework. So, she asked you to solve her homework.
</p>
<p>Your are given two rectangles <b>A</b> and <b>B</b> each of dimension <b>NXM</b>. There are <b>NXM</b> cells in each rectangle. The rows are numbered from <b>1</b> to <b>N</b> ,and the columns are from <b>1</b> to <b>M</b>. Each cell contains a number from 0 to 100.  You are given some queries in the following form. Given the upper left corner <b>(x1,y1)</b> and lower right corner <b>(x2,y2)</b> of sub rectangles of A and B. That is, the two sub rectangles are present at the same position in both of the rectangles <b>A</b> and <b>B</b>. You have to count the number of numbers matched in the corresponding cells of the sub rectangles. That is,<br />
    <b>A[i][j]=B[i][j]</b>, such that <b>x1&lt;=i&lt;=x2</b>, and <b>y1&lt;=j&lt;=y2.</b>
 </p>
<h3>Input</h3>
<p>On the first line of every test case is given three space separated numbers <b>N ,M and Q</b>.<br />
Then,<b> 2*N</b> lines follows. Each line contains <b>M</b> numbers. The first <b>N</b> line corresponds to the first rectangle, and from <b>(N+1)th</b> to <b>2*Nth</b> line corresponds to the second rectangle.<br />
Then, <b>Q</b> queries follow.  Each query contains four integers <b>x1,y1,x2,y2</b>.
</p>
<h3>Output</h3>
<p>For each test case, output Q lines containing the number of corresponding cells matched in the sub rectangles.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N,M</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>x1,x2</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>y1,y2</b> ≤ <b>M</b></li>
<li><b>x1&lt;=x2</b></li>
<li><b>y1&lt;=y2</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
2 2 2
1 2
2 2
1 3
2 2
1 1 2 2
1 1 1 2 
<b>Output:</b>
3
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cdev">cdev</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>