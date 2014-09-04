<?php require("../../includes/header.php"); ?><h1>Garden Game</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/SGARDEN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/SGARDEN.pdf">Russian</a>.</h3>
<p>All bandits are afraid of Sheriff. Sheriff constantly fights crime, but when bandits lay low, he gets bored and starts to entertain himself. </p>
<p>This time Sheriff gathered all the bandits in his garden and ordered them to line up. After the whistle all bandits should change the order in which they stand. </p>
<p>Sheriff gave all the bandits numbers from 1 to N. For each place <b>i</b> he determined the <b>unique</b> position <b>j</b>. After whistling the bandit  staying on position <b>i</b> should run to the <b>j</b>-th position. Sheriff loved seeing how the bandits move around, and he continued whistling until the evening. He finished the game only when he noticed that the bandits are in the same order in which they were standing originally.</p>
<p>Now the Sheriff asks the question: How many times has he whistled?</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of bandits. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting that the bandit staying on position <b>i</b> should run to the <b>A<sub>i</sub></b>-th position after the whistle.</li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing number of times the sheriff had to whistle, print it modulo 10^9 + 7.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li>All <b>A<sub>i</sub></b> are distinct numbers from <b>1</b> to <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre> <p>
<b>Input:</b>

2
3
1 2 3
5
2 3 1 5 4

<b>Output:</b>

1
6
</p>
</pre><p> </p>
<h3>Explanation</h3>
<pre> <p>
<b>Example case 2.</b>
the bandits positions are:
0. 1 2 3 4 5
1. 3 1 2 5 4
2. 2 3 1 4 5
3. 1 2 3 5 4
4. 3 1 2 4 5
5. 2 3 1 5 4
6. 1 2 3 4 5.
</p></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2014</td>
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