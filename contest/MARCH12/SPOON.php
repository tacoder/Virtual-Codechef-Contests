<?php require("../../includes/header.php"); ?><h1>Spoon in Matrix</h1><div class="content">

<p>Chef recently saw the movie Matrix. He loved the movie overall but he didn't agree with some things in it. Particularly he didn't agree with the bald boy when he declared - <a href="http://youtu.be/dzm8kTIj_0M">There is no spoon</a>. Being a chef, he understands the importance of the spoon and realizes that the universe can't survive without it. Furthermore, he is sure there is a spoon; he saw it in his kitchen this morning. So he has set out to prove the bald boy is wrong and find a spoon in the matrix. He has even obtained a digital map already. Can you help him?</p>
<p>Formally you're given a matrix of lowercase and uppercase Latin letters. Your job is to find out if the word "Spoon" occurs somewhere in the matrix or not. A word is said to be occurred in the matrix if it is presented in some row from left to right or in some column from top to bottom. Note that match performed has to be case insensitive. </p>
<h3>Input</h3>

<p>The first line of input contains a positive integer <b>T</b>, the number of test cases. After that <b>T</b> test cases follow. The first line of each test case contains two space separated integers <b>R</b> and <b>C</b>, the number of rows and the number of columns of the matrix <b>M</b> respectively. Thereafter <b>R</b> lines follow each containing <b>C</b> characters, the actual digital map itself.</p>
<h3>Output</h3>

<p>For each test case print one line. If a "Spoon" is found in Matrix, output "There is a spoon!" else output "There is indeed no spoon!" (Quotes only for clarity).</p>
<h3>Constraints</h3>

<p>
1 ≤ <b>T</b> ≤ 100
</p>
<p>
1 ≤ <b>R, C</b> ≤ 100</p>
<h3>Sample Input</h3>
<pre>
3
3 6
abDefb
bSpoon
NIKHil
6 6
aaaaaa
ssssss
xuisdP
oooooo
ioowoo
bdylan
6 5
bdfhj
cacac
opqrs
ddddd
india
yucky
</pre><h3>Sample Output</h3>
<pre>
There is a spoon!
There is a spoon!
There is indeed no spoon!
</pre><h3>Explanation</h3>
<p>In the first test case, "Spoon" occurs in the second row. In the second test case, "spOon" occurs in the last column.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/yellow_agony">yellow_agony</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-01-2012</td>
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