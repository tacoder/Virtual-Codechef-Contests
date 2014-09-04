<?php require("../../includes/header.php"); ?><h1>Sorting device</h1><div class="content">

<p>You work for a large company, and your job is to design sorting devices. Devices are built from:</p>
<ul>
<li>n inputs,</li>
<li>n outputs,</li>
<li>gates which have two inputs and send to output the minimum ("min gates") or maximum ("max gates") of the two numbers given at their input,</li>
<li>connecting wires.</li>
</ul>
<p>You are competing in a bid for a Bytelandian Ministry of Information contract to design the smallest possible device (in terms of the number of gates) which sorts any input. Each device will go through a rigorous test process on a number of data sets. However, through some Good Friends in High Places you have managed to acquire some additional information concerning the exact data sets (permutations) your device will be tested on. Make use of this, and of course your superior programming skills, to win the bid!</p>
<h3>Input</h3>
<p>First, two numbers, 2≤n≤20, 1≤k≤1000, the number of inputs and the number of different permutations for which your device will be tested. The next k lines contain permutations of the numbers 1 .. n.</p>
<h3>Output</h3>
<p>First, output p, the number of gates in your device (0≤p≤10<sup>6</sup>). The next p lines should contain definitions of the gates used, in the form of a pair of integers, x<sub>i</sub>,y<sub>i</sub>, and exactly one of the strings "min" or "max". To be able to use the output of a gate as the input of a subsequent gate, we use the following convention. First of all, the range for inputs x<sub>i</sub> and y<sub>i</sub> is as follows: 1 ≤ x<sub>i</sub>,y<sub>i</sub> &lt; n+p. The output of the i-th gate is assumed to be input n+i.
</p>
<p>
Finally, a sequence of exactly n integers in the range 1..n+p should follow, describing which of the "inputs" should be hard-wired to successive outputs of the device.</p>
<h3>Scoring</h3>
<p>If your program does not produce a sorting machine which works for every input (sorting it in ascending order), it will be deemed incorrect. Otherwise, you will score p penalty points for each test case solved.</p>
<h3>Example</h3>
<pre><strong>Input:</strong><br />3 2<br />1 2 3<br />1 3 2<br /><br /><strong>Output:</strong><br />2<br />2 3 min<br />2 3 max<br />1 4 5<br /><br /><strong>Score:</strong><br /> 0.5</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-01-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>