<?php require("../../includes/header.php"); ?><h1>Permutation Jumping</h1><div class="content">

<p>
John likes playing the game Permutation Jumping. First he writes down a permutation A of the first n numbers. Then, he chooses any cell to start on. If he is currently at cell x and hasnt visited the cell A[x], he jumps to cell A[x]. He keeps doing this till he cannot move to the cell A[x], because he has already visited it. In the end, he counts all the cells that he visited during the game, including the cell on which he started.</p>
<p>
He does not want the game to go on for too long, and thus he wishes that irrespective of the choice of his starting cell, he does not ever have to visit more than K cells. On the other hand, he does not want the game to be too short either. Thus, irrespective of the choice of his starting cell, he should be able to visit atleast two cells.</p>
<p>
Now he wonders how many permutations could he have chosen in the first place which would allow him to have the game duration as above. i.e. He should visit atleast 2 cells and atmost K cells, no matter which cell he started on.</p>
<h3>Input</h3>
<p>
The first line contains the number of test cases T (T &lt;= 1000). The next T lines contain 2 space seperated integers N and K. (2 &lt;= K &lt;= N &lt;= 100)</p>
<h3>Output</h3>
<p>
Output T lines, one corresponding to each test case. For each test case output a single integer which is the answer for the corresponding test case. Since the answer can be very large, output the answer modulo 1000000007.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 2
6 4

<b>Output:</b>
3
145
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-12-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>