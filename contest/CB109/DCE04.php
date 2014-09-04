<?php require("../../includes/header.php"); ?><h1>Rescue</h1><div class="content">

<p>The Titanic ship is sinking. The nearest ship has answered the SOS call, and come to rescue the people. Everyone is anxious to get to safety. Unfortunately, the new ship may not have enough room to take everyone to safe land. This adds to the anxiety of people. </p>
<p>To avoid stampede, there has to be some rescue plan. You are made incharge of this. You have to make sure that as many people are safe as possible. Given the capacity of the ship, that is, the number of people that can board the ship, you have to calculate how many men, women and children can be sent to safety.</p>
<p>The following rules apply:</p>
<p>* The foremost priority is safety for children, but there must be atleast one adult (a man or a woman) for every four  children sent to the rescue ship. For upto four children, one adult, for five to eight children, 2 adults, and so on.</p>
<p>* Next priority is for women, but there must be at least one man for every two women. For upto two women, one man, for three to four women, two men, and so on.</p>
<h3>Input</h3>
<p>First line contains the number of test cases (t less than 10000)<br />
The next t lines contain four integers (each between 1 to 10000 inclusive) each separated by a single space.<br />
The integers represent the capacity of the rescue ship, number of men on TITANIC, number of women and number of children, in this order.</p>
<h3>Output</h3>
<p>Display t lines, each line has three space separated integers denoting the number of men, women and children put to safety, in this order.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
17 5 10 19
18 2 6 10
20 5 2 23

<b>Output:</b>
2 2 13
2 4 10
2 2 16


<b>Explanation:</b>
Explanation for case 2: Since only 2 men are present, the number of women can not be more than 4.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/uploader0">uploader0</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>