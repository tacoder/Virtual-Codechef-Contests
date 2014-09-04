<?php require("../../includes/header.php"); ?><h1>Crypto</h1><div class="content">
<h3>Problem description</h3>
<p>Sampada is making questions for the Pravega event Crypto. While working on encryption, she has discovered that any cipher (which is a positive integer) which has any substring not divisible by 2 is bad and can be cracked. She has also discovered that any cipher which has a substring divisible by 11 is also bad and can be cracked easily. She believes all other ciphers are good.
</p><p>Help Sampada find the kth cipher, in ascending order, which is good.</p>
<p>In a good cipher, every substring is divisible by 2 and none are divisible by 11.</p>
<h3>Input format</h3>
<p>The first line of input has a single integer T, the total number of test cases. The next T lines each have an integer k on them.</p>
<h3>Output Format</h3>
<p>The output should contain T integers on T different lines, the kth good cipher.</p>
<h3>Sample Input</h3>
<div>
2<br /><br />
1<br /><br />
136
</div>
<p><br /></p>
<h3>Sample Output</h3>
<div>
2<br /><br />
4008
</div>
<p><br /></p>
<h3>Input constraints</h3>
<p>1 ≤ T ≤ 50000<br /><br />
1 ≤ k ≤ 1500000 </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pravega_opc">pravega_opc</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-11-2013</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>