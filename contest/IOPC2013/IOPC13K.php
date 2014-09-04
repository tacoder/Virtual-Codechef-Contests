<?php require("../../includes/header.php"); ?><h1>Chocolates</h1><div class="content">

<p> Alice is teaching a class of <b>N+1</b> students and she is planning a picnic for her students. Each of her students is given a distinct rank between <b>0</b> and <b>N</b> for identification which makes sure they don’t get lost during the picnic. She has brought with her many bags each completely filled with <b>N<sup>2</sup></b>chocolates. She wants to distribute them among her students. But, like every other teacher, she is not going to give them without making them do some math problems first. So, she asks each of her students to choose a number <b>k</b> equal to his/her rank, and do the following :</p>
<ol>
<li> Find out the number of ways of selecting <b>k</b> chocolates from a set of <b>N</b> distinct chocolates. </li>
<li> Add his/her rank to <b>N</b> to get <b>N’</b> and again find out the number of ways of selecting <b>k</b> chocolates from a set of <b>N’</b> distinct chocolates.</li>
</ol>
<p>
She will give each of her students <b>x * y</b> chocolates, where <b>x</b> is the number that the student computed in the first step and <b>y</b> is the number computed in the second step. Now after calculating how many chocolates she will give in total, she starts taking them out from her bags. She picks a completely filled bag at first and starts taking out chocolates out until the bag is empty. Then, she chooses another completely filled bag and follows the same procedure. She wonders how much chocolates she will have to remove from the last bag.</p>
<p><br><br />
As a programmer, she asks for your help to find out the number of chocolates she will have to remove from the last bag.</br/></p>
<h3>Input</h3>
<p> The first line of the input contains an integer <b>T</b> denoting the number of test cases. Next follow <b>T</b> lines each containing an integer <b>N</b> for the test case. Assume that <b>N</b> is guaranteed to be a prime number.</p>
<h3>Output</h3>
<p> For each test case, output one line containing the number of chocolates Alice needs to remove from the last bag. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>31113</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
2

<b>Output:</b>
1
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