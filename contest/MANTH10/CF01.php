<?php require("../../includes/header.php"); ?><h1>Decryption</h1><div class="content">

<p>Aliens are planning to attack on Earth. Scientists at ISRO got a breakthrough when they were able to intercept the message being transferred in between aliens, but the problem is that aliens are using a technique for encrypting the message. Codefest team of IT-BHU were able to hack into the systems of aliens and decipher the method, the aliens were using for encryption but a method for decryption has not been found yet. You are required to decrypt the message.</p>
<p>The method used for encryption is explained below:<br />
Consider a string of N alphabets for example <b>encrypt</b> (N=7). The string is treated as if the last character wraps around back to the first. Next consider a set S of N different strings, in which each string is formed by cyclic rotation of the alphabets of the original string. So for the string <b>encrypt</b>, S = {encrypt, ncrypte, crypten, ryptenc, yptencr, ptencry, tencryp}</p>
<p>The next step is to perform a lexicographical sort in decreasing order on the set of above strings. So S becomes {yptencr, tencryp, ryptenc, ptencry, ncrypte, encrypt, crypten}</p>
<p>Now, the encyrpted string of N alphabets is formed taking the last character from the above sorted strings. For given example, the encrypted string is <b>rpcyetn</b>. They also send the position of the first character of the encrypted string so that the message can be decrypted i.e. 5 for the given example. </p>
<h3>Input</h3>
<p>There is a single integer T&lt;=200 on the first line of input which denotes the number of test cases to follow. Each of the next T lines, contains a string made up of k alphabets (a-z characters only) followed by an integer N, separated by a blankspace. 1&lt;=N&lt;=k&lt;=3000.</p>
<h3>Output</h3>
<p>Output consists of T lines, each containing the decrypted string.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
rpcyetn 5
rathe 5
aabb 2
<b>Output:</b>
encrypt
earth
abab
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/manthan">manthan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-03-2010</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>