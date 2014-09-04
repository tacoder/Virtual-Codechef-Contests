<?php require("../../includes/header.php"); ?><h1>The Murder Case</h1><div class="content">

<p>Sherlock Holmes was trying to solve another murder case. He found a box that can be unlocked only by forming a pattern on it. Box has a matrix of LEDs of N x M on the top and K switches which can toggle some LEDs on the box.</p>
<p>Sherlock Holmes being very smart already knew the pattern that has to be formed using the LEDs to unlock the box. He found this task a bit tedious so asks you for help. Given the size of the matrix (N x M), list of K switches and with each switch a list of position(x,y) of LEDs (0 based index) that will be toggled on turning on that particular switch, you need to tell whether pattern can be formed or not</p>
<h3>Input</h3>
<p>First line of input contains no. of test cases T.</p>
<p>And first line of each testcase contains N,M (the size of the matrix) and K (the no. of switches).</p>
<p>Then K lines follow, first integer of each line is P (no. of LEDs it can toggle) and then follow 2*P integers denoting the x and y coordinates of the LED (like x1 y1 x2 y2 x3 y3 …..xp yp)</p>
<p>
Then follows the N X M matrix representing the final pattern. Each cell of the matrix will be either 1(ON) or 0(OFF)</p>
<h3>Output</h3>
<p>Output of each test case will be a line containing “Yes” or “No” (quotes for clarity), “Yes” if the pattern can be formed “No” if it cannot be.</p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=100<br/><br />
1&lt;=N,M&lt;=20<br/><br />
1&lt;=K&lt;400<br/></br/></br/></br/></p>
<p>Note:<br />
All the LEDs are off initially</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5 5
4
4 0 1 0 2 0 3 0 4
8 1 1 1 2 1 3 1 4 2 1 2 2 2 3 2 4
8 2 1 2 2 2 3 2 4 0 1 0 2 0 3 0 4
4 3 1 3 2 3 3 3 4
0 0 0 0 0
0 1 1 1 1
0 0 0 0 0
0 1 1 1 1
0 0 0 0 0

<b>Output:</b>
Yes
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sameer47">sameer47</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>