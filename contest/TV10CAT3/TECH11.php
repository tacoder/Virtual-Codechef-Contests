<?php require("../../includes/header.php"); ?><h1>Maintaining Roads</h1><div class="content">

<p>In a kingdom, there are N cities, numbered from 1 to N, with some pairs of them connected by bidirectional roads, the lengths of which are known. The cost of maintaining a road is 1 per unit length. The capital of the kingdom is city 1. Now the king wishes to maintain only some roads such that :</p>
<ol>
<li> He himself does not like treading roads not maintained. Thus, there should be a path from the capital to any other city using only maintained roads.</li>
<li> People do not like walking long roads. Hence if there exists a road between X and Y of length L, he will not maintain the road if there exists another path in the kingdom between X and Y on which none of the roads are of length >= L. Maintaining such a road would be useless since people would never use it.</li>
<li>The total cost of the maintained roads should be minimum.</li>
</ol>

<p>
Given a description of the kingdom, output the cost of maintaining roads satisfying the above conditions.
</p>
<h3>Input</h3>
<p>The first line contains the number of test cases T(&lt;=10). T test cases follow. For each test case, the first line contains N (&lt;= 300), the number of cities. There follow N lines, each with N integers. The ith integer on the jth line is the length of the road between cities i and j (0 if there is no road). The ith integer on the jth line will be equal to the jth integer on the ith line. Also, the ith integer on the ith line will be a 0. No value will be greater than 1000000.
</p>
<h3>Output</h3>
<p>Output T lines, 1 corresponding to each test case, containing the desired answer.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2
0 1
1 0

<b>Output:</b>
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/technovanza10">technovanza10</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>