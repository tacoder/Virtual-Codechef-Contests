<?php require("../../includes/header.php"); ?><h1>X Sequence</h1><div class="content">

<p>Once again, Vicky is back in the Kingdom of ByteLand. The people of Byteland are very inquisitive about number sequences and Vicky is pondering over a sequence which they called as an X-Sequence .This sequence is described as follows:</p>
<p>The sequence is made of integers: <b>a1, a2, a3, a4...aN</b>  where ,<br />
1) <b>|ak &minus; a(k+1)| = X</b><br />
2)  <b>a1 = 0</b> <br />
3)  <b>S = a1 + a2 + a3 + .... + aN</b></p>
<p>Here , <b>X</b> and <b>N</b> are positive integers, and <b>S</b> is the sum. Now, Vicky wants to investigate this X-Sequence, so he would be asking you queries which you have to answer. </p>
<p>The queries can be of two forms:<br />
Type <b>1</b>: <b>0 S N</b> which asks you to calculate the number of X-Sequences with Sum = <b>S</b> and number of elements as <b>N</b>. (Two X-Sequences are considered to be different if and only if they have different X and  1 &lt;= X &lt;= 10^8 )<br />
Type <b>2: 1 S N</b> which asks you to output the X-sequence, with Sum = <b>S</b> and number of elements as <b>N</b> ,with minimum <b>X</b>.</p>
<p>Help Vicky answer the two kinds of queries correctly.</p>
<h3>Input</h3>
<p>The first line of input consists of number of queries <b>Q</b> after which <b>Q</b> lines follow with each query on a line. There can be two types of queries as mentioned above.</p>
<h3>Output</h3>
<p>The output should contain <b>Q</b> lines, one for each query.<br/><br />
For Type 1 query, print the query being answered followed by number of distinct X-Sequences possible for 1 &lt;= X &lt;= 10^8, as described above, all in the same line.<br/><br />
For Type 2 query, print the query being answered followed by the sequence as space separated integers. It is guaranteed that there will be at least one sequence for the same. In case there are multiple sequences possible print any one of them.</br/></br/></p>
<h3>Constraints</h3>
<pre>
Q &lt;= 5000
1 &lt;= X &lt;= 10^8
For Type 1 query,  &minus;(10^8)  &lt;=  S  &lt;=  10^8, 1 &lt;= N &lt;=  10^6
For Type 2 query,  &minus;(10^8)  &lt;=  S  &lt;= 10^8, 1 &lt;= N &lt;= 10^4
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
3
0 8 3
1 4 4
0 0 1
<b>Output:</b>
0 8 3 1
1 4 4 0 1 2 1
0 0 1 100000000
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/the123abhishek">the123abhishek</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>