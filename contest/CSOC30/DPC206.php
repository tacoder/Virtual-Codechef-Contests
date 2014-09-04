<?php require("../../includes/header.php"); ?><h1>Palindrome</h1><div class="content">

<p align="center" class="MsoNormal">
        <b><u><br />
        <span><br />
        Palindrome</span></u></b></p>
<p class="MsoNormal">
         </p>
<p class="MsoNormal">
        <span><span> </span></span><span><span> </span><span>       <br />
        </span>A simple recursive method to generate a numeric palindrome from any<br />
        number is to reverse its digits and add it to the original. If the sum is not a<br />
        palindrome (which means, it is not the same number from left to right and right<br />
        to left), repeat this procedure. For example for 195:</span></p>
<p class="MsoNormal">
        <span><br />
        <span>    </span>195 + 951 = 786</span></p>
<p class="MsoNormal">
        <span><br />
        <span>    </span>786 + 687 = 1473</span></p>
<p class="MsoNormal">
        <span><br />
        <span>    </span>1473 + 3741 = 5214</span></p>
<p class="MsoNormal">
        <span><br />
        <span>    </span>5214 + 4125 = 9339<br />
        Resulting palindrome</span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <span><span> </span>In<br />
        this particular case the palindrome 9339 appeared after 4th addition. This<br />
        method leads to palindromes in a few step for almost all of the integers. But<br />
        there are interesting exceptions. 196 is the first number for which no<br />
        palindrome has been found. It is not proven though, that there is no such a<br />
        palindrome.</span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <span><span> </span>Your<br />
        task is to write a program that gives the resulting palindrome and the number of<br />
        iterations (additions) to compute it. All tests data in this problem will have<br />
        an answer, will be computable with less than 1000 iterations (additions), which<br />
        will yield a palindrome that is not greater than 4,294,967,295.</span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <span><br />
        <span> </span></span><b><span>Input</span></b></p>
<p class="MsoNormal">
        <span><br />
        <span>         <br />
        </span></span><br />
        <span><br />
        <span>         <br />
        </span>The first line will have a number N (0&lt;N&lt;=100) with the number of test<br />
        cases, the next N lines will each have a number P to compute its palindrome.</span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <b><br />
        <span><br />
        Output</span></b></p>
<p class="MsoNormal">
        <span><span>         <br />
        </span>For each of the N numbers you will have to write a line with the minimum<br />
        number of iterations (additions) to get to the palindrome and the resulting<br />
        palindrome separated by one space.</span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <b><span>Sample Input</span></b></p>
<p class="MsoNormal">
        <span>3</span></p>
<p class="MsoNormal">
        <span>195</span></p>
<p class="MsoNormal">
        <span>265</span></p>
<p class="MsoNormal">
        <span>750</span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <b><span>Sample Output</span></b></p>
<p class="MsoNormal">
        <span>4 9339</span></p>
<p class="MsoNormal">
        <span>5<br />
        45254</span></p>
<p class="MsoNormal">
        <span>3 6666</span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <span> </span></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-03-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>