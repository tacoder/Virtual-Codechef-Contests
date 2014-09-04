<?php require("../../includes/header.php"); ?><h1>LCS Returns</h1><div class="content">
<p><span>Devu is a freshman in the college. In the data structures course, he has recently learned about LCS (longest common subsequence) problem, He thought about this problem a lot and has finally come up with a challenge for you.</span></p>
<p><span>You are given a string S of size <strong>N </strong>consisting only of lowercase English letters ('a' to 'z'). You have to find minimum length of string V also consisting of lowercase English letters('a' to 'z') such that length of LCS (S, V) ≥ <strong>L</strong>. The string V should not have more than <strong>K </strong>consecutive equal characters.<br />Note that it is not necessary for string V to be composed of characters of S only.</span></p>
<h3><span>Input</span></h3>
<ul>
<li><span>First line contains T : number of test cases. <br /> </span></li>
<li><span>For each test case, You are given two lines.<br /> </span></li>
<li><span>First line contains a string S.<br /> </span></li>
<li><span>Second line contains two space separated integers K and L.</span></li>
</ul>
<h3><span>Output</span></h3>
<ul>
<li><span>For each test case, output a single line containing integer corresponding to the answer of the problem.</span></li>
</ul>
<h3><span>Constraints</span></h3>
<ul>
<li><span>1 ≤ T ≤ 10<sup>6</sup></span></li>
<li><span>1 ≤ Size of string S ≤ 10<sup>6</sup></span></li>
<li><span><strong>1 ≤  Sum of lengths of strings over all test cases ≤ 10<sup>7</sup> </strong></span></li>
<li><span>1 ≤ K, L ≤ Size of S</span></li>
</ul>
<h3><span>Example</span></h3>
<pre><span><strong>Input:</strong>
2<br />aa<br />1 1<br />aba<br />1 2 </span></pre><pre><span><strong>Output:</strong>
1<br />2</span></pre><h3><span>Explanation</span></h3>
<ul>
<li><span>For first test case, V is 'a'.</span></li>
</ul>
<ul>
<li><span>For second test case, V can be 'ab' or 'ba'.</span></li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>