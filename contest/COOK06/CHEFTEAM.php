<?php require("../../includes/header.php"); ?><h1>Chef team</h1><div class="content">

<p>Chef has <b>N</b> subordinates. In order to complete a very important order he will choose exactly <b>K</b> of them. He can't choose less than <b>K</b> since it will be not enough to complete the order in time. On the other hand if he chooses more than <b>K</b> subordinates he can't control them during the operation. Help him to find the number of ways he can choose the team to complete this very important order.</p>
<h3>Input</h3>

<p> The first line contains a single positive integer <b>T &lt;= 100</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains two integers <b>N</b> and <b>K</b>, where <b>0 &lt;= N, K &lt; 2^64</b>. It is guaranteed that the answer will be less than <b>2^64</b>.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the number of ways to choose the required team.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 1
3 3
10 5

<b>Output:</b>
2
1
252
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-01-2011</td>
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