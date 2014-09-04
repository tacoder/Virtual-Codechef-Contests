<?php require("../../includes/header.php"); ?><h1>Party</h1><div class="content">

<p>Napoleon has won his battle and in the whole kingdom it's party time! At the most famous club of his kingdom the scenario is quite tantalizing. 'N' young men who arrived at the club are looking for attractive dance partners and they need to select from 'M' beautiful girls present at the club that night. All 'N' men gave you the name of girls they are willing to dance with.<br />
You need to find out the number of ways 'K' dance couples can be made tonight. Note that no two girls in K pairs formed should be same and similarly no two men in the K pairs formed should be same.</p>
<h3>Input</h3>
<p>There is a single test case. The test case begins with N, M, K the number of males, females and the number of dance pairs to be made respectively. Followed by a N x M matrix. A '1' in (i,j)th entry of matrix indicates that the 'i'th male can dance with 'j'th girl , while 0 in (i,j)th entry indicates that 'i'th male cannot dance with 'j'th girl.</p>
<h3>Constraints</h3>
<p>1 &lt;= N,M,K &lt;= 25<br />
Number of zeros in the matrix will not exceed 15.</p>
<h3>Output</h3>
<p>For each test case output the number of ways to make N dance couples modulo 10,007.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 3 3
1  0  1
1  0  1
1  1  1

<b>Output:</b>
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/saabir">saabir</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-09-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>