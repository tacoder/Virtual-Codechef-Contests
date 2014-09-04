<?php require("../../includes/header.php"); ?><h1>IOPC transformation</h1><div class="content">

<p align="justify">Given natural numbers N and Q, an N-vector is defined as the ordered N-tuplet of integers (x<sub>0</sub>, x<sub>1</sub>, x<sub>2</sub> ..... x<sub>N-1</sub>) such that 0 ≤ x<sub>i</sub> &lt; Q for all i. The parent of coordinate x<sub>i</sub> is defined as x<sub>(i-1) mod N</sub> and the child of x<sub>i</sub> is defined as x<sub>(i+1)mod N</sub>.</p>
<p align="justify">The IOPC transformation converts and N-vector x into an N-vector y with the coordinates given by :</p>
<ul>
<li> If parent(x<sub>i</sub>) ≤ child(x<sub>i</sub>) then y<sub>i</sub> = (parent(x<sub>i</sub>) + child(x<sub>i</sub>))/2 </li>
<li> If parent(x<sub>i</sub>) &gt; child(x<sub>i</sub>) then y<sub>i</sub> = (parent(x<sub>i</sub>) + child(x<sub>i</sub>) + Q)/2 mod Q</li>
</ul>
<p>
</p>
<p align="justify">Note that the division above is integer division - fractions are always rounded down.</p>
<p align="justify">As an example, let N=4, Q=5. Let the N-vector x be (2,0,3,1). Then the transformed N-vector y is (3,2,0,5).</p>
<p align="justify">An N-vector x is said to be invariant under the IOPC transformation if the y<sub>i</sub>=x<sub>i</sub> for all values of i. Given N and Q, find the number of invariant N-vectors.</p>
<h3>Input</h3>
<p align="justify">The first line of the input contains T, the number of test cases (T ≤ 10000). Following this are T lines, each consisting of two space separated integers N and Q (1 ≤ N,Q ≤ 10<sup>9</sup>).</p>
<h3>Output</h3>
<p align="justify">For each test case, output the number of invariant N-vectors. Since the answer could be very large, output it modulo 100000007.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 7
4 5
6 3

<b>Output:</b>
7
5
6
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-01-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>