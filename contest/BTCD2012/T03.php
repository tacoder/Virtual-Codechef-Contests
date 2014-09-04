<?php require("../../includes/header.php"); ?><h1>Match The Following</h1><div class="content">

<p>In an examination, the students are given a match-the-following question. In the question, two sets of bubbles are listed on two sides. Some of the bubbles on the left will be joined to exactly one bubble on the right.<br />
The students are asked to draw straight lines from the left set of bubbles to the right set of bubbles. You observe that none of the questions have answers in such a way that 3 or more lines are coincident. That is, there are two lines creating a point of intersection. Also, since the student doesn't know the answer to all questions, he might answer questions by skipping them. That is, he might just join the 4500th question with the 6th answer without answering the previous 4499 questions. Knowing the number of answered bubbles on both sides find the number of points of intersections. </p>
<h3>Input</h3>
<p>1st line mentions the number of test cases that follow. The subsequent test cases are arranged as follows:<br />
Topmost line for that test case is the number of answered bubbles on each side(n). After that the following n lines contain the correct matching as ordered pairs, for eg 2,1 means the 2nd bubble on the left is matched to the 1st bubble on the right. The bubble counting starts from the top with 1 being the topmost.</p>
<h3>Output</h3>
<p>The output has T lines containing the number of intersections for each test case in order.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2
4 10
6 2
2
5 8
8 4

<b>Output:</b>
1
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rajatkhanduja">rajatkhanduja</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-08-2012</td>
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