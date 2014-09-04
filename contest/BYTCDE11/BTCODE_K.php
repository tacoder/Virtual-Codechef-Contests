<?php require("../../includes/header.php"); ?><h1>Array Sorting</h1><div class="content">

<p>
Sumit specialises in sorting algorithms, and Abhishek decides to test Sumit's coding skills.<br />
An array of 'n' numbers a[0], a[1], a[2], ..., a[n-1] is given. Abhishek gives a sequence of inputs of the form "v i j". Each input is either a query or an update (query if 'v' is 0, update otherwise).</p>
<p>
For any input of the form "0 i j" ,Sumit's output should be as follows:<br />
<br /><br />
If the subarray a[i], a[i+1], ... a[j] is unsorted, output 0.<br />
<br /><br />
If the subarray a[i], a[i+1], ... a[j] is sorted in non-descending order, output 1.<br />
<br /><br />
If the subarray a[i], a[i+1], ... a[j] is sorted in non-ascending order, output 2.<br />
<br /><br />
If the subarray a[i], a[i+1], ... a[j] is sorted in both non-ascending and non-descending order (i.e, if all the elements in the  range are equal), output 3.</p>
<p>
Any other input "v i j" (v!=0) should be treated as an update, as follows:<br />
<br /><br />
For each element in the subarray a[i], a[i+1], ... a[j], Sumit has to replace the element a[k] with v-a[k].</p>
<p>
Sumit is really tired and does not want to write a program. Can you write a program for Sumit, which responds to Abhishek's instructions?</p>
<h3>Input</h3>
<p>The first line of input contains 2 space separated integers 'n' and 'q'.<br />
The second line contains 'n' integers a[0], a[1], ....., a[n-1].<br />
Each of the next 'q' lines contain 3 integers 'v', 'i', 'j'.</p>
<h3>Output</h3>
<p>
For each query, output a single integer 0, 1, 2 or 3, denoting the answer.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4 5
3 -2 -5 1
1 1 3
0 0 3
0 0 2
0 2 3
0 0 1

<b>Output:</b>
0
1
2
3

<b>Constraints:</b>
1 &lt;= n &lt;= 100000
1 &lt;= q &lt;= 100000
-5000 &lt;= a[i] &lt;= 5000
-5000 &lt;= v &lt;= 5000

</pre><p><b>Explanation</b><br />
<br/>Initial array is {3, -2, -5, 1}. After first update, the array will be {3, 3, 6, 0}. Now, from indices '0' to '3', it is unsorted. From indices '0' to '2', it is sorted in non-descending order. From indices '2' to '3', it is sorted in non-ascending order. Between indices '0' and '1', the values are equal.</br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suh_ash2008">suh_ash2008</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>