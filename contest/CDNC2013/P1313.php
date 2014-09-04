<?php require("../../includes/header.php"); ?><h1>CID vs Terrorists</h1><div class="content">

<p> </p>
<p>ACP Pradyumn is on his way to catch the mastermind behind the Hyderabad bomb blasts.</p>
<p>The mastermind, on the other hand, challenges the ACP by generating a sequence of numbers for him.</p>
<p>
 There is a sequence of n numbers, which can be both positive and negative. The task is to find the number of continuous sequence of numbers such that their sum is zero.</p>
<pre>
For example if the sequence is: 
5, 2, -2, 5, -5, 9
There are 3 such sequences
2, -2
5, -5
2, -2, 5, -5
</pre><p>Since the ACP is having difficulty in solving the problem, he asks for your help. Your goal is to find number of such sequences to help the ACP in catching the terrorist.
</p>
<p> </p>
<h3>Input</h3>
<pre>First line contains T - number of test cases
Second line contains n - the number of elements in a particular test case.
Next line contain n elements, ai  (1&lt;=i&lt;= n) separated by spaces.</pre><h3>Output</h3>
<p>The number of such sequences whose sum if zero.</p>
<h3>Constraints</h3>
<pre>1&lt;=t&lt;=5
1&lt;=n&lt;=10^6
-10&lt;= ai &lt;= 10

</pre><h3>Example</h3>
<pre><b>Input:</b>
2
4
0 1 -1 0
6
5 2 -2 5 -5 9


<b>Output:</b>
6
3

</pre><p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivendra14">shivendra14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2.52 sec</td>
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