<?php require("../../includes/header.php"); ?><h1>Infinite GP in Infinite GP</h1><div class="content">
<p>Consider an infinite <a href="http://en.wikipedia.org/wiki/Geometric_series">geometric sequence</a> S={1, <sup>1</sup>⁄<sub>2</sub>, <sup>1</sup>⁄<sub>4</sub>, <sup>1</sup>⁄<sub>8</sub> … }.<br /><br /><br />
For given fraction <strong><sup>p</sup>⁄<sub>q</sub></strong>, check whether one can select an infinite geometric sequence <strong>R</strong>, such that <strong>R ⊆ S</strong> and Summation of all elements in R is <sup>p</sup>/<sub>q</sub><br />.</p>
<h3>Input Format</h3>
<p>First line contains an integer <strong>T</strong>, representing the number of test cases. The next <strong>T</strong> lines,each contain two space separated integers, <strong>p</strong> and <strong>q</strong>.<br /> <br /> </p>
<h3>Output Format</h3>
<p>The output should contain <strong>T</strong> lines, one for each test case. If there exists such a sequence satisfying the given constraint, print "YES" (without quotes), else print "NO".<br /><br /></p>
<h3>Constraints</h3>
<ul>
<li>T ≤ 50000<br /></li>
<li>1 ≤ p,q ≤ 1e9<br /></li>
</ul>
<p><br /></p>
<h3>Sample Input : </h3>
<p>2<br /><br />
3 1<br /><br />
1 3<br /><br /></p>
<h3>Sample Output : </h3>
<p>NO<br /><br />
YES<br /><br /></p>
<h3>Explanation : </h3>
<p>For 1st test case, there cannot exist any series with sum as 3, since maximum sum possible is 2.<br /><br />
For 2nd test case, the series beginning with <sup>1</sup>⁄<sub>4</sub> and geometric factor as <sup>1</sup>⁄<sub>4</sub>, has sum <sup>1</sup>⁄<sub>3</sub><br /><br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-02-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>