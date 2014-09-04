<?php require("../../includes/header.php"); ?><h1>Misinterpretation</h1><div class="content">

<p>
Chef's brother likes to put words in Chef's mouth.<br />
Chef hates it about him of course.<br />
He has decided to become extremely careful about what he speaks.<br />
Fortunately, he knows how his brother transforms the words, that Chef uses.<br />
He has decided to use only those words which remain the same even after his brother's transformation!</p>
<p>
If Chef speaks an N letter word, his brother moves all the letters which are at even positions (assuming, numbering of positions starts from 1), to the beginning of the word; and the rest of the letters follow as they appeared in the word. Eg. abdef becomes beadf; cdcd becomes ddcc.</p>
<p>Chef wants to know how many words can he use, provided that each word is composed of exactly N lowercase letters of the English alphabet. They use an ancient language in Byteland, which allows all possible words within the above definition!</p>
<p>Input format</p>
<p>
The first line contains the number T, the number of test cases. In the following lines, T test cases follow. Every test case is a single line, that contains a single positive integer, N,<br />
which is the length of the words that Chef wants to use.</p>
<p>Output format</p>
<p>
For each test case, print the number of words of length N that Chef can use; that is, number of words, which remain the same after brother's transformation.<br />
Since the result can be quite large, output the result modulo 1000000007.</p>
<p>Constraints</p>
<p>1 ≤ T ≤ 100<br />
1 ≤ N ≤ 100000</p>
<p>Sample input</p>
<pre>3
1
14
45

</pre><p>Sample output</p>
<pre>26
456976
827063120

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gamabunta">gamabunta</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-07-2011</td>
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