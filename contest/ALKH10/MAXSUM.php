<?php require("../../includes/header.php"); ?><h1>Maximum Difference Sum</h1><div class="content">

<p style="text-align:justify">
Ramanujan is a Mathematician. One day when he was looking for a book in library, he came across a book named <b>Formule Di Matematica</b>. He found it interesting and started reading it. While going through the book, he found a function <b>D</b> which was as following:<br /><br /><b><br />
D(&lt; a<sub>1</sub>,a<sub>2</sub>,a<sub>3</sub>,..,a<sub>n</sub> >) = |a<sub>1</sub>-a<sub>2</sub>| + |a<sub>2</sub>-a<sub>3</sub>| + ... +|a<sub>n-1</sub>-a<sub>n</sub>| </b><br /><br />
where &lt; a<sub>1</sub>,a<sub>2</sub>,a<sub>3</sub>,...,an > is a sequence of n distinct integers.<br /><br />Ramanujan quickly understood that the value of D would depend upon the order of integers, hence he was then interested in finding out what could possibly be the maximum value of D, given a set of Integers S.<br />
It's given that, S = set of all possible permutation you can make with n different integers and the range of integers would be [1...n].<br />
Now help Ramanujan to find the maximum value of D which can be obtained, if he tries each and every permutation from the set S as an argument for D.
</p>
<p><b>Input:</b></p>
<p style="text-align:justify">
There will be T&lt;=10<sup>5</sup> test cases. For each case there is a single line. First line contains an integer 1&lt;=n&lt;=10<sup>9</sup> which specifies the number of distinct integers. The integers are in the range [1..n].
</p>
<p style="text-align:justify">
<b>Output:</b><br /><br />
For each test case you have to output the required answer in a single line.The output will fit in 64-bit signed integer.
</p>
<h3>Example:</h3>
<pre>
<b>Input:</b>
2
1
2

<b>Output:</b>
0
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divij">divij</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2010</td>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>