<?php require("../../includes/header.php"); ?><h1>Chocolate Manufacturing Company</h1><div class="content">

<p>
A chocolate manufacturing company wants to buy boxes to pack chocolates. Boxes are available in two types, first one costs c1 and can hold n1 chocolates and the second one costs c2 and can hold n2 chocolates. Each box to be filled to its capacity. You have to find the best way to distribute the chocolates such that total cost is minimized.</p>
<h3>Input</h3>
<p>
The first line specifies the number of test cases. </p>
<p>For each test case, the first line of input specifies the total number of chocolate to be packed. (numbered 1 to 300,000,000). The next line contains c1 n1 c2 n2. A test  case containing zero for the number of chocolates indicates termination of input.</p>
<h3>Output</h3>
<p>
For each test case in the input print a line containing the minimum cost solution (two<br />
nonnegative integers m1 and m2, where mi = number of type i boxes required if one<br />
exists. Otherwise print 0 0.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

44
10 9 9 8
37
10 9 9 8
0

<b>Output:</b>
4 1
0 0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bst0602">bst0602</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-01-2011</td>
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