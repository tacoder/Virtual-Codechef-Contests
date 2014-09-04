<?php require("../../includes/header.php"); ?><h1>Authentication Failed</h1><div class="content">

<p>Several days ago Chef decided to register at one of the programming sites. For registering he was asked to choose a nickname and a password. There was no problem with choosing a nickname ("Chef" is his favorite nickname), but choosing a password in a secure way seemed to be a real problem for Chef. Therefore, he decided to write a program which would generate the password of length <b>N</b> consisting of small Latin letters <i>a</i>..<i>z</i>. Then Chef successfully registered at the site and saved the password in a file (as it was too hard to remember).</p>
<p>Today Chef decided to visit the site once again. He entered his nickname, copied the password from the file... "Authentication failed!" was the answer. Trying to understand the reason of this, he noticed that the password in his file had length <b>N+K</b> instead of <b>N</b>! Sure enough of the source of the problem, Chef went straight to his young brother.</p>
<p>And Chef was right, it was his brother who had inserted <b>K</b> random small Latin letters at some random positions (possibly at the beginning or at the end) of the password. Chef's brother didn't remember what exactly changes he had made at all, but he promised that he had done nothing besides inserting letters.</p>
<p>As there is no other way to recover the password, Chef is now starting to remove every possible combination of <b>K</b> letters from the password trying to enter (when Chef obtains the same password as one of the previously entered passwords, he doesn't try to enter using this password again). Now the question is: what is the number of times Chef will receive "Authentication failed!" as the answer before successful entering in the worst case? As the answer might be quite large, output its remainder of division by 1009419529.</p>
<h3>Input</h3>

<p>The first line of the input file contains one integer <b>T</b> -- the number of test cases (no more than 10). Each test case is described by a line containing two integers <b>N</b> and <b>K</b> (1 ≤ <b>N</b> ≤ 10000, 1 ≤ <b>K</b> ≤ 100) separated by a single space, followed by a line containing a string of length <b>N+K</b> consisting of small Latin letters <i>a</i>..<i>z</i>.</p>
<h3>Output</h3>

<p>For each test case output just one line containing the required number modulo 1009419529.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 1
aaa
3 1
abcd
4 2
ababab

<b>Output:</b>
0
3
10

<b>Explanation:</b>
</pre>
<p>In the first test case, the password is definitely "aa". In the second test case, it can be "abc", "abd", "acd" or "bcd", so in the worst case Chef will guess the correct option from the fourth attempt, thus making 3 unsuccessful attempts.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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