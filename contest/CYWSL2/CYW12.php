<?php require("../../includes/header.php"); ?><h1>Inside Out</h1><div class="content">

<p>The reverse and add function starts with a number, reverses its digits, and adds the<br />
reverse to the original. If the sum is not a palindrome (meaning it does not give the<br />
same number read from left to right and right to left), we repeat this procedure until<br />
it does.<br />
For example, if we start with 195 as the initial number, we get 9,339 as the resulting<br />
palindrome after the fourth addition:<br />
195 786 1,473 5,214<br />
591 687 3,741 4,125<br />
+ —– +—— + —— +——<br />
786 1,473 5,214 9,339<br />
This method leads to palindromes in a few steps for almost all of the integers. But<br />
there are interesting exceptions. 196 is the first number for which no palindrome has<br />
been found. It has never been proven, however, that no such palindrome exists.<br />
You must write a program that takes a given number and gives the resulting<br />
palindrome (if one exists) and the number of iterations/additions it took to find it.<br />
You may assume that all the numbers used as test data will terminate in an answer<br />
with less than 1,000 iterations (additions), and yield a palindrome that is not greater<br />
than 4,294,967,295.</p>
<h3>Input</h3>

<p>The first line will contain an integer N (0 &lt; N ≤ 100), giving the number of test cases,<br />
while the next N lines each contain a single integer P whose palindrome you are to<br />
compute.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arnavch">arnavch</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2010</td>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>