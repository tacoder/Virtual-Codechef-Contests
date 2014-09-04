<?php require("../../includes/header.php"); ?><h1>Another Factorial Problem</h1><div class="content">

<p>Every programming contest has a problem on factorials. Continuing with this tradition, we decided to include one too. <br/><br />
Given two integers, <b>n</b> and <b>p</b>, find <b>x <i>(mod p)</i></b> where <b>x</b> is the number obtained after eliminating all powers of <b>p</b> from <b>n!</b>.<br/><br />
Here <b>n!</b> denotes factorial of <b>n</b>.  Assume that <b>p</b> is prime.</br/></br/></p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. This is followed by <b>T</b> lines each containing two space separated integers, <b>n</b> and <b>p</b>.</p>
<h3>Output</h3>
<p>One line for each test case, giving the value of the required expression.</p>
<h3>Constraints</h3>
<ul>
<li><b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10<sup>18</sup></b></li>
<li><b>1</b> ≤ <b>p</b> ≤ <b>10<sup>7</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
5 3
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
            <td>10 sec</td>
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