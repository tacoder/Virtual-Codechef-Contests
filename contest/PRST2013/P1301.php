<?php require("../../includes/header.php"); ?><h1>Spiral</h1><div class="content">

<p>The problem which arises with the usual printing devices is that they print only in serial format. They start printing or displaying text from the left most character and proceed towards right to display a line. Due to this it is difficult to print different formats of data and the design patterns efficiently on screen.</p>
<p>
Your task is to print a matrix of order n*n with numbers from 1 to n2 in a spiral format. In this format the entry of numbers start from center of the matrix and the filling is proceeded in the anticlockwise direction. The ending cell for even values of n is the first cell (1, 1) and for the odd values of n is the last cell (n, n) of the matrix.</p>
<h3>Input</h3>
<p>The input consists of a single number n such that 0 &lt; n &lt; 15.</p>
<h3>Output</h3>
<p>The output consist of an n*n matrix filled in spirally anticlockwise direction.</p>
<h3>Example 1</h3>
<pre>
<b>Input:</b>
4

<b>Output:</b>
16	15	14	13	
5	4	3	12	
6	1	2	11	
7	8	9	10	

<h3>Example 2</h3>
<pre>
<b>Input:</b>
5

<b>Output:</b>
17	16	15	14	13	
18	5	4	3	12	
19	6	1	2	11	
20	7	8	9	10	
21	22	23	24	25

</pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivendra14">shivendra14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>