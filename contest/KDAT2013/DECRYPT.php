<?php require("../../includes/header.php"); ?><h1>Cyberland vs Byteland</h1><div class="content">

<p> </p>
<p>The king of Cyberland always envied the great Emperor of Byteland , whose court was studded with wonderful gems. The king of Cyberland knew it very well that Chef was unparallel to his brilliance and that he is out to represent Byteland at Poland for world finals. He thought this is a good chance to show Emperor of Byteland down and at once sent a messenger with a card and a letter. The card carried two strings D and K with a hint in the end. </p>
<p>Card read</p>
<p>D= oorrfifdttmeffeershuncoadcgeo</p>
<p>K= birthday</p>
<p>Hint:- Original string has been encrypted using the key K by the beauty of the string. Beauty of a string is calculated by assigning value to every letter in the string lexicographically in a particular direction.</p>
<p>The letter read , “I’ve heard a lot about your wise courtiers. In the card I have given you two strings and a hint. Decrypt the first string with the help of second. This is a challenge.”</p>
<p>Since Chef is out to represent Byte land in Poland for ICPC finals. The Emperor assigned the responsibility of solving this puzzle to you.</p>
<h3>Input</h3>
<p>The first line has an integer T denoting the number of test cases. T test cases follow.Each test case consists of two lines. First lines contain the string D and second line contains the string K.</p>
<p> </p>
<h3>Output</h3>
<p>For each line output the decrypted string.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ T ≤ 300000 (3 * 105)</p>
<p>1 ≤ D &lt; 429496729</p>
<p>1 ≤ K ≤ D</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
oorrfifdttmefreershuncoadCgeo 
birthday<br />
<b>Output:</b>
Codechefgotfouriertransformed
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<pre>
Beauty of ‘birthday’=28347651
2-->2nd letter+10th letter +18th letter + 26th letter=oorr
8-->8th letter + 16th letter + 24th letter=fif
.
.
.
.
1-->1st letter + 9th letter + 17th letter + 25th letter =Cgeo

Now putting the letters in their original position i.e. 1st 2nd 3rd ....... --> Codechefgotfouriertransformed</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gauravjasraj">gauravjasraj</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-04-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>