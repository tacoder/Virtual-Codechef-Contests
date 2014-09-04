<?php require("../../includes/header.php"); ?><h1>Counting Trees</h1><div class="content">
<p>Mr. Devu Singh has a farm. The farm is represented as a matrix, divided into rows and columns, with each element being equal to 1, if the corresponding area in the farm contains a tree, and 0 otherwise. Every element in the farm can contain atmost one tree. <br /><br /></p>
<p>Mr. Devu Singh loves his farm. However, Devu Singh has a short memory. He cannot remember which of the elements in the farm has a tree in them. What he does remember is the total number of trees in each row and each column, but is not sure about this information either. He wishes to know, that for such constraints, whether there exists a matrix satisfying these constraints. If there does exist such a matrix, output the <a href="http://en.wikipedia.org/wiki/Lexicographical_order">lexicographically</a> smallest one, otherwise output -1. <br /><br /></p>
<p>For lexicographically comparing two matrices A and B, you write the matrix A and B as a string of 0/1 by writing in row major order (ie, first write first row, then second row and so on upto n-th row.). Now lexicographically compare the two strings generated in this way.<br /></p>
<h3>Input Format</h3>
<p>First line contains T : number of test cases.<br /><br /><br />
For each test case, first line has N and M.<br /><br />
Next line contains N space separated integers where i-th one represents sum of the i-th row.<br /><br />
Line after that contains M space separated integers where i-th one represents sum of i-th column.<br /><br /></p>
<h3>Output Format</h3>
<p>For the i-th test case, the first line contains the string "TestCase #:i" (without quotes). From the next line, output matrix of size N x M, as N lines containing M integers each (without space), with Element[i,j] = 0 or 1, depending on whether there can be a tree in that area. Output ­-1, if no such matrix exists.<br /><br /></p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ T ≤ 20</li>
<li>1 ≤ N, M ≤ 50</li>
<li>0 ≤ Sum of elements in a row ≤ M</li>
<li>0 ≤ Sum of elements in a column ≤ N</li>
</ul>
<p><br /></p>
<h3>Sample Input</h3>
<p>3<br /><br />
4 4<br /><br />
3 2 3 1<br /><br />
4 3 1 1<br /><br />
4 4<br /><br />
1 3 0 2<br /><br />
1 1 2 2<br /><br />
1 1<br /><br />
1<br /><br />
0<br /></p>
<h3>Sample Output</h3>
<p>TestCase #:1<br /><br />
1101<br /><br />
1100<br /><br />
1110<br /><br />
1000<br /><br />
TestCase #:2<br /><br />
0001<br /><br />
0111<br /><br />
0000<br /><br />
1010<br /><br />
TestCase #:3<br /><br />
-1<br /></p>
<h3>Explanation</h3>
<p>For first test case, the given matrix is the lexicographically smallest one with sum of row1 =3,<br />sum of row2 =2, sum of row3 =3, sum of row4 =1 and sum of column1 =4, sum of column2 =3, sum of column3 =1, sum of column4 =1. <br /><br /><br />
Similarly for the second test case, the given matrix is the lexicographically smallest one satisfying the given constraints.<br /><br /><br />
For the third test case, there cannot be any matrix of size 1x1 and sum of row1=1 and sum of column1=0. Hence output is -1.<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>