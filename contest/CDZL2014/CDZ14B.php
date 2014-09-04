<?php require("../../includes/header.php"); ?><h1>Break the Password</h1><div class="content">
<p>Eon is still on his quest to defeat Codezilla but he is stuck. He has reached a secret vault which according to Cypher, contains valuable information about Codezilla's information systems. But the vault is password locked. Till now Eon has been able to decipher the following things about the password:</p>
<ul>
<li>Maximum possible length of the password</li>
<li>The string <b>S</b> such that each character of the password is smaller than or equal to the corresponding character of <b>S</b>. password[i]&lt;=S[i] ( 0 &lt;= i &lt; |S| ). Also the password will be lexicographically smaller than S.</li>
<li>The password consists of only small English alphabets 'a' to 'z'.
</li></ul>

<p>
Now Eon makes a brute force program to enter all possible passwords. Tell him the maximum number of attempts he would have to make to get the correct password.
</p>
<p>
<b>NOTE :</b> The string A = A1...AN is called lexicographically smaller than the string B = B1...BN if there exists K from 1 to N, inclusive, such that Ai = Bi for i = 1, ..., K-1, and AK &lt; BK. We compare small letters by their positions in the English alphabet. So 'a' is the smallest letter, 'b' is the second smallest letter, ..., 'z' is the largest letter.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each test case consists of two lines. The first line contains the maximum possible length of the password <b>L</b> and the second line contains the string <b>S</b>.</p>
<h3>Output</h3>
<p>For every test case, print in a single line the answer for the corresponding input. Since the answer can be very large, print the answer modulo 1000000007.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>10^9</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
b
3
abc

<b>Output:</b>
27
8
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Eon will need to enter "a","aa","ab","ac","ad",..."az". So answer is 27.</p>
<p><b>Example case 2.</b> Eon will need to enter "a","aa","aaa","aab","aac","ab","aba","abb". So the answer is 8.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tussharsingh13">tussharsingh13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-02-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>