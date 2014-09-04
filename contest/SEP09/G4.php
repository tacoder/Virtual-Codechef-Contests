<?php require("../../includes/header.php"); ?><h1>Alien language</h1><div class="content">

<p>Aliens from the planet of Zrxllrlv have an extremely well-developed language. Recently they have introduced a special alphabet which consists of only 2 symbols. Now, they would like to develop a way to write down all the words they have in their language using this alphabet. They want to be able to decode sequences of words without breaks between them, so they would like to retain the following property: <em>no word is the proper prefix of any other word</em>. Knowing know how many words they have, that each word occurs equally often in every-day use, and knowing the effort required to write down each of the two symbols of the alphabet (the complexity of the first symbol and the second symbol need not to be equal!) help them to develop an encoding which minimizes the mean effort required to write down a word of the language.</p>
<h3>Input</h3>
<p>First, 1≤t≤10000, the number of test cases. Each test case contains: 1≤a≤10<sup>9</sup>, 1≤b≤10<sup>9</sup>, 1≤n≤10<sup>12</sup>, meaning: the effort required for writing down the first symbol, the effort required for writing down the second symbol, and the number of words of the language, respectively.</p>
<h3>Output</h3>
<p>For each testcase, output the sum of lengths of encodings of all words in the optimal encoding.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
2
2 1 3
1 1 16
<strong>Output:</strong>
7
64
</pre><h3>Explanation</h3>
<pre>The optimal encoding for the first testcase is:
'0','10','11'.
The optimal encoding for the second testcase is:
'0000','0001',...,'1110','1111'.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-08-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>