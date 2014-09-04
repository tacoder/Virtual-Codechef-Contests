<?php require("../../includes/header.php"); ?><h1>Crazy Teacher</h1><div class="content">

<p>Alice has been recruited as a new Professor at IIT Kanpur. There are a total of <b>n+1</b> students in her class each having a unique rank in the range <b>0</b> to <b>n</b>. Each student gives a choice of having <b>nCr</b> assignments (<b>r</b> is the unique rank of that student), where <b>nCr</b> is the coefficient of the <b>r<sup>th</sup></b> term in the expansion of <b>(1+x)<sup>n</sup></b>.</p>
<p>Alice loves her students so much that she wants her students to learn and do as many assignments as possible. She has gone crazy and thus she wants to give the minimum number (<b>K</b>, the same for all students) of assignments to each of her student, where <b>K</b> is divisible by the number of assignments requested by each of her students.</p>
<p>She asks you for help. Help her to find the number of assignments she needs to give.</p>
<p>As the answer can be very large, output it modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. This is followed by T lines each containing an integer <b>n</b>. </p>
<h3>Output</h3>
<p>One line for each test case, giving the number of assignments (<b>K</b>) Alice needs to give to her students.</p>
<h3>Constraints</h3>
<ul>
<li><b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
1
4
5

<b>Output:</b>
1
12
10

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
            <td>8 sec</td>
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