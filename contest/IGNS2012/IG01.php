<?php require("../../includes/header.php"); ?><h1>The Flames Calculation</h1><div class="content">

<p>This is a simple game you must have played around with during your school days, calculating FLAMES of you and your crush! Given the names of two people, cancel out the common letters (repeated occurrence of a letter is treated separately, so 2A's in one name and one A in the other would cancel one A in each name), count the total number of remaining letters (n) and repeatedly cut the letter in the word FLAMES which hits at the nth number when we count from F in cyclic manner.</p>
<pre>For example:
NAME 1: SHILPA
NAME 2: AAMIR
After cutting the common letters: 
NAME 1: SHILPA 
NAME 2: AAMIR
Total number of letters left=7
FLAMES, start counting from F : 1=F, 2=L, 3=A, 4=M, 5=E, 6=S,7=F...So cut F
FLAMES: repeat this process with remaining letters of FLAMES for number 7 (start count from the letter after 
the last letter cut) . In the end, one letter remains. Print the result corresponding to the last letter:
F=FRIENDS
L=LOVE
A=ADORE
M=MARRIAGE
E=ENEMIES
S=SISTER
</pre><h3>Input</h3>
<p>The no. of test cases (&lt;100)<br />
two names (may include spaces) for each test case.</p>
<h3>Output</h3>
<p>FLAMES result (Friends/Love/...etc) for each test case</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
SHILPA
AAMIR
MATT
DENISE


<b>Output:</b>
ENEMIES
LOVE
</pre><p><b></b></p>
<pre>




By:
Chintan, Asad, Ashayam, Akanksha
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/chint7392">chint7392</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2012</td>
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