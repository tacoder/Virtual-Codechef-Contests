<?php require("../../includes/header.php"); ?><h1>Angry Chef - Crispy Chips</h1><div class="content">

<p align="justify">Did you know that potato was the first food that was ever grown in space ? Today is a big day for chef Crum, as he was called to make potato dishes for the people of the Valley of Food. He got angry knowing someone said that his potatoes were thick and so he started making them too thin and crisp ! (and thus invented potato chips :) ). There are <b>N</b> persons sitting in a row ( numbered 0 to N-1 ) and you are given an array <b>V</b>, where V[i] is the village number, where the i<sup>th</sup> person is from. </p>
<p align="justify">In each of the <b>R</b> rounds, Po serves potato chips to a group of people sitting continuously (a sub-array). Shifu is worried that, if in a round, more than <b>K</b> people from a village are served potato chips, others may protest and that leads to disruption of outer peace. To estimate the damage of a round, he wants to know how many distinct villages are there such that more than <b>K</b> people from each of them are served in that round.</p>
<h3>Input</h3>

<p align="justify">
First line contains two integers N K ( N is the number of persons, 1 &lt;= N &lt;= 100,000 and K is the limit in each round 0 &lt;= K &lt;= N ). Next line contains N numbers, the array V (as described above. 0 &lt;= V[i] &lt;= 100,000,000 ). Third line contains R (number of rounds, 1 &lt;= R &lt;= 100,000 ). R rounds follow, each in a new line, having integers i j (0 &lt;= i &lt;= j &lt; N ). Po serves all the persons [ i, i+1, ... , j ] in that round.</p>
<h3>Output</h3>

<p align="justify">
For each of the R rounds, print the answer in a new line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
8 2
3 1 2 2 1 1 2 1
3
0 5
2 4
1 7

<b>Output:</b>
1
0
2

<b>Explanation:</b>
V[0..5] = { 3, 1, 2, 2, 1, 1 } : Only Village 1 occurs more than K ( = 2) times.
V[2..4] = { 2, 2, 1} : None of the villages occur more than 2 times.
V[1..7] = { 1, 2, 2, 1, 1, 2, 1 } : Villages 1 and 2 occur more than 2 times.
</pre><p>
<i><u>Warning</u> : Large input / output. You may have to use efficient input / output methods if you are using languages with heavy input / output overload. Eg: Prefer using scanf/printf to cin/cout for C/C++ </i></p>
<p><u>Note</u> : There are multiple test sets, and the judge shows the sum of the time taken over all test sets of your submission, if Accepted. Time limit on each test set is 2 sec</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro">masked_zorro</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-08-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>