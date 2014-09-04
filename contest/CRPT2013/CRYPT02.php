<?php require("../../includes/header.php"); ?><h1>Mafia</h1><div class="content">
<h2>Problem Statement </h2>
<p>The don of the Italian Mafia comes up with a list of names every five years, a rarity, when the books are open, a chance for some of the members of the crew to come up and be recognized by the mob. But due to the secretiveness of the organization the names are embedded in a matrix of letters so that it can’t be easily understood. After the boss gives this chit to one of his crew members to reveal it to the rest of the mob, he gets arrested and is now in custody with the CIA. So it’s now in the hands of the CIA to figure out the names to carry on their investigation.<br />
Write a program to see if the names of the suspects the CIA has provided is in the matrix of letters given by the mob.
</p>
<h3>Input</h3>
<p>The first line of input contains the length (in characters) of the sides of the letter matrix (the matrix of letters will be square). The following x lines will be the letter matrix itself, each line will contain x uppercase letters. A list of words will follow after the matrix.
</p>
<p>
Note:<br />
Each word will be on a line by itself containing only uppercase letters.<br />
The final line of input will contain a single zero character.
</p>
<h3>Output</h3>
<p>Your program should search each word from the word list in the letter matrix. The search for word is successful  if all the characters in the word can be searched in a sequence (unidirectional) either  horizontal or  diagonal or vertical line from the letter matrix. A word may be found from right to left (``backwards'') in horizontal and diagonal case. In case of successful search your program should print the coordinates of its first and last letter in the letter matrix on a single line, separated by a single space. Each set of coordinates should be 2 integers where the 1st integer denotes the row number and 2nd one points to the column number, both the integers are comma separated, where the index numbering begins from 1.<br />
In case the search is unsuccessful the user should print “Not found''. The search will be successful only once.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>x</b> ≤ <b>100</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
ZDSSS
DISKE
ESJJJ
ECEEE
VVVVV
DISC
DISK
DISP
0


<b>Output:</b>
1,2 4,2
2,1 2,4
Not found

</pre><p>
<br />
<br />
<b>Note : The reference for this problem has been taken from : UVa online Judge </b>
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
            <td>1 sec</td>
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