<?php require("../../includes/header.php"); ?><h1>The Amazing Race</h1><div class="content">
<p>In an amazing race around the world, Karen wants to go from city A to city B and then to city C in order to win the competition.<br />
She is lucky to get a direct ticket to city C, but she finds out that she needs to decrypt the code on the ticket in order to avail the opportunity to travel directly to city C. You have to help her decrypt the code.
</p>
<p>
The encrypted code is alphanumeric. Every alphabet can be replaced by a number from the set {0,1,2,3,4,5,6,7,8,9} such that no two alphabets get the same numeric value.
</p>
<p>
The final decrypted code is the median of all the possible codes that can be formed using the above technique when the codes are sorted in lexicographical order (as in a dictionary).
</p>
<h3>Input</h3>
<p>The First line contains the number of test cases, <b>T</b>.<br /></p>
<p><b>T</b> test cases follow.<br /><br />
Each test case contains a single line representing the encrypted code which is a combination of numbers from [0-9] (inclusive) and lowercase letters.
</p>
<h3>Output</h3>
<p>For each test case output the final decrypted code. In case there is more than one final decrypted code, output all of them on the same line separated by a space in lexicographic order.
</p>
<h3>Constraints</h3>
<p>Maximum length of input string : 10^5</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
a58
a647b

<b>Output:</b>
458 558
46479 56470
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ashmew2">ashmew2</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-08-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>