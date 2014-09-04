<?php require("../../includes/header.php"); ?><h1>FeedBack Points</h1><div class="content">

<p>Chef has N Assistant in his restaurant. These Assistant are numbered from 1 to N.Everyday some of the assistant (from number x to y ) comes for work and get some feedback points (positive or negative) by guests.He either adds or subtracts a constant from the feedback-points. He performs M such operations for M days. Each operation is of the form: x y z where each of them is an integer. Chef has to add/subtract z to feedback-points of assistant_number from x to y (both inclusive). After doing this, Chef want to find the maximum feed-back points. Your task is to help Chef in finding the best performance by calculating maximum feedback-points.</p>
<h3>Input</h3>
<p>First line of input contains a single integer T, the number of test cases.<br />
Each test case starts with a line containing two space separated integers N, number of assistants and M.Then follow M lines. Each of these lines is of the form x y z. Each separated by a single space.</p>
<h3>Output</h3>
<p>For each test case output a single line containing the maximum feedback-point after All modifications.</p>
<h3>Constraints:</h3>
<p>1 ≤ T ≤ 20<br />
1 ≤ M ≤ 1000<br />
1 ≤ N ≤ 1000000<br />
1 ≤ x ≤ y ≤ N<br />
-100000 ≤ z ≤ 100000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
10 2
3 6 -4
5 9 1


<b>Output:</b>
9

</pre><p><b>Explanation:</b> </p>
<p>Initially the feedback-points are as follows: 0 0 0 0 0 0 0 0 0 0. First operation decreases the feedback of assistant Number 3,4,5 and 6 by 4. Now, the feed-back points looks like: 0 0 -4 -4 -4 -4 0 0 0 0. The second operation increases the numbers of Assistant number 5 to 9 by 1. The feed-back points will now be 0 0 -4 -4 -3 -3 1 1 1 0. Thus, the maximum feedback-points is 1.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/deveshranjan">deveshranjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.1 sec</td>
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