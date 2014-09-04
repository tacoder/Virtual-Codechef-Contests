<?php require("../../includes/header.php"); ?><h1>Three substrings</h1><div class="content">
<p>Given a string <strong>S</strong> of length <strong>N</strong>, consisting of lowercase English alphabets from ‘a’ to ‘z’, <br />you have to select three non overlapping substrings of <strong>S</strong>, such that number of a’s in the string made by concatenating the three substrings are greater than or equal to <strong>M</strong>.<br /><br />You have to find the number of ways of selecting three such substrings. Output your answer modulo (10^9 + 7)<br /><br /> </p>
<h3>Input Format</h3>
<p>First line contains <strong>T</strong>, the number of test cases.<br /><br /><br />
Each test case consists of 2 lines, first line contains the string <strong>S</strong> and the second line contains the integer <strong>M</strong>.<br /><br /></p>
<h3>Output Format</h3>
<p>The output consists of <strong>T</strong> lines, such that <strong>i</strong>-th line represents the output of the <strong>i</strong>-th test case.<br /><br /></p>
<h3>Constraints</h3>
<ul>
<li>Sum of length of strings over all test cases ≤ 5000</li>
<li>0 ≤ M ≤ 5000
</li><li>Length(S) &gt; 0 </li>
</ul>
<p><br /></p>
<h3>Sample Input</h3>
<p>4<br /><br />
deva<br /><br />
1<br /><br />
deva<br /><br />
2<br /><br />
dev<br /><br />
0<br /><br />
dev<br /><br />
1<br /></p>
<h3>Sample Output</h3>
<p>6<br /><br />
0<br /><br />
1<br /><br />
0<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>3 sec</td>
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