<?php require("../../includes/header.php"); ?><h1>Word Couting</h1><div class="content">

<p>Chef has decided to retire and settle near a peaceful beach. He had always been interested in literature &amp; linguistics. Now when he has leisure time, he plans to read a lot of novels and understand structure of languages. Today he has decided to learn a difficult language called Smeagolese. Smeagolese is an exotic  language whose alphabet is lowercase and uppercase roman letters. Also every word on this alphabet is a meaningful word in Smeagolese. Chef, we all know is a fierce learner - he has given himself a tough exercise. He has taken a word and wants to determine all possible anagrams of the word which mean something in Smeagolese.  Can you help him ?</p>
<h3>Input</h3>

<p> Input begins with a single integer T, denoting the number of test cases. After that T lines follow each containing a single string S - the word chef has chosen. You can assume that 1 &lt;= T &lt;= 500 and 1 &lt;= |S| &lt;= 500. You can also assume that no character repeats more than 10 times in the string. </p>
<h3>Output</h3>

<p>Output one line per test case - the number of different words that are anagrams of the word that chef has chosen. As answer can get huge, print it modulo 10^9 + 7</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
ab
aa
aA
AAbaz

<b>Output:</b>
2
1
2
60
</pre><p>
<b>Description:</b><br />
In first case "ab" &amp; "ba" are two different words. In third case, note that A &amp; a are different alphabets and hence "Aa" &amp; "aA" are different words.</p>
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