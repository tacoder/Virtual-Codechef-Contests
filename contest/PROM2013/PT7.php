<?php require("../../includes/header.php"); ?><h1>Adam And Eve</h1><div class="content">

<p>Adam and eve god’s super humans have just arrived on earth. God, The mastermind has locked them up in separate hallways to test their capability and then possibly give them “knowledge of living”.<br />
Each hallway contains 100 rocks labeled with the positive integers {1,2,….,100}, rock k is always k meters from the start of the hallway, and Adam/Eve  both begin at 1. Over the period of one second,  Adam/Eve can walk one meter in either direction, or can destroy the rock at its position. To complete the test, Adam/Eve need to destroy a certain sequence of rocks in a certain order. Both Adam/Eve know the full sequence in advance. How fast can they complete it ?<br />
For example, let's consider the following rock sequence: </p>
<ul>A 2, E 1, E 2, A 4</ul>
<p>Here, A 2 means rock 2 in Adam's hallway, E 1 means rock 1 in Eve's hallway, and so on. Adam/Eve can destroy this sequence of rocks in 6 seconds using the strategy shown below:</p>
<ul>Time | Adam             | Eve </ul>
<ul>-----+------------------+-----------------</ul>
<ul>1  | Move to rock 2   | Stay at rock 1 </ul>
<ul> 2  | Destroy rock 2       | Stay at rock 1</ul>
<ul> 3  | Move to rock 3   | Destroy rock 1</ul>
<ul> 4  | Move to rock 4   | Move to rock 2</ul>
<ul> 5  | Stay at rock 4   | Destroy rock 2 </ul>
<ul>  6  | Destroy rock 4       | Stay at rock 2</ul>
<p>Note that Eve has to wait until Adam has completely finished Destroying A 2 before she can start Destroying E 1. </p>
<h3>Input</h3>
<p>The first line of the input gives the number of test cases, T. T test cases follow.<br />
Each test case consists of a single line beginning with a positive integer N, representing the number of rocks that need to be hit. This is followed by N terms of the form "Si Pi" where Si is a super human (always 'A' or 'E'), and Pi is a rock position. </p>
<h3>Output</h3>
<p>For each test case, output a single integer containing the minimum number of seconds required for Adam and Eve to destroy the given rocks, in order. </p>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>Pi</b> ≤ <b>100</b></li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abeersethi">abeersethi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-04-2013</td>
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