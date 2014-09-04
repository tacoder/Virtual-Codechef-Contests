<?php require("../../includes/header.php"); ?><h1>Edit Distance</h1><div class="content">

<p>Run-length encoding(RLE) is a very simple and easy form of data compression in which consecutive occurrences of the same characters are replaced by a single character followed by its frequency. As an example, the string S  <b>aabbbbdaa</b> would be encoded to <b>a2b4d1a2</b>.</p>
<p>Thus encoded string is described as an ordered sequence of pairs (a, i), each consisting of an alphabet symbol a and an integer i. Each pair corresponds to a <b>run</b> in S consisting of i consecutive occurrences of a.</p>
<p>In this problem, we are interested in finding the minimum number of mutation(s) needed to transform first string given in encoded form into second string i.e. <b>edit distance</b> when only two operation are allowed</p>
<ol>
<li>Add any character at any position(insertion)</li>
<li>Remove any character from any position(deletion)</li>
</ol>
<p>The cost of inserting a character is 1 and cost of deleting a character is 2.</p>
<h3>Input</h3>
<p>The input file contains several test cases. The first line of the input denotes the number of test cases, T (1≤T≤100) to follow. Each test case begins on a new line and consists of an integer L1, a blankspace and a run length encoded string S1 and then on a new line, an integer L2, a blankspace and a run length encoded string S2.</p>
<p>L1 and L2 denote the number of <b>runs</b> in strings S1 and S2 respectively. 1&lt;=L1,L2&lt;=100.<br />
S1 and S2 consists of alphabets [a-z] followed by number of consecutive occurrences of  that character.</p>
<p>You can safely assume that the total length of any of the strings will not exceed 3000 characters.</p>
<h3>Output</h3>
<p>For each test case, output the edit distance from S1 to S2 in a new line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 a3b2
1 b3
3 a1b1a1
1 a2
<b>Output:</b>
7
2

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>