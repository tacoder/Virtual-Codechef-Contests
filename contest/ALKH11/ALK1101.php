<?php require("../../includes/header.php"); ?><h1>Ordering Soldiers</h1><div class="content">

<p>Napolean has three troops of fierce soldiers. The recent attack on his kingdom requires all the three troops to be used at the battlefield. In the battle, soldiers go off for fighting one at a time. Each soldier is to be used exactly once. However inside each troop the relative order in which they go for fight any battle is defined by some precedence relationship among them.King Napolean for testing the strength of his army wants to know how many ways are there to send all his soldiers to the battlefield.</p>
<h3>Input</h3>
<p>First line contains the number of test cases T. Then T testcases follow.<br />
First line of each testcase contains three integers N1,N2 and N3, the number of soldiers in first , second and third troop respectively. The precedence order of soldiers in a troop having N soldiers<br />
is described by a NxN matrix . Y at (i,j)th entry in the matrix for a troop indicates that in any battle the jth soldier of that troop goes before the ith soldier of that troop . The matrices for each troop are given one below the other i.e a N1xN1 martix for troop1 followed by a N2xN2 martix for troop2 and finally a N3xN3 matrix for troop3.</p>
<h3>Output</h3>
<p>For each test case output the number of ways to send all soldiers to the battlefield , modulo<br />
1,000,000,007. Output of each testcase should end with a newline.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
3 3 3
NNN
YNN
NYN

NNN
YNY
NNN

NNN
NNN
NNN

<b>Output:</b>
20160
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
            <td>11 sec</td>
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