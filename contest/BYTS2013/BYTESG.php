<?php require("../../includes/header.php"); ?><h1>Treasure Hunt</h1><div class="content">

<p>Do you like Treasure Hunts? I like treasure hunts. Love ‘em. And TROIKA 2013 has the best one ever in ‘MIST’ (apps.facebook.com/mist_troika). </p>
<p>Just like a normal treasure hunt, you are given several clues and you have to get the right answer to progress to the next level and so on, until you reach the ultimate prize! But the organizers have learnt that a lot of users are not progressing even after figuring out the correct answer; it seems ‘someone’ forgot to code in ‘possible variants of the correct answer’ for each level. For example, if “Sachin Tendulkar” happened to be the answer to a particular level, “Tendulkar” or “tendulkar” or “sachin tendulkar” wasn’t accepted as correct. This is what you have to rectify.</p>
<p>Given the expected answer ‘S’, your job is to modify the answer-verification-system to be able to allow acceptable variants of ‘S’.</p>
<p>If the user enters an acceptable variant ,terminate the program. You can assume that the user is intelligent enough so that he will enter the answer in an order specified by the string S i.e he will not enter anything like “Tendulkar Sachin” if the answer is “Sachin Tendulkar” however he can enter “Tendulkar”.</p>
<h3>Input</h3>
<p>The first line of the input contains a string S.</p>
<p>The next few lines contain the input string P entered by the user.</p>
<h3>Output</h3>
<p>For every line entered by the user output “Yes” if the string is acceptable and “No” if it is not. (quotes only for clarity).</p>
<h3>Contraints</h3>
<p>1 &lt;= length of S and P &lt;= 10000</p>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
Sachin Ramesh Tendulkar
Sach
Ram
sAcH Tendul
sach Tendulkar
Sachin Ram Tendulkar
SAChin TENduLkaR

<b>Output 1:</b>
No
No
No
No
No
Yes

<b>Input 2:</b>
Sachin Ramesh Tendulkar
Sach
Ram
sAcH Tendul
sach Tendulkar
Sachin Ram Tendulkar
Ramesh TENduLkaR

<b>Output 2:</b>
No
No
No
No
No
Yes
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/troika_bytes13">troika_bytes13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2013</td>
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