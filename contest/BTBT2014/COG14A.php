<?php require("../../includes/header.php"); ?><h1>L-Binary Numbers</h1><div class="content">
<p> </p>
<p>After studying boolean algebra Leonardo defined L-binary numbers (which contains only 0’s and 1’s).<br />
A binary number is L-binary if it does not contain <b>K</b> consecutive zeros and does not have leading zeros.<br /><br />
Find the number of L-Binary Numbers of length <b>N</b>.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
Next <b>T</b> lines contains 2 integers <b>N</b> and <b>K</b>.
</p>
<h3>Output</h3>
<p>Print a line for each test case containing the required answer modulo <b>1000000007</b>.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Sample Input:</b>
2<br />
1 1
3 2

<b>Sample Output:</b>
1
3
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/purvi2">purvi2</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td> - 1 sec</td>
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