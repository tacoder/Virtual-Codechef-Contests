<?php require("../../includes/header.php"); ?><h1>Furik and Rubik and Sub Array</h1><div class="content">
<p>
Furik and Rubik are playing the game <b>Sub array</b>. This game is played over an <b>array of integers</b>, consisting of <b>N</b> elements.</p>
<p>
In this game, Furik decides an integer that is equal to <b>sum</b> of some <b>sub-array</b> of this array and Rubik wants to guess this number.</p>
<p>
But, since Rubik is a busy man, he wants to know how many times in the worst case he will have to try to guess this number. You may assume he acts optimally, i.e. he doesn't call the same number twice, and calls only those numbers, that might have been decided by Furik, meaning, the sum of some or the other <b>sub-array</b>.</p>
<p>
Let's call the array <b>b</b>, sub-array of the array <b>a</b>, if there are numbers <b>l</b> and <b>r</b> such, that <b>b<sub>1</sub> = a<sub>l</sub> AND b<sub>2</sub> = a<sub>l+1</sub> AND ... b<sub>|b|</sub> = a<sub>r</sub></b>, where <b>|b|</b> is the length of the array <b>b</b>.
</p>
<h3>Input</h3>
<p>
The first line contains the positive integer <b>N</b>. The second line contains <b>N</b> positive integers, which are the elements of the array.</p>
<h3>Output</h3>
<p>
Output a single line containing the answer to the problem.</p>
<h3>Constraints</h3>
<p>
<b>Test Files with Time Limit set to 2 seconds</b><br />
<b>1 ≤ N * S ≤ 10<sup>10</sup></b>, where <b>S</b> is the sum of the elements in the array.</p>
<p><b>Test Files with Time Limit set to 4 seconds</b><br />
<b>1 ≤ N * S ≤ 4 * 10<sup>10</sup></b>
</p>
<h3>Sample</h3>
<pre>
<b>Input</b>
3
1 2 3

<b>Output</b>
4

<b>Input</b>
9
6 1 7 3 7 1 8 5 7

<b>Output</b>
28

</pre><h3>Explanation</h3>
<p><b>Test Case 1:</b> Furik can decide one of the following numbers: 1, 2, 3, 5, 6. For example, let us assume Furik has decided 3. In the worst case, Rubik may call out 4 numbers, since there are only 5 such numbers.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-05-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 4 sec</td>
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