<?php require("../../includes/header.php"); ?><h1>SUM</h1><div class="content">

<p>
You have N soldiers at your disposal , each having certain strength.Your senior commander is asking some questions.His questions are of the form , given strength S and a number K , do there exist K different soldiers such that sum of their strengths is S. </p>
<h3>Input</h3>
<p>First line of input contains N and Q.Number of soldiers and the number of queries asked by head commander.Then N lines follow describing the strength of each soldier.After that Q more lines are given each containing S and K as described in the problem. </p>
<h3>Output</h3>
<p>For each query output a line containing YES or NO accordingly the strength S can be obtained using K soldiers. </p>
<p><h3>Constrains:</h3>
</p><p>1&lt;=N&lt;=100<br /><br />
Strength of each soldier is between 1 and 1000 inclusive.<br /><br />
1&lt;=Q&lt;=1000<br /><br />
1&lt;=S&lt;=total strength of all soldiers<br /><br />
1&lt;=K&lt; N/2<br /></p>
<h3>
Example:
</h3>
<pre>
<b>Input:</b>
5 6
3 2 4 5 2
4 2
4 1
5 3
5 2
8 2
8 4
<b>Output:</b>
YES
YES
NO
YES
YES
NO
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/saabir">saabir</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>