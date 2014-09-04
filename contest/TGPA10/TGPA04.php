<?php require("../../includes/header.php"); ?><h1>Chip It!</h1><div class="content">

<p>The students of IIST are developing their own satellite. So the OBC (OnBoard Computer) team being the most competent of all has been able to design a new 8-bit microprocessor which they plan to name EGSYS-1. Although being very proficient at their work, they are after all students. Thus there are many errors (failures) which occur in the microprocessor based upon various distinct factors. The testing team simulated the failures and found to their surprise that each of the failures occur at definite intervals which don't share any common  factor other than 1. They have found the time at which each of the failures occurred last. They also say that when all the failures occur simultaneously the EGSYS-1 will burn off. They want you to predict that time.</p>
<h3><b>Input Format</b></h3>

<p>The first line contains the number of test cases, t.<br />
Each of the following t test case has the following format:<br />
<br />1. The first line contains an integer n indicating the number of distinct failures that occur in EGSYS-1.<br />
<br />2. The second line contains n integers (v1 v2 v3 … vn) indicating the intervals (in ns) at which each of the failures occur.<br />
<br />3. The third line contains n (A1 A2 A3 … An) integers separated by spaces  indicating the last time in nano secs that each error occurred.</p>
<h3><b>Output Format</b></h3>

<p>For each test case, the time (in ns) at which the processor fails.</p>
<h3></h3>
<pre>
<b>Sample Input:</b>
1
3
3 4 5
5 7 11

<b>Sample Output:</b>
368
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/theta">theta</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-02-2010</td>
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
            <td>C, CLOJ, CPP 4.3.2, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>