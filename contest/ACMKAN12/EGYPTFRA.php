<?php require("../../includes/header.php"); ?><h1>Egyption Fractions</h1><div class="content">

<p style="text-align:justify">
A fraction a/b is called in its lowest form if gcd(a, b) = 1. It is possible to express a/b using the sum of a finite number of reciprocals of natural numbers. For example, 2/7 can be written as 1/4 + 1/28. Such a representation is called an Egyptian fraction representation of a/b. For each fraction, there could be multiple Egyptian fraction representations.</p>
<p style="text-align:justify">
Let two sets of reciprocals be (p<sub>1</sub>, p<sub>2</sub>, ..., p<sub>n</sub>) and (q<sub>1</sub>, q<sub>2</sub>, ..., q<sub>k</sub>). We say, the first is lexicographically lesser than the second if there is some m, 1 ≤ m ≤ min(n,k) such that,</p>
<p style="text-align:justify">
p<sub>1</sub> = q<sub>1</sub>, p<sub>2</sub> = q<sub>2</sub>, ..., p<sub>m-1</sub> = q<sub>m-1</sub> and p<sub>m</sub> ≤ q<sub>m</sub>.</p>
<p style="text-align:justify">
Given a set of fractions in the lowest form, the problem is to generate the lexicographically least Egyptian fraction for each input fraction.</p>
<h3>Input</h3>
<p style="text-align:justify">
The input consists of several lines, each line consisting of a pair of numbers separated by a blank space. The end of the input is signaled by a line containing the pair of numbers 1 and 1. Each pair on a single line will be positive numbers, co-prime to each other (except for the last line). The first number on any line is always less than or equal to the second number on the line.</p>
<h3>Output</h3>
<p style="text-align:justify">
For each pair of numbers a and b on a line, output a sequence of numbers, representing the denominators of the lexicographically least Egyptian Fraction of a/b. The denominators should be sorted in ascending order. There should be a blank space separating one denominator from the next. You should NOT output the Egyptian Fraction representation of the last line, representing 1/1 = 1.</p>
<h3>Sample Input</h3>
<pre>
1 4
2 7
5 9
1 1

</pre><h3>Sample Output</h3>
<pre>
4
4 28
2 18

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shilp_adm">shilp_adm</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-11-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>