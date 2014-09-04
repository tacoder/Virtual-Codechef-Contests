<?php require("../../includes/header.php"); ?><h1>Recruitment</h1><div class="content">

<p>A New Recruitment Process is being adopted by Software Companies these days. They make the applicants sit in a circle (indexing is 1-based). For a selected value of k, they start counting from the 1st person and eliminate the kth person. Then they start counting from the very next person in the remaining circle and eliminate the 2kth person, and then start again from there and eliminate the 3kth person, until a single applicant remains. That applicant is recruited.</p>
<p>So given the number of applicants n, and for a given value of k, we need to tell them the initial index of the person who got recruited.</p>
<p><b>Input</b></p>
<ul>
<li>The first line contains the number of test cases(T).</li>
<li>Every test case, on a single line, contains two integers, n and k respectively, separated by a single space.</li>
</ul>
<p></p>
<p><b>Output</b></p>
<ul>
<li>Every test case has one line of output containing an integer, the initial index of the person who got recruited.</li>
</ul>
<p></p>
<p><b>Constraints</b></p>
<ul>
<li>1 &lt;= T &lt;= 250000</li>
<li>1 &lt;= n &lt;= 500</li>
<li>1 &lt;= k &lt;= 500</li>
</ul>
<p></p>
<p><b>Sample Input</b></p>

<p><code><br />
3</code></p>
<p>5 2</p>
<p>7 3</p>
<p>7 1</p>
<p></p>
<p></p>
<p><b>Sample Output</b></p>

<p><code><br />
3</code></p>
<p>1</p>
<p>4</p>
<p></p>
<p></p>
<p><b>Explanation</b></p>
<p>Case 1: n=5 and k=2. They start counting from 1st person and elimiante the 2nd (kth) person whose index is 2. Then they start from the very next person and eliminate the 4th(2kth) person, whose initial index was 1. Then they eliminate the 6th(3kth) person, whose initial index was 5. Then the person elimainated has an initial index of 4. The applicant whose index was 3 is left and is selected.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/transcendence">transcendence</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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