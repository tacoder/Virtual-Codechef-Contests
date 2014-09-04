<?php require("../../includes/header.php"); ?><h1>Draughts</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/FEB14/mandarin/DRGHTS.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/FEB14/russian/DRGHTS.pdf" target="_blank">Russian</a>.</h3>
<p>Furik and Rubik have come to the sanatorium, which consists of <b>N</b> rooms and <b>M</b> passageways. Each passageway connects two rooms, and there is at most one way to move between each pair of rooms. Some rooms have opened windows. There is a draught between two different rooms if both rooms have opened windows, and are connected with each other by some way.</p>
<p>Furik is interested in one question: what is the number of pairs of rooms, which have a draught between them. Rubik wants to know what is the number of the rooms, which have at least one draught passing through the room.</p>
<h3>Input</h3>
<p>The first line contains two space-separated integers <b>N</b> and <b>M</b>. The next line contains <b>N</b> integers, where the <b>i</b><sup>th</sup> number is equal to <b>1</b>, if the window in the room number <b>i</b> is opened, otherwise <b>0</b>. Then the next <b>M</b> lines contain pairs of integers, where the <b>i</b><sup>th</sup> pair denotes the numbers of the connected rooms by <b>i</b><sup>th</sup> passageway. Consider that the rooms are numerated by different integers from <b>1</b> to <b>N</b>.</p>
<h3>Output</h3>
<p>In a single line print two numbers, denoting the answers to Furik and Rubik questions.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50000 (5 × 10<sup>4</sup>)</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>N − 1</b></li>
<li>There is at most one way to move between each pair of rooms, that is, the given graph is a forest</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
6 5
1 1 1 1 1 0
1 2
1 6
1 5
2 4
4 3

<b>Output:</b>
10 5

<b>Input:</b>
2 1
1 0
1 2

<b>Output:</b>
0 0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-06-2013</td>
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