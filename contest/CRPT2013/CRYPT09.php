<?php require("../../includes/header.php"); ?><h1>Sequence</h1><div class="content">
<h2> Problem Statement </h2>
<p>Katy Perry is coming up a new album called sequence with n songs. In accordance with the name she is trying to put it in alphabetical order. She wants to name the first song starting with the letter A, the second song starting with the letter B, and so on. However, she cannot simply come up with random words for song titles - that wouldn't make sense. For each song, she has come up with a list of acceptable names. Help Katy Perry pick an ordering of the songs and an acceptable name for each one so that each song's name starts with the correct letter of the alphabet. </p>
<p> </p>
<h3>Input</h3>
<p>The first line of input gives the number of cases, N. N test cases follow. Each one starts with n on a line by itself. The next n lines list the possible names for each of the n songs. Each line starts with ki - the number of acceptable names for song i and lists the names, separated by spaces. Each name is a non-empty string of letters. No two names will be the same, and no two names for the same song will start with the same letter. </p>
<h3>Output</h3>
<p>For each test case, first output the line "Case #x:", where x is the test case number. After that, print n lines listing the n song names, each with only the first letter capitalized. There is guaranteed to be exactly one solution. </p>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>30</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>26</b></li>
<li><b>1</b> ≤ <b>ki</b> ≤ <b>26</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
3
2 Apples Oranges
1 Bananas
5 Apricots Blueberries Cranberries Zuccini Yams
1
1 ApPlEs
2
2 a b
1 axe
4
4 Aa Ba Ca Da
3 Ab Bb Cb
2 Ac Bc
1 Ad


<b>Output:</b>
Case #1:
Apples
Bananas
Cranberries
Case #2:
Apples
Case #3:
Axe
B
Case #4:
Ad
Bc
Cb
Da

<p>
<b> 
Note : The reference for this problem has been taken from : UVa online Judge </b>
</p></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/himanshuk123">himanshuk123</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-10-2013</td>
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