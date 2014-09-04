<?php require("../../includes/header.php"); ?><h1>Kokos Assignment</h1><div class="content">

<p>Koko is a student studying in the 6th standard. Koko’s Math teacher has taught him Prime numbers today and </p>
<p>has given his class a homework assignment. The assignment is to find out all the prime numbers between any 2 </p>
<p>numbers such that it every prime number contains the digit – 1 in it. (eg. 13, 17, etc). Help Koko finish his </p>
<p>assignment faster by writing a code for it.</p>
<p>Prime Numbers:  A number is a Prime if its only factors are 1 and he number itself.<br />
Eg. 3, 5, 23, 31, 41.
</p>

<h3>Input</h3>
<p>Take two inputs from the user.</p>
<ul>
<li>The first input being the starting range(say n)</li>
<li>and the second being the ending range(say m)</li>
</ul>

<h3>Output</h3>
<p>List of all the prime numbers which are between n and m (both inclusive) and also have the digit ‘1’ in each </p>
<p>of them. </p>

<h3>Constraints</h3>

<ul>
<li>0&lt;=n&lt;=1000</li>
<li>0&lt;=m&lt;=1000</li>
</ul>
<h3>Example</h3>
<ul>
<li>Input<br />10 20<br />Output<br />11 13 17 19</li>
<li>Input<br />40 50<br />Output<br />41 </li>
<li>Input<br />60 120<br />Output<br />61 71 113 117</li>
</ul>
<h3>Explanation</h3>
<p>For input<br /><br />
10 40<br /><br />
All the prime numbers in the given range are – 11, <br />13, 17, 19, 23, 29, 31 and 37. But the numbers which </p>
<p>have the digit 1 in it are – 11,13,17,19.<br /><br />
Output is <br /><br />
11 13 17 19 31<br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aranta">aranta</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-02-2014</td>
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
            <td>ADA, ASM, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>