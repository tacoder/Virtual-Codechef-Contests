<?php require("../../includes/header.php"); ?><h1>EnCrYpTo</h1><div class="content">
<p> </p>
<p>In this program you will be given a set of letters to encode. The difference here is that different rules are used for different letters and the counting process starts where the last letter ends. Using the numerical value of each letter (A=1, B=2, … Z= 26) the rules are as follows: The number of letters to count is given by: </p>
<ul>
<li>RULE 1 	Multiply its numerical value by 2 </li>
<li>RULE 2 	Divide its numerical value by 3. Multiply the integer remainder by 5 </li>
<li>RULE 3 	Divide its numerical value by 4. Multiply the integer part of the quotient by –8. </li>
<li>RULE 4 	Take the square root of the numerical value. Truncate the decimal part of the answer. Multiply the resulting integer by –12. </li>
<li>RULE 5 	Find the sum of the factors of its numerical value. Multiply by 10. </li>
</ul>
<p>For the first letter of each set, if the computed value is non-negative, starting at A count the computed value to the right. For each additional letter start at the current encoded letter. If the first computed value is negative, starting at A count to the left which means wrapping around to the end of the alphabet. For each additional letter start at the current encoded letter. As an example, the input C1B2F3$ would produce the encoded letters GQI. The C with a numerical value of 3 evaluates to a 6, using rule 1. Always starting each new set at A, and counting 6 letters to the right, the C encodes to an G. The B with a numerical value of 2 evaluates to a 10. Counting down the alphabet 10 letters from G encodes the B to a Q. The F with a numerical value of 6 evaluates to a –8, using rule 3. Counting to the left 8 letters from Q encodes the F to an I. The final encoded value is GQI.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input file contains positive integer t – the amount of test cases. Next lines will consist of a series of upper case letters each followed by a rule number without any space between them. The line will end with a $. The $ is not encoded</p>
<p> </p>
<h3>Output</h3>
<p>For each input line, print the encoded string it produces. </p>
<p> </p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>t</b> ≤ <b>10</b></li>

<p> </p>
<h3>Example</h3>
<pre><b>Input:<br />5
A1B1C1$						 	 
A2C4S5L3$						 	 
C5P4L3U2S1$					 		 
C2H3P4$ 						 	 
M1O2N3T4R5E1A2L3$
</b>

<b>Output:<br />CGM
FTLN
OSUUG
AKO
AACGGQVX
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, FORT, GO, JAR, JAVA, JS, LISP clisp, LISP sbcl, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PRLG, PYTH, PYTH 3.1.2, RUBY</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>