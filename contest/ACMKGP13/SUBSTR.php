<?php require("../../includes/header.php"); ?><h1>Substring Problem</h1><div class="content">
<p>How many times does the integer K occur in the sequence obtained by writing out all the natural numbers from 1 to N, without any whitespace in between.</p>
<p>For example, if N = 20, the sequence would look like</p>
<pre>1234567891011121314151617181920

</pre>
<p>In the above sequence, the integer 12 occurs exactly 2 times. Also, the integer 11 appears exactly 2 times. Note that the two occurances of 11 overlap, but should still be counted separately.</p>
<p>How many times does the integer K occur in the sequence obtained by writing out all the natural numbers from 1 to N, without any whitespace in between.</p>
<p>For example, if N = 20, the sequence would look like</p>
<pre>1234567891011121314151617181920

</pre>
<p>In the above sequence, the integer 12 occurs exactly 2 times. Also, the integer 11 appears exactly 2 times. Note that the two occurances of 11 overlap, but should still be counted separately.</p>
<h3>Input</h3>
<p>The first line of input consists of an integer T - the number of the test cases. Then, T lines, consisting of two integers N and K follow. N and K are separated by a single space.</p>
<h3>Output</h3>
<p>For every test case, output the number of times that the integer K appears in the string, obtained by writing out the first N natural numbers.</p>
<h3>Constraints</h3>
<pre>1 ≤ N, K ≤ 1000000
1 ≤ Sum of N over all the test cases ≤ 1000000

</pre>
<h3>Sample Input</h3>
<pre>5
100 333
97 5
4 5
11 1
10 1

</pre>
<h3>Sample Output</h3>
<pre>1
20
0
4
2

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-10-2013</td>
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
            <td>C, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>