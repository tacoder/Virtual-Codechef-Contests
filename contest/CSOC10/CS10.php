<?php require("../../includes/header.php"); ?><h1>Filling the Gaps</h1><div class="content">

<p>Problem text...<br />
At the largest conference on coding and cryptography the following theorem needed a proof or a counterexample: Suppose you are given a set of words of equal length; each word consisting of 0's, 1's and/or *'s. Furthermore suppose the pattern of *'s is different for all words in the set. By this we mean: if you replace all 0's and 1's by say $ you obtain different words. </p>
<p>The claim is: if you replace the *'s by 0's and 1's in all possible ways, then you obtain a set that is at least as big as the set you started with. </p>
<p>Example: </p>
<p>{ 10*, *0*, *00 } produces { 100, 101, 000, 001 } </p>
<p>{ 100, 101, 10* } produces { 100, 101 } </p>
<p>Notice that the set in the latter example does not satisfy the condidtion mentioned above, so it does not provide a counterexample. </p>
<p>You program has to check for a number of cases:<br />
Whether the pattern of *'s is different for all words in the set and:<br />
Compute the number of words obtained by replacing the *'s by 0's and 1's.<br />
The words will not be longer than 15 symbols.</p>
<h3>Input</h3>
<p>Input description...<br />
The input is a text-file that presents a sequence of sets. Each set is described as follows. The first line gives two integers: the length of the words and the number of the words. Then follow the words, each on a separate line. The end of the sequence of sets is indicated by a set with wordlength 0 and number of words equal to 0.</p>
<h3>Output</h3>
<p>Output description...<br />
The output is a textfile that contains one line for each set. if the pattern of *'s is different for all the words in this set this line should contain YES (in uppercase), followed by a space and the number of obtained words, otherwise it should contain NO (uppercase) only.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 3
10*
*0*
*00
4 3
1100
1101
110*
0 0

<b>Output:</b>
YES 4
NO
YES 0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2010</td>
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