<?php require("../../includes/header.php"); ?><h1>Sense and Sensibility</h1><div class="content">

<p>Prabhu and Raghu work in adjacent labs in the CSA department. Occasionally they get together to solve puzzles in order to de-stress themselves. During one such session Prabhu gave Raghu a set of random looking strings. Each of them consisted of a single string letter without any spaces. At first the strings appeared gibberish but on closer observation Raghu could see that there were proper words in these otherwise gibberish strings. Prabhu also gave a Raghu a dictionary which consisted of the "sense scores" for each word. Meaning each word in this dictionary was associated with a score eg: at=2, before=3, artificial=1 etc. There was no relation between the length of the strings and the score attached to them in the dictioanry. Raghu's job was simple(according to Prabhu), he had to find out appropriate splits in these otherwise random strings such that these strings make the most sense i.e have the highest "sense score." The "sense score" of a string was the sum total of the sense scores of the split strings, such that the split consisted of only words which had sense scores attached to them in the dictionary.<br />
Eg:<br />
Random string: called<br />
Dictionary: at=2, al=1, cal=4, le=1, led=3<br />
Highest Sense score of string= cal+led=4+3=7</p>
<h3>Input</h3>
<p>The first line of input contains 'D', the number of words in the dictionary (1&lt;=D&lt;=1000). This is followed by 'D' lines. Each line has a word and its sense score, separated by a space. This is followed by a blank line. The next line of input contains 'T', the number of test cases (1&lt;=T&lt;=1000). This is followed by T test cases. Each test case consists of one line containing the string (of length upto 100000) to be parsed.</p>
<h3>Output</h3>
<p>The output should consist of 'T' lines corresponding to the 'T' test cases. Each line should contain one number, which is the best sense score for the input string.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
ant 4
an 2
tan 3

4
antant
tan
antsan
nats

<b>Output:</b>
Output:
8
3
6
0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/karthikn5">karthikn5</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 - 8 sec</td>
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