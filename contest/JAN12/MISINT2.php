<?php require("../../includes/header.php"); ?><h1>Misinterpretation 2</h1><div class="content">

<p>
Chef's brother likes to put words in Chef's mouth.<br />
Chef hates it about him of course.<br />
He has decided to become extremely careful about what he speaks.<br />
Fortunately, he knows how his brother transforms the words, that Chef uses.<br />
He has decided to use only those words which remain the same even after his brother's transformation!</p>
<p>If Chef speaks an <b>N</b> letter word, his brother moves all the letters which are at even positions (assuming, numbering of positions starts from 1), to the beginning of the word; and the rest of the letters follow as they appeared in the word, e.g. abdef becomes beadf; cdcd becomes ddcc.</p>
<p>Chef wants to know how many words he can use, provided that the length of each word is between <b>L</b> and <b>R</b> inclusive and each word is composed of lowercase letters of the English alphabet. They use an ancient language in Byteland, which allows all possible words within the above definition!
</p>
<h3>Input</h3>
<p>
The first line contains a positive integer <b>T</b>, the number of test cases. In the following lines, <b>T</b> test cases follow. Every test case is a single line that contains two space separated positive integers, <b>L</b> and <b>R</b>. <b>L</b> is lower bound and <b>R</b> is upper bound for the length of the word that Chef wants to use.
</p>
<h3>Output</h3>
<p>
For each test case, print the number of words with length between <b>L</b> and <b>R</b> inclusive that Chef can use; that is, number of words, which remain the same after brother's transformation.<br />
Since the result can be quite large, output the result modulo <b>1000000007</b>.
</p>
<h3>Constraints</h3>
<p><b><br />
1 &lt;= T &lt;= 5<br />
<br />
1 &lt;= L &lt;= R &lt;= 10<sup>10</sup><br />
<br />
R - L &lt;= 50000<br />
</b></p>
<h3>Sample input</h3>
<pre>3
1 5
6 7
45 50

</pre><h3>Sample output</h3>
<pre>1430
18252
871229844

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-08-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
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