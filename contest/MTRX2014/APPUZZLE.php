<?php require("../../includes/header.php"); ?><h1>Arithmetic puzzle</h1><div class="content">
<p>Arithmetic and geometric Progressions are 2 of the well known progressions in maths. Arithmetic progression (AP) is a set in which the difference between 2 numbers in constant. for eg, 1,3,5,7,9....<br />In this series the difference between 2 numbers is 2.The task here is very simple indeed. You will be given the 3rd term , 3rd last term and the sum of the series. You need to print the length of the series &amp; the series itself.</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>Each of the following t lines will have 3 number <b>'3rd term'</b> ,<b>'3rd Last term'</b> and <b>'sum'</b>.
<ul>
<li>3rd term  - is the 3rd term in the series</li>
<li>3rd Last term  - is the 3rd term from the end in the series</li>
<li>sum - is the sum of the series.</li>
</ul>
</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>For each input of the test case, you need to print 2 lines.</p>
<ul>
<li>First line should have 1 value-number of terms in the series.</li>
<li>2nd line of the output should print the series numbers separated by single spaces.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li>All numbers will be less than <b>10<sup>16</sup></b>.</li>
<li>The series will have at least 7 elements.</li>
<li>In all the test cases all the series elements are positive integers.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 8 55

<b>Output:</b>
10
1 2 3 4 5 6 7 8 9 10
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vivekjha92">vivekjha92</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-11-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, JAVA, PYTH, PYTH 3.1.2</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>