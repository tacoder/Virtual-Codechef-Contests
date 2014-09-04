<?php require("../../includes/header.php"); ?><h1>Twitter Conundrum</h1><div class="content">
<p>Brazilian supermodel 'Genesis Koboi' fell from the ramp during a fashion show and lost her memory. The only thing she remembers is her twitter handle and her password. The only way to regain her entire memory is for her to read all the tweets she ever wrote.
</p>
<p>
Every tweet consists of a maximum length of 140 characters. Now, given an input string of SPACE SEPARATED words of equal length, which MAY OR MAY NOT make sense, form a tweet which can contain the MAXIMUM number of SPACE SEPARATED words from the input string. A word CAN REPEAT in each tweet ANY NUMBER of times. Calculate the maximum number of tweets N that you can form using this principle and help Genesis regain her memory.
</p>
<p>
Each input string will consist of words i.e. <b>ONLY</b> alphabets.
</p>
<h3>Input</h3>
<p>The First line contains the number of test cases, <b>T</b>.<br /></p>
<p><b>T</b> test cases follow.<br /><br />
Each test case contains a single line which is the string of space separated words of equal length.
</p>
<h3>Output</h3>
<p>
<b>N</b>, where N is (the maximum possible number of tweets) % 10^9+7
</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
abcdefghijklm mlkjihgfedcba

<b>Output:</b>
1024
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
            <td>5 sec</td>
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