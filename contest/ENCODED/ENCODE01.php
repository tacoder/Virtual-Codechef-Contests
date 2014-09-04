<?php require("../../includes/header.php"); ?><h1>On The Floor</h1><div class="content">

<p>Arunava has learnt to find the sum of first N natural numbers using the expression N(N+1)/2.But now Kartik Sir has asked him to find the<b> sum of floor(N/2) for first N natural numbers</b> where floor(X) is the greatest integer less than or equal to a given real number X.Arunava has not memorized any formula for this. So can you help him. </p>
<h3>Input</h3>
<p>1st line has an Integer T denoting the number of test cases<br />
Each test Case Contains:<br />
A single integer N on a new line denoting the number of natural number upto which it needs to be summed.</p>
<h3>Output</h3>
<p>For each test case output a single line containing required sum as the output</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
1
2
3
4
5


<b>Output:</b>
0
1
2
4
6


<h3>CONSTRAINTS:</h3>
1 &lt;= T  &lt;=  100000
1 &lt;= N &lt;=  10000
0 &lt;= S &lt;=  214783647

</pre><p>Explanation of the fifth test case N=5,<br />
The required sum is floor(1/2)+ floor(2/2)+ floor(3/2)+ floor(4/2)+ floor(5/2)=0+1+1+2+2=6</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/encoded_admin">encoded_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2011</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, ICON, JAR, JAVA, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>