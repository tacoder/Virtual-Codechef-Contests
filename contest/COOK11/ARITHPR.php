<?php require("../../includes/header.php"); ?><h1>Longest Arithmetic Progressions</h1><div class="content">

<p>
You are given positive integers <b>L, R, k</b> such that <b>k &lt;= R - L</b>. Consider all strictly increasing arithmetic progressions with difference not less than <b>k</b> composed of numbers from the set <b>{L, L+1, ..., R}</b>. At first you need to find the length of the longest such progression. Easy as pie, right? Now consider all such longest progressions and write them down in lexicographical order. You need to find first two terms of the <b>n</b><sup>th</sup> such progression. (Note that because of the condition <b>k &lt;= R - L</b> the length of the longest progression is at least two.)
</p>

<p>
<b>Remark.</b> We say that sequence <b>a = (a[0], a[1], ..., a[n])</b> is lexicographically smaller than <b>b = (b[0], b[1], ..., b[n])</b> if there exists some <b>i</b> such that <b>0 &lt;= i &lt;= n</b>, <b>a[j] = b[j]</b> for <b>0 &lt;= j &lt; i</b> and <b>a[i] &lt; b[i]</b>.</p>
<h3>Input</h3>

<p> The first line contains a single integer <b>T &lt;= 10000</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains four positive integers <b>L, R, k</b> and <b>n</b> where <b>R &lt;= 10<sup>9</sup>, k &lt;= R - L</b> and <b> n &lt;= 10<sup>18</sup></b>.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the length of the longest strictly increasing arithmetic progressions with difference not less than <b>k</b> composed of numbers from the set <b>{L, L+1, ..., R}</b> followed by the first two terms of the <b>n</b><sup>th</sup> such progression in lexicographical order. If the total number of such progressions is less than <b>n</b> then simply output two zeros instead of the first two terms of the progression.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 6 2 1
2 6 2 2
1 32 8 12

<b>Output:</b>
3 2 4
3 0 0
4 5 14
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-06-2011</td>
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