<?php require("../../includes/header.php"); ?><h1>Find the sum</h1><div class="content">

<p>Bob is extremely bored, so he thinks of a game to play in the meanwhile. The game is as follows. He takes two integers <b>N</b> and <b>M</b> and tries to find twice the sum of the quotients of the integer division of (<b>i * N</b>) by <b>M</b> varying <b>i</b> from <b>0</b> to <b>M-1</b> both included. But as he started computing the sums for larger values of <b>M</b> and <b>N</b>, things started becoming very complex. So he has asked for your help. You need to output the sum that Bob needs. </p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>Each of the next <b>T</b> lines contains two space separated integers <b>M</b> and <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M,N</b> ≤ <b>10<sup>8</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
2 3

<b>Output:</b>
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>