<?php require("../../includes/header.php"); ?><h1>PAL-IN-DROME</h1><div class="content">
<p> </p>
<p> A positive integer is said to be a palindrome with respect to base b, if its representation in base b reads the same from left to right as from right to left. Palindromes are formed as follows:<br />
Given a number, reverse its digits and add the resulting number to the original number. If the result isn't a palindrome, repeat the process. For example, start with 87 base 10. Applying this process, we obtain:<br />
<br /><br />
87 + 78 = 165<br />
<br />        165 + 561 = 726<br />
<br /> 			  726 + 627 = 1353<br />
<br />                            1353 + 3531 = 4884, a palindrome<br />
<br /><br />
Whether all numbers eventually become palindromes under this process is unproved, but all base 10 numbers less than 10,000 have been tested. Every one becomes a palindrome in a relatively small number of steps (of the 900 3-digit numbers, 90 are palindromes to start with and 735 of the remainder take fewer than 5 reversals and additions to yield a palindrome). Except, that is, for 196. Although no proof exists that it will not produce a palindrome, this number has been carried through to produce a 2 million-digit number without producing a palindrome.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input file contains positive integer t – the amount of test cases. Next t lines contain a positive integer and its base. Bases will be in the range 10 – 36. </p>
<p> </p>
<h3>Output</h3>
<p>Print the palindrome produced. If no palindrome is produced after 10 additions, print the word “none” and the last sum.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>10</b> ≤ <b>base</b> ≤ <b>36</b></li>
<li><b>1</b> ≤ <b>t</b> ≤ <b>10</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:<br /> 5 
 420, 13 
 46894, 10  
 NITUK, 35
 CODEGURU, 36
 PRODAYA, 35
</b>

<b>Output:<br />444
NONE, 1317544822
NONE, L6SFFT6K
TLRCSCRLT
BH8888HB
</b>
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tejas02">tejas02</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-04-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, FORT, GO, JAR, JAVA, JS, LISP clisp, LISP sbcl, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PRLG, PYTH, PYTH 3.1.2, RUBY, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>