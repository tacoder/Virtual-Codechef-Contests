<?php require("../../includes/header.php"); ?><h1>Bot Moves</h1><div class="content">
<h3>Problem statement</h3>
<p>
A lazy guy in UVCE is designing a robot that could collect all useful things from different places and put them in one place. In its testing stage robot is  given a task. 10<sup>5</sup> boxes are arranged is straight line and they numbered from 1 to 10<sup>5</sup>. Some boxes contain useful things, bot has to collect all the useful things and put them in one box (any one from 1 to 10<sup>5</sup>) in minimum number of moves.</p>
<p>A move is said to be done if the robot moves from one box to its adjacent box with an useful thing in its hand. It can carry only one useful thing at a time.
</p>
<p>As we know the owner of that bot is very lazy and want some help. You are given the positions of boxes which has the useful things in the test setup. Print the minimum number of moves required to complete the task.</p>
<h3>INPUT</h3>
<p>	First line of input contains <strong>T</strong>, number of test cases,</p>
<p>First line of each test case contains <strong>N</strong>, number of useful boxes. <br />
Next line contains <strong>N</strong> space separated integers <strong>P<sub>i</sub></strong>, positions of useful things.</p>
<h3>OUTPUT</h3>
<p>
For each test case output the minimum number of moves required to complete the task.
</p>
<h3>CONSTRAINTS</h3>
<ul>
<li>1 ≤ T ≤ 100</li>
<li>1 ≤ N ≤ 10<sup>5</sup></li>
<li>1 ≤ P<sub>i</sub> ≤ 10<sup>5</sup></li>
</ul>
<h3>EXAMPLE</h3>
<p><b>Input</b></p>
<p>2<br />
5<br />
1 2 3 4 5<br />
6<br />
1 2 3 4 5 6
</p>
<p><b>Output</b></p>
<p>
6<br />
9
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/hkbharath">hkbharath</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-10-2013</td>
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