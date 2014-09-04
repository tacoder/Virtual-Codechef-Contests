<?php require("../../includes/header.php"); ?><h1>Lucy and Question Marks</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME06/russian/QMARKS.pdf">here</a></h3>
<p>Long ago Lucy had written some sentences in her textbook. She had recently found those her notes. But because of the large amount of time that had passed, some letters became difficult to read. Her notes are given to you as a string with question marks in places of letters that are impossible to read. </p>
<p>Lucy remembers that those sentences definitely made some sense. So now she wants to restore them. She thinks that the best way to restore is to replace all the question marks by latin letters in such a way that the total sum of occurrences of all the strings from her dictionary in it is maximal. And it is normal if some word occurs in her dictionary two or more times. In this case you just have to count every word as much times as it occurs in the dictionary.</p>
<p>You will be given the string itself and the dictionary. Please output the maximal possible number of occurrences of dictionary words and lexicographically minimal string with this number of occurrences.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
The first line of every test case consists of two integers <b>N</b> and <b>M</b> - the length of the string, written by Lucy and the number of words in the dictionary. The second line of the test case consists of the string itself - <b>N</b> characters, each is either a question mark or a small latin letter.<br />Then,  <b>M</b> lines follow. Each line consist of a single string of small latin letters - the word from the dictionary.</p>
<h3>Output</h3>
<p>For each test case, output a two lines. The first line should contain the maximal number of occurrences. The second line should contain lexicographically minimal string with the maximal number of occurrences of the words from the dictionary.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
7 4
???????
ab
ba
aba
x
5 3
?ac??
bacd
cde
xa
8 2
?a?b?c?d
ecxd
zzz

<b>Output:</b>
9
abababa
2
bacde
1
aaabecxd
</pre><h3>Scoring</h3>
<p>
Subtask 1 (16 points): <b>T</b> = 50, 1 &lt;= <b>N</b> &lt;= 8, 1 &lt;= <b>M</b> &lt;= 10. Only the characters a, b and c and question marks occur in the string. Only the characters a, b, and c occur in the dictionary words. All the words in the dictionary consist of no more than 10 letters.<br /><br />
Subtask 2 (32 points): <b>T</b> = 50, 1 &lt;= <b>N</b> &lt;= 100, 1 &lt;= <b>M</b> &lt;= 100. Only the characters a, b and question marks occur in the string. Only the characters a and b occur in the dictionary words. All the words in the dictionary consist of no more than 10 letters.<br /><br />
Subtask 3 (52 points): <b>T</b> = 10, 1 &lt;= <b>N</b> &lt;= 1000, 1 &lt;= <b>M</b> &lt;= 1000. Total length of all the dictionary strings will not exceed 1000.<br /><br />
Time limit for the last subtask equals to 2 sec. For the first two subtasks it is 1 sec.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>3-11-2013</td>
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