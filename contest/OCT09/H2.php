<?php require("../../includes/header.php"); ?><h1>Kayaks</h1><div class="content">

<p>Suppose we have an even number of people going on an excursion, and we would like to fit them into two-seated kayaks. All kayaks are identical, weighing 20kg each. Each person is described by two parameters, their <em>strength</em> and <em>weight</em>. The speed of a kayak can be calculated as the sum of strengths of both persons sitting in it, divided by the total weight of the loaded kayak (i.e., the weight of the kayak plus the weight of both persons). We would like to choose the allocation of people to kayaks so as to maximize the speed at which the whole whole group can travel, assuming that the group travels at the speed of the slowest kayak in it.</p>
<h3>Input</h3>
<p>First, 2&#8804; <var>n</var> 10<sup>5</sup>, the number of people (<var>n</var> will always be even). Then, <var>n</var> pairs of integers follow, each pair describing one person: first, 50&#8804;<var>w</var>&#8804;100, the weight of the person (in kilograms), then 50&#8804;<var>p</var>&#8804;100, the strength of the person.</p>
<h3>Output</h3>
<p>Output one number: the maximum speed of the group which can be achieved by optimally choosing places for each person. The answer should be accurate up to 6 digits after the decimal point.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
4
50 50
50 60
70 100
100 60

<strong>Output:</strong>
0.842105
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-09-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>