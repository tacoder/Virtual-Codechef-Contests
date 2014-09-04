<?php require("../../includes/header.php"); ?><h1>Bytelandian Robots</h1><div class="content">

<p>The Bytelandian Robotic Deparment has just succesfully made a robot that can be programmed to   move. Our robot can perform two type of movements: moving one step to the left or one step to the   right.</p>
<p>Our robot moves according to the instruction from its control sequence. A control sequence of the   robot is a string consisting of only two type of characters: '+' and '-' symbols, in which '+' means   a rightward step and '-' means a leftward step. For example, '+--' is a control sequence that instruct the robot to go one step to the right   followed by two steps to the left.</p>
<p>Our robot also has a master control sequence (MCQ), which is a string of N characters '+' and   '-'. <strong>Any valid control sequence of the robot must be a subsequence of the MCQ</strong>. Recall that a   subsequence is a sequence obtained by removing some characters of the initial sequence. An empty   sequence is also a subsequence of the MCQ.</p>
<p>Our robot is currently placed on a runway of length L, in which the leftmost point has coordinate 0   and the rightmost point has coordinate L. Intially our robot stands at the point at coordinate A. It   needs to move to the point at coordinate B. Of course, it cannot go outside the runway.</p>
<p>How many different control sequences are there that make the robot go from A to B?</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 50). Then t test cases follow. Each   test case has the following form:</p>
<ul>
<li>The first line contains four integers N, L, A, B (1 ≤ N ≤ 500, 1 ≤ L ≤   10<sup>9</sup>, 0 ≤ A, B ≤ L).</li>
<li> The second line contains the MCQ which is a string of exactly N characters. The MCQ contains only   symbols '+' and '-'.</li>
</ul>
<h3>Output</h3>
<p>For each test case, print a single number that is the number of different control sequences that   could make the robot to go from A to B. Since the result may be a very large number, you only need   to print the remainder of the result when dividing by 7051954.</p>
<h3>Example</h3>
<pre><strong>Input</strong>
5
6 6 0 0
+-+-+-
6 6 3 3
+-+-+-
6 1 0 0 
+-+-+-
6 6 1 4
+-+-+-
6 6 2 6
+-+-+-

<strong>Output</strong>
5 
9
4
1
0
</pre><p><strong>Output details</strong></p>
<p>Case 1: the different control sequences are +-, +-+-, ++--, +-+-+- and the empty sequence.</p>
<p>Case 2: same as case 1 together with 4 additional sequences: -+, -+-+, -++-, +--+. These additional   sequences no longer make the robot go outside the runway as in case 1.</p>
<p>Case 3: same as case 1 but without the sequence ++-- since it will make the robot go outside the   runway</p>
<p>Case 4: there is only one possible control sequence: +++</p>
<p>Case 5: there is no way for the robot to go to coordinate 6</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-07-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>