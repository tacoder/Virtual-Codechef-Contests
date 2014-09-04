<?php require("../../includes/header.php"); ?><h1>Cipher Text</h1><div class="content">

<p>Pakistan Team is obsessed with match fixing. Their bookie Asif is writing a letter to them and wants nobody else to be able to read it. They use a simple substitution cipher to encode his message. Each letter in the message is replaced with its corresponding letter in a substitution alphabet. A substitution alphabet is a permutation of all the letters in the original alphabet. In this problem, the alphabet will consist of only lowercase letters ('a'-'z').<br />
For example, if  message is "hello" and his cipher maps 'h' to 'q', 'e' to 'w', 'l' to 'e' and 'o' to 'r', the encoded message will be "qweer".<br />
Given the original message, determine the cipher that will produce the encoded string that comes earliest alphabetically. Return this encoded string. </p>
<h3>Input</h3>
<p>The first line consists of a number t representing the number of test case. Then, t lines follow each containing the message that will be less than 10,000 characters. It will contain only lowercase letters ('a'-'z').</p>
<h3>Output</h3>
<p>Output the Cipher message for each message.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
hello
sachin


<b>Output:</b>
abccd
abcdef

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/codeislands">codeislands</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS, PAS fpc, PHP, PYTH, PYTH 3.1.2, ST</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>