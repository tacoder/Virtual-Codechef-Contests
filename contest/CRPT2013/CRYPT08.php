<?php require("../../includes/header.php"); ?><h1>The Will</h1><div class="content">
<h2>Problem Statement  </h2>
<p>The Grayson family had a long history of family feuds. The only thing they had in common was that they were related by blood. In one final attempt to unite his family, Mr. Grayson comes up with this idea in the hope that his family would work together and rekindle what was once lost. Their father on his death bed gave his children a word each. Each letter in a word represents a number. The sum of the first n-1 words must total the final word (n being the number of children). The final word, given to the eldest son represents the family’s bank account containing their inheritance of millions of dollars.<br />
The same letter throughout the string of words must be represented by only one number, and no letter is used to represent more than one number. Furthermore, the leftmost digit of any number is not allowed to be a zero.<br />
Write a program to help the Grayson family get their inheritance.
</p>
<h3>Input</h3>
<p>Your program should first accept a number n, which will indicate the number of lines to follow. The following n lines will each contain a word of no more than 10 characters.</p>
<h3>Output</h3>
<p>Your output should consist of an integer (The total number of solutions) if you believe there to be one, or the word 'Impossible' if you do not. If you find a solution and believe it to be the only one, you should only print out 'Unique'.</p>
<h3>Constraints</h3>
<ul>
<li><b>3</b> ≤ <b>n</b> ≤ <b>6</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 
ABCDE 
CDEFG 
EFGHI 
AJCGJA

<b>Output:</b>
4
</pre><p><br />
<br />
<b>Explaination: </b><br />
<br />
12345 + 34567 + 56789 = 103701 <br />
12345 + 34569 + 56987 = 103901 <br />
12365 + 36547 + 54789 = 103701 <br />
12365 + 36549 + 54987 = 103901<br />
Total 4 possible ways.<br />
<br />
</p>
<p>
<br />
<br />
<b>Note : The reference for this problem has been taken from : British Information Olympiad </b>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/himanshuk123">himanshuk123</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-10-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>