<?php require("../../includes/header.php"); ?><h1>Kingdom Protection</h1><div class="content">

<p>King Napoleon wants to protect his kingdom from external attack. For this purpose Napoleon decides to place N surveillance centers in his kingdom. Every surveillance centre takes care of a region in his kingdom. After placing N surveillance centres king wants to know the strength of K vulnerable places in his kingdom. Strength of a place is the number of surveillance centers covering this point. The region of a surveillance centre is described by a rectangle having sides parallel to X and Y axes . A centre is said to cover a place P(x,y) if P lies inside or on the boundary of its region.</p>
<h3>Input</h3>
<p>Input begins with a line containing an integer T . Then T testcases follows. First line of each testcase contains two integers , N and K which denote the number of surveillance centres and the number of vulnerable places  respectively. Each of the next N lines contains the description of a surveillance centre using four integers x1,y1,x2,y2,where (x1,y1) and (x2,y2) are lower left and upper right coordinates of the rectangular area under the centre. The next K lines each containing two integers x,y describe the coordinates of vulnerable places.</p>
<h3>Output</h3>
<p>For all test cases output the strength of each vulnerable place in the same order as given in the input.</p>
<h3>Constraints</h3>
<p>1 &lt;=  T &lt;= 10<br />
1 &lt;= N,K &lt;= 100000<br />
1 &lt;= x1,y1,x2,y2,x,y &lt;= 100000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 1
1 1 4 4
3 3

2 2
1 1 4 4 
2 2 5 5
6 6
3 3

<b>Output:</b>

1
0
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
            <td>1 sec</td>
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