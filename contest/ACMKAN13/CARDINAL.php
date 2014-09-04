<?php require("../../includes/header.php"); ?><h1>Cardinality</h1><div class="content">
<p>You have a set of unique numbers. You are trying to find a <b>subset</b> of this set such that <b>no two numbers in the subset have a common digit</b>. There will of course be several such subsets. You are interested in the subset with the <b>maximum sum</b>. The sum of a subset is defined as the sum of the numbers in the subset.</p>
<p>In fact, you are most interested in the <b>cardinality</b> - that is, the number of elements - of the subset with the <b>maximum sum</b>. Of course there may be several such subsets with the same <b>maximum sum</b>. Find the <b>cardinality</b> of the subset with the <b>most elements</b> among such sets.</p>
<p>Refer to the explanation section for more clarity.</p>
<h3>Input</h3>
<p>There will be several test cases. Each test case is described in two lines. The first line contains the number <b>N</b>, the number of numbers in the set given to you. The second line contains <b>N</b> space separated positive integers, <b>A<sub>1</sub>, A<sub>2</sub> ..., A<sub>N</sub></b>. The input is terminated by <b>EOF</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line. The line should contain a single integer which denotes the <b>cardinality of the set</b> that satisfies all the requirements in the problem statement.</p>
<h3>Constraints</h3>
<pre>
<b>1 ≤ N ≤ 100</b>
<b>1 ≤ A<sub>i</sub> ≤ 1000000000</b>
<b>No two A<sub>i</sub>'s will be same.</b>
<b>There will be at most 100 test cases.</b>

</pre><h3>Sample Input</h3>
<pre>
3
7 17 10
2
12 29
3
1 2 12

</pre><h3>Sample Output</h3>
<pre>
2
1
1

</pre><h3>Explanation</h3>
<p>In the first test case, the maximum sum possible is <b>17</b>. There are two ways to achieve that sum. <b>{7, 10}</b>, with a <b>cardinality of 2</b>. <b>{17}</b>, with a <b>cardinality of 1</b>. Hence, the answer is <b>2</b>, since it is more.</p>
<p>In the second test case, we can select only <b>1</b> number due to the constraint that <b>the numbers in the subset should not share any digits</b>. The answer is of course <b>1</b>, for the subset <b>{29}</b>.</p>
<p>Note that a subset of cardinality <b>2</b> is possible, <b>{1, 2}</b>. But, its sum is only <b>3</b>. The sum of the subset <b>{12}</b> is <b>12</b>, which is the maximum possible. Hence the answer is the cardinality of the set <b>{12}</b>, which is <b>1</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-10-2013</td>
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
            <td>C, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>