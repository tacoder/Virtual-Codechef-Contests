<?php require("../../includes/header.php"); ?><h1>STRANGE SEQUENCE</h1><div class="content">
<p> </p>
<p>
<h3>Problem description.</h3>
</p>
<p><pre>The Fibonacci sequence is defined as 
g(n) = g(n-1) + g(n-2).
But this is Fibonacci with a twist.
A curious student thought of changing it to 
f(n) = f(n-1) + 2*f(n-2).
with f(1) = 1 and f(2) = 5
He made up few terms(initial given) but then he had to complete other assignments.
So now he wants your help.
Given t test cases with each n print out f(n) mod 10000007.</pre></p><p> </p>
<h3>Input</h3>
<p>First line contains an interger T the number of test cases.<br />
Each test case contain a single integer N.</p>
<h3>Output</h3>
<p>A single integer answer in a line for each test case.</p>
<h3>Constraints</h3>

<ul>
<li><b>0</b> ≤ <b>T</b> ≤ <b> 100 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 10^9 </b></li>
<p>
</p></ul>

<h3>Example</h3>
<pre><b>Input:</b>
<p>4
1
2
3
4</p>
<b>Output:</b>
<p>1
5
7
17</p></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ninja13">ninja13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2014</td>
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