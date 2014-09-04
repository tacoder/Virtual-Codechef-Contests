<?php require("../../includes/header.php"); ?><h1>Lucy and Palindromes</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME06/russian/PALINDR.pdf">here</a></h3>
<p>Lucy had recently learnt about palindromes. As you may probably know, palindrome is a string that reads the same way in the both directions, that is left-to-right or right-to-left. For example, strings "radar" and "level" are palindromes, at the same time, strings "hello" and "world" are not.</p>
<p>There is a string of <b>N</b> latin letters. Lucy asks you to answer the following queries:<br /><br />
1 <b>L</b> <b>R</b> - reverse the substring from the <b>L</b>-th to the <b>R</b>-th character (1-indexed), inclusive.<br /><br />
2 <b>L</b> <b>R</b> - calculate the number of distinct palindromes that can be obtained by permutting characters from the <b>L</b>-th to the <b>R</b>-th in the arbitrary order (ignoring all other characters of the string).<br /></p>
<h3>Input</h3>
<p>The first line of input consists of two space separated integers <b>N</b> and <b>M</b> - the length of the string and the number of queries.<br />
The second line consists of <b>N</b> characters from the set {'<b>a</b>', '<b>b</b>', '<b>c</b>', '<b>d</b>', '<b>e</b>', '<b>f</b>', '<b>g</b>', '<b>h</b>', '<b>i</b>', '<b>j</b>'}, describing the string. Then, <b>M</b> queries follow. Each query is given in one of the following forms:<br /><br />
1 <b>L</b> <b>R</b> - reverse the substring from the <b>L</b>-th to the <b>R</b>-th character.<br /><br />
2 <b>L</b> <b>R</b> - calculate the number of distinct palindromes that can be obtained by permutting characters from the <b>L</b>-th to the <b>R</b>-th in the arbitrary order, modulo <b>10<sup>9</sup>+7</b> (ignoring all other characters).</p>
<h3>Output</h3>
<p>For every query of the type <b>2</b> output the answer on the separate line.</p>
<h3>Example</h3>
<pre><b>Input:</b>
7 4
abacaba
2 1 7
2 2 3
1 1 2
2 2 3

<b>Output:</b>
3
0
1
</pre><h3>Scoring</h3>
<p>In all the subtasks, 1 &lt;= <b>L</b> &lt;= <b>R</b> &lt;= <b>N</b>.<br /><br />
Subtask 1 (33 points): 1 &lt;= <b>N</b> &lt;= 10, 1 &lt;= <b>M</b> &lt;= 1000<br /><br />
Subtask 2 (17 points): 1 &lt;= <b>N</b> &lt;= 1000, 1 &lt;= <b>M</b> &lt;= 1000<br /><br />
Subtask 3 (23 points): 1 &lt;= <b>N</b> &lt;= 4*10<sup>4</sup>, 1 &lt;= <b>M</b> &lt;= 4*10<sup>4</sup><br /><br />
Subtask 4 (27 points): 1 &lt;= <b>N</b> &lt;= 10<sup>5</sup>, 1 &lt;= <b>M</b> &lt;= 10<sup>5</sup><br /><br />
Time limit for subtasks 1 and 2 is 1 sec, and for the subtasks 3 and 4 it's equal to 2 sec.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
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