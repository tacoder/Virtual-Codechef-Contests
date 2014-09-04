<?php require("../../includes/header.php"); ?><h1>Chef and Segments</h1><div class="content">
<p>Chef likes toys. His favourite toy is an array of length <b>N</b>. This array contains only integers. He plays with this array every day. His favourite game with this array is <b>Segment Multiplication</b>. In this game, the second player tells the <b>left</b> and <b>right</b> side of a segment and some <b>modulo</b>. The first player should find <b>the multiplication of all the integers in this segment of the array modulo the given modulus</b>. Chef is playing this game. Of course, he is the first player and wants to win all the games. To win any game he should write the correct answer for each segment. Although Chef is very clever, he has no time to play games. Hence he asks you to help him. Write the program that solves this problem.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of elements in the given array. Next line contains <b>N</b> integers <b>Ai</b> separated with spaces. The third line contains the number of games <b>T</b>. Each of the next T lines contain 3 integers <b>Li, Ri and Mi</b>, the left side of the segment, the right side of segment and the modulo.</p>
<h3>Output</h3>
<p>For each game, output a single line containing the answer for the respective segment.</p>
<h3>Constrdaints</h3>
<ul>
<li><b>1 ≤ N ≤ 100,000</b></li>
<li><b>1 ≤ Ai ≤ 100</b></li>
<li><b>1 ≤ T ≤ 100,000</b></li>
<li><b>1 ≤ Li ≤ Ri ≤ N</b></li>
<li><b>1 ≤ Mi ≤ 10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
1 2 3 4 5
4
1 2 3
2 3 4
1 1 1
1 5 1000000000

<b>Output:</b>
2
2
0
120

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-05-2013</td>
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