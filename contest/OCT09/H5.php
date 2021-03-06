<?php require("../../includes/header.php"); ?><h1>Paragraph Formatting</h1><div class="content">

<p>Johnny is developing some word processing software. Right now, he has to deal with the problem of formatting a paragraph.  Johnny has formulated the problem as follows.</p>
<p>There are N words in a paragraph, in which the i<sup>th</sup> word has a<sub>i</sub> characters. Each line of the paragraph can hold at most M characters. For simplicity, we assume that every two consecutive words in a line are separated by <b>exactly one whitespace</b> and we disregard punctuation marks.</p>
<p>The text editor always uses a simple greedy algorithm to break the paragraph into lines. The algorithm puts as many words in a line as possible, then moving on to the next line to do the same until there are no more words left to be placed.</p>
<p>Johnny needs to write a program that, given the description of the words in a paragraph, is able to process the following two operations:</p>
<ul>
<li>Return the line number of a specified word</li>
<li>Replace one word with another one</li>
</ul>
<p>Since the number of words in a paragraph can be huge, Johnny needs to find an efficient algorithm to process the above queries. Please help him!</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 50). Then t test cases follow. Each test case has the following form:</p>
<ul>
<li>The first line contains a number M, the maximum number of characters that can be put in a line.</li>
<li>The second line contains a number N, the number of words in the given paragraph.</li>
<li>The third line contains N numbers a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub>, the lengths of the words in the paragraph.</li>
<li>The next lines contain the description of the queries, one query in a line. Each query can be of one of the following 3 types:
</li>
<ul>
<li><i>I i</i> - Ask for the line number of the i<sup>th</sup> word.</li>
<li><i>C i l</i> - Replace the i<sup>th</sup> word by a new word of length l (1 &#8804; l &#8804; M).</li>
<li><i>E</i> - Signal the end of the description of the queries.</li>
</ul>
</ul>
<p>Note that the line numbers and the word indexes are counted from 1.</p>
<h3>Output</h3>
<p>For each test case, the first line of output should contain the string "Case #T:" where T should be replaced by the corresponding test case number.</p>
<p>For every 'I' query in the test case, print the correct line number of the word being queried.</p>
<p>Print a blank line after each test case.</p>
<h3>Constraints</h3>
<ul>
<li>1 &#8804; N &#8804; 50000</li>
<li>1 &#8804; M &#8804; 100000</li>
<li>1 &#8804; a<sub>i</sub> &#8804; M</li>
<li>The number of lines in each paragraph never exceeds 200.</li>
<li>The number of queries in each test case does not exceed 10000.</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

4
2
1 2
I 2
C 2 3
I 2
E

6
5
1 5 4 5 6
I 2
I 4
I 5
C 4 1
I 4
I 5
C 2 1
C 3 2
C 5 4
I 5
I 3
E

<b>Output:</b>
Case #1:
1
2

Case #2:
2
4
5
3
4
2
1
</pre><h3>Discussion of the example</h3>
<p>In the following description of the second exemplary test case, we use the digit i to denote a character of the i<sup>th</sup> word. Note that each line can hold at most 6 characters. Initially, the paragraph has the following form:</p>
<pre>
1
22222
3333
44444
555555
</pre><p>After replacing the 4<sup>th</sup>word with a one-character word, the paragraph becomes:</p>
<pre>
1
22222
3333 4
555555
</pre><p>After the last 3 replacements, the paragraph becomes:</p>
<pre>
1 2 33
4 5555
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-09-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>